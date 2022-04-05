@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item" aria-current="page">Usuarios y Roles</li>
            <li class="breadcrumb-item"><a href="{{route('admin.users.index')}}">Usuarios</a></li>
            <li class="breadcrumb-item active" aria-current="page">Editar Usuario "{{$user->name}}"</li>
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
            {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'PUT']) !!}
            <div class="row justify-content-md-top">
                <div class="col-12  ">
                    <div class="card">
                        <div class="card-header">
                            <h2 class="h5">Datos de Usuario</h2>
                        </div>
                        <div class="card-body">
                            <div class="row">

                                <div class="col-6">
                                    <div class="form-group">
                                        {!! Form::label('name', 'Nombre Del Usuario', ['class' => 'form-label']) !!}
                                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Nombre del Usuario']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('surname', 'Apellido Del Usuario', ['class' => 'form-label']) !!}
                                        {!! Form::text('surname', null, ['class' => 'form-control', 'placeholder' => 'Apellido del Usuario']) !!}
                                    </div>
                                    <div class="form-group">
                                        {!! Form::label('email', 'Correo Electrónico', ['class' => 'form-label']) !!}
                                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Correo Electrónico']) !!}
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="form-group">
                                        <div class="card">
                                            <div class="card-header">
                                                <h5 class="card-title">
                                                    LISTA DE ROLES
                                                </h5>
                                            </div>

                                            <div class="card-body">


                                                @foreach ($roles as $role)
                                                    <div>
                                                        <label>
                                                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                                            {{ $role->name }}
                                                        </label>
                                                    </div>
                                                @endforeach
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
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
        $(document).ready(function() {
            function formatText(icon) {
                return $('<span><i class="fas ' + $(icon.element).data('icon') + '"></i> ' + icon.text + '</span>');
            };
            $('.select').select2({
                width: "100%",
                theme: "classic",
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
