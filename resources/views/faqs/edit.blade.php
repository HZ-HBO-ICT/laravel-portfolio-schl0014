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
@endsection()
{{--<link rel="stylesheet" href="public/css/style.css">--}}
<title>FAQ</title>
@section('middle-row')


    <div id="wrapper">
        <div id="question" class="container">
            <h1 class="heading has-text-weight-bold is-size-4">nieuwe vraag</h1>

            <form method="POST" action="/faq/{{$faq->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="question">question</label>
                    <div class="control">
                        <input class="input" type="text" name="question" id="question"
                               value="{{$faq->question}}">
                    </div>
                </div>

                <div class="field"></div>
                <label class="label" for="answer">antwoord</label>

                <div class="control">
                    <textarea class="textarea" name="answer" id="answer">{{$faq->answer}}</textarea>
                </div>

                <div class="field"></div>
                <label class="label" for="link">link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link">{{$faq->link}}</textarea>
                </div>

                <div class="field is-grouped"></div>
                <div class="control">
                    <button class="button is-link" type="submit">versturen</button>
                </div>

            </form>
        </div>
    </div>
    <form method="POST" action="/faq/{{$faq->id}}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>



@endsection()

