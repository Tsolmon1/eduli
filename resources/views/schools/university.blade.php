@extends('layouts.master')
@section('content')
<div class="main-div">
<div class="container">
    <div class="heading">
        <span class="heading-title">Америкийн Нэгдсэн Улс</span>
        <img class="flag_position" src="{{ url($usa_schools_flag->flag) }}" width="16%" alt="{{ $usa_schools_flag->name }}">
        <div class="heading-line"></div>
    </div>
    @foreach(array_chunk($usa_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="item_4 col-md-3 col-sm-4 col-xs-6">
            <a class="thumbnail" href="{{ url('school', $school->id) }}">
                <img src="{{ $school->thumbnail }}" alt="{{ $school->name }}">
            </a>
            <div class="item_4_title">
                <a href="{{ url('schools', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    @endforeach

    <div class="heading">
        <span class="heading-title">Солонгос Улс</span>
        <img class="flag_position" src="{{ url($korea_schools_flag->flag) }}" width="16%" alt="{{ $korea_schools_flag->name }}">
        <div class="heading-line"></div>
    </div>
    @foreach(array_chunk($korea_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="item_4 col-md-3 col-sm-4 col-xs-6">
                
                <a class="thumbnail" href="{{ url('school', $school->id) }}">
                    <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                </a>
            <div class="item_4_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    @endforeach
    
    <div class="heading">
        <span class="heading-title">Австрали Улс</span>
        <img class="flag_position" src="{{ url($australia_schools_flag->flag) }}" width="16%" alt="{{ $australia_schools_flag->name }}">
        <div class="heading-line"></div>
    </div>
    @foreach(array_chunk($australia_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="item_4 col-md-3 col-sm-4 col-xs-6">
                
                <a class="thumbnail" href="{{ url('school', $school->id) }}">
                    <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                </a>
            
            <div class="item_4_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    @endforeach
    
    <div class="heading">
        <span class="heading-title">Канад Улс</span>
        <img class="flag_position" src="{{ url($canada_schools_flag->flag) }}" width="16%" alt="{{ $canada_schools_flag->name }}">
        <div class="heading-line"></div>
    </div>
    @foreach(array_chunk($canada_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="item_4 col-md-3 col-sm-4 col-xs-6">
            
            <a class="thumbnail" href="{{ url('school', $school->id) }}">
                <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
            </a>
            <div class="item_4_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    @endforeach
    
    <div class="heading">
        <span class="heading-title">Япон Улс</span>
        <img class="flag_position" src="{{ url($japan_schools_flag->flag) }}" width="16%" alt="{{ $japan_schools_flag->name }}">
        <div class="heading-line"></div>
    </div>
    @foreach(array_chunk($japan_schools->all(), 4) as $row)
    <div class="row">
        @foreach($row as $school)
        <article class="item_4 col-md-3 col-sm-4 col-xs-6">
            
            <a class="thumbnail" href="{{ url('school', $school->id) }}">
                <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
            </a>
            <div class="item_4_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
    @endforeach
</div>
</div>
@stop