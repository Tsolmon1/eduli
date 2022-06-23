<div class="container">
<nav class="navbar navbar-default">
    <ul class="nav navbar-nav navbar-right">
        {{--<li>{!! link_to_action('ArticlesController@show',$latest->title, [$latest->id]) !!}</li>--}}
        @if (Auth::guest())
        <li><a href="{{ url('/auth/login') }}">Login</a></li>
        <li><a href="{{ url('/auth/register') }}">Register</a></li>
        @else
        <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">{{ Auth::user()->name }} <span class="caret"></span></a>
            <ul class="dropdown-menu" role="menu">
                <li><a href="{{ url('/auth/logout') }}">Logout</a></li>
            </ul>
        </li>
        @endif
    </ul>
</nav>
</div>