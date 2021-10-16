@extends('layouts.base')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-5">Usuarios Admin</h2>
            <a href="{{ url('/form') }}" class="btn btn-success mb-3">Agregar usuario</a>

            <table class="table table-bordered table-striped text-center">

                <!-- Encabezado de la tabla -->
                <thead>
                    <tr>
                        <td>Nombre</td>
                        <td>Email</td>
                    </tr>
                </thead>

                <!-- Cuerpo de la tabla -->
                <tbody>
                @foreach($users as $users)
                    <tr>
                        <td>{{ $users->nombre }}</td>
                        <td>{{ $users->email }}</td>
                    </tr>
                @endforeach
                </tbody>

            </table>

            <!-- Paginación -->
            {{ $users->links() }}

        </div>
    </div>
</div>
