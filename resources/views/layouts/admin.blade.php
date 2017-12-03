<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    <title>InfoLand</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/master.css') }}" rel="stylesheet">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<header>

    <a href={{route('AdminHome')}}><img src="http://nsa39.casimages.com/img/2017/11/22/171122073147790345.png" width="300px" class="infoland"> </a>


</header>

<!-- Right Side Of Navbar -->
<div class="top-right links log">
    <!-- Authentication Links -->
    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
        @else

            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu">

                <a href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    <div class="log">Logout</div>
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            </div>

            @endguest
</div>

@yield('content')
@yield('nav')


<div class="cont">
    <div class="leftpan">
        @yield('left')
    </div>
    <div class="rightpan">
        @yield('right')
    </div>
</div>
<body>



<!-- Scripts -->
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

