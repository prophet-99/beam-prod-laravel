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

<div class="row d-flex justify-content-start mr-2 mb-2">
  <div class="col-4">
    <button class="btn btn-outline-danger"
            onclick="location.href='{{ route('marca.pdf') }}'">
      Exportar en PDF <i class="fas fa-file-pdf"></i>
    </button>
    <button class="btn btn-outline-success"
            onclick="location.href='{{ route('marca.excel') }}'">
      Exportar en Excel <i class="fas fa-file-excel"></i>
    </button>
  </div>
</div>

<input type="hidden" id="urlUpd" value="{{route('marca.actualizar')}}">
<input type="hidden" id="urlDel" value="{{route('marca.eliminar')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<table id="table_lista" class="table table-hover text-center">
  <h6 class="mb-0 text-muted">Lista de marcas</h6>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Abreviatura</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
    @php($i = 1)

    @forelse ($marcas as $marca)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td scope="col" id="desc{{ $marca -> id }}">{{$marca -> descripcion}}</td>
      <td scope="col" id="abrev{{ $marca -> id }}">{{$marca -> abreviatura}}</td>
      <td scope="col">
        <div class="btn-group" id="id-group{{ $marca -> id }}">
          <button class='btn btn-outline-success' 
                  id="btnSucc{{ $marca -> id }}"
                  hidden="true"
                  onclick="updateMarca({{ $marca -> id }});">
            <i class='fas fa-check'></i>
          </button>

          <button class='btn btn-outline-danger' 
                  id="btnDang{{ $marca -> id }}"
                  hidden="true"
                  onclick="setNotEditableMarca({{ $marca -> id }})">
            <i class='far fa-times-circle'></i>
          </button>

          <button class="btn btn-outline-dark"
                  onclick="setEditableMarca({{ $marca -> id }})">
            <i class="fas fa-pen-square"></i>
          </button>  

          <a class="btn btn-outline-dark"
              onclick="deleteRegistro({{ $marca -> id }})">
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