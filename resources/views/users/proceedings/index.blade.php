@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <h1>Curaduria Urbana</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>
    @endif
    <div class="card-header">
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('admin.proceedings.create') }}">Nuevo Procedimiento</a>
        <h1>Lista de Procedimientos</h1>

    </div>
    <div class="card-body">
        <table id="TableProceedings" class="table table-striped table-responsive-md">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Radicado</th>
                    <th>Cedula de Ciudadanía</th>
                    <th>Clase de Procedimiento</th>
                    <th>Descripción de la clase del Procedimiento</th>
                    <th>Fecha de Registro en <a class="text-link" href="#">www.curaduriadoscucuta.com</a></th>
                    <th>Fecha de Expedición</th>
                    <th>Ver Procedimiento</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($proceedings as $proceeding)
                    <tr>
                        <td>{{ $proceeding->id }}</td>
                        <td>
                            {{ $proceeding->radicado }}
                        </td>
                        <td>
                            {{ $proceeding->cc }}
                        </td>
                        <td>{{ $proceeding->classproceeding }}</td>
                        <td>{{ $proceeding->descriptionclassproceeding }}</td>
                        <td>{{ $proceeding->created_at }}</td>
                        <td>{{ $proceeding->fechaexpedicion }}</td>
                        <td>
                            @if ($proceeding->archives->count() == 0)
                                <a href="#"> No existe Archivo</a>
                            @endif
                            @foreach ($proceeding->archives as $file)
                                @if ($loop->first)
                                    <a href="{{ $file->url }}">Ver Procedimiento</a>
                                @endif
                                
                            @endforeach

                        </td>
                        <td width="10px">
                            <a href="{{ route('admin.proceedings.edit', $proceeding) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('admin.proceedings.destroy', $proceeding) }}" method="POST">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger btn-sm"">Eliminar</button>
                            </form>
                        </td>
                    </tr>
     @endforeach
            </tbody>
        </table>
    </div>
@stop
@section('css')
    <link rel="stylesheet" href="/css/style-navbar.css">
    <link rel="stylesheet" href="/select2/dist/css/select2.min.css">
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
    <script src="/select2/dist/js/select2.min.js"></script>
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
            $('#TableProceedings').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                autoFill: true,
                buttons: [
                    {
                        extend: 'pdfHtml5',
                        orientation: 'landscape',
                        pageSize: 'LEGAL'
                    },
                    'copy', 'csv', 'excel',  'print'
                ]
            });
        });
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
