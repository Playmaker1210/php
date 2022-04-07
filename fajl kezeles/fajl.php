<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
        <title></title>
    </head>
    <body>
        <?php
            //print_r($_SERVER);
            /*$gyoker = $_SERVER['Document_root'];
            $projekt = 'fajl_2022_01';
            $file = 'adatok.txt';
            $fajl_eleres = "$gyoker/$projekt/$file";
            echo $fajl_eleres."<hr>";*/


            $adatok = file('adatok.txt');
            print_r($adatok);

            $file_handler = fopen('adatok.txt', 'rw');
            $adatok2 = [];
            $szamlalo = 0;
            while(!feof($file_handler)){
                $adatok2[$szamlalo++] = fgets($file_handler);
            }
            fclose($file_handler);



            print_r($adatok2);
            echo "<hr>";
        ?>
        <div class="container">
            <?php foreach($adatok2 as $sor): ?>
                <table class="table table-success table-striped">
                    <tr>
                        <td>
                            <?php foreach($adatok2 as $sor2): ?>
                                <?php endforeach?>

                        </td>
                            
                    </tr>
                </table>
                        
            <?php endforeach?>
        </div>
    </body>
</html>