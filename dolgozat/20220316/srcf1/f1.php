<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title>Feladat 1</title>
        <?php
            $file_handler = fopen('adatok.txt', 'rw');
            $adatok = [];
            $szamlalo = 0;
            while(!feof($file_handler)){
                $adatok[$szamlalo++] = fgets($file_handler);
            }
            fclose($file_handler);
            //print_r($adatok);        
            //echo '<hr>' 
        ?>
    </head>
    <body>
        <?php
            function maxMagassag($tomb){
                $index = 0;
                $max = -1;
                $first = true;
                foreach($tomb as $sor){
                    $szavak = explode(";",$sor);
                    if($first == false){
                        foreach($szavak as $adat){
                            $index++;
                            if($index == 3){
                                if($adat > $max){
                                    $max = $adat;
                                }
                            }
                        }   
                        $index = 0;                            
                    }else{
                        $first = false;
                    }
                }
                return $max;
            }

            function atlagSuly($tomb){
                $index = 0;
                $suly = 0;
                $first = true;
                foreach($tomb as $sor){
                    $szavak = explode(";",$sor);
                    if($first == false){
                        foreach($szavak as $adat){
                            $index++;
                            if($index == 4){
                                $suly += $adat;
                                //echo $suly.'<br>';
                            }
                        }   
                        $index = 0;                            
                    }else{
                        $first = false;
                    }
                }
                $suly = $suly / (count($tomb) - 1);
                return $suly;
            }
            echo "<table class=\"table table-success table-striped\">";
            foreach($adatok as $sor){
                echo "<tr>";
                
                $szavak = explode(";",$sor);
                //print_r($szavak);
                //echo "<br>";
                foreach($szavak as $oszlop){
                    echo "<td>";
                    echo $oszlop;
                    echo "</td>";
                }               
                echo "</tr>";
            }
            echo "</table>";

            echo "<hr>";
            echo "<ul>";
            echo "<li>";
            echo 'legmagasabb: '.maxMagassag($adatok).' cm';
            echo "</li>";
            echo "<li>";
            echo 'atlag suly: '.atlagSuly($adatok).' kg';
            echo "</li>";
            echo "<ul>";
        ?>

    </body>
</html>