<!DOCTYPE html>
<html>
    <head>
        <title>Document</title>
    </head>
        <body>
            <div class="container">
                <div class="row">
                    <div>
                        <a href="/">Go back</a>
                        <div>
                            <h1>Verander Een Nieuw Post</h1>
                            <hr>
                            <form action="editStore" method="POST">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div>
                                    <input type="hidden" name="id" value="{{$koelkast->id}}">
                                    <div>
                                        <label>Merk</label>
                                        <br>
                                        <input type="text" id="merk" name="merk" value="{{$koelkast->merk}}">
                                    </div>
                                    <div>
                                        <label>Beschrijving</label>
                                        <br>
                                        <input type="text" id="beschrijving" name="beschrijving" value="{{$koelkast->beschrijving}}">
                                    </div>
                                    <div>
                                        <label>Artikelnummer</label>
                                        <br>
                                        <input type="text" id="artikelnummer" name="artikelnummer" value="{{$koelkast->artikelnummer}}">
                                    </div>
                                    <div>
                                        <label>inhoud</label>
                                        <br>
                                        <input type="text" id="inhoud" name="inhoud" value="{{$koelkast->inhoud}}">
                                    </div>
                                    <div>
                                        <label>Aantal</label>
                                        <br>
                                        <input type="text" id="aantal" name="aantal" value="{{$koelkast->aantal}}">
                                    </div>
                                    <div>
                                        <label>Prijs</label>
                                        <br>
                                        <input type="text" id="prijs" name="prijs" value="{{$koelkast->prijs}}">
                                    </div>
                                    <div>
                                        <label>Aftmeting</label>
                                        <br>
                                        <input type="text" id="afmetingen" name="afmetingen" value="{{$koelkast->afmetingen}}">
                                    </div>
                                </div>
                                <div>
                                    <div>
                                        <input type="submit">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </body>
</html>