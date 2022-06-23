@extends('layouts.master')

@section('content')
<div class="main-div-white">
    <div class="container">
        <div class="heading">
            <span class="heading-title">{{ $album->name }}</span>
            <div class="heading-line"></div>
        </div>
      	<div>{!! $album->description !!}</div>
    </div>
    <div class="space"></div>
</div>
@endsection