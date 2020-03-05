<h6 class="text-center">Registrar Producto</h6>

<form id="idFormProductos" method="post" action="{{ route('producto.store') }}" onsubmit="return validarProducto();">
    @csrf

  <div class="form-group row">
    <label for="idNombre"
            class="col-sm-5 col-form-label">Nombre</label>

    <div class="col-sm-7">
      <input type="text" 
              class="form-control form-control-sm"
              id="idNombre"
              name="nombre"
              placeholder="Ingrese nombre"
              onkeyup="this.value = this.value.toUpperCase();">   
    </div>
  </div>

  <div class="form-group row">
    <label for="idCategoria"
            class="col-sm-5 col-form-label">Categoría</label>

    <div class="col-sm-7">
      <select class="form-control form-control-sm"
              id="idCategoria"
              name="categoria">
        <option value="">Seleccionar categoría</option>

        @foreach ($categorias as $categoria)
        <option value={{ $categoria -> id }}>{{ $categoria -> descripcion }}</option>
        @endforeach

      </select>
    </div>        
  </div>

  <div class="form-group row">
    <label for="idUnidad"
            class="col-sm-5 col-form-label">Unidad</label>

    <div class="col-sm-7">
      <select class="form-control form-control-sm"
              id="idUnidad"
              name="unidad">
        <option value="">Seleccionar unidad</option>

        @foreach ($unidades as $unidad)
        <option value={{ $unidad -> id }}>{{ $unidad -> descripcion }}</option>
        @endforeach

      </select>
    </div>        
  </div>

  <div class="form-group row">
    <label for="idMarca"
            class="col-sm-5 col-form-label">Marca</label>

    <div class="col-sm-7">
      <select class="form-control form-control-sm"
              id="idMarca"
              name="marca">
        <option value="">Seleccionar marca</option>

        @foreach($marcas as $marca)
        <option value={{ $marca -> id }}>{{ $marca -> descripcion }}</option>
        @endforeach

      </select>
    </div>        
  </div>

  <div class="form-group row">
    <label for="idVenta"
            class="col-sm-5 col-form-label">Precio venta</label>

    <div class="col-sm-7">
      <input type="number"
              min = "0"
              step="any"
              class="form-control form-control-sm"
              id="idVenta"
              name="venta"
              placeholder="Ingrese precio venta"
              novalidate="true">
    </div>        
  </div>

  <div class="form-group row">
    <label for="idCompra"
            class="col-sm-5 col-form-label">Precio compra</label>

    <div class="col-sm-7">
      <input type="number"
              min = "0"
              step="any"
              class="form-control form-control-sm"
              id="idCompra"
              name="compra"
              placeholder="Ingrese precio compra"
              novalidate="true">
    </div>
  </div>

  <input type="hidden" name="opcion4" value="registrar">

  <div class="row justify-content-center">
    <div class="col-4">
      <button type="submit" class="btn btn-primary" formnovalidate>Registrar</button>
    </div>
  </div>
</form>

