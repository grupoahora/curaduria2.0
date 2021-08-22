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
    </div>
</div>


                
                
