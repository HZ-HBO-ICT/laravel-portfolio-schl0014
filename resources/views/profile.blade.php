@extends('layout')
@section('style')
    /* background image */
    body {
    background-image: url("https://c4.wallpaperflare.com/wallpaper/19/357/84/red-bull-red-bull-racing-max-verstappen-aston-martin-honda-hd-wallpaper-preview.jpg");
    background-repeat: no-repeat;
    background-attachment: fixed;
    background-size: cover;
    }
@endsection

<title>profile</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/text-box.css"/>




@section('left-row')
    <li><a href="football">voetbal</a></li>
    <li><a href="racing">racing</a></li>
    </ul>

    <p>
        Ik ben Niek Schlooz en ik ben 19 jaar. Ik woon in een klein gehucht genaamd Magrette in
        Zeeuws-Vlaanderen. Ik ben geboren in Eindhoven. Ik heb een zusje die nu naar 6 vwo gaat. Ik hou
        heel
        erg van om naar andere landen te gaan en hun culturen te ontdekken.
        Meestal als ik naar een ander land ga, vind ik het prettigste om in een tent te slapen omdat je
        dan
        een meer vakantie gevoel krijgt. Ik ben al naar vele landen geweest en elk land heeft weer zijn
        eigen
        speciale dingen.
    </p>
@endsection()
@section('middle-row')
    <h2 style="color: #ffffff">Wie ben ik?</h2>
    <h2 style="color: #ffffff">Niek Schlooz</h2>
    <img src="img/20210328_145613_capture.jpg" alt="foto van mezelf" width="250" height="250"
         class="center"/>

@endsection
@section('right-row')
    <p style="margin-top: 128px">
        Mijn hobby's zijn formule 1 kijken, voetballen en klussen. Ik heb het Max Verstappen virus
        gekregen
        van mijn achternicht die me meenam naar de Jumborace dagen in Zandvoort. Hier zag ik Max
        Verstappen
        in een Red Bull auto rijden waardoor ik de sport heel
        leuk vind om te volgen. Ik ben daarnaast altijd ge&#239;nteresseerd in de ICT-branche. Hierdoor
        ben ik
        nog meer gefocust op dit jaar om zoveel mogelijk te leren.
    </p>

    <p>
        Ik heb daarnaast een lieve hond en kat. De hond heet Guus en is een Drentse patrijs. De kat heet
        Tom.
    </p>
@endsection

