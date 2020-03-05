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
        @auth
        <li class="nav-item active">
          <a class="nav-link" href="{{ route('init.listas') }}"><i class="fas fa-list-ol"></i> Listas</a>
        </li>
        @endauth
      </ul>

      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">
                  <i class="fas fa-sign-in-alt"></i> 
                  Autenticarse
                </a>
            </li>
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}"> 
                      <i class="fas fa-edit"></i>
                      Registrarse
                    </a>
                </li>
            @endif
        @else
            <li class="nav-item dropdown">
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }} <span class="caret"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('logout') }}"
                       onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                        <i class="fas fa-door-open"></i> Salir
                    </a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
        @endguest
      </ul>
    </div>
</nav>