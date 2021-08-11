<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        
        
        {!! Form::label('name', 'Nombre') !!}    
        {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del formulario']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>

        <label for="url">URL:</label>

        <input type="url" name="url" id="url"
            placeholder="https://example.com"
            pattern="https://.*" size="30"
            required>
        @error('url')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('form_id', 'ID Formulario') !!}    
        {!! Form::number('form_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el ID del Formulario']) !!}
        @error('form_id')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <br>
        {!! Form::label('user_id', 'ID Usuario') !!}    
        {!! Form::number('user_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el ID del Usuario']) !!}
        @error('user_id')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        

    </div>
</div>

                
                
