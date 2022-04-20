<!DOCTYPE html>
<?php
include "kozos/kapcsolat.php";

$workers = $kapcsolat->readAll($kapcsolat->getDBC(), 'workers');

print_r($workers);
echo "<hr>";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Workers</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container-fluid w-75">
            <a class="btn btn-info" href="insert.php">Hozzáadás</a>
            <table class="table table-info table-striped my-3" >
                <tr>         
                    <?php foreach ($workers[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>
                    <!--Műveletek oszlop -->
                    <th colspan='3' style="text-align: center; width:20%;" >Műveletek</th>
                </tr>
                <?php foreach ($workers as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $key => $value) : ?>
                            <?php if ($key == 'kep') : ?>
                                <td><img class="img-thumbnail" src="img/<?= $value; ?>" /></td>
                            <?php else : ?>
                                <td><?= $value; ?></td>
                            <?php endif; ?>
                        <?php endforeach; ?>
                        <!--Műveletek  létrehozás id oszlopra -->
                    <div >
                        <td><a class="btn btn-info" href="workers_view.php?id=<?= $sor['id']; ?>"> Megtekint </a></td>
                        <td><a class="btn btn-info" href="update.php?id=<?= $sor['id']; ?>"> Szerkeszt </a></td>
                        <td><a class="btn btn-info" href="delete.php?id=<?= $sor['id']; ?>"> Töröl </a></td>
                    </div>
                    </tr>
                <?php endforeach; ?>
            </table> 
            <a class="btn btn-info" href="index.php">Vissza</a>
        </div>
        <script src="kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>