@extends('adminlte::page')

@section('title', 'Smart Crop 1.0')

@section('content_header')
    <h1>Asignar un Rol</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{ session('info') }}</strong>
        </div>

    @endif

    <div class="card">
        <div class="card-body">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex3-tab-1" data-toggle="tab" href="#ex3-tabs-1" role="tab"
                        aria-controls="ex3-tabs-1" aria-selected="true">Datos del Usuario</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-2" data-toggle="tab" href="#ex3-tabs-2" role="tab"
                        aria-controls="ex3-tabs-2" aria-selected="false">Documentos del Usuario</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-3" data-toggle="tab" href="#ex3-tabs-3" role="tab"
                        aria-controls="ex3-tabs-3" aria-selected="false">Roles del Usuario</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-4" data-toggle="tab" href="#ex3-tabs-4" role="tab"
                        aria-controls="ex3-tabs-4" aria-selected="true">otro tab</a>
                </li>

                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-5" data-toggle="tab" href="#ex3-tabs-5" role="tab"
                        aria-controls="ex3-tabs-5" aria-selected="true">otro tab 2</a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                    {!! Form::model($user, ['route' => ['admin.users.update', compact('user')], 'method' => 'put']) !!}

                    <div class="col-3  ">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5">Datos del usuario</h2>
                            </div>
                            <div class="card-body">

                                @include('admin.users.partials.form')


                            </div>
                        </div>
                    </div>






                </div>
                <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                    <div class="col-2">
                        <div class="card" style="width:18rem;">
                            <div class="card-header">
                                <h2 class="h5">
                                    Listado de Roles
                                </h2>
                            </div>

                            <div class="card-body">
                                {!! Form::model($user, ['route' => ['admin.users.update', $user], 'method' => 'put']) !!}
                                @foreach ($roles as $role)
                                    <div>
                                        <label>
                                            {!! Form::checkbox('roles[]', $role->id, null, ['class' => 'mr-1']) !!}
                                            {{ $role->name }}
                                        </label>
                                    </div>
                                @endforeach



                                {!! Form::submit('Asignar un Rol', ['class' => 'btn btn-primary mt-2']) !!}

                                {!! Form::close() !!}
                            </div>
                        </div>





                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="ex3-tabs-4" role="tabpanel" aria-labelledby="ex3-tab-4">
                <div wight="100vh"></div>
            </div>
            <div class="tab-pane fade" id="ex3-tabs-5" role="tabpanel" aria-labelledby="ex3-tab-5">
                Tab 5 content
            </div>
        </div>

    </div>
    <!-- Tabs content -->
    <div class="card-body">
        {!! Form::model($user, ['route' => ['admin.users.update', compact('user')], 'method' => 'put']) !!}
        <div class="row justify-content-md-top">



        </div>
    </div>
    
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
    @livewireScripts
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#TableCategory').DataTable({
                "lengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ]
            });
        });
    </script>
    <script>
        console.log('Hi!');
    </script>
@stop
