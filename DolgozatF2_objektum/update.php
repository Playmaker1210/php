<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";

if (isset($_POST['update'])) {
    $akt = array_pop($_POST);
    $kapcsolat->update($kapcsolat->getDBC(), 'pizzak', $_POST);
    header('Location: index.php');
} else {
    $akt = $kapcsolat->readOne($kapcsolat->getDBC(), 'pizzak', $_GET['id']);
    $akt = $akt[0];
}
?>


<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container  w-50">
            <form name="uj" method="POST">
                <input hidden  type="text" class="form-control" id="id" name="id" value="<?= $akt['id']; ?>" placeholder="">
                <div class="mb-3">
                    <label for="nev" class="form-label">Név</label>
                    <input type="text" class="form-control" id="nev" name="nev" value="<?= $akt['nev']; ?>" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="feltetek" class="form-label">Feltétek</label>
                    <input type="text" class="form-control" id="feltetek" name="feltetek" value="<?= $akt['feltetek']; ?>" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="ar" class="form-label">Ár</label>
                    <input type="number" class="form-control" id="ar" name="ar"value="<?= $akt['ar']; ?>" placeholder="">
                </div>
                <div class="mb-3">
                    <label for="kep" class="form-label">Kép(Csak a fájl nevét add meg! pl.: napoli.jpg)   </label>
                    <input type="text" class="form-control" id="kep" name="kep" value="<?= $akt['kep']; ?>" placeholder="">
                </div>


                <input class="btn btn-info" type="submit" name="update" value="Frissít" value=""  />
                <a class="btn btn-info" href="index.php">Vissza</a>
            </form>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>