@extends('layouts.master')
@section('content')
<div class="container">
    <div class="page-header">
        <h2>ЗАР МЭДЭЭ</h2>
    </div>
    <div class="items">
    @foreach($articles as $article)
        <article class="item_1 item_four">
            <div class="item_1_img">
                <a class="" href="{{ url('articles', $article->id) }}">
                    <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                </a>
            </div>
            <div class="item_1_info">
                <div class="item_1_info_title">
                    <a class="" href="{{ url('articles', $article->id) }}">{!! str_limit($article->title, 50)  !!}</a>
                </div>
                <i>Хугацаа: {{ $article->created_at }}</i>
            </div>
        </article>
    @endforeach
    </div>
    <?php echo $articles->render(); ?>
    </div>
<br>
@stop
