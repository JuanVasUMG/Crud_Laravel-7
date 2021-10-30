<!-- heredando de la plantilla base -->
@extends('layouts.base')

@section('title', 'Rol List')

@section('content')
    <div class="container ml-5">
        <div class="row justify-content-center">
            <div class="col-md-10 ml-5">
                <h2 class="text-center mt-5">Roles Registrados</h2>

                <!-- Boton de registro -->
                <a class="btn btn-outline-success mb-3" href="{{url('/formRol')}}" style="margin-left: 170px"><i class="fas fa-plus-square"></i> Crear Rol</a>

                <table class="table table-light table-bordered table-hover text-center col-md-8" style="margin-left: 170px">
                    <thead class="bg-info">
                    <tr>
                        <th style="width: 100px">id</th>
                        <th style="width: 300px">Descripcion</th>
                    </tr>
                    </thead>

                    <tbody class="">
                    @foreach($roles as $rol)
                        <tr>
                            <td>{{$rol->id_rol}}</td>
                            <td>{{$rol->descripcion}}</td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

            </div>
        </div>
    </div>
@endsection

<!-- SweetAlert2 -->
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('guardar') == 'ok')
        <script>
            Swal.fire(
                '¡Guardado!',
                'El Rol se guardo con exito',
                'success'
            )
        </script>
    @endif

@endsection
