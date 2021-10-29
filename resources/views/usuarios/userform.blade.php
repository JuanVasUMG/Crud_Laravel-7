@extends('layouts.base')

@section('title', 'User Create')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-7 mt-5">
                <div class="card">
                    <form action="{{ url ('save') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                        <div class="card-header text-center text-white bg-info">
                            <h4>AGREGAR USUARIO</h4>
                        </div>

                        <div class="card-body">
                            <div class="row form-group">
                                <label for="" class="col-2">Nombre</label>
                                <input type="text" name="nombre" class="form-control col-md-9 {{$errors->has('nombre')?'is-invalid':''}}" value="{{ isset($users->nombre)?$users->nombre:old('nombre') }}">
                                <!-- Mensaje de error -->
                                {!! $errors->first('nombre','<div class="invalid-feedback text-center">:message</div>') !!}
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Email</label>
                                <input type="text" name="email" class="form-control col-md-9 {{$errors->has('email')?'is-invalid':''}}" value="{{ isset($users->email)?$users->email:old('email') }}">
                                <!-- Mensaje de error -->
                                {!! $errors->first('email','<div class="invalid-feedback text-center">:message</div>') !!}
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Foto</label>
                                <div class="custom-file col-md-9">
                                    <input type="file" name="foto" class="custom-file-input {{$errors->has('foto')?'is-invalid':''}}" id="customFile">
                                    <label class="custom-file-label text-center" for="customFile"> Subir Foto </label>
                                </div>
                            </div>

                            <div class="row form-group">
                                <label for="" class="col-2">Rol</label>
                                <select name="rol" class="form-control col-md-9 {{$errors->has('foto')?'is-invalid':''}}">
                                    <option value="{{ isset($users->rol)?$users->rol:old('rol') }}" class="text-center"> Elegir Rol... </option>

                                    @foreach( $rol as $roles)
                                        <option value="{{$roles->id_rol}}" class="text-center"> {{$roles->descripcion}}  </option>
                                    @endforeach
                                </select>
                                <!-- Mensaje de error -->
                                {!! $errors->first('rol','<div class="invalid-feedback text-center">:message</div>') !!}
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
