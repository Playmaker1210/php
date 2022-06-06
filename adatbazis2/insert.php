<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";

$adatok = [];
if (isset($_POST['insert'])) {
    foreach ($_POST as $key => $value) {
        if ($key <> 'insert') {
            $adatok[$key] = $value;
        }
    }
    $kapcsolat->insert($kapcsolat->getDBC(), '', $adatok); //tábla nevet hozzaadni
    header('Location: index.php');
}
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hozzáadás</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container  w-50">
            <form name="uj" method="POST">
                <div class="mb-3">
                    <label for="nev" class="form-label">Név</label>
                    <input type="text" class="form-control" id="nev" name="nev" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="cim" class="form-label">Cím</label>
                    <input type="text" class="form-control" id="cim" name="cim" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="fizetes" class="form-label">Fizetés</label>
                    <input type="number" class="form-control" id="fizetes" name="fizetes" placeholder="">
                </div>
                <input class="btn btn-info" type="submit" name="insert" value="Beszúrás" />
                <a class="btn btn-info" href="index.php">Vissza</a>
            </form>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>