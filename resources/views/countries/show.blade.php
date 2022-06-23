@extends('layouts.master')
@section('school')
<!-- <div class="country_bg" style=" background:url('{{ $country->banner }}') no-repeat center top;"> -->
<div class="container ">
    <br>
    <div class="row">
        <div class="tetegleg_menu">
            <div class="col-md-4 col-sm-4">
                <div class="box box-1">
                    <a href="{{ isset($tetgeleg_hb->id) ? '/tetgeleg/'. $tetgeleg_hb->id : '#' }}">
                    <i class="box_icon_1"></i>
                    <span>Хэлний бэлтгэл</span>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-4">
            <div class="box box-2">
                <a href="{{ isset($tetgeleg_b->id) ? '/tetgeleg/'. $tetgeleg_b->id : '#' }}">
                    <i class="box_icon_2"></i>
                    <span>Бакалаврын сургалт</span>
                </a>
            </div>
            </div>
            <div class="col-md-4 col-sm-4">
            <div class="box box-3">
                <a href="{{ isset($tetgeleg_m->id) ? '/tetgeleg/'. $tetgeleg_m->id : '#' }}">
                <i class="box_icon_3"></i>
                <span>Магистр, Докторын сургалт</span>
                </a>
            </div>
            </div>
        </div>
    </div>
</div>
<!-- </div> -->
<div class="main-div-white">
    <div class="container">
        <div class="heading">
            <span class="heading-title">{{ $country->name }}</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($articles->all(), 3) as $row)
            <div class="row">
            @foreach($row as $article)
                    <article class="item_4 col-md-4 col-sm-4">
                        @if($article->thumbnail != ".")
                        <a class="thumbnail" href="{{ url('news', $article->id) }}">
                            <img src="{{ url($article->thumbnail) }}" alt="{{ $article->name }}">
                        </a>
                        @endif
                        <div class="item_4_title">
                            <a href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                        </div>
                    </article>
            @endforeach
            </div>
        @endforeach
    </div>

<div class="container">
    <div class="heading">
        <span class="heading-title">Онцлох мэдээ</span>
        <div class="heading-line"><a href="/category/1">Дэлгэрэнгүй</a></div>
    </div>
    <div class="row">
        @foreach($article_zar as $article)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a href="{{ url('news', $article->id) }}">
                        <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                    <span>{!! str_limit($article->info, 120)  !!}</span>
                </div>
            </article>
        @endforeach 
    </div>
 </div>

<div class="container">
    <div class="heading">
        <span class="heading-title">Фото цомог</span>
        <div class="heading-line"><a href="/galleries">Дэлгэрэнгүй</a></div>
    </div>
    @if(count($albums)>0)
    <div class="row">
        @foreach($albums as $album)
        <article class="item col-md-4 col-sm-4">
            <div class="item_img">
                <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                    <img src="{{ 'http://edulinellc.mn/images/articles/'. $album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
                </a>
            </div>
            <div class="item_info">
                <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                <br />
            </div>
        </article>
        @endforeach
    </div>
    @endif
</div>
</div>
<div class="main-div">
<div class="container">
            <div class="heading">
                <span class="heading-title">Сургуулиуд</span>
                <div class="heading-line"></div>
            </div>
    @if(count($schools)>0)

        @foreach(array_chunk($schools->all(), 4) as $row)
            <div class="row">
            @foreach($row as $school)
                <article class="item_4 col-md-3 col-sm-4 col-xs-6">
                    @if($school->thumbnail != ".")
                    <a class="thumbnail" href="{{ url('school', $school->id) }}">
                            <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
                        </a> @endif
                    <div class="item_4_title">
                        <h5 class="text-center"><a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a></h5>
                    </div>
                </article>
            @endforeach
            </div>
        @endforeach
    @endif
</div>
</div>
<div>
    <div class="container">
    @if ($country->id == "1")
            @include('partials.usa_map')
        @elseif ($country->id == "2")
                @include('partials.korea_map')
            @elseif ($country->id == "3")
                    @include('partials.australia_map')
                @elseif ($country->id == "4")
                        @include('partials.canada_map')
                    @elseif ($country->id == "5")
                            @include('partials.japan_map')
                        @elseif ($country->id == "7")
                            @include('partials.philippine_map')
    @endif
    </div>
</div>
<div class="space"></div>
@stop