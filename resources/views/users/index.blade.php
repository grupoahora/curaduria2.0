@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <h1>Curaduría Urbana</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <ul class="nav nav-tabs nav-justified mb-3" id="myTab" role="tablist">
                <li class="nav-item h-100" role="presentation">
                    <button class="nav-link active py-3" id="user-tab" data-bs-toggle="tab" data-bs-target="#user" type="button"
                        role="tab" aria-controls="user" aria-selected="true">
                        Usuarios
                    </button>
                </li>
                <li class="nav-item h-100">
                    <button class="nav-link py-3" id="role-tab" data-bs-toggle="tab" data-bs-target="#role" type="button"
                        role="tab" aria-controls="role" aria-selected="false">
                        Roles
                    </button>
                </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-secondary btn-sm float-right" href="{{ route('users.create') }}">Nuevo
                                Usuario</a>
                        </div>
                        <div class="card-body">
                            @foreach ($roles as $role)
                                <table id="TableUsers" class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Nombre</th>
                                            <th>Apellido</th>
                                            <th>Correo Electrónico</th>
                                            <th>created_at</th>
                                            <th>updated_at</th>
                                            <th></th>
                                            <th></th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($role->users as $user)
                                            <tr>
                                                <td>{{ $user->id }}</td>
                                                <td>
                                                    <a href="{{ route('users.show', $user) }}">{{ $user->name }}</a>
                                                </td>
                                                <td>{{ $user->surname }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td>{{ $user->created_at }}</td>
                                                <td>{{ $user->updated_at }}</td>
                                                <td width="10px">
                                                    <a href="{{ route('users.edit', $user) }}"
                                                        class="btn btn-primary btn-sm">Editar</a>
                                                </td>
                                                <td width="10px">
                                                    <form action="{{ route('users.destroy', $user) }}" method="POST">
                                                        @csrf
                                                        @method('delete')
                                                        <button type="submit"
                                                            class="btn btn-danger btn-sm">Eliminar</button>
                                                    </form>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            @endforeach
                        </div>
                    </div>

                </div>
                <div class="tab-pane fade" id="roless" role="tabpanel" aria-labelledby="roless-tab">
                    12
                </div>
            </div>
        </div>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/style-navbar.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/css/jqueryui-editable.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
@stop

@section('js')

    <script src="/js/jquery-3.6.0.min.js"></script>
    <script src="/js/jquery-ui.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/js/jqueryui-editable.min.js"></script>

    <script src="/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/js/jquery.dataTables.min.js"></script>
    <script src="/js/dataTables.buttons.min.js"></script>
    <script src="/js/jszip.min.js"></script>
    <script src="/js/pdfmake.min.js"></script>
    <script src="/js/vfs_fonts.js"></script>
    <script src="/js/buttons.html5.min.js"></script>
    <script src="/js/buttons.print.min.js"></script>
    <script src="/js/changebtnactive.js"></script>

    <script>
        $(document).ready(function() {
            $('#TableUsers').DataTable({
                "lengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ]
            });
        });
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
