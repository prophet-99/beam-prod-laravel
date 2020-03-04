<h6 class="text-center">Registrar Unidad</h6>

<form id="idFormUnidad" method="post" action="{{ route('unidad.store') }}" onsubmit="return validarUnidad();">   
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

  <input type="hidden" name="opcion2" value="registrar">

  <div class="row justify-content-center">
    <div class="col-4">
      <button type="submit" class="btn btn-primary">Registrar</button>
    </div>
  </div>
</form>