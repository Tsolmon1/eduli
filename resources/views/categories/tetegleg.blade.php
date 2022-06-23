@extends('layouts.master')

@section('content')
<div class="container">
<div class="row">
    <div class="col-md-2 col-sm-2" style="overflow:hidden; margin-top:30px;">
        @include('partials.tetegleg_menu')
    </div>
    <div class="col-md-10">
        <div class="page-header">
            <h3>{{ $Category->name }}</h3>
        </div>
        <div class="items">
            @foreach($articles as $article)
                <article class="item item_four">
                    <div class="item_img">
                        <a class="" href="{{ url('news', $article->id) }}">
                        <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
                        </a>
                    </div>
                    <div class="item_info">
                        <a class="" href="{{ url('news', $article->id) }}">{!! str_limit($article->title, 55)  !!}</a>
                        <span>{!! str_limit($article->info, 120) !!}</span>
                    </div>
                </article>
            @endforeach
        </div>
        <?php echo $articles->render(); ?>
    <!-- <div data-tabs class="tabs main_menu">
        <p>
            <span><a data-tab class="active" href="#tab1">Нийт</a></span>
            <span><a data-tab href="#tab2">Америк</a></span>
            <span><a data-tab href="#tab3">Солонгос</a></span>
            <span><a data-tab href="#tab4">Австрали</a></span>
            <span><a data-tab href="#tab5">Канад</a></span>
            <span><a data-tab href="#tab6">Япон</a></span>
            <span><a data-tab href="#tab7">Филиппин</a></span>
        </p>
    </div>

    <div data-tabs-content>
        <div data-tabs-pane class="tabs-pane active" id="tab1">
            
        </div>
        <div data-tabs-pane class="tabs-pane" id="tab2">
            <div class="items">

            </div>
        </div>
        <div data-tabs-pane class="tabs-pane" id="tab3">
            <p><strong>Seasons</strong></p>
            <p>Winter, summer, spring or fall?</p>
        </div>
        <div data-tabs-pane class="tabs-pane" id="tab4">
            <p><strong>1111111</strong></p>
            <p>Winter, summer, spring or fall?</p>
        </div>
        <div data-tabs-pane class="tabs-pane" id="tab5">
            <p><strong>222222</strong></p>
            <p>Winter, summer, spring or fall?</p>
        </div>
        <div data-tabs-pane class="tabs-pane" id="tab6">
            <p><strong>33333333</strong></p>
            <p>Winter, summer, spring or fall?</p>
        </div>
        <div data-tabs-pane class="tabs-pane" id="tab7">
            <p><strong>444444</strong></p>
            <p>Winter, summer, spring or fall?</p>
        </div>
    </div> -->

        <!-- @foreach(array_chunk($articles->all(), 4) as $row) -->

<!-- @endforeach -->

    </div>

</div>


</div>
    <div class="space"></div>
@stop