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
<link rel="stylesheet" href="{{asset('css/text-box.css') }}"/>
{{--</head>--}}
@section('left-row')


    <div id="wrapper">
        <div id="question" class="container">

            <form method="POST" action="/blog">
                @csrf
                <div class="field">
                    <label class="label" for="title">titel</label>
                    <div class="control">
                        <input
                            class="input @error('title') is-danger @enderror"
                            type="text"
                            name="title"
                            id="title"
                        value="{{old('title')}}">
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field"></div>
                <label class="label" for="body">tekst</label>

                <div class="control">
                    <textarea class="textarea input @error('body') is-danger @enderror" name="body"
                              id="body"
                    value="{{old('body')}}"></textarea>
                    @error('body')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
                </div>

                <div class="field"></div>
                <label class="label" for="link">link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link"></textarea>
                </div>

                <div class="field"></div>
                <label class="label" for="link_name">naam van de link</label>

                <div class="control">
                    <textarea class="textarea" name="link_name" id="link_name"></textarea>
                </div>

                <div class="field is-grouped"></div>
                <div class="control">
                    <button class="button is-link" type="submit">versturen</button>
                </div>

            </form>
        </div>
    </div>


    @for($i=0;$i<floor(count($blogs)*(1/3));$i++)
        <article>
            <h1>{{$blogs[$i]->title}}</h1>
            <p>
                {{$blogs[$i]->body}}
                <a href="blog/{{$blogs[$i]->id}}/edit" target="blanket">
                    <button>edit</button>
                </a>
            </p>

        </article>
    @endfor
@endsection()
@section('middle-row')

    @for($i=floor(count($blogs)*(1/3));$i<floor(count($blogs)*(2/3)) ;$i++)
        <article>
            <h1>{{$blogs[$i]->title}}</h1>
            <p>
                {{$blogs[$i]->body}}
                <a href="blog/{{$blogs[$i]->id}}/edit" target="blanket">
                    <button>edit</button>
                </a>
            </p>

        </article>
    @endfor
@endsection()
@section('right-row')

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

