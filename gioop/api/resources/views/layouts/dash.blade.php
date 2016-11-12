<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'gioop COMMERCE') }}</title>

    <!-- Styles -->
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <? php echo json_encode(['csrfToken' => csrf_token(),]); ?>
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
                    {{ config('app.name', 'Laravel') }}
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <!-- Left Side Of Navbar -->
            <ul class="nav navbar-nav">
                &nbsp;
            </ul>

    <!-- Right Side Of Navbar -->
    <ul class="nav navbar-nav navbar-right">
    <!-- Authentication Links -->
    @if (Auth::guest())
    <li><a href="{{ url('/login') }}">Login</a></li>
    <li><a href="{{ url('/register') }}">Register</a></li>
    @else
    <li class="dropdown">
    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
    {{ Auth::user()->name }} <span class="caret"></span>
    </a>

    <ul class="dropdown-menu" role="menu">
    <li class="user-header">
    <img src="{{ asset(Auth::user()->picture) }}" class="img-circle" alt="User Image">
    <p>
    {{ Auth::user() ? Auth::user()->name : '' }}
    <small>{{ Auth::user() && Auth::user()->designation_item ? Auth::user()->designation_item->designation_item : '' }}</small>
    </p>
    </li>
    <li><a href="{{ url('/users/edit') }}">Modificar</a></li>
    </li>
    <li>
    <a href="{{ url('/logout') }}"
    onclick="event.preventDefault();
    document.getElementById('logout-form').submit();">
    Logout
    </a>

    <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
    </form>
    </ul>
    </li>
    @endif
    </ul>
    </div>
    </div>
    </nav>

    <div class="container">

        <div class="col-sm-2 col-md-2 sidebar">

            <nav class="navbar navbar-default sidebar" role="navigation">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-sidebar-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="collapse navbar-collapse" id="bs-sidebar-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">DashBoard<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-home"></span></a></li>
                            <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Usuarios <span class="caret"></span><span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-user"></span></a>
                            <ul class="dropdown-menu forAnimate" role="menu">
                                <li><a href="{{URL::to('users/create')}}">Crear</a></li>
                                <li><a href="#">Modificar</a></li>
                                <li><a href="#">Reportar</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Separated link</a></li>
                                <li class="divider"></li>
                                <li><a href="#">Informes</a></li>
                            </ul>
                            </li>
                            <li ><a href="#">Libros<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-th-list"></span></a></li>
                            <li ><a href="#">Tags<span style="font-size:16px;" class="pull-right hidden-xs showopacity glyphicon glyphicon-tags"></span></a></li>
                        </ul>
                    </div>
                </div>
            </nav>

        </div>
        @yield('content')
    </div>

</div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>

    </body>
    </html>
