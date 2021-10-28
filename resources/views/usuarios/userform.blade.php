@extends('layouts.base')

@section('title', 'User Create')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
            <!-- Mensaje Flash -->
                @if(session('usuarioGuardado'))
                    <div class="alert alert-success">
                        {{ session('usuarioGuardado') }}
                    </div>
                @endif

            <!-- Validacion Errores-->
            @if($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

                <div class="card">
                    <form action="{{ url ('save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card-header text-center text-white bg-info">
                            <h4>AGREGAR USUARIO</h4>
                        </div>

                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-9">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Email</label>
                                <input type="text" name="email" class="form-control col-md-9">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Foto</label>
                                <input type="file" name="foto" class="fotoFile">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Rol</label>
                                <select name="rol" class="form-control col-md-9" >
                                    <option value="" class="text-center"> Elegir Rol... </option>

                                    @foreach( $rol as $roles)
                                        <option value="{{$roles->id_rol}}" class="text-center"> {{$roles->descripcion}}  </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row form-group">
                                <button type="submit" class="btn btn-outline-success col-md-4 offset-2 mr-3">Guardar</button>
                                <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/') }}">Cancelar</a>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection
