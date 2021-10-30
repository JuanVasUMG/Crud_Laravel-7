<!-- heredando de la plantilla base -->
@extends('layouts.base')

@section('title', 'Rol List')

@section('content')
    <div class="container ml-5">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5">Roles Registrados</h2>

                <!-- Boton de registro -->
                <a class="btn btn-outline-success mb-3" href="{{url('/formRol')}}"><i class="fas fa-plus-square"></i> Crear Rol</a>

                <table class="table table-light table-bordered table-hover text-center">
                    <thead class="bg-info">
                    <tr>
                        <th style="width: 100px">id</th>
                        <th style="width: 300px">Descripcion</th>
                        <th style="width: 200px">Acciones</th>
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
