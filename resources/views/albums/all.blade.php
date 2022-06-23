@extends('layouts.master')
@section('content')
<div class="main-div-white">
    

    <div class="container">
        <div class="heading">
            <span class="heading-title">Солонгос улс фото цомгууд</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($korean_albums->all(), 3) as $row)
        <div class="row">
            @foreach($row as $album)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/articles/'.$album->cover_image }}" alt="{{ $album->name }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    
                </div>
            </article>
            @endforeach
            </div>
        @endforeach

        <?php //echo $korean_albums->render(); ?>
    </div>

    <div class="container">
        <div class="heading">
            <span class="heading-title">Америк улс фото цомгууд</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($america_albums->all(), 3) as $row)
        <div class="row">
            @foreach($row as $album)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/articles/'.$album->cover_image }}" alt="{{ $album->name }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    
                </div>
            </article>
            @endforeach
            </div>
        @endforeach

        <?php //echo $albums->render(); ?>
    </div>

    <div class="container">
        <div class="heading">
            <span class="heading-title">Австрали улс фото цомгууд</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($australia_albums->all(), 3) as $row)
        <div class="row">
            @foreach($row as $album)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/articles/'.$album->cover_image }}" alt="{{ $album->name }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    
                </div>
            </article>
            @endforeach
            </div>
        @endforeach

        <?php //echo $albums->render(); ?>
    </div>
    <div class="container">
        <div class="heading">
            <span class="heading-title">Канад улс фото цомгууд</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($canada_albums->all(), 3) as $row)
        <div class="row">
            @foreach($row as $album)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/articles/'.$album->cover_image }}" alt="{{ $album->name }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    
                </div>
            </article>
            @endforeach
            </div>
        @endforeach

        <?php //echo $albums->render(); ?>
    </div>
    <div class="container">
        <div class="heading">
            <span class="heading-title">Пилиппин улс фото цомгууд</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($philippine_albums->all(), 3) as $row)
        <div class="row">
            @foreach($row as $album)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/articles/'.$album->cover_image }}" alt="{{ $album->name }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    
                </div>
            </article>
            @endforeach
            </div>
        @endforeach

        <?php //echo $albums->render(); ?>
    </div>

    <div class="container">
        <div class="heading">
            <span class="heading-title">Япон улс фото цомгууд</span>
            <div class="heading-line"></div>
        </div>
        @foreach(array_chunk($albums->all(), 3) as $row)
        <div class="row">
            @foreach($row as $album)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                        <img src="{{ 'images/articles/'.$album->cover_image }}" alt="{{ $album->name }}">
                    </a>
                </div>
                <div class="item_info">
                    <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>
                    
                </div>
            </article>
            @endforeach
            </div>
        @endforeach

        <?php //echo $albums->render(); ?>
    </div>
</div>
<div class="space"></div>
@stop