<!-- heredando de la plantilla base -->
@extends('layouts.base')

@section('title', 'User List')

@section('content')
<div class="container ml-5">
    <div class="row justify-content-center">
        <div class="col-md-10 ml-5">
            <h2 class="text-center mt-5">Usuarios Registrados</h2>

            <!-- Boton de registro -->
            <a class="btn btn-outline-success mb-3" href="{{url('/form')}}"><i class="fas fa-plus-square"></i> Crear usuario</a>

            <table class="table table-light table-bordered table-hover text-center">
                <thead class="bg-info">
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

                                <form action="{{ route('delete', $user->id) }}" method="POST" class="formulario-eliminar">
                                    @csrf @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger btn-sm">
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

<!-- SweetAlert2 -->
@section('js')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    @if(session('guardar') == 'ok')
        <script>
            const { value: descripcion } = await Swal.fire({
                title: 'Crear Rol',
                input: 'text',
                inputLabel: 'Descripcion:',
                inputName: 'descripcion',
                inputPlaceholder: ''
            })

            if (descripcion) {
                Swal.fire(
                    '¡Guardado!',
                    'El Rol se guardo con exito',
                    'success'
                )
            }
        </script>
    @endif

    @if(session('editar') == 'ok')
        <script>
            Swal.fire(
                '¡Modificado!',
                'El Usuario se modifico con exito',
                'success'
            )
        </script>
    @endif

    @if(session('eliminar') == 'ok')
        <script>
            Swal.fire(
                '¡Eliminado!',
                'El Usuario se elimino con exito.',
                'success'
            )
        </script>
    @endif

    <script>
        $('.formulario-eliminar').submit(function(e){
            e.preventDefault();
            Swal.fire({
                title: '¿Estás seguro?',
                text: "El Usuario se eliminara definitivamente",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar',
                cancelButtonText: 'Cancelar'
            }).then((result) => {
                if (result.isConfirmed) {
                    /*Swal.fire(
                        'Deleted!',
                        'Your file has been deleted.',
                        'success'
                    )*/
                    this.submit();
                }
            })
        });
    </script>
@endsection
