@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2.0')

@section('content_header')
    <h1>Curaduría Urbana 2.0</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{session('info')}}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.users.transacts.documents.store']) !!}
            <div class="row justify-content-md-top">
                <div class="col-5  ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5">Datos del nuevo Documento</h2>
                        </div>
                        <div class="card-body">
                             @include('admin.users.transacts.documents.partials.form')
                        </div>
                    </div>
                </div>
            </div>
                {!! Form::submit('Crear Documento', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop