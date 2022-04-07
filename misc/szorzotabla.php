<html>
    <head> <title>Szorzotabla</title></head>
    <body>
        <?php 
            for($i = 1; $i <= 10; $i++){
                for($j = 1; $j <= 10; $j++){
                    $value = $i * $j;
                    echo($value." ");
                } 
                echo("<br>" );
            }
        ?>
    </body>
</html>