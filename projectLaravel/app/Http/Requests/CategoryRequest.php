<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CategoryRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        if ($this->method('PUT')) {
        return [
          'name'          =>'required|min:4',
          // 'image'         =>'required|image|max:1000',
          'description'   =>'required',
        ];
    }else {
      return [
          'name'          =>'required|min:4',
          'image'          =>'image|max:1000',
          'description'   =>'required',
      ];
    }
}

  public function messages(){
    return[
      'name.required'=>'El campo Nombre Categoria es obligatorio ',
      'name.min'=>'El campo Nombre Categoria debe tener al menos :min caracteres',
      'image.required'=> 'El campo Imagen es obligatorio',
      'image.max'=> 'El campo Foto deber supera el tamaño',
      'description.required'=>'El campo Descripcion es obligatorio ',


    ];
  }
}
