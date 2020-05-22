<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  protected $fillable = [
      'name',
      'image',
      'description'

  ];
  public function article(){
     return $this->hasOne('App\Article');
  }

  public function scopeNames($categories,$q){
    if (trim($q)) {
      $categories->where('name', 'LIKE',"%$q%");
    }

  }
}
