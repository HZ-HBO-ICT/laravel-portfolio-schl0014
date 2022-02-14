@extends('layout')
@section('style')
    /* text info color */
    h1 {
    color: #ffffff;
    }

    h2 {
    color: #ffffff;
    }

    p {
    color: #ffffff;
    }
    /* background image info */
    body {
    background-image: url("img/IMG-20210706-WA0003.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    background-position: center center;
    }
@endsection()

<title>racing</title>
<link rel="stylesheet" href="css/racing.css"/>
</head>



@section('left-row')
    <br/><br/>

    <ul>
        <li><a class="a" href="profile">profile</a></li>
        <li><a class="a" href="football">voetbal</a></li>
    </ul>
    <p>
        Samen met een paar vrienden van me zijn we tijdens de corona epidemie begonnen aan het maken van
        een kart. Het idee is dat we een kart maken waarvan iedereen dezelfde accu, frame en motor
        heeft. Het enig verschil is dat we het bodywork moeten maken om
        een verschil te maken. We hebben al een testdag gehad,maar jammer genoeg hadden we problemen met
        de accu waardoor we maar 4 rondes konden rijden. Voor mij het doel van het project is om zoveel
        mogelijk kennis op te doen en er gewoon
        plezier van te hebben.
    </p>

@endsection()
@section('middle-row')
    <h1 style="color: #ffffff">Wie ben ik?</h1>
    <h2 style="color: #ffffff">Niek Schlooz</h2>

    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 8</div>
            <img src="img/IMG-20210705-WA0013.jpg" style="width: 80%" alt="foto van het team"/>
            <div class="text">foto van het team met de kart</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 8</div>
            <img src="img/IMG-20210705-WA0012.jpg" alt="foto kart 2" style="width: 100%"/>
            <div class="text">foto 2</div>
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 8</div>
            <img src="img/IMG-20210705-WA0003.jpg" alt="foto kart 3" style="width: 100%"/>
            <div class="text">foto 3</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">4 / 8</div>
            <img src="img/20210725_141651.jpg" alt="foto van de kart met ledlichten"
                 style="width: 100%"/>
            <div class="text">foto van de kart met ledlichten</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">5 / 8</div>
            <img src="img/20210725_141649.jpg" alt="foto kart 5" style="width: 100%"/>
            <div class="text">foto 5</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">6 / 8</div>
            <img src="img/IMG-20210705-WA0014.jpg" alt="foto kart 6" style="width: 100%"/>
            <div class="text">foto 6</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">7 / 8</div>
            <img src="img/IMG-20210727-WA0004.jpg" alt="foto kart 7" style="width: 100%"/>
            <div class="text">foto 7</div>
        </div>
        <div class="mySlides fade">
            <div class="numbertext">8 / 8</div>
            <img src="img/IMG-20210706-WA0003.jpg" alt="foto kart 8" style="width: 100%"/>
            <div class="text">foto 8</div>
        </div>

        <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
        <a class="next" onclick="plusSlides(1)">&#10095;</a>
    </div>
    <br/>

    <div style="text-align: center">
        <span class="dot" onclick="currentSlide(1)"></span>
        <span class="dot" onclick="currentSlide(2)"></span>
        <span class="dot" onclick="currentSlide(4)"></span>
        <span class="dot" onclick="currentSlide(5)"></span>
        <span class="dot" onclick="currentSlide(6)"></span>
        <span class="dot" onclick="currentSlide(7)"></span>
        <span class="dot" onclick="currentSlide(8)"></span>
    </div>

    <script src="js/racing.js"></script>
    <br/>
    <video style="margin-bottom: 128px" width="320" height="240" controls>
        <source src="img/VID-20210625-WA0000.mp4" type="video/mp4"/>
    </video>
@endsection()

@section('right-row')
    <article style="margin-top: 128px">
        <p margin-bottom 32px>
            We zijn met het team nu op het punt gekomen dat we races gaan rijden. Het project is
            eigenlijk bedoelt voor scholen men daarom vind ik dat het team hier een knappe prestatie
            zet.Ik leer hierdoor al door sponsoren te zoeken om al in contact te komen met bedrijven
            en daarnaast heb ik al geleerd om in team verband te werken. Ook heb ik hierbij veel
            dingen
            geleerd hoe je een kart kan maken en daardoor wordt je ook veel zelfstandiger.
        </p>
    </article>
    @endsection()

