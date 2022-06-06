<?php
    include_once "adatbazis.php";

    $tablak = $adatbazis->readAll($adatbazis->getDBC(), "utazasicelok");
    print_r($tablak);

    $kulcsok = ["id", "nev", "megye", "kep", "tavolsag", "leiras"];

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="forrasok/bootstrap.min.css">
        <link rel="stylesheet" href="forrasok/bootstrap-icons.css">
        <link rel="stylesheet" href="style.css">
        <title>Kirandulas</title>
    </head>
    <body>
        <div class="container">
            <header>
                <div id="headerKepDiv"><img src="forrasok/img/fejlec.png" class="w-100"></div>
                <div id="nav" class="flex-container sticky-top">
                    <div id="textK" style="flex-grow: 6; margin-left: 2%;">Kirándulóhelyek</div>
                    <div><input type="text"></div>
                    <div><button class="btn btn-outline-light" id="searchButton">Keresés</button></div>
                    <div><button class="btn btn-outline-light" id="loginButton">Bejelentkezés</button></div>
                </div>
            </header><br><br>
            <div class="container">
                <main>
                    <div class="card border-dark" style="width: 18rem;">
                        <a href="" target="_blank">
                            <img class="card-img-top" src="forrasok/img/tihany.jpg" alt="Card image cap">
                        </a> 
                        <div class="card-body">
                            <h5 class="card-title ml-5 pl-5">Tihany</h5>
                        </div>
                    </div> 
                </main>
            </div>        
            <br><br><br><br><br><br><br><br><br><br><br><br>
            <footer></footer>
        </div>
        <script src="forrasok/jquery-3.5.1.min.js"></script>
        <!--<script src="forrasok/popper.min.js"></script>-->
        <script src="forrasok/bootstrap.min.js"></script>
    </body>
</html>