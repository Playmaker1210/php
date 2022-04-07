<!DOCTYPE html>
<?php
include "kapcsolat.php";

$alkalmazottak = readAll($dbc,'pizzak');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizza</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <a class="btn btn-success" href=".php?id=<?= $sor['id'];?>">Hozzáadás</a>
            <table class="table table-success table-striped my-3" >
                <tr>
                <?php foreach ($alkalmazottak[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($alkalmazottak as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <?php 
                            if(str_contains($value, ".jpg")){
                                echo "<td><img class=\"img-thumbnail\" src=\"img/$value\"></td>";
                            }else{
                                echo "<td>".$value."</td>";
                            }                        
                            ?>                           
                        <?php endforeach; ?>
                        <td><a class="btn btn-success" href="view.php?id=<?= $sor['id'];?>">Megtekint</a></td>
                        <td><a class="btn btn-success" href=".php?id=<?= $sor['id'];?>">Szerkeszt</a></td>
                        <td><a class="btn btn-success" href="delete.php?id=<?= $sor['id'];?>">Töröl</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="f2.php" class="btn btn-info" role="button">Vissza</a>
        </div>
        <script src="bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>