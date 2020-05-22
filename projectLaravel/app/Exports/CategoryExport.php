<?php


namespace App\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;

use App\Category;

class CategoryExport implements FromView{

public function view(): View {

  // return view('users.pdf');
  return view('categories.excel', [
          'categories' => Category::all()
      ]);


}

}

 ?>
