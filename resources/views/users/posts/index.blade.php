@extends('adminlte::page')

@section('title', 'Curaduría Urbana 2')

@section('content_header')
    <h1>Curaduria Urbana</h1>
@stop

@section('content')
@if (session('info'))
<div class="alert alert-success">
    <strong>{{ session('info') }}</strong>
</div>

@endif
    <div class="card-header">
        <a class="btn btn-secondary btn-sm float-right" href="{{route('posts.create')}}">Nuevo Post</a>
        <h1>Lista de Posts</h1>

    </div>
    <div class="card-body">
        <table id="TablePosts" class="table table-striped">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Titulo</th>
                    {{-- <th>Extracto 1</th>
                    <th>Extracto 2</th> --}}
                    <th>Acción</th>
                    {{-- <th>Contenido</th> --}}
                    <th>created_at</th>
                    <th>updated_at</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                <tr>
                    <td id="id{{$post->id}}">{{$post->id}}</td>
                    {{-- <td>{{$post->extractone}}</td>
                    <td>{{$post->extracttwo}}</td> --}}
                    <td>{{$post->title}}</td>
                    <td>
                        <input type="hidden" id="csrf_token{{$post->id}}" name="_token" value="{{ csrf_token() }}">
                        {!! Form::checkbox('action', $post->action,$post->action,['class' => '', 'id' => 'checkbox'.$post->id]) !!}
                    </td>
                    @push('js')
                         <script>
                            var check<?php echo $post->id; ?> = $('#checkbox<?php echo $post->id; ?>');
                            var csrf_token<?php echo $post->id; ?> = $('#csrf_token<?php echo $post->id; ?>');
                            var id<?php echo $post->id; ?> = check<?php echo $post->id; ?>.parent().siblings('#id<?php echo $post->id; ?>').text();
                            
                            check<?php echo $post->id; ?>.change(function() {
                                
                            $.ajax({
                                url: "{{route('actions.change')}}",
                                method: 'PUT',
                                data: {
                                    _token: csrf_token<?php echo $post->id; ?>.val(),
                                    check: check<?php echo $post->id; ?>.val(),
                                    post: id<?php echo $post->id; ?>,
                                },
                                 success: function (data) {
                                     console.log(data);
                                     alert(data);
                                     location.reload();
                                     

                                    
                                 }
                                    
                                
                                
                            });
                        });
                        </script>
                    @endpush
                    <td>{{$post->created_at}}</td>
                    <td>{{$post->updated_at}}</td>
                    <td width="10px">
                        <a href="{{route('posts.edit', $post)}}" class="btn btn-primary btn-sm">Editar</a>
                    </td>
                    <td width="10px">
                        <form action="{{route('posts.destroy', $post)}}" method="POST">
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
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
@stop

@section('js')
  
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
   
    <script>
        $(document).ready(function() {
            $('#TablePosts').DataTable({
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


