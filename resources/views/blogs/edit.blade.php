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

            <form method="POST" action="/blog/{{$blog->id}}">
                @csrf
                @method('PUT')
                <div class="field">
                    <label class="label" for="question">title</label>
                    <div class="control  ">
                        <input class="input @error('title') is-danger @enderror" type="text" name="title" id="title"
                               value="{{$blog->title}}">
                        @error('title')
                        <p class="help is-danger">{{$errors->first('title')}}</p>
                        @enderror
                    </div>
                </div>

                <div class="field"></div>
                <label class="label" for="body">body</label>

                <div class="control">
                    <textarea class="textarea input @error('body') is-danger @enderror" name="body" id="body">{{$blog->body}}</textarea>
                    @error('body')
                    <p class="help is-danger">{{$errors->first('body')}}</p>
                    @enderror
                </div>

                <div class="field"></div>
                <label class="label" for="link">link</label>

                <div class="control">
                    <textarea class="textarea" name="link" id="link">{{$blog->link}}</textarea>
                </div>

                <div class="field"></div>
                <label class="label" for="link_name">link_name</label>

                <div class="control">
                    <textarea class="textarea" name="link_name" id="link_name">{{$blog->link_name}}</textarea>
                </div>

                <div class="field is-grouped"></div>
                <div class="control">
                    <button class="button is-link" type="submit">versturen</button>
                </div>

            </form>
        </div>
    </div>
    <form method="POST" action="/blog/{{ $blog->id }}">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>


@endsection()

