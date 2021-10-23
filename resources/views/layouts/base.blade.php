<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- CDN JQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- Font-Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <title>Crud Laravel - @yield('title')</title>
</head>
<body>
    <!-- Crea una NavBar -->
    <nav class="navbar navbar-dark bg-dark">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="https://umg.edu.gt/assets/umg.png" height="30" class="d-inline-block align-top" alt="Logo UMG">

            Usuarios
        </a>
    </nav>

    <!-- Archivos Blade -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
