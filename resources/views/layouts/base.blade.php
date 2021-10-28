<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Estilos de Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

    <!-- Font-Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">

    <title>Crud Laravel - @yield('title')</title>
</head>
<body>
    <!-- Crea una NavBar -->
    <nav class="navbar navbar-dark bg-primary   ">
        <div class="btn-group">
            <a  href="{{ url('/') }}" class="navbar-brand mr-3">
                <img src="https://umg.edu.gt/assets/umg.png" height="30" class="d-inline-block align-top" alt="Logo UMG">
            </a>
            <a class="navbar-brand" href="{{ url('/') }}">Usuarios</a>
            <a class="navbar-brand" href="{{ url('/') }}">Rol</a>
        </div>
    </nav>

    <style>
        .fotoFile{
            background-color: white;
            border-radius: 50px;
            width: 350px;
            outline: none;
            border-color: black;
        }

        ::-webkit-file-upload-button{
            color: white;
            background: #206a5d;
            padding: 10px;
            border: none;
            border-radius: 50px;
            outline: none;
        }

        ::-webkit-file-upload-button:hover{
            background: #438e5e;
        }
    </style>
    <!-- Archivos Blade -->
    <div class="container">
        @yield('content')
    </div>

</body>
</html>
