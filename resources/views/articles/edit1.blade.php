@extends('layouts.app')
@section('content')
    <h4>Засварлах: {{ $article->id }}</h4>
    {!! Form::model($article, ['method' => 'PATCH', 'action' => ['ArticlesController@update', $article->id]]) !!}
        
        <div class="form-group">
            {!! Form::label('category_id','Ангилал:') !!}
            {!! Form::select('category_id', $categories, null, ['id' => 'tag_list','class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('country_list','Улсын сонголт:') !!}
            {!! Form::select('country_list[]', $countries, 'country_list', ['class'=>'form-control', 'multiple']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('title','Гарчиг:') !!}
            {!! Form::text('title',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('info','Товч:') !!}
            {!! Form::text('info',null, ['class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('thumbnail','Мэдээний зураг:') !!}
            <input class="form-control" name="thumbnail" type="text" id="thumbnail" value="{{ $article->thumbnail }}">
            <img src="{{ asset('uploads/' . $article->thumbnail) }}" class="flr" alt="{{ $article->title }}" width="120" height="80">
        </div>

        <div class="form-group">
            {!! Form::label('content','Агуулга:') !!}
            {!! Form::textarea('content', null, ['id' => 'editor','class'=>'form-control ']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('published_at','Нийтэлсэн хугацаа:') !!}
            {!! Form::input('date', 'published_at', $article->published_at, ['class'=>'form-control']) !!}
        </div>


        <div class="form-group">
            {!! Form::label('image','facebook мэдээний зураг:') !!}
            {!! Form::text('image',null, array('class'=>'form-control')) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Нийтлэл засварлах', ['class'=>'btn btn-primary ']) !!}
        </div>


    {!! Form::close() !!}
    {!! Form::model($article, ['method'=>'DELETE', 'action' => ['ArticlesController@destroy', $article->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
        </div>
    {!! Form::close() !!}
    @include('errors.list')
@stop