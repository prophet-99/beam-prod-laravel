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
            onclick="location.href='{{ route('producto.pdf') }}'">
      Exportar en PDF <i class="fas fa-file-pdf"></i>
    </button>
    <button class="btn btn-outline-success"
            onclick="location.href='{{ route('producto.excel') }}'">
      Exportar en Excel <i class="fas fa-file-excel"></i>
    </button>
  </div>
</div>

<input type="hidden" id="urlUpd" value="{{route('producto.actualizar')}}">
<input type="hidden" id="urlDel" value="{{route('producto.eliminar')}}">
<meta name="csrf-token" content="{{ csrf_token() }}" />

<table id="table_lista" class="table table-hover text-center">
  <h6 class="mb-0 text-muted">Lista de productos</h6>
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Descripción</th>
      <th scope="col">Categoría</th>
      <th scope="col">Unidad</th>
      <th scope="col">Marca</th>
      <th scope="col">P. venta</th>
      <th scope="col">P. compra</th>
      <th scope="col">Operaciones</th>
    </tr>
  </thead>
  <tbody>
      
    @php($i = 1)

    @forelse($productos as $producto)
    <tr>
      <th scope="row">{{ $i }}</th>
      <td scope="col" id="desc{{ $producto -> id }}">{{ $producto -> producto }}</td>
      <td scope="col">
        <div id="categ{{ $producto -> id }}">
            {{ $producto -> categoria }}
        </div>

        <div id="categHidden{{ $producto -> id }}" hidden="true">{{ $producto -> fkCategoria }}</div>

        <select class="form-control" id="selCat{{ $producto -> id }}" hidden="true">
            <option value="">Seleccionar categoría</option>

            @forelse ($categorias as $categoria)
                <option value={{ $categoria -> id }}>{{ $categoria -> descripcion }}</option>        
            @empty
                <option disabled> Sin categorías disponibles</option>
            @endforelse

        </select>
      </td>
      <td scope="col">
        <div id="unidad{{ $producto -> id }}">
            {{ $producto -> unidad }}
        </div>

        <div id="unidHidden{{ $producto -> id }}" hidden="true">{{ $producto -> fkUnidad }}</div>

        <select class="form-control" id="selUn{{ $producto -> id }}" hidden="true">
          <option value="">Seleccionar unidad</option>

          @forelse ($unidades as $unidad)
            <option value={{ $unidad -> id }}>{{ $unidad -> descripcion }}</option>       
          @empty
            <option disabled> Sin unidades disponibles</option>  
          @endforelse
    
        </select>
      </td>
      <td scope="col">
        <div id="marca{{ $producto -> id }}">
            {{ $producto -> marca }}
        </div>

        <div id="marcHidden{{ $producto -> id }}" hidden="true">{{ $producto -> fkMarca }}</div>

        <select class="form-control" id="selMar{{ $producto -> id }}" hidden="true">
          <option value="">Seleccionar marca</option>

          @forelse ($marcas as $marca)
            <option value={{ $marca -> id }}>{{ $marca -> descripcion }}</option>  
          @empty
            <option disabled> Sin marcas disponibles</option>    
          @endforelse

        </select>
      </td>
      <td scope="col" id="pVenta{{ $producto -> id }}">{{ $producto -> pVenta }}</td>
      <td scope="col" id="pCompra{{ $producto -> id }}">{{ $producto -> pCompra }}</td>
      <td scope="col">
        <div class="btn-group" id="id-group{{ $producto -> id }}">
          <button class='btn btn-outline-success' 
                  id="btnSucc{{ $producto -> id }}"
                  hidden="true"
                  onclick="updateProducto({{ $producto -> id }});">
            <i class='fas fa-check'></i>
          </button>

          <button class='btn btn-outline-danger' 
                  id="btnDang{{ $producto -> id }}"
                  hidden="true"
                  onclick="setNotEditableProducto({{ $producto -> id }})">
            <i class='far fa-times-circle'></i>
          </button>

          <button class="btn btn-outline-dark"
                  onclick="setEditableProducto({{ $producto -> id }})">
            <i class="fas fa-pen-square"></i>
          </button>  

          <a class="btn btn-outline-dark"
              onclick="deleteRegistro({{ $producto -> id }})">
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