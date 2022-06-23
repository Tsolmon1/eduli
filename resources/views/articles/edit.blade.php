@extends('layouts.app')
@section('content')
    <h4>Засварлах: {{ $article->id }}</h4>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        @include('articles.form', ['submitButtonText' => 'Нийтлэл өөрчлөлт оруулах'])
    {!! Form::close() !!}
    {!! Form::model($article, ['method'=>'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
        </div>
    {!! Form::close() !!}
    @include('errors.list')
@stop