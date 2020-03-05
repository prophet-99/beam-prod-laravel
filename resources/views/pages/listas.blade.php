@extends('layoutIndex')

@section('content')
    <div class="row">
        <label for="idLista" class="col-2 text-right">   
            <h4><i class="fab fa-cloudversify"></i> Filtrar listas</h4>
        </label>
     
        <div class="col-2">
            <select class="form-control" id="idLista" onchange="cargarLista(this.value);">
                <option value="">Seleccionar lista</option>
                <option value="{{ route('unidad.index') }}">Lista de unidades</option>
                <option value="{{ route('categoria.index') }}">Lista de categorías</option>
                <option value="{{ route('marca.index') }}">Lista de marcas</option>
                <option value="{{ route('producto.index') }}">Lista de productos</option>
            </select>
        </div>
    </div>

    <div class="row m-3">
        <div class="col-12 tablas-class">
            <div class="table-responsive" id="renderTablas">
                
                @include('pages.jumbotronlst')

            </div>
        </div>
    </div>
@endsection