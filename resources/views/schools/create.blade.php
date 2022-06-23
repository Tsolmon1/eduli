@extends('layouts.app')

@section('content')

    <h1>Шинээр нийтлэл оруулах</h1>
    <hr/>

    {!! Form::model($school = new \App\School,['url' => 'admin/schools']) !!}
        @include('schools.form', ['submitButtonText' => 'Сургууль үүсгэх'])
    {!! Form::close() !!}

    @include('errors.list')
@stop