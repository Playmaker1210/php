<?php
    include_once "kapcsolat.php";

    $tabla = $kapcsolat->readAll($kapcsolat->getDBC(), "comics");
    //print_r($tabla);

    $keys = ["id", "Kiadó", "Cím", "Sorozat", "Író", "Rajzoló", "Műfaj", "Szereplők"];

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
                <div class="sor">
                    <div class="title">
                        Kiadó:
                    </div>
                    <div class="bevitel">
                        <input type="text" name="kiado" id="kiado">
                        <button>Rögzít</button>
                    </div>
                </div>
                <div class="sor">
                    <div class="title">
                        Cím:
                    </div>
                    <div class="bevitel">
                        <input type="text" name="cim" id="cim">
                    </div>
                </div>
                <div class="sor">
                    <div class="title">
                        Sorozat:
                    </div>
                    <div class="bevitel">
                        <input type="number" name="sorozat" id="sorozat">
                        Keress rá egy szereplőre
                    </div>
                </div>
                <div class="sor">
                    <div class="title">
                        Író:
                    </div>
                    <div class="bevitel">
                        <input type="text" name="iro" id="iro">
                        <input type="text" name="keres" id="keres">
                    </div>
                </div>
                <div class="sor">
                    <div class="title">
                        Rajzoló:
                    </div>
                    <div class="bevitel">
                        <input type="text" name="rajzolo" id="rajzolo">
                        <button>Keresés</button>
                    </div>
                </div>
                <div class="sor">
                    <div class="title">
                        Műfaj:
                    </div>
                    <div class="bevitel">
                        <input type="text" name="mufaj" id="mufaj">
                    </div>
                </div>
                <div class="sor">
                    <div class="title">
                        Szereplők:
                    </div>
                    <div class="bevitel">
                        <input type="text" name="szereplok" id="szereplok">
                    </div>
                </div>
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
                   <button>Lekérdezés</button>
                </div>
            </div>
        </div>    
    </body>
    <script src="script.js"></script>
</html>