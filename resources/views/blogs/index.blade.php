@extends('layout')
@section('style')
    /* background image */
    body {
    background-image: url("{{asset('img/Best-50-Non-Copyrighted-Backgrounds-on-HipWallpaper-Non-.png')}}");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
@endsection()
<title>blog</title>
{{--    <link rel="stylesheet" href="css/style.css" />--}}
{{--<link rel="stylesheet" href="{{asset('css/text-box.css') }}"/>--}}
{{--</head>--}}
@section('left-row')
    <div class="block">
        This text is within a <strong>block</strong>.
    </div>
    <div class="block">
        This text is within a <strong>second block</strong>. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean efficitur sit amet massa fringilla egestas. Nullam condimentum luctus turpis.
    </div>
    <div class="block">
        This text is within a <strong>third block</strong>. This block has no margin at the bottom.
    </div>



    @for($i=0;$i<floor(count($blogs)*(1/3));$i++)
        <article>
            <h1  class="block">{{$blogs[$i]->title}}</h1>
            <p  class="block">
                {{$blogs[$i]->body}}
                <a href="blog/{{$blogs[$i]->id}}/edit"   class="block" target="blanket">
                    <button>edit</button>
                </a>
            </p>

        </article>
    @endfor
@endsection()
@section('middle-row')
    <div class="columns">


    @for($i=floor(count($blogs)*(1/3));$i<floor(count($blogs)*(2/3)) ;$i++)
            <div class="column">
        <article>
            <h1 class="bd-notification is-info">{{$blogs[$i]->title}}</h1>
            <p>
                {{$blogs[$i]->body}}
                <a href="blog/{{$blogs[$i]->id}}/edit" target="blanket">
                    <button>edit</button>
                </a>
            </p>

        </article>
            </div>
    </div>
    @endfor
@endsection()
@section('right-row')
    <a href="blog/create" target="blanket">
        <button>create</button>

    @for($i=floor(count($blogs)*(2/3)) ;$i<count($blogs) ;$i++)
        <article>
            <h1>{{$blogs[$i]->title}}</h1>
            <p>
                {{$blogs[$i]->body}}
                <a href="{{$blogs[$i]->link}}" target="blanket">{{$blogs[$i]->link_name}}</a>
                <a href="blog/{{$blogs[$i]->id}}/edit" target="blanket">
                    <button>edit</button>
                </a>
            </p>

        </article>
    @endfor
@endsection()

