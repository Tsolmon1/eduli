@extends('layouts.master')
@section('content')
<div class="container">
    <div class="page-header">
        <h2>Америкийн Нэгдсэн Улс</h2>
    </div>
    <div class="items">
        @foreach($usa_schools as $school)
        <article class="col-md-3 col-sm-6 col-xs-6">
                <img class="flag_position" src="{{ url($usa_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
                    <a class="thumbnail" href="{{ url('school', $school->id) }}">
                            <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a>
            
            <div class="item_2_title">
                <a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    
    <div class="page-header">
        <h2>Солонгос Улс</h2>
    </div>
    <div class="items">
        @foreach($korea_schools as $school)
        <article class="col-md-3 col-sm-6 col-xs-6">
                <img class="flag_position" src="{{ url($korea_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
                    <a class="thumbnail" href="{{ url('school', $school->id) }}">
                            <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a>
            
            <div class="item_2_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    
    <div class="page-header">
        <h2>Австрали Улс</h2>
    </div>
    <div class="items">
        @foreach($australia_schools as $school)
        <article class=" col-md-3 col-sm-6 col-xs-6">
                <img class="flag_position" src="{{ url($australia_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
                    <a class="thumbnail" href="{{ url('school', $school->id) }}">
                            <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a>
            
            <div class="item_2_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    
    <div class="page-header">
        <h2>Канад Улс</h2>
    </div>
    <div class="items">
        @foreach($canada_schools as $school)
        <article class=" col-md-3 col-sm-6 col-xs-6">
                <img class="flag_position" src="{{ url($canada_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
                    <a class="thumbnail" href="{{ url('school', $school->id) }}">
                            <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a>
            
            <div class="item_2_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    
    <div class="page-header">
        <h2>Япон Улс</h2>
    </div>
    <div class="items">
        @foreach($japan_schools as $school)
        <article class=" col-md-3 col-sm-6 col-xs-6">
                <img class="flag_position" src="{{ url($japan_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
                    <a class="thumbnail" href="{{ url('school', $school->id) }}">
                            <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a>
            
            <div class="item_2_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
</div>
@stop