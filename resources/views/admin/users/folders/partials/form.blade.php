<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        
        
        {!! Form::label('namefolder', 'Nombre') !!}    
        {!! Form::text('namefolder', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
        @error('namefolder')
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


    </div>
</div>


                
                
