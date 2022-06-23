@extends('layouts.master') 
@section('share')
<meta property="og:url"                content="{{ url('news', $article->id) }}" />
<meta property="og:type"               content="article" />
<meta property="og:title"              content="{{ $article->title }}" />
<meta property="og:description"        content="{{ str_limit(strip_tags($article->content, 120)) }}" />
<meta property="og:image"              content="{{ $article->image }}" />
<meta property="og:image:width"        content="450"/>
<meta property="og:image:height"       content="298"/>
<meta property="og:updated_time"       content="{{ $article->updated_at }}"/>

<meta property="fb:admins" content="1234" />
<meta property="fb:app_id" content="573510532801046" />
@endsection
@section('content')
<div class="main-div-white">
    <div class="container">
            <div class="content" style="overflow:hidden; padding-right:15px;">
                <h3>{{ $article->title }}</h3>
                <!-- <a>{{ $article->category_id }}</a> -->
                <!-- <p class="date">{{ $article->created_at }}</p> -->
                <article>
                    {!! $article->content !!}
                </article>
            </div>
    </div>
</div>
<div class="space"></div>
<script>
    var swiper = new Swiper('.swiper-container', {
        pagination: '.swiper-pagination',
        slidesPerView: 1,
        paginationClickable: true,
        spaceBetween: 30,
        loop: true,
        centeredSlides: true,
        autoplay: 2500,
        autoplayDisableOnInteraction: false
    });

</script>
@stop