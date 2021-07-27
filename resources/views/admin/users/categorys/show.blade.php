@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.users.categorys.create')}}">Nueva Categoría</a>
    <h1>Lista de Categorías</h1>
@stop



@section('content')
    {{-- <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Ubicación</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($farms as $farm)
                        <tr>
                            <td>{{$farm->id}}</td>
                            <td>{{$farm->name}}</td>
                            <td>{{$farm->ubicacion}}</td>
                            <td width="10px">
                                <a href="{{route('admin.users.farms.edit', $farm)}}" class="btn btn-primary btn-sm">Editar</a>
                            </td>
                            <td width="10px">
                                <form action="{{route('admin.users.farms.destroy', $farm)}}" method="POST">
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
    </div> --}}
@stop





@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop