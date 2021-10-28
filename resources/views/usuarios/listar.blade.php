<!-- heredando de la plantilla base -->
@extends('layouts.base')

@section('title', 'User List')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <h2 class="text-center mb-1">Usuarios Registrados</h2>

            <!-- Boton de registro -->
            <a class="btn btn-outline-success mb-3" href="{{url('/form')}}">Agregar usuario</a>

            <!-- Mensaje Flash -->
            @if(session('usuarioEliminado'))
                <div class="alert alert-success">
                    {{session('usuarioEliminado')}}
                </div>
            @endif

            <table class="table table-bordered table-hover text-center">
                <thead class="thead-dark">
                <tr>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Rol</th>
                    <th>Acciones</th>
                </tr>
                </thead>

                <tbody class="">
                @foreach($users as $user)
                    <tr>
                        <td>
                            <img src="{{ asset('storage').'/'.$user->foto}}" alt="" height="80">
                        </td>
                        <td>{{$user->nombre}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->descripcion}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="{{route('editform', $user->id)}}">
                                    <i class="fas fa-pencil-alt btn btn-outline-primary mb-2 mr-2"></i>
                                </a>

                                <form action="{{ route('delete', $user->id) }}" method="POST">
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
            <!-- Paginacion -->
            {{ $users->links() }}

        </div>
    </div>
</div>
@endsection

