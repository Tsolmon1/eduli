@extends('layouts.app')

@section('content')
	<div class="container">
	    <h1>Шинээр Улс оруулах</h1>
	    <hr/>

	    {!! Form::model($country = new \App\Country,['url' => 'admin/countries']) !!}
	        @include('countries.form', ['submitButtonText' => 'Улс үүсгэх'])
	    {!! Form::close() !!}

	    @include('errors.list')
	</div>
@stop