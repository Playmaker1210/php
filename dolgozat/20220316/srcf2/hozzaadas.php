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
    <body style="margin-left: 10%;">
        <form name="adatok" method="POST">
            <fieldset>
                <label for="nev">Nev </label><br>
                <input id="nev" type="text" name="nev" value=""><br>
                <label for="feltet">Feltét </label><br>
                <input id="feltet" type="text" name="feltet" value=""><br>
                <label for="ar">Ár </label><br>
                <input id="ar" type="text" name="ar" value=""><br>
                <label for="kep">Kép </label><br>
                <input id="kep" type="text" name="kep" value=""><br>
            </fieldset>
        </form>
        <br>
        <?php 
            function lekeres(){
                $nev = $_POST['nev'];
                $feltet = $_POST['feltet'];
                $ar = $_POST['ar'];
                $kep = $_POST['kep'];
    
                echo $nev;
                echo $feltet;
                echo $ar;
                echo $kep;
            }
        
        ?>
        <a class="btn btn-info" role="button" name="lekeres">Beszúrás</a>
        <a href="f2.php" class="btn btn-info" role="button">Vissza</a>
        <script src="bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>

<?php
        /*if(array_key_exists('button1', $_POST)) {
            button1();
        }
        else if(array_key_exists('button2', $_POST)) {
            button2();
        }
        function button1() {
            echo "This is Button1 that is selected";
        }
        function button2() {
            echo "This is Button2 that is selected";
        }*/
    ?>
  
    <!--<form method="post">
        <input type="submit" name="button1"
                class="button" value="Button1" />
          
        <input type="submit" name="button2"
                class="button" value="Button2" />
    </form>-->


