@extends('layouts.master')
@section('home')
<meta name="viewport" content="width=device-width, initial-scale=1">
<style> 
input[type=text] {
    width: 130px;
    box-sizing: border-box;
    border: 2px solid #ccc;
    border-radius: 4px;
    font-size: 16px;
    background-color: white;
    background-image: url('searchicon.png');
    background-position: 10px 10px; 
    background-repeat: no-repeat;
    padding: 12px 20px 12px 40px;
    -webkit-transition: width 0.4s ease-in-out;
    transition: width 0.4s ease-in-out;
}

input[type=text]:focus {
    width: 100%;
}
</style>
<!-- Ene nogoo dropdown search -->
<!--  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  /* Style the input field */
  #myInput {
    padding: 20px;
    margin-top: -6px;
    border: 0;
    border-radius: 0;
    background: #f1f1f1;
  }
  </style> -->

<div class="container">
    <div class="main-slide" id="main-slide" style="
    margin-top: 100px;">
        <div class="row">
            <div class="col-md-6 col-sm-6">
                <div class="elselt">
                    <h4 class="title">2018 оны сургуулиудын элсэлтийн хуваарь</h4>
                    <ul class="nav nav-tabs">
                        <li class="active"><a data-toggle="tab" href="#home">Солонгос улс</a></li>
                        <li><a data-toggle="tab" href="#menu1">Америк, Канад, Австрали</a></li>
                        <li><a data-toggle="tab" href="#menu3">Филиппин</a></li>
                    </ul>
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                           {!! array_get($main_boxs, '0') !!}
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            {!! array_get($main_boxs, '1') !!}
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h4>Филиппин</h4>
                            <p>Филиппин улсын Себү хотноо байрших Спарта болон Банилад 2 кампустаа манай компани <strong>долоо хоног</strong> бүр шинэ элсэлт бүртгэж байна.</p>
                            <li><a href="#" style="color: red;"><strong>Спарта Кампус</strong></a></li>
                            <li><a href="#" style="color: red;"><strong>Банилад Кампус</strong></a></li>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 col-sm-6">
                <div class="news-box-2">
                    <iframe width=100% height="260" src="https://www.youtube.com/embed/cfJ9F2SLmy4?autoplay=1&controls=0&loop=1">
	            </iframe>
                    </a>
                </div>
                
            </div>
        </div>
    </div>
<div class="search" style="position: relative">
<script>
  (function() {
    var cx = '009145529681361910550:egdg-mbse-y';
    var gcse = document.createElement('script');
    gcse.type = 'text/javascript';
    gcse.async = true;
    gcse.src = 'https://cse.google.com/cse.js?cx=' + cx;
    var s = document.getElementsByTagName('script')[0];
    s.parentNode.insertBefore(gcse, s);
  })();
</script>
<gcse:search></gcse:search>
</div>
<p><i>Та сайтаас хайх түлхүүр үгээ криллээр бичиж хайна уу.</i></p>
<!--  <h2 style="position: relative; color:white; text-shadow: 1px 1px #a0a0a0">Сургууль Сонгох</h2>
  <p style="position: relative; color:white; text-shadow: 1px 1px #a0a0a0">Та дараахь цэснээс сонирхсон улс орноо сонгон, мэргэжил болон төлбөрөөр шүүлтүүрлэн хайлт хийх боломжтой:</p>
  <p style="position: relative; color:white; text-shadow: 1px 1px #a0a0a0">Та зөвхөн крилл үсгээр хайлт хийх боломжтойг анхаарна уу.</p>
  <div class="dropdown">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown">Улсаа Сонгох
    <span class="caret"></span></button>
    <ul class="dropdown-menu">
      <input class="form-control" id="myInput" type="text" placeholder="Хайх...">
      <li><a href="http://edulinellc.mn/tetgeleg/167">Америк</a></li>
      <li><a href="http://edulinellc.mn/tetgeleg/170">Австрали</a></li>
      <li><a href="http://edulinellc.mn/tetgeleg/164">Солонгос</a></li>
      <li><a href="http://edulinellc.mn/tetgeleg/173">Канад</a></li>
    </ul>
  </div>
</div>
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $(".dropdown-menu li").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script> -->

</div>

</div>
</div>

{{--@yield('content')--}}
<div class="main-div-white">
<div class="container">
<div class="heading">
    <span class="heading-title">Сонирхолтой мэдээ</span>
    <div class="heading-line"><a href="/category/12">Дэлгэрэнгүй</a></div>
</div>
<div class="row">
    @foreach($busad_news as $article)
    <article class="item col-md-4 col-sm-4">
        <div class="item_img">
            <a class="" href="{{ url('news', $article->id) }}">
                <img src="{{ $article->thumbnail }}"  alt="{{ $article->thumbnail }}">
            </a>
        </div>
        <div class="item_info">
            <a href="{{ url('news', $article->id) }}">{!! $article->title  !!}</a>
            <span>{!! str_limit($article->info, 120)  !!}</span>
        </div>
    </article>
    @endforeach
</div>
</div>
<div class="container">
<div class="heading">
    <span class="heading-title">Онцлох мэдээ</span>
    <div class="heading-line"><a href="/category/1">Дэлгэрэнгүй</a></div>
</div>
<div class="row">
    @foreach($zar_news as $article)
    <!-- <div class="col-md-3"> -->
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
    <!-- </div> -->
    @endforeach
</div>
</div>
</div>
<div class="main-div-bg" class="parallax-window" data-parallax="scroll">
<div class="container">
<div class="heading">
    <span class="heading-title">Оюутны сэтгэгдэл</span>
    <div class="heading-line"><a href="/category/5">Дэлгэрэнгүй</a></div>
</div>
<div class="row">
    @foreach($students as $article)
    <div class="item col-md-6 col-sm-6">
        <div class="student-comment">
            <a href="{{ url('news', $article->id) }}" >
                <div class="student-profile">
                    <img class="student-image" src="{{ $article->thumbnail }}" width="100px" height="100px" alt="{{ $article->name }}">
                    <span class="student-name">{!! str_limit($article->title, 50) !!}<span>
                    </div>
                    <i><br>{!! str_limit($article->info, 300) !!}</i>
                </a>
            </div>
        </div>
        @endforeach
    </div>
</div>
<div class="container">
    <div class="heading">
        <span class="heading-title">Фото цомог</span>
        <div class="heading-line"><a href="/galleries">Дэлгэрэнгүй</a></div>
    </div>
    <div class="row">
        @foreach($albums as $album)
        <article class="item col-md-4 col-sm-4 ">
            <div class="item_img">
                <a class="thumbnail" href="{{ url('album', $album->id, '') }}">
                    <img src="{{ 'images/articles/'.$album->cover_image }}" width="100%" height="100%" alt="{{ $album->name }}">
                </a>
            </div>
            <div class="item_info">
                <a href="{{ url('album', $album->id) }}">{!! str_limit($album->name, 55)  !!}</a>

            </div>           
        </article>
        @endforeach
    </div>
    
</div>
</div>
<div class="main-div">
<div class="container">
    <div class="heading">
        <span class="heading-title">Сургуулиуд</span>
        <div class="heading-line"><a href="/allschools">Дэлгэрэнгүй</a></div>
    </div>
    <div class="row">
        @foreach($schools as $school)
        <article class="item_4 col-md-3 col-sm-6 col-xs-6">
            @if($school->thumbnail != ".")
            <a class="thumbnail" href="{{ url('school', $school->id) }}">
                <img src="{{ $school->thumbnail }}" width="100%" height="100%" alt="{{ $school->name }}">
            </a> @endif
            <div class="item_4_title">
                <a href="{{ url('school', $school->id) }}">{!! str_limit($school->name, 55)  !!}</a>
            </div>
        </article>
        @endforeach
    </div>
</div>
</div>
<div class="main-div-white">
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
</div>
<script type="text/javascript">
// facebook
window.fbAsyncInit = function() {
FB.init({
appId      : '573510532801046',
xfbml      : true,
version    : 'v2.5'
});
};
(function(d, s, id){
var js, fjs = d.getElementsByTagName(s)[0];
if (d.getElementById(id)) {return;}
js = d.createElement(s); js.id = id;
js.src = "//connect.facebook.net/en_US/sdk.js";
fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));


</script>

@endsection