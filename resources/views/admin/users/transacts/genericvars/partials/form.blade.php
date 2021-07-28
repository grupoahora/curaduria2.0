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
        {!! Form::label('vart1', 'Nombre de la Variable T. 1') !!}    
        {!! Form::text('vart1', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable t. 1']) !!}
        @error('vart1')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vart2', 'Nombre de la Variable T. 2') !!}    
        {!! Form::text('vart2', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable t. 2']) !!}
        @error('vart2')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara1', 'Nombre de la Variable A. 1') !!}    
        {!! Form::text('vara1', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 1']) !!}
        @error('vara1')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara2', 'Nombre de la Variable A. 2') !!}    
        {!! Form::text('vara2', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 2']) !!}
        @error('vara2')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara3', 'Nombre de la Variable A. 3') !!}    
        {!! Form::text('vara3', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 3']) !!}
        @error('vara3')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara4', 'Nombre de la Variable A. 4') !!}    
        {!! Form::text('vara4', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 4']) !!}
        @error('vara4')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara5', 'Nombre de la Variable A. 5') !!}    
        {!! Form::text('vara5', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 5']) !!}
        @error('vara5')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara6', 'Nombre de la Variable A. 6') !!}    
        {!! Form::text('vara6', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 6']) !!}
        @error('vara6')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('vara7', 'Nombre de la Variable A. 7') !!}    
        {!! Form::text('vara7', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable a. 7']) !!}
        @error('vara7')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc1', 'Nombre de la Variable C. 1') !!}    
        {!! Form::text('varc1', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 1']) !!}
        @error('varc1')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc2', 'Nombre de la Variable C. 2') !!}    
        {!! Form::text('varc2', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 2']) !!}
        @error('varc2')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc3', 'Nombre de la Variable C. 3') !!}    
        {!! Form::text('varc3', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 3']) !!}
        @error('varc3')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc4', 'Nombre de la Variable C. 4') !!}    
        {!! Form::text('varc4', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 4']) !!}
        @error('varc4')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc5', 'Nombre de la Variable C. 5') !!}    
        {!! Form::text('varc5', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 5']) !!}
        @error('varc5')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc6', 'Nombre de la Variable C. 6') !!}    
        {!! Form::text('varc6', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 6']) !!}
        @error('varc6')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc7', 'Nombre de la Variable C. 7') !!}    
        {!! Form::text('varc7', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 7']) !!}
        @error('varc7')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc8', 'Nombre de la Variable C. 8') !!}    
        {!! Form::text('varc8', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 8']) !!}
        @error('varc8')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc9', 'Nombre de la Variable C. 9') !!}    
        {!! Form::text('varc9', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 9']) !!}
        @error('varc9')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc10', 'Nombre de la Variable C. 10') !!}    
        {!! Form::text('varc10', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 10']) !!}
        @error('varc10')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc11', 'Nombre de la Variable C. 11') !!}    
        {!! Form::text('varc11', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 11']) !!}
        @error('varc11')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('varc12', 'Nombre de la Variable C. 12') !!}    
        {!! Form::text('varc12', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la variable c. 12']) !!}
        @error('varc12')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
    </div>
</div>


                
                
