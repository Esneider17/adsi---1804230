<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $users = User::all();
      return view('users.index')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //dd($request->all());
        $user = new User;
        $user->fullname  = $request->fullname;
        $user->email     = $request->email;
        $user->phone     = $request->phone;
        $user->birthdate = $request->birthdate;
        $user->gender    = $request->gender;
        $user->address   = $request->address;
        $user->password  = bcrypt($request->password);
        $user->remember_token = Str::random(10);

          if($user->save()) {
              return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue adicionado con Exito!');
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
      $user = User::findOrFail($id);
        //dd($user);
        return view('users.show')->with('user', $user);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $user = User::findOrFail($id);
        //return view('users.edit', compact ('user'));
        return view('users.edit')->with('user', $user);


    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {

      $user = User::findOrFail($id);
      $user->fullname  = $request->fullname;
      $user->email     = $request->email;
      $user->phone     = $request->phone;
      $user->birthdate = $request->birthdate;
      $user->gender    = $request->gender;
      $user->address   = $request->address;
      $user->password  = bcrypt($request->password);
      $user->remember_token = Str::random(10);
      $user->save();
      return redirect('users')->with('message', 'El Usuario: '.$user->fullname.' fue Modificado con Exito!');
    }



    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
     public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();


        return redirect('users')->with('message','El usuario '.$user->fullname.' Fue eliminado con éxito');
    
}

       public function confirm($id)
       {
         $user = User::findOrFail($id);
        return view('users')->with('user', $user);
       }
}
