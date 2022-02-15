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

