@extends('layouts.master')
@section('home')
<div class="main-div-white">
<div class="container">
    <div class="col-md-6 col-sm-6 english_lesson">
        <div class="heading">
            <span class="heading-title">СОЛОНГОС ХЭЛНИЙ ХИЧЭЭЛИЙН ХУВААРЬ</span>
            <div class="heading-line"><a href="/category/14"><b>ДЭЛГЭРЭНГҮЙ</b></a></div>
        </div>
        <br />
        @foreach(array_chunk($english_lesson_news->all(), 2) as $row)
        <div class="row">
        @foreach($row as $article)
            <article class="item_4 col-md-6">
                <a class="thumbnail" href="{{ url('news', $article->id) }}">
                    <img src="{{ $article->thumbnail }}" alt="{{ $article->thumbnail }}">
                </a>
                <div class="item_4_title">
                    <a href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 50)  !!}</a>
                </div>
            </article>
        @endforeach
        </div>
        @endforeach
    </div>
    <div class="col-md-6 col-sm-6">
        <div class="heading">
            <span class="heading-title">СОЛОНГОС ХЭЛНИЙ ХИЧЭЭЛ</span>
            <div class="heading-line"><a href="/category/16"><b>ДЭЛГЭРЭНГҮЙ</b></a></div>
        </div>
        <br />
        @foreach(array_chunk($korea_lesson_news->all(), 2) as $row)
            <div class="row">
            @foreach($row as $article)
                <article class="item_4 col-md-6">
                    <a class="thumbnail" href="{{ url('news', $article->id) }}">
                        <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                    </a>
                    <div class="item_4_title">
                        <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 50)  !!}</a>
                    </div>
                </article>
            @endforeach
            </div>
        @endforeach
    </div>
</div>
</div>
<br />
<div class="main-div-bg">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="images-slider">
                    <div id="slider-1" class="slide-images">
                        @foreach($english_albums as $item1)
                            <img class="slide-image" alt="{{ $item1->name }}" src="/images/articles/{{ $item1->path }}">
                        @endforeach
                    </div>
                    <div class="images-slide-arrow images-slide-arrow-1">
                        <a href="#" class="previous-arrow previous-arrow-1"><span class="glyphicon glyphicon-menu-left"></span></a>
                        <a href="#" class="next-arrow next-arrow-1"><span class="glyphicon glyphicon-menu-right"></a>
                    </div>
                    <div class="slider-bullets-1 images-slide-bullets">
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="images-slider">
                    <div id="slider-2" class="slide-images">
                        @foreach($korea_albums as $item2)
                            <img class="slide-image" alt="{{ $item2->name }}" src="/images/articles/{{ $item2->path }}">
                        @endforeach
                    </div>
                    <div class="images-slide-arrow images-slide-arrow-2">
                        <a href="#" class="previous-arrow previous-arrow-2"><span class="glyphicon glyphicon-menu-left"></span></a>
                        <a href="#" class="next-arrow next-arrow-2"><span class="glyphicon glyphicon-menu-right"></a>
                    </div>
                    <div class="slider-bullets-2 images-slide-bullets">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<!-- <div class="main-div-white">
    <div class="container">
        <div class="heading">
            <span class="heading-title">Таны туслах</span>
            <div class="heading-line"></div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-4">
                <hr />
                <div class="fb-page" data-href="https://www.facebook.com/edulinellc/" data-tabs="e.g." data-width="300px" data-height="300px" data-small-header="false" data-adapt-container-width="true" data-hide-cover="true" data-show-facepile="true">
                <div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/edulinellc/"><a href="https://www.facebook.com/edulinellc/">Edu-Line LLC</a></blockquote>
                </div></div>
            </div>
            <div class="col-md-4 col-sm-4">
                <article>
                    <iframe id="forecast_embed" type="text/html" frameborder="0" height="310" width="305" src="http://tsag-agaar.gov.mn/embed/?name=292&color=217774&color2=217774&color3=ffffff&color4=ffffff&type=vertical&tdegree=cwidth=300">        </iframe>
                </article>
            </div>
            <div class="col-md-4 col-sm-4">
                <article>
                    <hr />
                    <iframe style="width:300px;font-size:11px;height:300px;border: none;overflow:hidden;margin:0;"
                            src="http://monxansh.appspot.com/xansh.html?currency=USD|EUR|JPY|GBP|AUD|CAD|KRW&conv_tool=1">
                    </iframe>
                </article>
            </div>
        </div>
    </div>
</div> -->

@endsection