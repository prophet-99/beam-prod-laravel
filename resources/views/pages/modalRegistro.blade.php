<meta name="csrf-token" content="{{ csrf_token() }}">
<input type="hidden" id="idUrl" value="{{Route('unidad.create')}}">

<style>
    .modal-header{
        background-color:#0CACE0;
        border-color:#0278A0;
        color: #fff;
    }
</style>

<div class="modal fade" id="modalRegistro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
    <div class="modal-content">
        <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">SECCIÓN REGISTROS</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
        </div>
        <div class="row mt-2">
            <div class="col-6">
                <div id="idForms" class="modal-body">
                    
                </div>
            </div>
            <div class="col-6 text-center">
                <div class="modal-body">
                    <h6>Registros</h6>

                    <div class="row justify-content-center mb-2"> 
                        <div class="col-6">
                            <button class="btn btn-dark w-100" 
                                    onclick="cargarPage('{{Route('unidad.create')}}');">Registrar unidad</button>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-2">
                        <div class="col-6">
                            <button class="btn btn-dark w-100" 
                                    onclick="cargarPage('{{Route('categoria.create')}}');">Registrar categoría</button>
                        </div>
                    </div>

                    <div class="row justify-content-center mb-2">
                        <div class="col-6">
                            <button class="btn btn-dark w-100" 
                                    onclick="cargarPage('{{Route('marca.create')}}');">Registrar marca</button>
                        </div>       
                    </div>    

                    <div class="row justify-content-center mb-2">
                        <div class="col-6">
                            <button class="btn btn-dark w-100" 
                                    onclick="cargarPage('{{Route('producto.create')}}');">Registrar producto</button>
                        </div>
                    </div>      
                </div>
            </div>
        </div>
    </div>
  </div>
</div>

