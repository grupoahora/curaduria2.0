@extends('adminlte::page')

@section('title', 'Smart Crop 1.0')

@section('content_header')
    <h1>Smart Crop 1.0</h1>
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
                        aria-controls="ex3-tabs-1" aria-selected="true">Datos de la Finca</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-2" data-toggle="tab" href="#ex3-tabs-2" role="tab"
                        aria-controls="ex3-tabs-2" aria-selected="false">Lotes</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-3" data-toggle="tab" href="#ex3-tabs-3" role="tab"
                        aria-controls="ex3-tabs-3" aria-selected="false">Mapas de Suelo</a>
                </li>
                <li class="nav-item" role="presentation">
                    <a class="nav-link" id="ex3-tab-4" data-toggle="tab" href="#ex3-tabs-4" role="tab"
                        aria-controls="ex3-tabs-4" aria-selected="true">otro tab</a>
                </li>
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
                    {!! Form::model($farm, ['route' => ['admin.users.farms.update', compact('farm')], 'method' => 'put']) !!}
                    <div class="col-6  ">
                        <div class="card">
                            <div class="card-header">
                                <h2 class="h5">Datos de la finca</h2>
                            </div>
                            <div class="card-body">
                                @include('admin.users.farms.partials.form')
                                {!! Form::submit('Guardar', ['class' => 'btn btn-primary']) !!}
                                {!! Form::close() !!}
                            </div>
                        </div>
                    </div>






                </div>
                <div class="tab-pane fade" id="ex3-tabs-2" role="tabpanel" aria-labelledby="ex3-tab-2">
                    <div class="card">
                        <div class="card-header">

                            <a class="btn btn-secondary btn float-right"
                                href="{{ route('admin.users.farms.lots.create', compact('farm')) }}">Añadir nuevo lote</a>
                            <h2 class="h5 pt-2">lotes</h2>

                        </div>
                        <div class="card-body">
                            <table id="TableLot" class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Nombre</th>
                                        <th>edad</th>
                                        <th>densidad</th>
                                        <th>fecha de creacion</th>
                                        <th>fecha de actualizacion</th>
                                        <th></th>
                                        <th></th>







                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($farm->lots as $lot)
                                        <tr>
                                            <td>{{ $lot->id }}</td>
                                            <td>{{ $lot->name }}</td>
                                            <td>{{ $lot->edad }}</td>
                                            <td>{{ $lot->densidad }}</td>
                                            <td>{{ $lot->created_at }}</td>
                                            <td>{{ $lot->updated_at }}</td>

                                            <td class="text-center" width="10px">
                                                <a href="{{ route('admin.users.farms.lots.edit', $farm) }}"
                                                    class="btn btn-primary btn-sm">Editar</a>
                                            </td>
                                            <td class="text-center" width="10px">
                                                <form action="{{ route('admin.users.farms.lots.destroy', $farm) }}"
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
                <div class="tab-pane fade" id="ex3-tabs-3" role="tabpanel" aria-labelledby="ex3-tab-3">
                    <div class="col-12">
                        <div class="card"">
                            <div class="card-header">
                                <a class="btn btn-secondary btn-sm float-right" href="{{route('admin.users.farms.lots.biologiarecords.create', compact('farm'))}}">Nueva Biología</a>
                                <h1>Lista de todos los registros de imágenes de biología</h1>
                            </div>       
                            <div class="card-body">
                                <div class="row ${1| ,row-cols-2,row-cols-3, auto,justify-content-md-center,|}">
                                    <div class="col col-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <label>
                                                    Patogeno Muestrado
                                                </label>
                                            </div>
                                            <button type="button" class="btn btn-md btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal35">

                                                Ver Registros

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal35" tabindex="-1" aria-labelledby="exampleModalLabel35"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel35">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                                <table id="TableBiologiaRecord" class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>id</th>
                                                                            <th>mapa</th>
                                                                            <th>fecha de creación</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($farm->biologiarecords as $biologiarecord)
                                                                        <tr>
                                                                            <td>{{ $biologiarecord->id }}</td>
                                                                            <td>
                                                                                <button type="button" class="btn btn-md btn-success"
                                                                                    data-bs-toggle="modal" data-bs-target="#exampleModalreg35{{ $biologiarecord->id }}">

                                                                                    Ver Registros

                                                                                </button>

                                                                                <div class="modal fade" id="exampleModalreg35{{ $biologiarecord->id }}" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabelreg35{{ $biologiarecord->id }}" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">

                                                                                            <img width="600px" position=""
                                                                                                src="{{ $biologiarecord->image }}">


                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $farm->created_at }}</td>

                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col col-3">
                                        <div class="card">
                                            <div class="card-header">
                                                <label>
                                                    Bacteria Aplicada 
                                                </label>
                                            </div>
                                            <button type="button" class="btn btn-md btn-success" data-bs-toggle="modal"
                                                data-bs-target="#exampleModal36">

                                                Ver Registros

                                            </button>
                                            <!-- Modal -->
                                            <div class="modal fade" id="exampleModal36" tabindex="-1" aria-labelledby="exampleModalLabel36"
                                                aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel36">Modal title</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                                aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            
                                                                <table id="TableBiologiaRecord" class="table table-striped">
                                                                    <thead>
                                                                        <tr>
                                                                            <th>id</th>
                                                                            <th>mapa</th>
                                                                            <th>fecha de creación</th>
                                                                        </tr>
                                                                    </thead>
                                                                    <tbody>
                                                                        @foreach ($farm->biologiarecords as $biologiarecord)
                                                                        <tr>
                                                                            <td>{{ $biologiarecord->id }}</td>
                                                                            <td>
                                                                                <button type="button" class="btn btn-md btn-success"
                                                                                    data-bs-toggle="modal" data-bs-target="#exampleModalreg36{{ $biologiarecord->id }}">

                                                                                    Ver Registros

                                                                                </button>

                                                                                <div class="modal fade" id="exampleModalreg36{{ $biologiarecord->id }}" tabindex="-1"
                                                                                    aria-labelledby="exampleModalLabelreg36{{ $biologiarecord->id }}" aria-hidden="true">
                                                                                    <div class="modal-dialog">
                                                                                        <div class="modal-content">

                                                                                            <img width="600px" position=""
                                                                                                src="{{ $biologiarecord->image }}">


                                                                                        </div>
                                                                                    </div>
                                                                                </div>
                                                                            </td>
                                                                            <td>{{ $farm->created_at }}</td>

                                                                        </tr>
                                                                        @endforeach
                                                                    </tbody>
                                                                </table>
                                                            
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                            <button type="button" class="btn btn-primary">Save changes</button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
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
        


    </div>
    
@stop


@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
@stop

@section('js')
@livewireScripts
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#TableBiologiaRecord').DataTable({
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