<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        
        <br>
        {!! Form::label('name_transacts', 'Nombre') !!}    
        {!! Form::text('name_transacts', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        {{-- <br>
        {!! Form::label('category_id', 'Número de Categoría') !!}    
        {!! Form::number('category_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el número de la categoría']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror --}}
        
        <br>
        {!! Form::label('updated_at', 'Fecha de Actualización') !!}    
        {!! Form::date('updated_at', null , ['class' => 'form-control', 'placeholder' => 'Ingrese la fecha de actualización']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
        <label for="category_id">Categoría</label>
            <select id="category_id" name="category_id">
            <option value="1">Urbana</option>
            <option value="2">Rural</option>
            </select>
        @error('category_id')
            <small class="text-danger">
                {{ $message }}
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


                
                
