@extends('adminlte::page')

@section('title', 'Smart Crop 1.0')

@section('content_header')
    <h1>Smart Crop 1.0</h1>
@stop

@section('content')

    @if (session('info'))
        <div class="alert alert-success">
            <strong>{{session('info')}}</strong>
        </div>
        
    @endif

    <div class="card">
        <div class="card-body">
            <p class="h5">
                {{$user->name}}
            </p>
            

            <h2 class="h5">
                Listado de Fincas
            </h2>

            {!! Form::model($user, ['route' => ['admin.users.updatefarms', $user], 'method' => 'put']) !!}
                @foreach ($farms as $farm)
                    <div>
                        <label>
                            {!! Form::checkbox('farms[]', $farm->id, null, ['class' => 'mr-1']) !!}
                            {{$farm->name}}
                        </label>
                    </div>
                @endforeach

                    {!! Form::submit('Asignar una finca', ['class'=> 'btn btn-primary mt-2']) !!}

            {!! Form::close() !!}
        </div>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop