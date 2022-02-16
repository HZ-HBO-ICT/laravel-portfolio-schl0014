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
    @for($i=0;$i<2;$i++)
        <h1 style="margin-top: 64px">
            {{$faqs[$i]->question}}
        </h1>
        <a class="block-faq white"
           href="{{$faqs[$i]->link}}"
           target="blanket">{{$faqs[$i]->answer}}</a>


    @endfor()
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

                @endsection()
                @section('middle-row')

                    @for($i=2;$i<4;$i++)
                        <h1 style="margin-top: 64px">
                            {{$faqs[$i]->question}}
                        </h1>
                        <a class="block-faq white"
                           href="{{$faqs[$i]->link}}"
                           target="blanket">{{$faqs[$i]->answer}}</a>
                    @endfor()
                @endsection()
                @section('right-row')
                    @for($i=4;$i<count($faqs);$i++)
                        <h1 style="margin-top: 64px">
                            {{$faqs[$i]->question}}
                        </h1>
                        <p class="block-faq white">{{$faqs[$i]->answer}}</p>
    @endfor()

@endsection()

