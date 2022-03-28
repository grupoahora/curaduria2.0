@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
<h1>Curaduria Urbana</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    {{session('info')}}
</div>
@endif
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'posts.store']) !!}
        <div class="row justify-content-md-top">
            <div class="col-12  ">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h5">Datos del actas</h2>
                    </div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-9">

                                    {!! Form::label('title', 'Título N. 1') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Título']) !!}
                                    @error('title')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>

                                <div class="col-3">
                                    <div class="row">

                                        {!! Form::label('Icono', 'Icono/Categoría') !!}
                                    </div>
                                    <div class="row">
                                        <select name="icon" id="select" class="select2-icon">
                                            <option value="" data-icon="" selected="selected">
                                                --Selecciona un Icono/Categoría--
                                            </option>
                                            <option value="fas fa-info-circle" data-icon="fa-info-circle">
                                                Información General
                                            </option>
                                            <option value="fas fa-exclamation-circle" data-icon="fas fa-exclamation-circle">
                                                Importante
                                            </option>
                                            <option value="fas fa-users-cog" data-icon="fas fa-users-cog">
                                                Corporativo
                                            </option>
                                            <option value="fas fa-newspaper" data-icon="fas fa-newspaper">
                                                Noticia
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-6">

                                    {!! Form::label('extractone', 'Extracto N. 1') !!}
                                    {!! Form::textarea('extractone', null, ['class' => 'form-control', 'id' => 'extractone', 'rows' => '2', 'placeholder' => 'Ingrese el Extracto N. 1']) !!}
                                    @error('extractone')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>
                                <div class="col-6">

                                    {!! Form::label('extracttwo', 'Extracto N. 2') !!}
                                    {!! Form::textarea('extracttwo', null, ['class' => 'form-control', 'id' => 'extracttwo', 'rows' => '2', 'placeholder' => 'Ingrese el Extracto N. 2']) !!}
                                    @error('extracttwo')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                    {!! Form::label('extractthree', 'Extracto N. 3') !!}
                                    {!! Form::textarea('extractthree', null, ['class' => 'form-control', 'id' => 'extractthree', 'rows' => '2', 'placeholder' => 'Ingrese el Extracto N. 1']) !!}
                                    @error('extractthree')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>
                                <div class="col-12">

                                    {!! Form::label('content', 'Contenido') !!}
                                    {!! Form::textarea('content', null, ['class' => 'form-control', 'id' => 'content', 'rows' => '20', 'placeholder' => 'Ingrese el Contenido']) !!}
                                    @error('content')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>
                            </div>

                            {{-- {!! Form::label('action', 'Acción') !!}    
                                {!! Form::text('action', null , ['class' => 'form-control', 'placeholder' => '']) !!}
                                @error('action')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror --}}




                        </div>
                        {!! Form::submit('Crear Post', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
@stop

@section('css')
  <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="/select2/dist/css/select2.min.css">
@stop

@section('js')


    <script src="/select2/dist/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {
            function formatText(icon) {
                return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
            };
            $('.select2-icon').select2({
                width: "100%",
                templateSelection: formatText,
                templateResult: formatText
            });
        });
    </script>
    {!! Html::script('ckeditor/ckeditor.js') !!}
    <script>
        CKEDITOR.replace('content', {
            languaje: 'es',
            width: '100%',
            height: 500,

        });

        CKEDITOR.replace('extractone', {
            languaje: 'es',
            width: '100%',
            height: 100,

        });
        CKEDITOR.replace('extracttwo', {
            languaje: 'es',
            width: '100%',
            height: 100,

        });
        CKEDITOR.replace('extractthree', {
            languaje: 'es',
            width: '100%',
            height: 100,

        });
    </script>
<script>
    console.log('menu');
</script>
@stop