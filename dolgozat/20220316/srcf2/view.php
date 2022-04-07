<!DOCTYPE html>
<?php
include "kapcsolat.php";

$alkalmazottak = readAll($dbc,'pizzak');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Megtekintés</title>
        <link href="bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="margin-left: 10%;">
        <?php
            $test = readOne($dbc, 'pizzak', $_GET['id']);
            print_r($test);

            echo "<ul>";
            foreach($test[0] as $key => $value){
                echo "<li><b>".$key.":</b> ".$value."</li>";
            }
            echo "</ul>";        
        ?>
        <a href="f2.php" class="btn btn-info" role="button">Vissza</a>
        </div>
    </body>
</html>