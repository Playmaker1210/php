<?php
            class Mezo{
                private $nev;
                private $ertek;

                public function __construct($nev, $ertek){
                    $this->nev = $nev;
                    $this->ertek = $ertek;
                    echo "<br>létrejött az $this->nev objektum<br>";
                }
                public function __destruct()
                {
                    echo "<br>megszunt az $this->nev <br>";
                }

                public function getErtek(){
                    return $this->ertek;
                }
                public function setErtek($ertek){
                    $this->ertek = $ertek;
                }
                public function getNev(){
                    return $this->nev;
                }
                public function setNev($nev){
                    $this->nev = $nev;
                }
            }
        ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title></title>
    </head>
    <body>
        <?php
            $mezo1 = new Mezo("Tamás", 6);
            //$mezo1->ertek = "Tamás";        
            //$mezo1->setErtek("Tamás");
            echo $mezo1->getErtek();

            $mezo2 = new Mezo("Zsolt", 9);       
            //$mezo2->setErtek("Zsolt");
            echo $mezo2->getErtek();
        ?>
    </body>
</html>