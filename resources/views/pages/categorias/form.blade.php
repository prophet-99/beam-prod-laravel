<h6 class="text-center">Registrar Categoría</h6>

<form id="idFormCategoria" method="post" action="{{ route('categoria.store') }}" onsubmit="return validarCategoria();"> 
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
    <label for="idAbrev"
            class="col-sm-5 col-form-label">Abreviatura</label>

    <div class="col-sm-7">
      <input type="text"
              class="form-control form-control-sm"
              id="idAbrev"
              name="abrev"
              placeholder="Ingrese abreviatura">
    </div>        
  </div>

  <div class="form-group row">
    <label for="idOrden"
            class="col-sm-5 col-form-label">Orden</label>

    <div class="col-sm-7">
      <input type="number"
              min = "0"
              class="form-control form-control-sm"
              id="idOrden"
              name="orden"
              placeholder="Ingrese orden">
    </div>        
  </div>

  <input type="hidden" name="opcion" value="registrar">

  <div class="row justify-content-center">
      <div class="col-4">
        <button class="btn btn-primary" type="submit" formnovalidate>Registrar</button>
      </div>
  </div>
</form>