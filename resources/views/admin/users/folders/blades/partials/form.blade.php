<div>
    {!! Form::hidden('user_id', auth()->user()->id) !!}
    <div class="form-group">
        
        
        {!! Form::label('name', 'Nombre') !!}    
        {!! Form::text('name', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el nombre de la plantilla']) !!}
        @error('name')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        {!! Form::label('transact_id', 'ID Trámite') !!}    
        {!! Form::text('transact_id', null , ['class' => 'form-control', 'placeholder' => 'Ingrese el id del trámite']) !!}
        @error('transact_id')
            <small class="text-danger">
                {{$message}}
            </small>
        @enderror
        
        <br>
        
    </div>
</div>


                
                
