<html>
    <head><title>Masodfoku</title></head>
    <body>
        <form method="post">
            a<input type="number" name="a"><br>
            b<input type="number" name="b"><br>
            c<input type="number" name="c"><br>
            <input type="submit" name="submit">
        </form>
        <?php 
            $a = $_POST["a"];
            $b = $_POST["b"];
            $c = $_POST["c"];
            $d = -1;

            if($a == 0 && $b == 0 && $c == 0){
                echo "azonossag";
            }elseif($a == 0 && $b == 0 && $c != 0){
                echo "ellentmondas";
            }elseif($a == 0 && $b != 0 && $c != 0){
                $x = -($c/$b);
                echo "\n.$x";
            }elseif($a != 0){
                $d = ($b * $b) - (4 * $a * $c);
            }

            if($d > 0){
                echo "\nkét megoldás van";
            }elseif($d == 0){
                echo "\negy megoldás van";
            }else{
                echo "\nnincs megoldas";
            }
        ?>
    </body>
</html>