@foreach ($categories as $categori)
  <tr>
    <td>{{ $categori->name }}</td>
    <td>{{ $categori->image }}</td>
    <td>{{ $categori->description }}</td>
    <td>
        <a href="{{ url('categories/'.$categori->id) }}" class="btn btn-sm btn-custom">
          <i class="fa fa-search"></i>
        </a>
          <a href="{{ url('categories/'.$categori->id.'/edit/') }}" class="btn btn-sm btn-custom">
          <i class="fa fa-pen"></i>
        </a>
        <form action=" {{ url('categories/'.$categori->id) }}" method="post" style="display: inline-block;">
          @csrf
          @method('delete')
          <button type="button" class="btn btn-sm btn-danger btn-delete">
            <i class=" fa fa-trash"></i>
          </button>
        </form>
      </td>
  </tr>
@endforeach
