@extends('adminlte::page')

@section('title', 'Curaduria Urbana 2')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('admin.formats.index')}}">Formatos</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Formato "{{$format->name}}"</li>
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
            {!! Form::model($format, ['route' => ['admin.formats.update', $format], 'method' => 'PUT']) !!}
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

                                {!! Form::label('description', 'Descripción del Trámite') !!}
                                {!! Form::textarea('description', null, ['class' => 'form-control', 'id' => 'description', 'rows' => '2', 'placeholder' => 'Ingrese la decripción']) !!}
                                @error('name')
                                    <small class="text-danger">
                                        {{ $message }}
                                    </small>
                                @enderror
                            </div>
                        </div>
                    </div>
                    <div class="row">
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
                        <div class="col-6">
                            <div class="form-group">
                                <div class="row grid-margin">
                                    <div class="col-lg-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <input type="hidden" id="csrf_token" name="_token"
                                                    value="{{ csrf_token() }}">
                                                <label for="files">Galería de imágenes</label>
                                                <div class="file-loading" id="sortable">
                                                    <input id="files" name="files[]" type="file" multiple>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    {!! Form::submit('Editar Trámite', ['class' => 'btn btn-primary']) !!}
                    {!! Form::close() !!}
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
    {!! Html::style('css/jquery-ui.min.css') !!}
    <link href="//cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css" rel="stylesheet" type="text/css" />
    {!! Html::style('fileinput/css/fileinput.min.css') !!}
@stop

@section('js')
 {!! Html::script('ckeditor/ckeditor.js') !!}
    <script>
        CKEDITOR.replace('description', {
            width: '100%',
            height: 100,

        });
    </script>
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
            $("#files").fileinput({
                language: "es",
                theme: "fas",
                browseOnZoneClick: true,
                uploadUrl: "../../upload_image/{{ $format->id }}",
                showClose: false,
                uploadExtraData: {
                    '_token': $("#csrf_token").val()
                },
                initialPreview: [
                    <?php foreach ($format->images as $image) {
                        echo '"' . asset($image->url) . '",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'image',
                initialPreviewConfig: [<?php foreach ($format->images as $image) {
    echo '{width:"120px",key:' . $image->id . '},';
} ?>],
                overwriteInitial: false,
                validateInitialCount: true,
                minFileCount: 0,
                maxFileCount: 5,
                maxFileSize: 2100,
                browseClass: "btn btn-primary btn-block",
                showCaption: false,
                showRemove: false,
                showUpload: false,
                deleteUrl: "../../file_delete",
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
                uploadUrl: "../../upload_archive/{{ $format->id }}",
                showClose: false,
                uploadExtraData: {
                    '_token': $("#csrf_token").val()
                },
                initialPreview: [
                    <?php foreach ($format->archives as $archive) {
                        echo '"' . asset($archive->url) . '",';
                    } ?>
                ],
                initialPreviewAsData: true,
                initialPreviewFileType: 'pdf',
                initialPreviewConfig: [<?php foreach ($format->archives as $archive) {
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
                deleteUrl: "../../file_delete_archive",
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
