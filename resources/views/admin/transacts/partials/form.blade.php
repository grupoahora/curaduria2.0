<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        {!! Form::label('user_id', 'ID Usuario') !!}    
        {!! Form::text('user_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el ID de usuario']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
        {!! Form::label('name_products', 'Nombre') !!}    
        {!! Form::text('name_products', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
        {!! Form::label('category_id', 'Número de Categoría') !!}    
        {!! Form::number('category_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el número de la categoría']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
        {!! Form::label('create_at', 'Fecha de Creación') !!}    
        {!! Form::date('create_at', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de creación']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
        {!! Form::label('update_at', 'Fecha de actualización') !!}    
        {!! Form::date('update_at', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de actualización']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror


        {{-- <br>
        {!! Form::label('number', 'Número') !!}    
        {!! Form::text('number', null, ['class' => 'form-control', 'placeholder' => 'Ingrese número telefónico']) !!}
        
        @error('number')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
        {!! Form::label('email', 'Correo Electrónico') !!}    
        {!! Form::text('email', null , ['class' => 'form-control', 'placeholder' => 'Ingrese correo electrónico']) !!}
        
        @error('email')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror --}}
    </div>
</div>


                
                
