<style>
    .edit-class{
      border-bottom: #343a40 solid 0.13em;
    }
  
    .edit-class:focus {
      color: #495057;
      background-color: #fff;
      border-color: #62676d;
      outline: 0;
      box-shadow: 0 0 0 0.2rem rgba(95, 99, 103, 0.25);
    }
</style>
  
<input type="hidden" id="urlUpd" value="{{route('categoria.actualizar')}}">
<input type="hidden" id="urlDel" value="{{route('categoria.eliminar')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<table id="table_lista" class="table table-hover text-center">
    <h6 class="mb-0 text-muted">Lista de categorías</h6>
    <thead class="thead-dark">
      <tr>
        <th scope="col">#</th>
        <th scope="col">Descripción</th>
        <th scope="col">Abreviatura</th>
        <th scope="col">Orden</th>
        <th scope="col">Operaciones</th>
      </tr>
    </thead>
    <tbody>
      @php($i = 1)
      
      @forelse ($categorias as $categoria)
      <tr>
        <th scope="row">{{ $i }}</th>
        <td scope="col" id="desc{{ $categoria -> id }}">{{ $categoria -> descripcion }}</td>
        <td scope="col" id="abrev{{ $categoria -> id }}">{{ $categoria -> abreviatura }}</td>
        <td scope="col" id="orden{{ $categoria -> id }}">{{ $categoria -> orden }}</td>
        <td scope="col">
          <div class="btn-group" id="id-group{{ $categoria -> id }}">
            <button class='btn btn-outline-success' 
                    id="btnSucc{{ $categoria -> id }}"
                    hidden="true"
                    onclick="updateCategoria({{ $categoria -> id }});">
              <i class='fas fa-check'></i>
            </button>
  
            <button class='btn btn-outline-danger' 
                    id="btnDang{{ $categoria -> id }}"
                    hidden="true"
                    onclick="setNotEditableCategoria({{ $categoria -> id }})">
              <i class='far fa-times-circle'></i>
            </button>
  
            <button class="btn btn-outline-dark"
                    onclick="setEditableCategoria({{ $categoria -> id }})">
              <i class="fas fa-pen-square"></i>
            </button>  
  
            <a class="btn btn-outline-dark"
                onclick="deleteRegistro({{ $categoria -> id }})">
              <i class="fas fa-trash"></i>
            </a>
          </div>
        </td> 
      </tr>
      @php($i++)
      @empty
          <h1>NO EXISTE REGISTROS</h1>
      @endforelse
    </tbody>
</table>
  
  