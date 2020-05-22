<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Lista de Todas las Categorias</title>
    <style>
    table{

      border: 1px solid #999;
      border-collapse: collapse;
    }
    table td, table th{
        border: 1px solid #999;
        padding: 10px;
        font-family: sans-serif;
        font-size: 13px;
    }
    table th{
      background-color: #666;
      color: #fff;
    }
    table tr:nth-child(even) {
    background-color: #eee;
}

table tr:nth-child(odd) {
    background-color: #fff;
}

    </style>
  </head>
  <body>
    <table>
      <thead>
        <tr>
          <th>Nombre Categoria</th>
          <th>Descripcion</th>
          <th>Imagen</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $categori)
          <tr>
            <td>{{$categori->name}}</td>
            <td>{{$categori->description}}</td>
            <td>
              <img src="{{public_path().'/'.$categori->image}}" width="50px">
            </td>

          </tr>
        @endforeach
      </tbody>
    </table>

  </body>
</html>
