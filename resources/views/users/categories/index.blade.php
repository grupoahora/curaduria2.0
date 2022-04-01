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
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.categories.create')}}">Nuevo categoria</a>
        <h1>Lista de categories</h1>

    </div>
    <div class="card-body">
        <table id="Tablecategories" class="table table-striped table-responsive-md">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    
                    <th>Fecha de Creación</th>
                    <th>Fecha de Actualización</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($categories as $category)
                <tr>
                    <td id="id{{$category->id}}">{{$category->id}}</td>
                    {{-- <td>{{$category->extractone}}</td>
                    <td>{{$category->extracttwo}}</td> --}}
                    <td>{{$category->name}}</td>
                    
                    <td>{{$category->created_at}}</td>
                    <td>{{$category->updated_at}}</td>
                    <td width="10px">
                        <a href="{{route('admin.categories.edit', $category)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('admin.categories.destroy', $category)}}" method="POST">
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
            $('#Tablecategories').DataTable({
                responsive: true,
                dom: 'Bfrtip',
                autoFill: true,
                buttons: [
                    'copy', 'csv', 'excel', 'pdf', 'print'
                ]
            });
        });
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop

