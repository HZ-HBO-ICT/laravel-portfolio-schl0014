@extends('layout')
@section('style')

    /* background image */
    body {
    background-image: url("{{asset('img/Best-50-Non-Copyrighted-Backgrounds-on-HipWallpaper-Non-.png')}}");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
    #wrapper{
    margin: auto;
    {{--    width: 50%;--}}
    padding: 10px;
    top: 200px;
    position: relative;
    text-align: center;
    }
    form {
    margin: auto;
    {{--    width: 220px;--}}

    .field{
    margin:1000px;
    height:100%;
    }

    {{--    textarea{--}}
    {{--    width:100%;--}}
    {{--    }--}}

@endsection


<div id="wrapper">
    <div id="question" class="container">

        <form method="POST" action="/blog">
            @csrf
            <div class="field">
                <label class="label title is-3 " for="title">title</label>
                <div class="control">
                    <input class="input is-large  @error('title') is-danger @enderror" name="title" type="text"
                           value="{{old('title')}}" placeholder="Large input ">


                    @error('title')
                    <span class="icon-text has-text-danger message is-danger">
                      <span class="icon">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span>{{$errors->first('title')}}</span>
                    </span>
                    @enderror

                    <div class="icon-text has-text-warning message is-warning">
                     <span class="icon has-text-warning">
                          <i class="fas fa-exclamation-triangle"></i>
                     </span>
                        <span>this field is required</span>
                    </div>
                </div>
            </div>

            <div class="field"></div>
            <label class="label title is-3" for="body">text</label>

            <div class="control">
                    <textarea class="textarea input @error('body') is-danger @enderror" name="body"
                              id="body"
                              value="{{old('body')}}"></textarea>
                @error('body')
                <span class="icon-text has-text-danger message is-danger">
                      <span class="icon">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span>{{$errors->first('body')}}</span>
                    </span>
                @enderror
                <div class="icon-text has-text-warning message is-warning">
                     <span class="icon has-text-warning">
                          <i class="fas fa-exclamation-triangle"></i>
                     </span>
                    <span>this field is required</span>
                </div>
            </div>

            <div class="field"></div>
            <label class="label title is-3" for="link">link</label>

            <div class="control">
                <textarea class="textarea @error('link') is-danger @enderror" name="link" id="link"></textarea>
                @error('link')
                <span class="icon-text has-text-danger message is-danger">
                      <span class="icon">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span>{{$errors->first('link')}}</span>
                    </span>
                @enderror
            </div>

            <div class="field "></div>
            <label class="label title is-3" for="link_name">name of the link</label>

            <div class="control pb-6">
                <textarea class="textarea @error('link_name') is-danger @enderror" name="link_name"
                          id="link_name"></textarea>
                @error('link_name')
                <span class="icon-text has-text-danger message is-danger">
                      <span class="icon">
                        <i class="fas fa-ban"></i>
                      </span>
                      <span>{{$errors->first('link_name')}}</span>
                    </span>
                @enderror
            </div>

            <div class="field is-grouped ">
                <div class="control">
                    <button class="button is-primary mb-6" type="submit">submit</button>
                </div>

                <div class="control">
                    <button onclick="window.location.href='/blog'" class="button is-light mb-6" type="button">cancel</button>
                </div>
            </div>
        </form>
    </div>
</div>
{{--<script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>--}}
{{--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.6.2/css/bulma.min.css">--}}
