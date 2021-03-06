{{--@extends('footer');--}}
{{--@extends('navigation');--}}
<!DOCTYPE html>
<meta name="viewport" content="width=device-width, initial-scale=1">
<html lang="nl">

<head>
    <style>
        @yield('style')

        .background {
            background-color:red;
        }
    </style>
    <title>Home</title>
{{--    <link href="{{ asset('css/style.css') }}" rel="stylesheet">`--}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.4/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.min.css" />
    <link rel="stylesheet" href="/vendors/formvalidation/dist/css/formValidation.min.css" />
    <link rel="stylesheet" href="{{asset("css/style.css")}}"/>
</head>

<body>

<!--navigatiebar  -->




<nav class="navbar">
    <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
        <x-nav-link href="{{asset('/')}}" :active="request()->routeIs('dashboard')">
            {{ __('Dashboard') }}
        </x-nav-link>

        <x-nav-link href="{{asset('/profile')}}" :active="request()->routeIs('welcome')">
            {{ __('Welcome') }}
        </x-nav-link>

        <x-nav-link href="{{asset('grade')}}" :active="request()->routeIs('grade')">
            {{ __('Profile') }}
        </x-nav-link>
        <x-nav-link href="{{asset('faq')}}" :active="request()->routeIs('faq')">
            {{ __('Faq') }}
        </x-nav-link>
        <x-nav-link href="{{asset('blog')}}" :active="request()->routeIs('blog')">
            {{ __('Blog') }}
        </x-nav-link>
    </div>
    </div>

{{--    <!-- Settings Dropdown -->--}}
{{--    <div class="hidden sm:flex sm:items-center sm:ml-6">--}}
{{--        <x-dropdown align="right" width="48">--}}
{{--            <x-slot name="trigger">--}}
{{--                <button class="flex items-center text-sm font-medium text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition duration-150 ease-in-out">--}}
{{--                    <div>{{ Auth::user()->name }}</div>--}}

{{--                    <div class="ml-1">--}}
{{--                        <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">--}}
{{--                            <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />--}}
{{--                        </svg>--}}
{{--                    </div>--}}
{{--                </button>--}}
{{--            </x-slot>--}}

{{--            <x-slot name="content">--}}
{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-dropdown-link :href="route('logout')"--}}
{{--                                     onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-dropdown-link>--}}
{{--                </form>--}}
{{--            </x-slot>--}}
{{--        </x-dropdown>--}}
{{--    </div>--}}

{{--    <!-- Hamburger -->--}}
{{--    <div class="-mr-2 flex items-center sm:hidden">--}}
{{--        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">--}}
{{--            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">--}}
{{--                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />--}}
{{--                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />--}}
{{--            </svg>--}}
{{--        </button>--}}
{{--    </div>--}}
{{--    </div>--}}
{{--    </div>--}}


{{--        <!-- Responsive Settings Options -->--}}
{{--        <div class="pt-4 pb-1 border-t border-gray-200">--}}
{{--            <div class="px-4">--}}
{{--                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>--}}
{{--                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>--}}
{{--            </div>--}}

{{--            <div class="mt-3 space-y-1">--}}
{{--                <!-- Authentication -->--}}
{{--                <form method="POST" action="{{ route('logout') }}">--}}
{{--                    @csrf--}}

{{--                    <x-responsive-nav-link :href="route('logout')"--}}
{{--                                           onclick="event.preventDefault();--}}
{{--                                        this.closest('form').submit();">--}}
{{--                        {{ __('Log Out') }}--}}
{{--                    </x-responsive-nav-link>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
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
            <div id="news"></div>

        </h2>
    </div>


@else
    <!-- footer -->
    <footer class="footer">
        <div class="content has-text-centered">
            <p>
                <strong>portfolio</strong> by Niek Schlooz. The source code is licensed
                <a href="http://opensource.org/licenses/mit-license.php">MIT</a>. The website content
                is licensed <a href="http://creativecommons.org/licenses/by-nc-sa/4.0/">CC BY NC SA 4.0</a>.
            </p>
        </div>
    </footer>
{{--    <footer class="footer">--}}
{{--        <div class="content has-text-centered">--}}

{{--        <h2 @yield('white-footer')>Made By Niek Schlooz</h2>--}}
{{--        </div>--}}
{{--    </footer>--}}

@endif








</body>

</html>
<script src="{{ asset('js/newsApi.js') }}"></script>
