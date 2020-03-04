<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BEAMPROD</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('font-awesome/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/principal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/productos.css') }}">
    <link rel="stylesheet" href="{{ asset('sweet-alert/sweetalert2.min.css') }}">
</head>
<body>
    @include('partials/nav')

    <div class="container-fluid" style="margin-top: 5.5em">
        @yield('content')
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/peticionesAjax.js') }}"></script>
    <script src="{{ asset('js/validaciones.js') }}"></script>
    <script src="{{ asset('sweet-alert/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('js/update-delete.js') }}"></script>
    
</body>
</html>