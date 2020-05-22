<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Category;

use Illuminate\Support\Str;
use App\Http\Requests\CategoryRequest;

//Export

use App\Exports\CategoryExport;

//Imports

use App\Imports\CategoriesImport;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      {
        $categories = Category::paginate(4);
        return view('categories.index')->with('categories', $categories);
      }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
          return view('categories.create');
    }

    /**
     * Store a newly created resource in storage.ss
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
      $categori= new Category;
      $categori->name         = $request->name;
      $categori->image        = $request->image;
      $categori->description  = $request->description;

      if ($request->hasFile('image')) {

        $file = time().'.'.$request->image->extension();
        $request->image->move(public_path('imgs'), $file);
        $categori->image = 'imgs/'.$file;
      }

      if($categori->save()) {
        return redirect('categories')->with('message', 'La Categoria: '.$categori->name.' fue adicionada con Exito!');
      }
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
      $categori = Category::findOrFail($id);
      //dd($categori);
      return view('categories.show')->with('categori', $categori);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $categori = Category::findOrFail($id);
      //return view('users.edit', compact ('user'));
      return view('categories.edit')->with('categori', $categori);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, $id)
    {
      $categori = Category::findOrFail($id);
      $categori->name        = $request->name;
      // $categori->image       = $request->image;
      $categori->description = $request->description;

      if ($request->hasFile('image')) {

        $file = time().'.'.$request->image->extension();
        $request->image->move(public_path('imgs'), $file);
        $categori->image = 'imgs/'.$file;
      }

      $categori->save();
      return redirect('categories')->with('message', 'La Categoria: '.$categori->name.' fue Modificada con Exito!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $categori = Category::find($id);
      if($categori->delete()) {
        return redirect('categories')->with('message','La Categoria'.$categori->name.' Fue eliminada con éxito');
      }
    }



    public function search(Request $request){

      $categories = Category::names($request->q)->orderBy('id','ASC')->paginate(20);
      return view('categories.search')->with('categories',$categories);
    }

    public function pdf(){
      //dd('Descargar PDF');
      $categories = Category::all();
      $pdf = \PDF::loadView('categories.pdf', compact('categories'));
      return $pdf->download('allcategories.pdf');
    }

    public function excel(){
      return \Excel::download(new CategoryExport , 'allcategories.xlsx');
    }

    public function import(Request $request){
      $this->validate($request,[
        'file'=>'required|file|mimes:xls,xlsx'
      ]);
      $file =$request->file('file');
      \Excel::import(new CategoriesImport, $file);
      return redirect()->back()->with('message','Las Categorias se importaron con exito !');
    }
}
