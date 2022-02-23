@extends('layout')
@section('style')
    /* background color */
    body {
    background-image: linear-gradient(90deg, darkblue, darkred);
    }

    th:hover {
    transform: scale(1.2);
    }

    td:hover {
    transform: scale(1.2);
    }

    /* table colors */
    table,
    th,
    td {
    border: 2px solid black;
    background-color: skyblue;
    }
@endsection



<div id="wrapper">
    <div id="question" class="container">
        <h1 class="heading has-text-weight-bold is-size-4">nieuwe vraag</h1>

        <form method="POST" action="/grade">
            @csrf
            <div class="field">
                <label class="label" for="quartile">question</label>
                <div class="control">
                    <input class="input  @error('quartile') is-danger @enderror" type="text" name="quartile" id="quartile">
                    @error('quartile')
                    <p class="help is-danger">{{$errors->first('quartile')}}</p>
                    @enderror
                </div>
            </div>

            <div class="field"></div>
            <label class="label" for="course_name">course name</label>

            <div class="control">
                <textarea class="textarea @error('course_name') is-danger @enderror" name="course_name" id="course_name"></textarea>
                @error('course_name')
                <p class="help is-danger">{{$errors->first('course_name')}}</p>
                @enderror
            </div>

            <div class="field"></div>
            <label class="label" for="EC">EC points</label>

            <div class="control">
                <textarea class="textarea  @error('EC') is-danger @enderror" name="EC" id="EC"></textarea>
                @error('EC')
                <p class="help is-danger">{{$errors->first('EC')}}</p>
                @enderror
            </div>

            <div class="field"></div>
            <label class="label" for="Exam">Exam</label>

            <div class="control">
                <textarea class="textarea  @error('Exam') is-danger @enderror" name="Exam" id="Exam"></textarea>
                @error('Exam')
                <p class="help is-danger">{{$errors->first('Exam')}}</p>
                @enderror
            </div>

            <div class="field"></div>
            <label class="label" for="beste_grade">Grade</label>

            <div class="control">
                <textarea class="textarea  @error('beste_grade') is-danger @enderror" name="beste_grade" id="beste_grade"></textarea>
                @error('beste_grade')
                <p class="help is-danger">{{$errors->first('beste_grade')}}</p>
                @enderror
            </div>

            <div class="field is-grouped"></div>
            <div class="control">
                <button class="button is-link" type="submit">versturen</button>
            </div>

        </form>
    </div>
</div>

