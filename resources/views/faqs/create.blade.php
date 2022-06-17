@extends('layout')
@section('style')
@endsection
<div id="wrapper">
<div id="question" class="container">
    <h1 class="heading has-text-weight-bold is-size-4">nieuwe vraag</h1>

    <form method="POST" action="/faq">
        @csrf
        <div class="field">
            <label class="label" for="question">question</label>
            <div class="control">
                <input class="input  @error('question') is-danger @enderror" type="text" name="question" id="question">
                @error('question')
                <p class="help is-danger">{{$errors->first('question')}}</p>
                @enderror
            </div>
        </div>

        <div class="field"></div>
        <label class="label" for="answer">antwoord</label>

        <div class="control">
            <textarea class="textarea @error('answer') is-danger @enderror" name="answer" id="answer"></textarea>
            @error('answer')
            <p class="help is-danger">{{$errors->first('answer')}}</p>
            @enderror
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
