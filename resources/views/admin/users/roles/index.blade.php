@extends('adminlte::page')

@section('title', 'Smart Crop 1.0')

@section('content_header')
    <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.users.roles.create')}}">Nuevo Rol</a>
    <h1>Lista de Roles</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Role</th>
                        <th colspan="2"></th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($roles as $role)
                        <tr>
                            <th>{{$role->id}}</th>
                            <th>{{$role->name}}</th>
                            <th width="10px">
                                <a href="{{route('admin.users.roles.edit', $role)}}" class="btn btn-sm btn-primary">Editar</a>
                            </th>
                            <th width="10px">
                                <form action="{{route('admin.users.roles.destroy', $role)}}" method="POST">

                                    @csrf
                                    @method('delete')

                                    <button type="submit" class="btn btn-sm btn-danger width="10px"">
                                        Eliminar
                                    </button>
                                </form>
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop