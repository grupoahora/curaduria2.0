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
            {!! Form::open(['route' => 'admin.categories.store']) !!}
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
                                    {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de Categoria']) !!}
                                    @error('name')
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

                                        <select name="icon" id="select" class="select2-icon">
                                            <option value="" data-icon="" selected="selected">
                                                --Selecciona un Icono--
                                            </option>
                                            <option value="far fa-envelope" data-icon="far fa-envelope">
                                                
                                            </option>
                                            <option value="fa-archive" data-icon="fa-archive">
                                                
                                            </option>
                                            <option value="fa-exclamation" data-icon="fa-exclamation">
                                                
                                            </option>
                                            <option value="fa-heart" data-icon="fa-heart">
                                                
                                            </option>
                                            <option value="fa-search" data-icon="fa-search">
                                                
                                            </option>
                                            <option value="fa-star" data-icon="fa-star">
                                                
                                            </option>
                                            <option value="fa-cog" data-icon="fa-cog">
                                                
                                            </option>
                                            <option value="fa-globe" data-icon="fa-globe">
                                                
                                            </option>
                                            <option value="fas fa-redo" data-icon="fas fa-redo">
                                                
                                            </option>


                                        </select>
                                    </div>
                                </div>
                                
                            </div>
                            <br>
                            {!! Form::submit('Crear Categoria', ['class' => 'btn btn-primary']) !!}
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
