<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";

$sql = "SHOW TABLES;";
$utasitas = $dbc->prepare($sql);
$utasitas->execute();

$tablak = $utasitas->fetchAll(PDO::FETCH_COLUMN);
//print_r($tablak);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Adatbázis kezelés</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <table class="table table-success table-striped my-3" >
                <?php foreach ($tablak as $tabla) : ?>
                    <tr>
                        <td><?= $tabla; ?></td><td> <a href=<?="/$tabla/". $tabla . ".php"; ?>>Megjelenít </a> </td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
