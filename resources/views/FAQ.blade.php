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
                <h1 style="margin: 20px">
                    Hoe boek je een projectruimte in een van de vleugels?
                </h1>
                <a class="block-faq white"
                   href="https://hzuniversity.topdesk.net/tas/public/ssp/52a63378-addd-4b21-b808-571200fd8d0c"
                   target="blanket">Antwoord</a>
                <h1 style="margin-top: 128px">
                    Hoe print je een document vanaf je laptop bij de HZ?
                </h1>
                <a class="block-faq white" href="https://print.hz.nl/index.cfm" target="blanket">Antwoord</a>
@endsection()
@section('middle-row')
                <h1>
                    Wat zijn de instructies als je je auto wilt parkeren bij de HZ-parkeerplaats?
                </h1>
                <a class="block-faq white" href="https://hz.nl/over-de-hz/contact/middelburg"
                   target="blanket">Antwoord</a>
                <h1 style="margin-top: 124px">
                    Wat moet je doen als je ziek bent / symptomen vertoont van
                    coronavirus?
                </h1>
                <a class="block-faq white" href="img/20201001-Schema-Wat-te-doen-bij-een-mogelijke-coronabesmetting.pdf"
                   target="blanket">Pdf met het antwoord</a>
@endsection()
 @section('right-row')
                <h1 style="margin-top: 128px">
                    Hoe scan je een document en stuur je het naar je laptop bij de HZ?
                </h1>
                <p class="block-faq white" style="margin-bottom: 128px; font-size: 15px; margin-bottom: 56px">
                    Je logt in op de printer en drukt dan op scannnen. Inloggen doe je
                    via je HZ pas op de printer te leggen. Deze scan wordt dan door
                    gestuurd naar print.hz.nl. Hier kun je je ingescande A4 vinden en op
                    je computer zetten.
                    <ul>
                        @foreach($faqs as $faq)
                            <li>{{$faq->question}}  </li>
                        @endforeach
                    </ul>
                </p>

 @endsection()

