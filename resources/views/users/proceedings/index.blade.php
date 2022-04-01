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
        <a class="btn btn-secondary btn-sm float-right" href="{{ route('proceedings.create') }}">Nuevo Procedimiento</a>
        <h1>Lista de Procedimientos</h1>

    </div>
    <div class="card-body">
        <table id="TableProceedings" class="table table-striped">
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
                            <a href="{{ route('proceedings.edit', $proceeding) }}" class="btn btn-primary btn-sm">Editar</a>
                        </td>
                        <td width="10px">
                            <form action="{{ route('proceedings.destroy', $proceeding) }}" method="POST">
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
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')

    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#TableProceedings').DataTable({
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
