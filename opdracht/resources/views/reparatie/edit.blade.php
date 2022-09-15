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
                            <form action="editStore2" method="POST">
                                @csrf
                                {{-- @method('PUT') --}}
                                <div>
                                    <div>
                                    <label>naam</label>
                                    <br>
                                    <input type="text" name="naam" value="{{$reparatie->naam}}">
                                    </div>
                                    <div>
                                        <label>adres</label>
                                        <br>
                                        <input type="text" id="adres" name="adres" value="{{$reparatie->adres}}">
                                    </div>
                                    <div>
                                        <label>email</label>
                                        <br>
                                        <input type="text" id="email" name="email" value="{{$reparatie->email}}">
                                    </div>
                                    <div>
                                        <label>telefoonnummer</label>
                                        <br>
                                        <input type="text" id="telefoonnummer" name="telefoonnummer" value="{{$reparatie->telefoonnummer}}">
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