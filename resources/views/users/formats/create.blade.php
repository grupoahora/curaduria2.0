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
            {!! Form::open(['route' => 'admin.formats.store']) !!}
            <div class="card">
                <div class="card-header">
                    <h2 class="h5">Datos del actas</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-12">
                            <div class="form-group">
                                {!! Form::label('name', 'Nombre del Trámite') !!}
                                {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del trámite']) !!}
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror

                                {!! Form::label('description', 'Descrripción del Trámite') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => '2', 'placeholder' => 'Ingrese la decripción']) !!}
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    {!! Form::submit('Crear Trámite', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@stop
@section('footer')
  
        <p class="m-0 text-center text-white fs-4-cura-sm ">
            © Copyright 2021. Todos los derechos reservados. <br>
            Sitio web diseñado y desarrollado por manos Cucuteñas. <br>
            Hecho con ❤ <a class="text-danger" href="https://www.softwow.co">Softwow!</a> 
        </p>

@endsection

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
        integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>

    {!! Html::script('ckeditor/ckeditor.js') !!}
    <script>
        CKEDITOR.replace('description', {
            width: '100%',
            height: 100,

        });
    </script>
@stop
