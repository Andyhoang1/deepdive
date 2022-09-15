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
                    <h1>Create a New Post</h1>
                    <p>voeg dit aan om een koelkast online te zetten</p>
                    <hr>
                    <form action="/koelkast/create/store" method="POST">
                        @csrf
                        <div>
                            <div>
                                <label>Merk</label>
                                <br>
                                <input type="text" id="merk" name="merk"placeholder="Voeg naam van de koelkast toe" required>
                            </div>
                            <div>
                                <label>Beschrijving</label>
                                <br>
                                <textarea id="beschrijving" name="beschrijving" placeholder="Voeg een beschrijving toe" required></textarea>
                            </div>
                            <div>
                                <label>Artikelnummer</label>
                                <br>
                                <textarea id="artikelnummer" name="artikelnummer" placeholder="Voeg een artikelnummer toe" required></textarea>
                            </div>
                            <div>
                                <label>inhoud</label>
                                <br>
                                <textarea id="inhoud" name="inhoud" placeholder="Voeg de inhoud toe" required></textarea>
                            </div>
                            <div>
                                <label>Aantal</label>
                                <br>
                                <textarea id="aantal" name="aantal" placeholder="Voeg de inhoud toe" required></textarea>
                            </div>
                            <div>
                                <label>Prijs</label>
                                <br>
                                <textarea id="prijs" name="prijs" placeholder="Voeg de prijs toe" required></textarea>
                            </div>
                            <div>
                                <label>Aftmeting</label>
                                <br>
                                <textarea id="afmetingen" name="afmetingen" placeholder="Voeg de aftmeting toe" required></textarea>
                            </div>
                            <div>
                                <label>Verzekering</label>
                                <p>Diefstal</p>
                                <input type="checkbox" name="diefstal">
                                <p>Waterschade</p>
                                <input type="checkbox" name="waterschade">
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