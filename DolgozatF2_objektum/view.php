<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";
$adatok = $kapcsolat->readOne($kapcsolat->getDBC(), 'pizzak', $_GET['id']);
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Alkalmozottak</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class="container">
            <ul>
                <?php foreach ($adatok[0] as $key => $value) : ?>
                    <li class="my-3"><?= "<b>$key: </b> $value"; ?> </li>
                <?php endforeach; ?>
                <a class="btn btn-info" href="index.php">Vissza</a>
            </ul>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>