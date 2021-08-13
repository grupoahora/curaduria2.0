<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        
        
        {!! Form::label('name_products', 'Nombre') !!}    
        {!! Form::text('name_products', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre del producto']) !!}
        @error('name_products')
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


                
                
