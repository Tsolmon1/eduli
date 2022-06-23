
<div class="form-group">
    {!! Form::label('country_id','Улс:') !!}
    {!! Form::select('country_id', $countries, null, ['id' => 'tag_list', 'class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('thumbnail','thumbnail:') !!}
    {!! Form::text('thumbnail',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('banner','Banner:') !!}
    {!! Form::text('banner',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name','name:') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('rank','rank:') !!}
    {!! Form::text('rank', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description','description:') !!}
    {!! Form::textarea('description',null, ['id' => 'editor', 'class'=>'form-control summernote']) !!}
</div>

<div class="form-group">
    {!! Form::label('media','media:') !!}
    {!! Form::text('media', null, ['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('file','file:') !!}
    {!! Form::text('file', null, ['class'=>'form-control']) !!}
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