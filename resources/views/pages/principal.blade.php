@extends('layoutIndex')

@section('content')

<div class="row">
  @auth
  
    <div class="col-1 offset-11">
        <button class="btn btn-danger shadow-danger"
                data-toggle="modal"
                data-target="#modalRegistro">Registrar</button>
    </div>

  @endauth
</div>

<div class="row row-cols-1 row-cols-md-3 productos-class m-4">
  
  @forelse ($productos as $producto)
  
  <div class="col mb-4">

    <div class="card testimonial-card">
      <div class="card-up indigo lighten-1 justify-content-center">
        <div class="orden-class text-center h5">
          {{ $producto -> orden }}
        </div>
      </div>
      <div class="avatar mx-auto white">
        <img src="{{ asset('imgs/productos.jpg') }}" class="rounded-circle" alt="woman avatar">
      </div>
      <div class="card-body">
        <h4 class="card-title">{{ $producto -> producto }}</h4>
        <p class="text-muted text-center"> {{ $producto -> marca }}</p>
        <hr>
        <div class="row">
          <div class="col-6 mb-3">
            <p class="mb-0" style="color:#0CACE0">Categoría:</p>
            {{ $producto -> categoria }}
          </div>
          <div class="col-6 mb-3">
            <p class="mb-0" style="color:#0CACE0">Unidad:</p>
            {{ $producto -> unidad }}
          </div>
          <div class="col-6 mb-3">
            <p class="mb-0" style="color:#0CACE0">Precio venta:</p>
            S/ {{ $producto -> pVenta }}
          </div>
          <div class="col-6 mb-3">
            <p class="mb-0" style="color:#0CACE0">Precio compra:</p>
            S/ {{ $producto -> pCompra }}
          </div>
        </div>
      </div>
    </div>
    
  </div>

  @empty
  
  <div class="container">
    @include('jumbotronprod')
  </div>

  @endforelse
</div>

@endsection

{{-- Incluye alert de registros --}}
@include('pages.modalRegistro')

@if(session("alert"))
  <script> 
    setTimeout(()=>{

      showAlertCreate("Registro creado correctamente");
     
    }, 800);
  </script>
@endif  