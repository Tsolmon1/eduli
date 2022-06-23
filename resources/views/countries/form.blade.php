<div class="form-group">
    {!! Form::label('banner','Banner:') !!}
    {!! Form::text('banner',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name','name:') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('flag','flag:') !!}
    {!! Form::text('flag', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('content','content:') !!}
    {!! Form::textarea('content',null, ['id' => 'summernote', 'class'=>'form-control summernote']) !!}
</div>

<div class="form-group">
    {!! Form::submit($submitButtonText, ['class'=>'btn btn-primary ']) !!}
</div>

@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Ангилалыг сонгох'
        });
    </script>
@endsection