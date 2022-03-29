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
            <div class="section-body colorsmart">
                <ul class="nav nav-tabs my-0 py-0 bg-transparent  border border-0" id="myTab" role="tablist">
                    <li class="nav-item h-100" role="presentation">
                        <button class="nav-link active py-3" id="user-tab" data-bs-toggle="tab" data-bs-target="#user"
                            type="button" role="tab" aria-controls="user" aria-selected="true">
                            <h2 class="h4 m-0 p-0">
                                Usuarios
                            </h2>
                        </button>
                    </li>
                    <li class="nav-item h-100">
                        <button class="nav-link py-3" id="role-tab" data-bs-toggle="tab" data-bs-target="#role" type="button"
                            role="tab" aria-controls="role" aria-selected="false">
                            <h2 class="h4 m-0 p-0">
                                Roles
                            </h2>
                        </button>
                    </li>
                    <li class="nav-item ml-auto h-100 mr-1 my-auto btnactive" id="btnuser" role="presentation">
                        <a class="btn btn-secondary px-2 rounded-3" href="{{ route('users.create') }}">Nuevo Usuario</a>
                    </li>
                    <li class="nav-item ml-auto h-100 mr-1 my-auto d-none" id="btnrole" role="presentation">
                        <a class="btn btn-secondary px-2 rounded-3" href="{{-- {{ route('users.create') }} --}}">Nuevo Rol</a>
                    </li>
                </ul>
                <div class="tab-content bg-white pt-5" id="myTabContent">
                    <div class="tab-pane fade show active" id="user" role="tabpanel" aria-labelledby="user-tab">
                        @include('users.partials.user')
                        
    
                    </div>
                    <div class="tab-pane fade" id="role" role="tabpanel" aria-labelledby="role-tab">
                        @include('users.partials.role')
                    </div>
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
            $('#TableCashier').DataTable({
                "lengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ]
            });
            $('#TableCliente').DataTable({
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
