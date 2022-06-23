<!DOCTYPE html>
<html prefix="og: http://ogp.me/ns#">
    <head>
        <meta charset="utf-8">
        <title>Eduline LLC</title>
        <link rel="icon" type="image/png" href="{{ asset('/images/sites/favicon-32x32.png') }}" sizes="32x32">
        <link rel="icon" type="image/png" href="{{ asset('/images/sites/favicon-16x16.png') }}" sizes="16x16">
          <meta name="viewport" content="width=device-width, initial-scale=1">
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
  </style>
        @yield('share')
        <!-- css -->
        <link rel="stylesheet" href="{{ elixir('css/styles.css') }}">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,400" rel="stylesheet">
      	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
        

        <!-- Google analytics -->
        <script type="text/javascript">
        (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
        (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
        })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
        ga('create', 'UA-64352386-1', 'auto');
        ga('send', 'pageview');
        </script>
        <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
     <script
  src="https://code.jquery.com/jquery-3.2.1.js"
  integrity="sha256-DZAnKJ/6XZ9si04Hgrsxu/8s717jcIzLy3oi35EouyE="
  crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/parallax.js/1.4.2/parallax.min.js"></script>
    </head>
        <div id="main">
        <body>

            <div class="fadein">
        	<img src="http://edulinellc.mn/images/slides/slide01.jpg" alt="slide 1">
    
                <img src="http://edulinellc.mn/images/slides/slide02.jpg" alt="slide 2">
  
                <img src="http://edulinellc.mn/images/slides/slide03.jpg" alt="slide 3">
  
                <img src="http://edulinellc.mn/images/slides/slide04.jpg" alt="slide 4">
            </div>

            <!-- Sidebar nav -->
            <div id="mySidenav" class="sidenav">
                <div id="myAffix" class="affix2">
                    <div class="social-link">
                        <a href="https://www.facebook.com/edulinellc" target="_blank">
                            <img src="/images/sites/facebook.png" class="thumb" alt="facebook" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="social-link">
                        <a href="https://www.youtube.com/channel/UCG05GR-wVE5E3dmmDNwKyzw" target="_blank">
                            <img src="/images/sites/youtube.png" class="thumb" alt="youtube" width="100%" height="100%">
                        </a>
                    </div>
                    <div class="social-link">
                        <a href="https://twitter.com/Edu_Line_LLC">
                            <img src="/images/sites/twitter.png" class="thumb" alt="twitter" width="100%" height="100%">
                        </a>
                    </div>
                </div>
                <ul >
                    <li><a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a></li>
                    <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Нүүр</a></li>
                    <li ><a class="{{ Request::is('/about') ? 'active' : '' }}" href="/about">Бидний тухай</a></li>
                    <li ><a class="{{ Request::is('/category/1') ? 'active' : '' }}" href="/category/1">Онцлох мэдээ</a></li>
                    <li ><a class="{{ Request::is('/category/12') ? 'active' : '' }}" href="/category/12">Сонирхолтой мэдээ</a></li>
                    <li ><a class="{{ Request::is('galleries') ? 'active' : '' }}" href="/galleries">Фото цомог</a></li>
                    <li ><a class="{{ Request::is('allschools') ? 'active' : '' }}" href="/allschools">Сургуулиуд</a></li>
                    <li ><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">Холбоо барих</a></li>
                    <li class="{{ Request::is('/country/1') ? 'active' : '' }}"><a href="/country/1">Америк</a></li>
                    <li class="{{ Request::is('/country/2') ? 'active' : '' }}"><a href="/country/2">Солонгос</a></li>
                    <li class="{{ Request::is('/country/3') ? 'active' : '' }}"><a href="/country/3">Австрали</a></li>
                    <li class="{{ Request::is('/country/4') ? 'active' : '' }}"><a href="/country/4">Канад</a></li>
                    <li class="{{ Request::is('/country/5') ? 'active' : '' }}"><a href="/country/5">Япон</a></li>
                    <li class="{{ Request::is('/country/7') ? 'active' : '' }}"><a href="/country/7">Филиппин</a></li>
                    <li class="{{ Request::is('/lessons') ? 'active' : '' }}"><a href="/lessons">Солонгос хэлний сургалтын төв</a></li>
                </ul>
                <script>
                function openNav() {
                document.getElementById("mySidenav").style.width = "250px";
                document.getElementById("main").style.marginLeft = "250px";
                }
                function closeNav() {
                document.getElementById("mySidenav").style.width = "0";
                document.getElementById("main").style.marginLeft= "0";
                }
                </script>
            </div>
            <span id="sidebar_btn" class="sidebar_btn" onclick="openNav()"><span class="glyphicon glyphicon-list" aria-hidden="true"></span></span>
            
            <nav id="mainnav1" class="mainnav1">
                <div class="container">
                    <div class="phone">Утас: <span class="bold">7011-0503</span>, <span class="bold">1132-0535</span></div>
                    <ul>
                        <li><a class="{{ Request::is('/') ? 'active' : '' }}" href="/">Нүүр</a></li>
                        <li><a class="{{ Request::is('category/1') ? 'active' : '' }}" href="/category/1">Зар мэдээ</a></li>
                        <li><a class="{{ Request::is('category/12') ? 'active' : '' }}" href="/category/12">Сонирхолтой мэдээ</a></li>
                        <li><a class="{{ Request::is('galleries') ? 'active' : '' }}" href="/galleries">Фото цомог</a></li>
                        <li><a class="{{ Request::is('allschools') ? 'active' : '' }}" href="/allschools">Сургуулиуд</a></li>
                        <li><a class="{{ Request::is('contact') ? 'active' : '' }}" href="/contact">Холбоо барих</a></li>
                    </ul>
                </div>
            </nav>
            <div class="container">
                <div class="slogan_caontainer">
                    <div class="slogan">
                        <div class='visible'>
                            <!-- <p>
                                Зөв сонголт
                            </p> -->
                            <ul>
                                <li>Зөв сонголт Ирээдүйн баталгаа</li>
                                <li>Зөв сонголт Ирээдүйн баталгаа</li>
                                <li>Зөв сонголт Ирээдүйн баталгаа</li>
                                <li>Зөв сонголт Ирээдүйн баталгаа</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                
                <nav class="mainnav2 navbar">
                    
                    <div class="logo">
                        <a class="{{ Request::is('/') ? 'active' : '' }}" href="{!! URL::to('') !!}">
                            <img src="{{url('/images/sites/eduline-logo.jpg')}}" width="107px" height="87px" alt="eduline logo">
                        </a>
                    </div>
                    <ul class="navbar-nav">
                        <li class="{{ Request::is('about') ? 'active' : '' }}">
                            <a href="/about" class="flag_of about-botton">
                                <svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                                    width="50px" height="42px" viewBox="0 0 50 42" enable-background="new 0 0 50 42" xml:space="preserve">
                                    <g>
                                        <polygon fill="#42B56D" stroke="#42B56D" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
                                            45.217,41.484 18.478,37.354 24.148,0.647 41.947,3.397 40.53,12.574 49.469,13.955    "/>
                                            <path fill="#15A34A" stroke="#15A34A" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M41.947,3.397
                                                l7.522,10.558l-8.94-1.381L41.947,3.397z"/>
                                                <path fill="none" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M40.951,21.776
                                                    l-14.58-2.252 M25.931,22.372l17.428,2.692 M39.122,27.325L25.491,25.22 M32.986,29.293l-7.935-1.226 M39.492,18.635L26.81,16.676"
                                                    />
                                                </g>
                                                <g>
                                                    
                                                    <rect x="10.101" y="9.748" transform="matrix(0.9994 -0.0355 0.0355 0.9994 -0.7715 0.6965)" fill="#42B56D" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="18.252" height="24.656"/>
                                                </g>
                                                <g>
                                                    
                                                    <rect x="2.025" y="21.27" transform="matrix(0.987 -0.1606 0.1606 0.987 -4.6953 2.6995)" fill="#15A34A" stroke="#FFFFFF" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" width="24.655" height="18.251"/>
                                                </g>
                                            </svg>
                                            <div class="menu-text">Бидний тухай</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('country/1') ? 'active' : '' }}">
                                        <a href="/country/1" class="flag_of">
                                            <img src="{{url('/images/sites/Flag_of_the_United_States.png')}}" alt="Flag_of_the_United_States">
                                            <div class="menu-text">Америк</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('country/2') ? 'active' : '' }}">
                                        <a href="/country/2" class="flag_of">
                                            <img src="{{url('/images/sites/Flag_of_South_Korea.png')}}" alt="Flag_of_South_Korea">
                                            <div class="menu-text">Солонгос</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('country/3') ? 'active' : '' }}">
                                        <a href="/country/3" class="flag_of">
                                            <img src="{{url('/images/sites/Flag_of_Australia.png')}}" alt="Flag_of_Australia" >
                                            <div class="menu-text">Австрали</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('country/4') ? 'active' : '' }}">
                                        <a href="/country/4" class="flag_of">
                                            <img src="{{url('/images/sites/Flag_of_Canada.png')}}" alt="Flag_of_Canada">
                                            <div class="menu-text">Канад</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('country/5') ? 'active' : '' }}">
                                        <a href="/country/5" class="flag_of">
                                            <img src="{{url('/images/sites/Flag_of_Japan.png')}}" alt="Flag_of_Japan">
                                            <div class="menu-text">Япон</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('country/7') ? 'active' : '' }}">
                                        <a href="/country/7" class="flag_of">
                                            <img src="{{url('/images/sites/Flag_of_Philippine.png')}}" alt="Flag_of_Philippine">
                                            <div class="menu-text">Филиппин</div>
                                        </a>
                                    </li>
                                    <li class="{{ Request::is('lessons') ? 'active' : '' }} flag_of_size">
                                        <a href="/lessons" class="flag_of">
                                            <img src="{{url('/images/sites/lesson.jpg')}}" alt="lesson">
                                            <div class="menu-text">Сургалт</div>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </nav>
                        @yield('home')
                        
                        @yield('school')
                        
                        @yield('content')
                        
                        @include('partials.footer')
                        <div id="myAffix" class="affix affix1">
                            <div class="social-link">
                                <a href="https://www.facebook.com/edulinellc" target="_blank">
                                    <img src="/images/sites/facebook.png" class="thumb" alt="facebook" width="100%" height="100%">
                                </a>
                            </div>

                            <div class="social-link">
                                <a href="https://www.youtube.com/channel/UCG05GR-wVE5E3dmmDNwKyzw" target="_blank">
                                    <img src="/images/sites/youtube.png" class="thumb" alt="youtube" width="100%" height="100%">
                                </a>
                            </div>
                            <div class="social-link">
                                <a href="https://twitter.com/Edu_Line_LLC">
                                    <img src="/images/sites/twitter.png" class="thumb" alt="twitter" width="100%" height="100%">
                                </a>
                            </div>
                        </div>
                        <script>
                        // $('#myAffix').affix({
                        //   offset: 15
                        // })
                        </script>
                        
                    </div>
                    <a class="fb-messenger" href="https://m.me/edulinellc" target="_blank">
                        <span>Онлайн туслах</span><img src="{{ asset('/images/sites/facebook-messenger.svg') }}" alt="fb-messenger">
                    </a>
                    <a href="#" class="scrollup"><span class="glyphicon glyphicon-chevron-up"></span></a>
                    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
                    <script src="http://malsup.github.io/jquery.cycle.all.js"></script>
                    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
                    <script src="{{ asset('js/main.js') }}"></script>
<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].onclick = function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  }
}
</script>
                    @yield('gallery')
                </body>
            </html>