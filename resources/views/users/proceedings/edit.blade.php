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
            {!! Form::model($proceedings, ['route' => ['proceedings.update', $proceedings], 'method' => 'PUT']) !!}
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

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    {!! Html::style('css/jquery-ui.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet"
        type="text/css" />
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
@stop

@section('js')
    {!! Html::script('js/jquery-ui.min.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.js"></script>
    {!! Html::script('fileinput/js/fileinput.min.js') !!}
    {!! Html::script('fileinput/js/locales/es.js') !!}
    {!! Html::script('fileinput/themes/fas/theme.js') !!}
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2pdf.js/0.9.3/html2pdf.bundle.min.js"
        integrity="sha512-YcsIPGdhPK4P/uRW6/sruonlYj+Q7UHWeKfTAkBW+g83NKM+jMJFJ4iAPfSnVp7BKD4dKMHmVSvICUbE/V1sSw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
