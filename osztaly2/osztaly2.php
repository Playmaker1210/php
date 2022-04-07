<?php
    class Select{
        private $name;
        private $value;

        public function __construct($value){
            $this->setValue($value);
        }

        public function setName($name){
            $this->name = $name;
        }
        public function getName(){
            return $this->name;
        }

        public function setValue($value){
            //tomb ellenorzes
            if(!is_array($value)){
                throw new Exception("Az átadott érték nem tömb");
            }else{
                $this->value = $value;
            }
        }
        public function getValue(){
            return $this->value;
        }

        public function makeOptions($value){
            //opciok letrehozasa
            for($i = 0; $i < count($value); $i++){
                echo "<option>$value[$i]</option>";
            }
        }
        
        public function makeSelect(){
            //lenyilo menu letrehozas
            echo "<select>";
            $this->makeOptions($this->getValue());
            echo "</select>";
        }
    }

    print_r($_POST);
    $nev = "";
    $felhasznalo = "";
    $email = "";
    $bongeszo = "";

    function lekeres(){
        $nev = $_POST['nev'];
        $felhasznalo = $_POST['felhasznalo'];
        $email = $_POST['email'];
        $bongeszo = $_POST['bongeszo'];

        if($_POST['submit'] == "Submit"){
            echo "<div>";
            echo $nev;
            echo $felhasznalo;
            echo $email;
            echo $bongeszo;
            echo "</div>";
        }
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Legördülő menü</title>
    </head>
    <body style="margin-left: 35%; margin-top: 5%;">
    <form name="adatok" actioin="osztaly2.php" method="POST">
            <fieldset>
                <label for="nev">Nev </label><br>
                <input id="nev" type="text" name="nev" value=""><br>
                <label for="felhasznalo">Felhasználónév </label><br>
                <input id="felhasznalo" type="text" name="felhasznalo" value=""><br>
                <label for="email">Email </label><br>
                <input id="email" type="text" name="email" value=""><br>
                <label for="bongeszo">Bongeszo</label><br>
                <?php
                    $select = new Select(["Firefox", "Chrome", "Edge", "Opera GX", "Safari"]);
                    $select->makeSelect();     
                ?><br><br>
                <input type="submit" name="submit" value="Submit"/>
            </fieldset>
        </form>
        <?php

        ?>
    </body>
</html>