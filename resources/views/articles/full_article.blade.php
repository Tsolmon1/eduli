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

        <div class="content">
            <h3>{{ $article->title }}</h3>
            <article>
                {!! $article->content !!}
            </article>
            @can('admin-access')
                <div class="edit"><a class="edit-button" href="{{ url('/admin/articles/'. $article->id . '/edit') }}">Edit</a></div>
            @endcan
        </div>
</div>
<div class="space"></div>
@stop