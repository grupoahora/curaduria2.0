<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        
        
        {!! Form::label('name', 'Nombre') !!}    
        {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable específica']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc1', 'Nombre de la Variable 1') !!}    
        {!! Form::text('varc1', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 1']) !!}
        @error('varc1')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc2', 'Nombre de la Variable 2') !!}    
        {!! Form::text('varc2', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 2']) !!}
        @error('varc2')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc3', 'Nombre de la Variable 3') !!}    
        {!! Form::text('varc3', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 3']) !!}
        @error('varc3')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc4', 'Nombre de la Variable 4') !!}    
        {!! Form::text('varc4', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 4']) !!}
        @error('varc4')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc5', 'Nombre de la Variable 5') !!}    
        {!! Form::text('varc5', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 5']) !!}
        @error('varc5')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc6', 'Nombre de la Variable 6') !!}    
        {!! Form::text('varc6', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 6']) !!}
        @error('varc6')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc7', 'Nombre de la Variable 7') !!}    
        {!! Form::text('varc7', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 7']) !!}
        @error('varc7')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc8', 'Nombre de la Variable 8') !!}    
        {!! Form::text('varc8', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 8']) !!}
        @error('varc8')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc9', 'Nombre de la Variable 9') !!}    
        {!! Form::text('varc9', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 9']) !!}
        @error('varc9')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc10', 'Nombre de la Variable 10') !!}    
        {!! Form::text('varc10', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 10']) !!}
        @error('varc10')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc11', 'Nombre de la Variable 11') !!}    
        {!! Form::text('varc11', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 11']) !!}
        @error('varc11')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc12', 'Nombre de la Variable 12') !!}    
        {!! Form::text('varc12', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable 12']) !!}
        @error('varc12')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
</div>


                
                
