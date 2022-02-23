{{--@extends('footer');--}}
{{--@extends('navigation');--}}
<!DOCTYPE html>

<html lang="nl">

<head>
    <style>
        @yield('style')

        .background {
            background-color:red;
        }
    </style>
    <title>Home</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">`
{{--    <link rel="stylesheet" href="./css/style.css"/>--}}
</head>

<body>

<!--navigatiebar  -->
<nav class="navbar">
    <a class ="{{Request::path()==='/'? 'background' : ''}}" href="{{asset('/')}}">Home</a>
    <a class ="{{Request::path()==='profile'? 'background' : ''}}" href="{{asset('profile')}}">Profile</a>
    <a class ="{{Request::path()==='grade'? 'background' : ''}}" href="{{{asset('grade')}}}">Dashboard</a>
    <a class ="{{Request::path()==='faq'? 'background' : ''}}" href="{{asset('faq')}}">FAQ</a>
    <a class ="{{Request::path()==='blog'? 'background' : ''}}" href="{{asset('blog')}}">Blog</a>
</nav>
<!-- rijen met text -->
<main class="main">
    <article>
        <div class="row">
            <div class="column left">
                @yield('left-row')
            </div>
            <div class="column middle">
                @yield('middle-row')
            </div>
            <div class="column right">
                @yield('right-row')
            </div>
        </div>
    </article>
</main>
@yield('sidebar')

@if(Request::path()==='racing')

    <!-- footer -->

    <div class="footer">
        <h2>
            voor meer informatie &rarr;
            <a class="b c" href="https://www.instagram.com/blacklions_racingteam/?hl=en" target="blanket">
                <img alt="insta" src="img/200.gif" width="100" height="100" />
            </a>
            <a class="b c" href="https://www.facebook.com/BlackLionsRacingTeam/" target="blanket">
                <img alt="facebook" src="img/facebook.gif" width="100" height="100" />
            </a>
            <a class="b c" href="https://blacklionsracingteam.com/" target="blanket">
                <img alt="blacklions" src="img/Concept-logo3.png" width="120" height="100" />
            </a>
            <a class="b c" href="https://www.doneeractie.nl/eracup-black-lions-racing-team/-46318" target="blanket">
                <img alt="doneeractie" src="img/logo-doneeractie.png" width="120" height="100" />
            </a>
        </h2>
    </div>


@else
    <!-- footer -->
    <div class="footer">
        <h2 @yield('white-footer')>Made By Niek Schlooz</h2>
    </div>

@endif

{{--{{\http\Env\Request::path('racing') ? @yield('footer-racing') :@yield('footer')}}--}}






</body>

</html>
