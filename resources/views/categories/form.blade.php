
<div class="form-group">
    {!! Form::label('name','Нэр:') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary ']) !!}
</div>
