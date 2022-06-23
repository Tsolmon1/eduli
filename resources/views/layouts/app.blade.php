<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Eduline admin') }}</title>
    <!-- Fonts -->
    

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('fileupload/css/jquery.fileupload.css') }}">
    <!-- Editor css -->
    <link rel="stylesheet" href="/editor/ui/trumbowyg.min.css">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'Edulinellc admin') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        &nbsp;
                        @if (!Auth::guest())
                            <li class="{{ Request::is('admin/articles') ? 'active' : '' }}"><a href="/admin/articles">Нийтлэл</a></li>
                            <li class="{{ Request::is('admin/categories') ? 'active' : '' }}"><a href="/admin/categories">Ангилал</a></li>
                            <li class="{{ Request::is('admin/photos') ? 'active' : '' }}"><a href="/admin/photos">Зураг</a></li>
                            <li class="{{ Request::is('admin/schools') ? 'active' : '' }}"><a href="/admin/schools">Сургууль</a></li>
                            <li class="{{ Request::is('admin/albums') ? 'active' : '' }}"><a href="/admin/albums">Фото цомог</a></li>
                            <li class="{{ Request::is('admin/settings') ? 'active' : '' }}"><a href="/admin/settings">Тохиргоо</a></li>
                        @endif
                        @can('admin-access')
                            <li class="{{ Request::is('admin/users') ? 'active' : '' }}"><a href="/admin/users">Users</a></li>
                        @endcan
                    </ul>



                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                        @else
                            
                            
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        <div class="container">
            @yield('content')
        </div>
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
    <!-- JavaScripts -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="{{ asset('fileupload/js/vendor/jquery.ui.widget.js') }}"></script>
    <script src="{{ asset('fileupload/js/jquery.iframe-transport.js') }}"></script>
    <script src="{{ asset('fileupload/js/jquery.fileupload.js') }}"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    @yield('scripts', '')

    <script>
    $('div.alert').not('.alert-important').delay(3000).slideUp(300);
    </script>
    <!-- editor js-->
    <!-- <script src="//ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script> -->
    

    <script src="/editor/trumbowyg.min.js"></script>
    <script type="text/javascript" src="/editor/plugins/upload/trumbowyg.upload.js"></script>
    <script>


        $('#editor').trumbowyg({
            btnsDef: {
                // Create a new dropdown
                image: {
                    dropdown: ['insertImage', 'upload'],
                    ico: 'insertImage'
                }
            },
            // Redefine the button pane
            btns: ['viewHTML',
                    '|', 'formatting',
                    '|', 'btnGrp-semantic',
                    '|', 'link',
                    '|', 'image',
                    '|', 'btnGrp-justify',
                    '|', 'btnGrp-lists',
                    '|', 'horizontalRule',
                    '|', 'removeformat',
                    '|', 'fullscreen']
                });
        $('#editor2').trumbowyg({
            btnsDef: {
                // Create a new dropdown
                image: {
                    dropdown: ['insertImage', 'upload'],
                    ico: 'insertImage'
                }
            },
            // Redefine the button pane
            btns: ['viewHTML',
                    '|', 'formatting',
                    '|', 'btnGrp-semantic',
                    '|', 'link',
                    '|', 'image',
                    '|', 'btnGrp-justify',
                    '|', 'btnGrp-lists',
                    '|', 'horizontalRule',
                    '|', 'removeformat',
                    '|', 'fullscreen']
                });


    </script>
</body>
</html>
