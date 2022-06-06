<!DOCTYPE html>
<?php
include "../kozos/kapcsolat.php";
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Frissít</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <style>
            p{
                border: 1px solid black;
                padding-left: 0.5%;
            }
        </style>
    </head>
    <body class="m-5">
        <form name="adatok" action="../szerkesztes_vegrehajtas.php" method="POST">
            <fieldset>
                <?php
                    $rekord = $kapcsolat->readOne($kapcsolat->getDBC(), 'employees', $_GET['id']);
                    //print_r($rekord);

                    foreach($rekord[0] as $key => $value){
                        //if($key == "id"){continue;}
                       echo "<label for=\"$key\">$key</label><br>";
                       if($key == "id"){
                           echo "<p class=\"w-50\" id=\"$key\" type=\"text\" name=\"$key\" value=\"$value\">$value</p>";
                       }else{
                           echo "<input class=\"w-50\" id=\"$key\" type=\"text\" name=\"$key\" value=\"$value\"><br><br>";
                       }
                       //echo $value."<br>";
                    }
                ?><br>
                <input type="submit" class="btn btn-info" value="Frissít">
                <a href="employees/employees.php" class="btn btn-info" role="button">Vissza</a>
            </fieldset>
        </form> 
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
