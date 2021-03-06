@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">Publicaciones y Categorías</li>
            <li class="breadcrumb-item"><a href="{{route('admin.posts.index')}}">Publicaciones</a></li>
            <li class="breadcrumb-item active" aria-current="page">Crear Publicación</li>
        </ol>
    </nav>
@stop

@section('content')
    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            {!! Form::open(['route' => 'admin.posts.store']) !!}
            <div class="row justify-content-md-top">
                <div class="col-12  ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5">Datos de la Publicación</h2>
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

                                        {!! Form::label('category_id', 'Categoría') !!}
                                    </div>
                                    <div class="row">
                                        
                                        <select name="category_id" id="select" class="select2-icon">
                                            <option value="" data-icon="" selected="selected">
                                                --Categoría--
                                            </option>
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}"
                                                    data-icon="{{ $category->icon }}">
                                                    {{ $category->name }}
                                                </option>
                                            @endforeach
                                            
                                        </select>
                                    </div>
                                </div>
                                <div class="col-4">
                                    {!! Form::label('extractone', 'Extracto N. 1') !!}
                                    {!! Form::textarea('extractone', null, ['class' => 'form-control', 'id' => 'extractone', 'rows' => '2', 'placeholder' => 'Ingrese el Extracto N. 1']) !!}
                                    @error('extractone')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                               <div class="col-4">
                                    {!! Form::label('extracttwo', 'Extracto N. 2') !!}
                                    {!! Form::textarea('extracttwo', null, ['class' => 'form-control', 'id' => 'extracttwo', 'rows' => '2', 'placeholder' => 'Ingrese el Extracto N. 2']) !!}
                                    @error('extracttwo')
                                        <small class="text-danger">
                                            {{ $message }}
                                        </small>
                                    @enderror
                                </div>
                                <div class="col-4">
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

                    
                            
                            {!! Form::submit('Crear Publicación', ['class' => 'btn btn-primary']) !!}
                            {!! Form::close() !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
  
        <p class="m-0 text-center text-white fs-4-cura-sm ">
            © Copyright 2022. Todos los derechos reservados. <br>
            Sitio web diseñado y desarrollado por manos Cucuteñas. <br>
            Hecho con ❤ <a class="text-danger" href="https://www.softwow.co">Softwow!</a> 
        </p>

@endsection

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
            height: 300,

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
