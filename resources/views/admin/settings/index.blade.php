@extends('layouts.app')
@section('content')
<div class="panel panel-default">
    <div class="panel-heading">Нүүр хуудас</div>
    <div class="panel-body">
        {!! Form::open(['route' => 'admin.settings.store', 'files' => true]) !!}

        <div class="form-group">
            {!! Form::label('mainslide1','Элсэлтийн хувиар:') !!}
            {!! Form::textarea('elselt_box_1', Cache::get('settings_elselt_box_1', ''), ['placeholder'=>'Солонгос улсын элслэт','id' => 'editor','class'=>'form-control']) !!}
            <br />
            {!! Form::textarea('elselt_box_2', Cache::get('settings_elselt_box_2', ''), ['placeholder'=>'Америк, Канад, Австрали-ийн элсэлт','id' => 'editor2','class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('news_box','Онцгой Мэдээ:') !!}
            {!! Form::text('news_box_image', Cache::get('settings_news_box_image', ''), ['placeholder'=>'Онцгой мэдээдний зураг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('news_box_link', Cache::get('settings_news_box_link', ''), ['placeholder'=>'Онцгой мэдээний холбоос','class'=>'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::label('mainslide1','зар 1:') !!}
            {!! Form::text('slide_title_1', Cache::get('settings_slide_title_1', ''), ['placeholder'=>'Гарчиг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_path_1', Cache::get('settings_slide_path_1', ''), ['placeholder'=>'Зураг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_link_1', Cache::get('settings_slide_link_1', ''), ['placeholder'=>'Холбоос','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('mainslide2','зар 2:') !!}
            {!! Form::text('slide_title_2', Cache::get('settings_slide_title_2', ''), ['placeholder'=>'Гарчиг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_path_2', Cache::get('settings_slide_path_2', ''), ['placeholder'=>'Зураг','class'=>'form-control']) !!}
            <br />
            {!! Form::text('slide_link_2', Cache::get('settings_slide_link_2', ''), ['placeholder'=>'Холбоос','class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('Хадгалах', ['class'=>'btn btn-primary ']) !!}
        </div>
        {!! Form::close() !!}
    </div>
</div>
<div class="space"></div>
@stop