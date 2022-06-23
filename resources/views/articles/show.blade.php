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
    <div class="row">

        <div class="col-md-8 content">
            <h3>{{ $article->title }}</h3>
            <article>
                {!! $article->content !!}
            </article>
            @can('admin-access')
                <div class="edit"><a class="edit-button" href="{{ url('/admin/articles/'. $article->id . '/edit') }}">Edit</a></div>
            @endcan
        </div>
        <div class="col-md-4 sidebar">
        <div class="row">
        <div class="col-md-12">
                <div class="sidebar_header row">
                    <div class="col-md-9 col-sm-9">
                        <h4>ЗАР МЭДЭЭ</h4>
                    </div>
                    <div class="col-md-3 col-sm-3 text-right">
                        <a class="link" href="/category/1"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                    </div>
                </div>
                <div class="bottom_line"></div>

            <div class="article_row">
                @foreach($zar_news as $new)
                <article>
                    <section class="media-left">
                        <a class="image-size" href="{{ url('news', $new->id) }}">
                            <img class="thumbnail" src="{{ $new->thumbnail }}" alt="{{ $new->name }}">
                        </a>
                    </section>
                    <section class="media-body">
                        <a class="media-heading" href="{{ url('news', $new->id) }}">{!! $new->title !!}</a>
                        <i>Хугацаа: {{ $new->created_at }}</i>
                        
                    </section>
                </article>
                @endforeach
            </div>
            <div class="middle_line"></div>
            <div class="sidebar_header row">
                <div class="col-md-9 col-sm-9">
                    <h4>СОНИРХОЛТОЙ МЭДЭЭ</h4>
                </div>
                <div class="col-md-3 col-sm-3 text-right">
                    <a class="link" href="/category/12"><span class="glyphicon glyphicon-th" aria-hidden="true"></span></a>
                </div>
            </div>
            <div class="bottom_line"></div>

            <div class="article_row">
                @foreach( $busad_news as $new)
                <article>
                    <section class="media-left">
                        <a class="image-size" href="{{ url('news', $new->id) }}">
                            <img class="thumbnail" src="{{ $new->thumbnail }}" alt="{{ $new->name }}">
                        </a>
                    </section>
                    <section class="media-body">
                        <a class="media-heading" href="{{ url('news', $new->id) }}">{!! $new->title !!}</a>
                        <i>Хугацаа: {{ $new->created_at }}</i>
                    </section>
                </article>
                @endforeach
            </div>
        </div>
        </div>
        </div>
    </div>
</div>
</div>
<div class="space"></div>
@stop