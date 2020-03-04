<nav class="navbar navbar-expand-lg navbar-light d-flex fixed-top nav-class">
    <a class="navbar-brand" href="{{ route('index') }}">
      <img src="{{ asset('imgs/icono.png') }}" height="40">
      BEAMPROD
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
  
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('init.productos') }}"><i class="fas fa-home"></i> Inicio</a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('init.listas') }}"><i class="fas fa-list-ol"></i> Listas</a>
        </li>
      </ul>
    </div>
</nav>