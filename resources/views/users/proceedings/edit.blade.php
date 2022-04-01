@extends('adminlte::page')

@section('title', 'Curaduria Urbana 2')

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
            {!! Form::model($proceedings, ['route' => ['admin.proceedings.update', $proceedings], 'method' => 'PUT']) !!}
            <div class="card">
                <div class="card-header">
                    <h2 class="h5">Datos del Procedimiento</h2>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-6">
                            <div class="form-group">
                                {!! Form::label('radicado', 'Radicado') !!}
                                {!! Form::text('radicado', null, ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
                                @error('radicado')
                                    <small class="text-danger">
                                        {{ $message }}
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
                                {!! Form::text('classproceeding', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la clase de procedimiento']) !!}
                                @error('classproceeding')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                                <br>
                                {!! Form::label('descriptionclassproceeding', 'Descripciónd de la Clase de Procedimiento') !!}
                                {!! Form::text('descriptionclassproceeding', null, ['class' => 'form-control', 'placeholder' => 'Ingrese la descripción']) !!}
                                @error('descriptionclassproceeding')
                                    <small class="text-danger">
                                        {{ $message }}
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
                        <div class="col-6">

                            <div class="form-group">
                                <div class="row grid-margin">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <input type="hidden" id="csrf_token" name="_token"
                                                    value="{{ csrf_token() }}">
                                                <label for="files">Archivo</label>
                                                <div class="file-loading" id="sortable">
                                                    <input id="files2" name="files[]" type="file" multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {!! Form::submit('Editar Procedimiento', ['class' => 'btn btn-primary']) !!}
                        {!! Form::close() !!}
                    </div>
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

   <link rel="stylesheet" href="/css/style-navbar.css">
    <link rel="stylesheet" href="/select2/dist/css/select2.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/x-editable/1.5.0/jqueryui-editable/css/jqueryui-editable.css"
        rel="stylesheet" />
    <link rel="stylesheet" href="/css/jquery-ui.min.css">
    <link href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/buttons/2.2.2/css/buttons.dataTables.min.css">
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    {!! Html::script('fileinput/js/fileinput.min.js') !!}
    {!! Html::script('fileinput/js/locales/es.js') !!}
    {!! Html::script('fileinput/themes/fas/theme.js') !!}
    
    <script>
        $(document).ready(function() {
            var krajeeGetCount = function(id) {
                var cnt = $('#' + id).fileinput('getFilesCount');
                return cnt === 0 ? 'You have no files remaining.' :
                    'You have ' + cnt + ' file' + (cnt > 1 ? 's' : '') + ' remaining.';
            };
            $("#files2").fileinput({
                language: "es",
                theme: "fas",
                browseOnZoneClick: true,
                uploadUrl: "../../upload_archive_pr/{{ $proceedings->id }}",
                showClose: false,
                uploadExtraData: {
                    '_token': $("#csrf_token").val()
                },
                initialPreview: [
                    <?php foreach ($proceedings->archives as $archive) {
                        echo '"' . asset($archive->url) . '",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'pdf',
                initialPreviewConfig: [<?php foreach ($proceedings->archives as $archive) {
    echo '{width:"120px",key:' . $archive->id . '},';
} ?>],
                overwriteInitial: false,
                validateInitialCount: true,
                minFileCount: 0,
                maxFileCount: 1,
                maxFileSize: 2100,
                browseClass: "btn btn-primary btn-block",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                deleteUrl: "../../file_delete_archive_pr",
                deleteExtraData: {
                    '_token': $("#csrf_token").val()
                },
            }).on('filebeforedelete', function() {
                return new Promise(function(resolve, reject) {
                    $.confirm({
                        title: 'Confirmación!',
                        content: '¿Estás seguro de que quieres eliminar este archivo?',
                        type: 'red',
                        buttons: {
                            ok: {
                                btnClass: 'btn-primary text-white',
                                keys: ['enter'],
                                action: function() {
                                    resolve();
                                }
                            },
                            cancel: function() {
                                $.alert('¡Se canceló la eliminación del archivo!');
                            }
                        }
                    });
                });
            }).on('filedeleted', function() {
                setTimeout(function() {
                    $.alert('¡La eliminación del archivo se realizó correctamente! ');
                }, 900);
            });
        });
    </script>
    <script>
        console.log('menu');
    </script>
@stop
