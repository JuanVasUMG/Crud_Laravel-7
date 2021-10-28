<!-- heredando de la plantilla base -->
@extends('layouts.base')

@section('title', 'Rol List')

@section('content')
    <div class="container mt-3">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2 class="text-center mb-1">Roles Registrados</h2>

                <!-- Boton de registro -->
                <a class="btn btn-outline-success mb-3" href="{{url('/formRol')}}">Crear Rol</a>

                <!-- Mensaje Flash -->
                @if(session('usuarioEliminado'))
                    <div class="alert alert-danger">
                        {{session('usuarioEliminado')}}
                    </div>
                @endif

                <table class="table table-bordered table-hover text-center">
                    <thead class="bg-info">
                    <tr>
                        <th>id</th>
                        <th>Descripcion</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>

                    <tbody class="">
                    @foreach($roles as $rol)
                        <tr>
                            <td>{{$rol->id_rol}}</td>
                            <td>{{$rol->descripcion}}</td>
                            <td>
                                <div class="btn-group">
                                    <a href="">
                                        <i class="fas fa-pencil-alt btn btn-outline-primary mb-2 mr-2"></i>
                                    </a>

                                    <form action="" method="POST">
                                        @csrf @method('DELETE')
                                        <button type="submit" onclick="return confirm('¿Esta seguro de Eliminar Usurio Permanentemente?')" class="btn btn-outline-danger btn-sm">
                                            <i class="fas fa-trash-alt"></i>
                                        </button>
                                    </form>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection
