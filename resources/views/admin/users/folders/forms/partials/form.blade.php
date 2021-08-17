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
            pattern="www." size="30"
            required>
        @error('url')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror


    </div>
</div>


                
                
