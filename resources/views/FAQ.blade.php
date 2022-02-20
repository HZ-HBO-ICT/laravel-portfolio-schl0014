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

    <div id="wrapper">
        <div id="question" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">nieuwe vraag</h1>

            <form method="POST" action="/faq">
                @csrf
                <div class="field">
                    <label class="label" for="question">question</label>
                    <div class="control">
                        <input class="input" type="text" name="question" id="question">
                    </div>
                </div>

                <div class="field"></div>
                <label class="label" for="answer">antwoord</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer"></textarea>
                </div>

                <div class="field"></div>
                <label class="label" for="link">link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link"></textarea>
                </div>

                <div class="field is-grouped"></div>
                <div class="control">
                    <button class="button is-link" type="submit">versturen</button>
                </div>

            </form>
        </div>
    </div>
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

