@extends('layouts.app')

@section('content')

    <h1>Засварлах: {{ $photo->title }}</h1>

    {!! Form::model($photo, ['method' => 'PATCH', 'action' => ['PhotosController@update', $photo->id]]) !!}
        
        <div class="form-group">
            {!! Form::label('name','name:') !!}
            {!! Form::text('name',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('fileName','Зураг оруулах:') !!}
            {!! Form::file('fileName', ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {{ Form::submit('Upload Photo', ['class'=>'btn btn-primary ']) }}
        </div>

        <!-- {!! Form::model($photo, ['method'=>'DELETE', 'action' => ['ArticlesController@destroy', $photo->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
        </div> -->
    {!! Form::close() !!}

    {!! Form::model($photo, ['method'=>'DELETE', 'action' => ['PhotosController@destroy', $photo->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
        </div>
    {!! Form::close() !!}

@stop