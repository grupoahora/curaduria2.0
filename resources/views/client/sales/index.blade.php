@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2.0')

@section('content_header')
    <div class="card-header">
        <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.users.folders.create')}}">Nuevo Trámite</a>
        <h1>Listado de Trámites Vendidos</h1>

    </div>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>

@endif

        <div class="card-body">
            @livewire('admin.user.sales-index')
        </div>
    
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    @livewireScripts
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#TableSales').DataTable({
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
