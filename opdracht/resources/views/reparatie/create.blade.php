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
                    <h1>Maak reparaties afspraak</h1>
                    <hr>
                    <form action="/reparatie/create/store" method="POST">
                        @csrf
                        <div>
                            <div>
                                <label>naam</label>
                                <br>
                                <textarea type="text" id="naam" name="naam" placeholder="naam" required></textarea>
                            </div>
                            <div>
                                <label>adres</label>
                                <br>
                                <textarea id="adres" name="adres" placeholder="adres" required></textarea>
                            </div>
                            <div>
                                <label>email</label>
                                <br>
                                <textarea id="email" name="email" placeholder="email" required></textarea>
                            </div>
                            <div>
                                <label>telefoon nummer</label>
                                <br>
                                <textarea id="telefoonnummer" name="telefoonnummer" placeholder="telefoonnummer" required></textarea>
                            </div>
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