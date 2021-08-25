<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        {!! Form::label('user_id', 'ID Usuario') !!}    
        {!! Form::text('user_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el id del usuario']) !!}
        @error('user_id')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror

        <br>
        <label for="folder_id">Trámite</label>
            <select id="folder_id" name="folder_id">
            <option value="1">Cerramiento</option>
            </select>
        @error('folder_id')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror       
    </div>
</div>


                
                
