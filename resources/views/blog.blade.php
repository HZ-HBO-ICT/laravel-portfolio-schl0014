@extends('layout')
@section('style')
        /* background image */
        body {
            background-image: url("img/Best-50-Non-Copyrighted-Backgrounds-on-HipWallpaper-Non-.png");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
@endsection()
    <title>blog</title>
{{--    <link rel="stylesheet" href="css/style.css" />--}}
    <link rel="stylesheet" href="css/text-box.css" />
{{--</head>--}}
@section('left-row')

    @for($i=0;$i<2;$i++)
        <article>
            <h1>{{$articles[$i]->title}}</h1>
            <p>
                {{$articles[$i]->body}}
            </p>
        </article>
    @endfor
    <div id="wrapper">
        <div id="question" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">nieuwe vraag</h1>

            <form method="POST" action="/blog">
                @csrf
                <div class="field">
                    <label class="label" for="title">titel</label>
                    <div class="control">
                        <input class="input" type="text" name="title" id="title">
                    </div>
                </div>

                <div class="field"></div>
                <label class="label" for="body">tekst</label>

                <div class="control">
                    <textarea class="textarea" name="body" id="body"></textarea>
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
@endsection()
 @section('middle-row')

     @for($i=2;$i<4;$i++)
         <article>
             <h1>{{$articles[$i]->title}}</h1>
             <p>
                 {{$articles[$i]->body}}
             </p>
         </article>
     @endfor
 @endsection()
 @section('right-row')

     @for($i=4;$i<count($articles);$i++)
         <article>
             <h1>{{$articles[$i]->title}}</h1>
             <p>
                 {{$articles[$i]->body}}
                 <a href="{{$articles[$i]->link}}" target="blanket">{{$articles[$i]->link_name}}</a></p>

         </article>
     @endfor
                @endsection()

