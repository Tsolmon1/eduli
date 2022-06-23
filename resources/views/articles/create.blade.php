@extends('layouts.app')
@section('content')
<div class="page-header">
<h3>Шинээр нийтлэл оруулах </h3>
</div>
{!! Form::model($article = new \App\Article,['url' => 'admin/articles', 'files' => true]) !!}
    @include('articles.form', ['submitButtonText' => 'Ангилал үүсгэх'])
{!! Form::close() !!}
@include('errors.list')
@stop