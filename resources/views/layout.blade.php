@extends('footer');
@extends('navigation');
<!DOCTYPE html>
<html lang="nl">

<head>
    <style>
        @yield('style')
    </style>
    <title>Home</title>
    <link rel="stylesheet" href="css/style.css"/>
</head>

<body>
@yield('navigation')
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

{{--@if(!Request::path()==='racing')--}}
{{--    @yield('footer')--}}
{{--@else @yield('footer-racing'))--}}
{{--@endif--}}

{{--{{\http\Env\Request::path('racing') ? @yield('footer-racing') :@yield('footer')}}--}}






</body>

</html>
