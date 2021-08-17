@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2.0')

@section('content_header')
    <h1>Curaduría Urbana 2.0</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            {{ session('info') }}
        </div>
    @endif
    <div class="card">
        <div class="card-body">
            <!-- Tabs navs -->
            <ul class="nav nav-tabs nav-justified mb-3" id="ex1" role="tablist">
                <li class="nav-item" role="presentation">
                    <a class="nav-link active" id="ex3-tab-1" data-toggle="tab" href="#ex3-tabs-1" role="tab"
                        aria-controls="ex3-tabs-1" aria-selected="true">Datos del trámite</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-2" data-toggle="tab" href="#ex3-tabs-2" role="tab"
                        aria-controls="ex3-tabs-2" aria-selected="false">Formularios</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-3" data-toggle="tab" href="#ex3-tabs-3" role="tab"
                        aria-controls="ex3-tabs-3" aria-selected="false">Documentos</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-4" data-toggle="tab" href="#ex3-tabs-4" role="tab"
                        aria-controls="ex3-tabs-4" aria-selected="false">otro tab</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-5" data-toggle="tab" href="#ex3-tabs-5" role="tab"
                        aria-controls="ex3-tabs-5" aria-selected="false">otro tab 2</a>
                </li>
            </ul>
            <!-- Tabs navs -->

            <!-- Tabs content -->
            <div class="tab-content" id="ex2-content">
                <div class="tab-pane fade active show" id="ex3-tabs-1" role="tabpanel" aria-labelledby="ex3-tab-1">
                    {!! Form::model($folder, ['route' => ['admin.users.folders.update', compact('folder')], 'method' => 'get']) !!}
                    <div class="row justify-content-md-top">
                        <div class="col-5  ">
                            <div class="card">
                                <div class="card-header">
                                    
                                    <h2 class="h5">Trámite</h2>
                                </div>
                                <div class="card-body">
                                    @include('admin.users.folders.partials.form')
                                    {!! Form::submit('Editar trámite', ['class' => 'btn btn-primary']) !!}
                                    {!! Form::close() !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                    <div class="card">
                        <div class="card-header">
                            <a class="btn btn-secondary btn float-right" 
                                href="{{route('admin.users.folders.forms.create', compact('folder'))}}">Nuevo Formulario</a>
                            <h2 class="h5 pt-2">Formularios</h2>
                        </div>
                        <div class="card-body">
                            <table id="TableForm" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre del Formulario</th>
                                        <th>URL</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($folder->forms as $form)
                                        <tr>
                                            <td>{{$form->id}}</td>
                                            <td>{{$form->name}}</td>
                                            <td>{{$form->url}}</td>
                                            <td width="10px">
                                                <a href="{{route('admin.users.folders.forms.edit', $form)}}" 
                                                    class="btn btn-primary btn-sm">Editar</a>
                                            </td>
                                            <td width="10px">
                                                <form action="{{route('admin.users.folders.forms.destroy', $form)}}" 
                                                    method="POST">
                                                    @csrf
                                                    @method('delete')

                                                    <button type="submit" class="btn btn-danger btn-sm"">Eliminar</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
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

            {{-- {!! Form::model($transact, ['route' => ['admin.users.transacts.update', compact('transact')], 'method' => 'get']) !!}
            <div class="row justify-content-md-top">
                <div class="col-5  ">
                    <div class="card">
                        <div class="card-header">
                             
                            <h2 class="h5">Trámite</h2>
                        </div>
                        <div class="card-body">
                            
                            @include('admin.users.transacts.partials.form')
                        </div>
                    </div>
                </div>
            </div>
            
            {!! Form::submit('Editar trámite', ['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!} --}}
        </div>
    </div>
   
    
@stop


@section('css')
    <link rel="stylesheet" href="/css/styles2.css">
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
    @livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" 
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#TableFolder').DataTable({
                "lengthMenu": [
                    [5, 10, 15, -1],
                    [5, 10, 15, "All"]
                ]
            });
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#TableForm').DataTable({
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