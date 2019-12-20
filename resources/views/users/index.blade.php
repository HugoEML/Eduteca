@extends('admin.layouts.layout')

@section('title', 'Lista de Usuarios')

@section('breadcrumbs')
    {{-- <li class="breadcrumb-item"><a href=""></a></li> --}}
    <li class="breadcrumb-item"><a href="{{ route('users.index') }}">Usuarios</a></li>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Usuarios</h4>
                </div>

                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="row">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col" colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user)
                            <tr>
                                <td>{{ $user->id}}</td>
                                <td>{{ $user->name}}</td>
                                <td width="10px">
                                    @can('users.show')
                                    <a class="btn btn-sm btn-outline-dark"
                                        href="{{ route('users.show', $user) }}">Ver</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('users.edit')
                                    <a class="btn btn-sm btn-outline-info" href="{{ route('users.edit', $user) }}">Editar</a>
                                    @endcan
                                </td>
                                <td width="10px">
                                    @can('users.destroy')
                                    <a
                                        href="#"
                                        class="btn btn-sm btn-danger"
                                        onclick="enviar_formulario()"
                                        >Eliminar</a
                                    >
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="card-footer">
                    {{ $users->render() }}
                </div>
            </div>
        </div>
    </div>
</div>
<form
    method="POST"
    action="{{ route('users.destroy', $user) }}"
    name="delete_form"
>
    @csrf @method('DELETE')
</form>
@endsection
@section('scripts')
<script>
    function enviar_formulario() {
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then(result => {
            if (result.value) {
                document.delete_form.submit();
            } else {
                Swal.fire({
                    icon: "error",
                    title: "Cancelled",
                    text: "Your imaginary file is safe"
                });
            }
        });
    }
</script>
@endsection
