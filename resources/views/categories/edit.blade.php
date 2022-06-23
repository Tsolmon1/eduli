@extends('layouts.app')

@section('content')

    {{--<h1>Засварлах: {{ $category->name }}</h1>--}}

    {!! Form::model($category, ['method' => 'PATCH', 'action' => ['CategoriesController@update', $category->id]]) !!}
        @include('categories.form', ['submitButtonText' => 'Нийтлэл өөрчлөлт оруулах'])
    {!! Form::close() !!}

    @include('errors.list')

@stop