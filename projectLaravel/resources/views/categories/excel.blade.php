
    <table>
      <thead>
        <tr>
          <th>Nombre Categoria</th>
          <th>Imagen</th>
          <th>Descripcion</th>
        </tr>
      </thead>
      <tbody>
        @foreach ($categories as $categori)
          <tr>
            <td>{{$categori->name}}</td>
            <td>{{$categori->image}}</td>
            <td>{{$categori->description}}</td>

          </tr>

        @endforeach
      </tbody>
    </table>
