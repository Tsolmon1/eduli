@extends('layouts.app')

@section('content')

    <h3>Засварлах: {{ $country->name }}</h3>

    {!! Form::model($country, ['method' => 'PATCH', 'action' => ['CountriesController@update', $country->id]]) !!}
        @include('countries.form', ['submitButtonText' => 'Нийтлэл өөрчлөлт оруулах'])
    {!! Form::close() !!}

    @include('errors.list')

@stop