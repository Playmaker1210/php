<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";

$tabla = "employees";

print_r($_GET);

$alkalmazottak = $kapcsolat->readAll($kapcsolat->getDBC(), $tabla);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Megtekintés</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div style="margin-left: 10%;">
        <?php
            $test = $kapcsolat->readOne($kapcsolat->getDBC(), $tabla, $_GET['id']);
            //print_r($test);

            echo "<ul>";
            foreach($test[0] as $key => $value){
                echo "<li><b>".$key.":</b> ".$value."</li><hr>";
            }
            echo "</ul>";      
        ?>
        <a href="employees.php" class="btn btn-info" role="button">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js"></script>
    </body>
</html>