@extends('layouts.master')

@section('content')
<div class="main-div-white">
<div class="container">
    <div class="heading">
        <span class="heading-title">{{ $category->name }}</span>
        <div class="heading-line"></div>
    </div>
    @foreach(array_chunk($articles->all(), 3) as $row)
    <div class="row">
        @foreach($row as $article)
            <article class="item col-md-4 col-sm-4">
                <div class="item_img">
                    <a class="" href="{{ url('news', $article->id) }}">
                        <img src="{{ asset($article->thumbnail) }}"  alt="{{ $article->thumbnail }}">
                    </a>
                </div>
                <div class="item_info">
                        <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                    <span>{!! str_limit($article->info, 120)  !!}</span>
                </div>
            </article>
        @endforeach
    </div>
    @endforeach

    <?php echo $articles->render(); ?>
</div>
</div>
<div class="space"></div>
@stop