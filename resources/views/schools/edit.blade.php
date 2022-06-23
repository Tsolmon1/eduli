@extends('layouts.app')

@section('content')

    <h3>Засварлах: {{ $school->name }}</h3>

    {!! Form::model($school, ['method' => 'PATCH', 'action' => ['SchoolsController@update', $school->id]]) !!}
        @include('schools.form', ['submitButtonText' => 'Нийтлэл өөрчлөлт оруулах'])
    {!! Form::close() !!}

    {!! Form::model($school, ['method'=>'DELETE', 'action' => ['SchoolsController@destroy', $school->id]]) !!}
        <div class="form-group">
            {!! Form::submit('Устгах', ['class'=>'btn btn-danger ']) !!}
        </div>
    {!! Form::close() !!}

    <!-- {{--{!! delete_form(['ArticlesController@destroy', $article->id]) !!}--}} -->

    @include('errors.list')

@stop