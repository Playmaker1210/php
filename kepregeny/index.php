<?php
    include_once "kapcsolat.php";

    $tabla = [];
    //print_r($tabla);

    $keys = ["id", "Kiadó", "Cím", "Sorozat", "Író", "Rajzoló", "Műfaj", "Szereplők"];
    
    if(isset($_POST['passed'])){
        $tabla = $kapcsolat->readAll($kapcsolat->getDBC(), "comics");
        print_r($tabla);
    }


    //adatok rogzitese:
    $adatok = [];
    try {
        if (isset($_POST['rogzit'])) {
            foreach ($_POST as $key => $value) {
                if($key == 'rogzit' || $key == 'keres') continue;
                if($value == null) throw new Exception("Nem adott meg minden adatot");
                if ($key <> 'insert') {
                    $adatok[$key] = $value;
                }
            }
            print_r($adatok);
            $kapcsolat->insert($kapcsolat->getDBC(), 'comics', $adatok);
        }  
    } catch (Exception) {
        echo "Nem adott meg minden adatot!";
    }

    if (isset($_POST['keres'])) {
        if($_POST['keres'] <> ""){
            $adat = $_POST['keres'];
            $tabla = $kapcsolat->kereses($kapcsolat->getDBC(), 'comics', $adat);
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
        <link rel="stylesheet" href="style.css">
        <title>Képregény</title>
    </head>
    <body>
        <div class="container-fluid">
            <h1 class="cim">Képregényeim</h1><br>
            <div class="flexbox-container">
                <form method="post" name="rogzit">
                    <div class="sor">
                        <div class="title">
                            Kiadó:
                        </div>
                        <div class="bevitel">
                            <input type="text" name="Kiadó" id="kiado">
                            <input class="gomb" type="submit" name="rogzit" value="Rögzít"/>
                        </div>
                    </div>
                    <div class="sor">
                        <div class="title">
                            Cím:
                        </div>
                        <div class="bevitel">
                            <input type="text" name="Cím" id="cim">
                        </div>
                    </div>
                    <div class="sor">
                        <div class="title">
                            Sorozat:
                        </div>
                        <div class="bevitel">
                            <input type="number" name="Sorozat" id="sorozat">
                            Keress rá egy szereplőre
                        </div>
                    </div>
                    <div class="sor">
                        <div class="title">
                            Író:
                        </div>
                        <div class="bevitel">
                            <input type="text" name="Író" id="iro">
                            <input type="text" name="keres" id="keres">
                        </div>
                    </div>
                    <div class="sor">
                        <div class="title">
                            Rajzoló:
                        </div>
                        <div class="bevitel">
                            <input type="text" name="Rajzoló" id="rajzolo">
                            <button>Keresés</button>
                        </div>
                    </div>
                    <div class="sor">
                        <div class="title">
                            Műfaj:
                        </div>
                        <div class="bevitel">
                            <input type="text" name="Műfaj" id="mufaj">
                        </div>
                    </div>
                    <div class="sor">
                        <div class="title">
                            Szereplők:
                        </div>
                        <div class="bevitel">
                            <input type="text" name="Szereplők" id="szereplok">
                        </div>
                    </div>
                </form>              
            </div>
            <div>
                <div class="tabla">
                    <table>
                        <tr>
                            <th>Kiadó</th>
                            <th>Cím</th>
                            <th>Sorozat</th>
                            <th>Író</th>
                            <th>Rajzoló</th>
                            <th>Műfaj</th>
                            <th>Szereplők</th>
                        </tr>
                        <?php
                            foreach ($tabla as $key => $value) {
                                echo "<tr>";
                                foreach ($keys as $key2 => $value2) {
                                    if($value2 == "id"){
                                        continue;
                                    }
                                    echo "<td>".$value[$value2]."</td>";
                                }
                            }
                        ?>
                    </table>
                </div>
                <div align="right">
                    <form method="post" action="index.php">                      
                        <button type="submit" name="passed" id="passed">Lekérdézés</button>
                    </form>
                </div>
            </div>
        </div>    
    </body>
    <script src="script.js"></script>
</html>