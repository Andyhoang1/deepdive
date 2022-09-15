<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">
        {{-- <link href="css/style.css" rel="stylesheet"> --}}
    </head>
        <body>
            <div class="boven">
                <div>
                    <a href="koelkast/home">
                        <button>home</button>
                    </a>
                </div>
                <div>
                    <a href="koelkast/contact">
                      <button>contact</button>
                    </a>
                </div>
                <div>
                    <a href="reparatie/create">
                        <button value="reparaties">reparatie</button>
                    </a>
                </div>
                <div>
                    <a href="koelkast/create">
                        <button>create</button>
                    </a>
                </div>
            </div>
            @foreach ($koelkasten as $koelkast)
            <div class="koelkast">
                <div>
                    <p class="titel">
                        Merk
                    </p>
                    {{$koelkast->merk}}
                </div>
                <div>
                    <p class="titel">
                        Artikelnummer
                    </p>
                    {{$koelkast->artikelnummer}}
                </div>
                <div>
                    <p class="titel">
                        Beschrijving
                    </p>
                    {{$koelkast->beschrijving}}
                </div>
                <div>
                    <p class="titel">
                        Prijs
                    </p>
                    {{$koelkast->prijs}}
                </div>
                <div>
                    <p class="titel">
                        Afmetingen
                    </p>
                    {{$koelkast->afmetingen}}
                </div>
                <div>
                    <p class="titel">
                        Aantal
                    </p>
                    {{$koelkast->aantal}}
                </div>
                <div>
                    <p class="titel">
                        Inhoud
                    </p>
                    {{$koelkast->inhoud}}
                </div>   
                <div>
                    <p class="titel">
                        Diefstal
                    </p>
                    {{$koelkast->diefstal}}
                </div>   
                <div>
                    <p class="titel">
                        Waterschade
                    </p>
                    {{$koelkast->waterschade}}
                </div>   
                    <a href="koelkast/{{$koelkast->id}}/edit">
                        <button>edit</button>
                    </a>
                    <form action="koelkast/{{$koelkast->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">delete</button>
                    </form>
                </div>
            </div>
            @endforeach
            @foreach ($reparaties as $reparatie)
            <div class="reparatie">
                <div>
                    <p class="titel">
                        naam
                    </p>
                    {{$reparatie->naam}}
                </div>
                <div>
                    <p class="titel">
                        adres
                    </p>
                    {{$reparatie->adres}}
                </div>
                <div>
                    <p class="titel">
                        email
                    </p>
                    {{$reparatie->email}}
                </div>
                <div>
                    <p class="titel">
                        telefoonnummer
                    </p>
                    {{$reparatie->telefoonnummer}}
                </div>
                    <a href="reparatie/{{$reparatie->id}}/edit2">
                        <button>edit</button>
                    </a>
                    <form action="reparatie/{{$reparatie->id}}" method="POST">
                        {{csrf_field()}}
                        {{method_field('DELETE')}}
                        <button type="submit">delete</button>
                    </form>
                </div>
            </div>   
            @endforeach
        </body>
</html>