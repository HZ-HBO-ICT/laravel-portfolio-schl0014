@extends('layout')
@section('style')
        /* text color */
        h2 {
            color: black;
        }

        /* background image */
        body {
            background-image: url("img/download.png ");
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: 75% 75%;
            background-position: center;
        }
        /* image hover */
        img:hover {
            transform: scale(1.2);
        }
@endsection()


    <title>voetbal</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/text-box.css" />
</head>

@section('left-row')
                <br /><br />

                <ul>
                    <li class="black">
                        <a class="black" href="profile">profile</a>
                    </li>
                    <li class="black">
                        <a class="black" href="racing">racing</a>
                    </li>
                </ul>
                <article>
                    <p>
                        Ik voetbal al van kleins af aan bij vvspui. Het is een kleine vereniging die gelegen is in
                        het
                        kleine gehucht Spui. Dit is een plaatsje dat tussen Axel en Terneuzen ligt.
                    </p>
                </article>
                @endsection()
           @section('middle-row')
                <article>
                    <h2>Wie ben ik?</h2>
                    <h2>Niek Schlooz</h2>

                    <p>
                        Ik voetbal in het derde team van Spui. Dit team wordt ook wel het bier team genoemd en is
                        altijd gezellig om te voetballen. Jammer genoeg zijn van dit team nog geen foto's genomen
                        vanwege
                        corona waardoor ik een foto elftal had moeten nemen van mijn oude
                        team. Op de foto speelde ik in de Jeugd onder 19 en dit was een zeer gezellig elftal. Ik sta
                        op
                        de foto aan de linkerkant.
                    </p>
                </article>
                @endsection()
            @section('right-row')
                <img style="margin-top: 128px" src="img/EPuJz8jW4AAkrP_.jfif" width="250" height="250"
                     class="center" alt="foto van de jeugd onder 19 voetbalteam" />
                <article>
                    <p>
                        Ik voetbal 2 keer in de week. Een keer op donderdag en een keer op zaterdag. Op donderdag
                        train ik
                        en op zaterdag speel ik wedstrijd.
                    </p>
                </article>
                @endsection()
@section('white-footer')
    class= "white"
@endsection()
