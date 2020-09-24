<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Mylan Landing Page</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link href='/css/app.css' rel="stylesheet">
    </head>
    <body>
        
        @include('layouts.header')


        <main>
            <div class="app">
                <div class="container d-flex my-5">
                    <div class="w-60">

                        <div class="red w-100 h-95 p-5 brtl-60">
                            <div class="title-container">
                                <h1 class="white fs-40"><strong>Mylan</strong> WEBINAR</h1>
                            </div>

                            <div class="my-4">
                                <p class="white fs-18">07.10.2020. (srijeda) <br> 18:00 h</p>
                            </div>

                            <div class="my-4">
                                <p class="white fs-18">„Terapijske smjernice za osteoartritis <br> - koja je uloga kristaliziranog glukozamina?“</p>
                            </div>
                        </div>

                        <div class="blue w-100 h-5">

                        </div>
                    </div>

                    <div class="w-40">
                        <img class="w-100" src="{{asset('/Images/Group 30-image.png')}}">
                    </div>


                </div>

                <div class="d-flex flex-column my-5">
                    <div class="red d-flex flex-column align-items-center">
                        <div class="w-50 d-flex flex-column p-5">

                            <div class="title-container">
                                <h3 class="white">AGENDA:</h3>
                            </div>

                            <div class="d-flex flex-column">
                                <div class="d-flex justify-content-between">
                                    <p class="white fs-14">Uvodna riječ:<br>dr.Mirsada Pinjo, direktorica Mylan-a u BiH</p>
                                    <p class="white fs-18">18:00 - 18:05</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="white fs-14">„Smjernice u liječenju osteoartritisa“<br>
                                        Prof.dr.sc. Tatjana Bućma, spec. fizikalne<br>
                                        medicine i rehabilitacije, Zavod za fizikalnu<br>
                                        medicinu i rehabilitaciju “Dr Miroslav Zotović”
                                        </p>
                                    <p class="white fs-18">18:05 - 18:25</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="white fs-14">„Uloga glukozamina u liječenju<br>	
                                        osteoartritisa i zašto je jedino kristalizirani<br>
                                        glukozamin sulfat registriran kao lijek:<br>
                                        rezultati kliničkih ispitivanja“<br>
                                        Prof.dr.sc. Mirsad Muftić, spec. fizikalne medicine<br>
                                        i rehabilitacije, subspec. reumatolog, Privatna<br>
                                        ordinacija za fizikalnu terapiju i rehabilitaciju MHS<br> 
                                        </p>
                                    <p class="white fs-18">18:25 - 18:45</p>
                                </div>
                                <div class="d-flex justify-content-between">
                                    <p class="white fs-14">Pitanja i odgovori</p>
                                    <p class="white fs-18">18:45 - 19:00</p>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="blue">

                    </div>
                </div>
                    
                <div class="form-container form my-5" id="regform-container">

                    <form class="d-flex flex-column container align-items-center justify-content-center p-5" action="" method="POST">
                        <div class="title-container">
                            <h3>PODACI ZA REGISTRACIJU</h3>
                        </div>
                        <div class="form-group w-75">
                            <label class="text-bold" for="nameinput">Ime</label>
                            <input type="text" class="form-control" name="nameinput" id="nameinput" placeholder="Unesite ime" required>
                        </div>

                        <div class="form-group w-75">
                            <label class="text-bold" for="nameinput">Prezime</label>
                            <input type="text" class="form-control" name="lastnameinput" id="lastnameinput" placeholder="Unesite prezime" required>
                        </div>

                        <div class="form-group w-75">
                            <label class="text-bold" for="nameinput">E-mail</label>
                            <input type="email" class="form-control" name="emailinput" id="emailinput" placeholder="Unesite e-mail adresu" required>
                        </div>

                        <div class="form-group w-75">
                            <label class="text-bold" for="nameinput">Ustanova</label>
                            <input type="text" class="form-control" name="ustanovainput" id="ustanovainput" placeholder="Unesite ustanovu" required>
                        </div>

                        <div class="form-group w-75">
                            <label class="text-bold" for="nameinput">Specijalizacija</label>
                            <input type="text" class="form-control" name="specinput" id="specinput" placeholder="Unesite specijalizaciju" required>
                        </div>

                        <div class="form-group w-75">
                            <label class="text-bold" for="nameinput">Grad</label>
                            <input type="text" class="form-control" name="cityinput" id="cityinput" placeholder="Unesite grad" required>
                        </div>

                        <div class="form-group w-75">
                            <small id="emailHelp" class="form-text text-muted w-50">Dajem suglasnost da Purple Key d.o.o. moje osobne podatke koristi za: <ul><li>komunikaciju vezano za webinar</li></ul> komunikaciju vezano za webinar Za više informacija o tome kako Purple Key d.o.o. štiti vaše osobne podatke, molimo pogledajte našu politiku privatnosti <a href="https://purplekey.ba/privacy-policy">https://purplekey.ba/privacy-policy</a>,</small>
                            <input type="checkbox" id="checkbox" name="checkbox" required>
                            <label class="w-50" for="checkbox"><small>Slažem se da se moji podaci koriste u gore navedene svrhe.</small></label>
                            <br>
                            <small class="text-bright-red">*obavezna polja</small>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-danger">Registrirajte se</button>
                        </div>
                        
                    </form>

                </div>

                <div class="my-5 container d-flex flex-align-center justify-content-center w-100">
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{asset('/Images/Group 7.svg')}}">
                        <p>Kliknite za kratki sažetak karakteristika lijeka Arthryl</p>
                    </div>
                    <div class="d-flex flex-column align-items-center">
                        <img src="{{asset('/Images/Rectangle 10-image.png')}}">
                    </div>
                </div>
            </div>
        </main>

        <footer>
            @include('layouts.footer')
        </footer>

    </body>
</html>
