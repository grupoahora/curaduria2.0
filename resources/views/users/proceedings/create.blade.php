@extends('adminlte::page')

@section('title', 'Curaduria Urbana 2')

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
        {!! Form::open(['route' => 'admin.proceedings.store']) !!}
        <div class="row justify-content-md-top">
            <div class="col-5  ">
                <div class="card">
                    <div class="card-header">
                        <h2 class="h5">Datos del actas</h2>
                    </div>
                    <div class="card-body">
                        <div>
                            
                            <div class="form-group">
                                
                               
                                {!! Form::label('radicado', 'Radicado') !!}    
                                {!! Form::number('radicado', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                                @error('radicado')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                                
                                <br>
                                {!! Form::label('cc', 'Cedula de Ciudadanía') !!}
                                {!! Form::text('cc', null, ['class' => 'form-control', 'placeholder' => 'Nº de Cedula de Ciudadanía']) !!}
                                @error('cc')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <br>
                                {!! Form::label('classproceeding', 'Clase de Procedimiento') !!}    
                                {!! Form::text('classproceeding', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la clase de procedimiento']) !!}
                                @error('classproceeding')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                                
                                <br>
                                {!! Form::label('descriptionclassproceeding', 'Descripción de la Clase de Procedimiento') !!}    
                                {!! Form::text('descriptionclassproceeding', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}
                                @error('descriptionclassproceeding')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                                
                                <br>
                                {!! Form::label('fechaexpedicion', 'Fecha de Expedición del Procedimiento') !!}
                                {!! Form::date('fechaexpedicion', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de expedicion']) !!}
                                 @error('fechaexpedicion')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror

                            </div>
                        </div>
                        {!! Form::submit('Crear Procedimiento', ['class' => 'btn btn-primary']) !!}
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
    console.log('menu');
</script>
@stop