@extends('layout')

@section('style')
    /* background colors */
    body {
    background-image: linear-gradient(-45deg, lightgrey, cyan);
    background-repeat: no-repeat;
    background-attachment: fixed;
    }

    a:hover {
    border: 1px solid black;
    }

    /* text aligns */
    a {
    text-align: center;
    }

    h1 {
    text-align: center;
    }
@endsection

<title>FAQ</title>
{{--    <link rel="stylesheet" href="css/style.css"/>--}}
{{--</head>--}}

@section('left-row')

    <
    @for($i=0;$i<floor(count($faqs)*(1/3));$i++)
        <h1 style="margin-top: 64px">
            {{$faqs[$i]->question}}
        </h1>
        @if($faqs[$i]->link===null)
            <p class="block-faq white">{{$faqs[$i]->answer}}</p>
        @else
            <a class="block-faq white"
               href="{{$faqs[$i]->link}}"
               target="blanket">{{$faqs[$i]->answer}}</a>

        @endif()
        <a href="faq/{{$faqs[$i]->id}}/edit" target="blanket">
            <button>edit</button>
        </a>

    @endfor()
@endsection()
@section('middle-row')

    @for($i=floor(count($faqs)*(1/3));$i<floor(count($faqs)*(2/3)) ;$i++)
        <h1 style="margin-top: 64px">
            {{$faqs[$i]->question}}
        </h1>
        @if($faqs[$i]->link===null)
            <p class="block-faq white">{{$faqs[$i]->answer}}</p>
        @else
            <a class="block-faq white"
               href="{{$faqs[$i]->link}}"
               target="blanket">{{$faqs[$i]->answer}}</a>



        @endif()
        <a href="faq/{{$faqs[$i]->id}}/edit" target="blanket">
            <button>edit</button>
        </a>
    @endfor()
@endsection()
@section('right-row')

    <a href="faq/create" target="blanket">
        <button>create</button>
    @for($i=floor(count($faqs)*(2/3)) ;$i<count($faqs) ;$i++)
        <h1 style="margin-top: 64px">
            {{$faqs[$i]->question}}
        </h1>
        @if($faqs[$i]->link===null)
            <p class="block-faq white">{{$faqs[$i]->answer}}</p>
        @else
            <a class="block-faq white"
               href="{{$faqs[$i]->link}}"
               target="blanket">{{$faqs[$i]->answer}}</a>
        @endif()
        <a href="faq/{{$faqs[$i]->id}}/edit" target="blanket">
            <button>edit</button>
        </a>
    @endfor()

@endsection()

