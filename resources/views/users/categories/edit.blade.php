@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <h1>Curaduria Urbana</h1>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::model($post, ['route' => ['posts.update', $post], 'method' => 'PUT']) !!}
            <div class="row justify-content-md-top">
                <div class="col-12  ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5">Datos del categoria</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-2">

                                    {!! Form::label('name', 'Nombre de Categoria') !!}
                                    {!! Form::text('title', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de Categoria']) !!}
                                    @error('title')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror

                                </div>
                               

                                <div class="col-2">
                                    <div class="row">

                                        {!! Form::label('Icono', 'Icono') !!}
                                    </div>
                                    <div class="row">

                                        <select name="category_id" id="select" class="select2-icon">
                                            <option value="" data-icon="" selected="selected">
                                                --Selecciona un Icono--
                                            </option>
                                            <option value="far fa-envelope" {{ collect(old('icon', $category->icon))->contains('far fa-envelope') ? 'selected' : ''}} data-icon="far fa-envelope">
                                                
                                            </option>
                                            <option value="fa-archive" {{ collect(old('icon', $category->icon))->contains('fa-archive') ? 'selected' : ''}} data-icon="fa-archive">
                                                
                                            </option>
                                            <option value="fa-exclamation" {{ collect(old('icon', $category->icon))->contains('fa-exclamation') ? 'selected' : ''}} data-icon="fa-exclamation">
                                                
                                            </option>
                                            <option value="fa-heart" {{ collect(old('icon', $category->icon))->contains('fa-hear') ? 'selected' : ''}} data-icon="fa-heart">
                                                
                                            </option>
                                            <option value="fa-search" {{ collect(old('icon', $category->icon))->contains('fa-search') ? 'selected' : ''}} data-icon="fa-search">
                                                
                                            </option>
                                            <option value="fa-star" {{ collect(old('icon', $category->icon))->contains('fa-star') ? 'selected' : ''}} data-icon="fa-star">
                                                
                                            </option>
                                            <option value="fa-cog" {{ collect(old('icon', $category->icon))->contains('fa-cog') ? 'selected' : ''}} data-icon="fa-cog">
                                                
                                            </option>
                                            <option value="fa-globe" {{ collect(old('icon', $category->icon))->contains('fa-globe') ? 'selected' : ''}} data-icon="fa-globe">
                                                
                                            </option>
                                            <option value="fas fa-redo" {{ collect(old('icon', $category->icon))->contains('fas fa-red') ? 'selected' : ''}} data-icon="fas fa-redo">
                                                
                                            </option>


                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            {!! Form::submit('Crear Post', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}

                            {{-- {!! Form::label('action', 'Acción') !!}    
                                {!! Form::text('action', null , ['class' => 'form-control', 'placeholder' => '']) !!}
                                @error('action')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror --}}




                        </div>
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
