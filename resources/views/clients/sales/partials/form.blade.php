<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        {!! Form::label('name', 'Nombre') !!}    
        {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el Nombre de Usuario']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        <br>
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
        @enderror
    </div>
</div>


                
                
