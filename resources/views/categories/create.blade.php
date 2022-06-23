@extends('layouts.app')
@section('content')
<h3>Шинээр ангилал оруулах</h3>
<hr/>
{!! Form::open(['url' => 'admin/categories']) !!}
@include('categories.form', ['submitButtonText' => 'Ангилал үүсгэх'])
{!! Form::close() !!}
@include('errors.list')
@stop