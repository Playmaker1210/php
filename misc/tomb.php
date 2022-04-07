<html>
    <head><title>tomb</title></head>
    <body>
        <?php 
            $primek =  [2, "alma", true, 3.14];
            $primek[100] = 100;

            $asszoctomb  = [
                "alma" => "piros",
                "korte" => "sarga",
                "uborka" => "zold"
            ];

            print_r($primek);
            echo "<br>".$primek[0];
            echo "<br>".$primek[100];
            echo "<br><br>";
            var_dump($asszoctomb);
            echo "<br>".$asszoctomb["alma"];
            echo "<br>".$asszoctomb["korte"];
            echo "<br>".$asszoctomb["uborka"];

            echo "<br>for print<br>";
            foreach($asszoctomb as $value){
                echo $value." - ";
            }

            echo "<br><br>";

            foreach($asszoctomb as $key => $value){
                echo '<br>$asszoctomb['.$key.']='.$value;
            }

            $kulcsok = array_keys($asszoctomb);
            $kulcsok2 = array_keys($primek);
            echo "<br><br>";
            print_r($kulcsok = array_values($asszoctomb));
            print_r($kulcsok2 = array_values($primek));

        ?>
    </body>
</html>