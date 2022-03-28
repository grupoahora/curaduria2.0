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
        {!! Form::open(['route' => 'proceedings.store']) !!}
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
                                {!! Form::label('classproceeding', 'Clase de Procedimiento') !!}    
                                {!! Form::text('classproceeding', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la clase de procedimiento']) !!}
                                @error('classproceeding')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                                
                                <br>
                                {!! Form::label('descriptionclassproceeding', 'Descripciónd de la Clase de Procedimiento') !!}    
                                {!! Form::text('descriptionclassproceeding', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}
                                @error('descriptionclassproceeding')
                                    <small class="text-danger">
                                        {{$message}}
                                    </small>
                                @enderror
                                
                                <br>

                            
                                

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

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
<script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js" integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    console.log('menu');
</script>
@stop