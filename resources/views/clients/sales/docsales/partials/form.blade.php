<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        <label for="folder_id">Trámite</label>
            <select id="category_id" name="folder_id">
            <option value="1">Cerramiento</option>
            </select>
        @error('folder_id')
            <small class="text-danger">
                {{ $message }}
            </small>
        @enderror
    </div>
</div>


                
                
