@extends('layouts.app')
@section('content')
<div class="media">
    <img class="thumbnail"alt="{{ $album->name }}" src="/images/articles/{{ $album->cover_image }}" width="300px">
</div>
{!! Form::model($album, ['method' => 'PATCH', 'action' => ['AlbumsController@update', $album->id]]) !!}

<div class="form-group">
    {!! Form::label('country_id','Ангилал:') !!}
    {!! Form::select('country_id', $countries, null, ['id' => 'tag_list','class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('name','Фото цомгийн нэр:') !!}
    {!! Form::text('name',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('description','Фото цомгийн тайлбар:') !!}
    {!! Form::text('description',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::label('cover_image','Зургийн цомгийн нүүр зураг:') !!}
    {!! Form::text('cover_image',null, ['class'=>'form-control']) !!}
</div>
<div class="form-group">
    {!! Form::submit('Хадгалах', ['class'=>'btn btn-primary ']) !!}
</div>
{!! Form::close() !!}
{!! Form::model($album, ['method'=>'DELETE', 'action' => ['AlbumsController@destroy', $album->id]]) !!}
<div class="form-group">
    {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
</div>
{!! Form::close() !!}
@include('errors.list')
@stop