@extends('layouts.app')

@section('content')

    <h1>Зураг оруулах</h1>
    <hr/>

    {!! Form::open(['route' => 'admin.photos.store', 'files' => true]) !!}
        
        <div class="form-group">
            {!! Form::label('album_id','Зургийн цомог:') !!}
            {!! Form::select('album_id', $albums, null, ['id' => 'tag_list','class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('name','name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fileName','Зураг оруулах:') !!}
            {!! Form::file('fileName', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) !!}
        </div>

    {!! Form::close() !!}
    
@section('footer')
    <script>
        $('#tag_list').select2({
            placeholder: 'Зургийн цомог сонгох'
        });
    </script>
@endsection
@stop