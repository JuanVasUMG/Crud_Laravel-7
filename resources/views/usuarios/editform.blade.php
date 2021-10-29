@extends('layouts.base')

@section('title', 'User Update')

@section('content')
    <div class="container ml-5">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5 ml-5">
                <br><br>
                <div class="card">
                    <form action="{{ route('edit', $usuario->id)}}" method="POST" enctype="multipart/form-data">
                        @csrf @method('PATCH')
                        <div class="card-header text-center text-white bg-info">
                            <img src="{{ asset('storage').'/'.$usuario->foto}}" height="80" style="border-radius: 50%">
                            <h4>MODIFICAR USUARIO</h4>
                        </div>

                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-9" value="{{ $usuario->nombre }}">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Email</label>
                                <input type="text" name="email" class="form-control col-md-9" value="{{ $usuario->email }}">
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Foto</label>
                                <div class="custom-file col-md-9">
                                    <input type="file" name="foto" class="custom-file-input" id="customFile">
                                    <label class="custom-file-label text-center" for="customFile"> Subir Foto </label>
                                </div>
                            </div>


                            <div class="row form-group">
                                <label for="" class="col-2">Rol</label>
                                <select name="rol_id" class="form-control col-md-9" >
                                    <option value="" class="text-center"> Elegir Rol... </option>

                                    @foreach( $rol as $roles)
                                        <option value="{{$roles->id_rol}}" class="text-center"> {{$roles->descripcion}}  </option>
                                    @endforeach
                                </select>
                            </div>

                            <div class="row form-group">
                                <button type="submit" class="btn btn-outline-success col-md-4 offset-2 mr-3">Modificar</button>
                                <a class="btn btn-outline-danger btn-xs col-md-4" href=" {{ url('/') }}">Cancelar</a>
                            </div>

                        </div>

                    </form>
                </div>

            </div>

        </div>

    </div>
@endsection
