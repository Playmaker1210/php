<?php
    class Adatbazis{
        //adattagok
        private $host = 'localhost';
        private $dbuser = 'root';
        private $password = '';
        private $dbname = 'pizzeria';
        private $dbc;
        //konstruktor
        public function __construct(){
            try {
                $datasourcename = "mysql:host=$this->host;dbname=$this->dbname";
                //echo $datasourcename . "<hr>";
                $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
                $this->dbc = new PDO($datasourcename, $this->dbuser, $this->password, $options);
            } catch (PDOException $exc) {
                echo "Kapcsolódási hiba:" . $exc->getMessage();
            }
        }

        public function runSQL($sql_command){
            //$sql = "SELECT * FROM " . $table;
            $stmt = $this->dbc->prepare($sql_command);
            $stmt->execute();
            $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $data;
        }
        
    }

    $adatbazis = new Adatbazis();
    $adatok = $adatbazis->runSQL("SELECT * FROM pizzak");
    //print_r($adatok);
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Pizza</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container">
            <a class="btn btn-success" href=".php?id=<?= $sor['id'];?>">Hozzáadás</a>
            <table class="table table-success table-striped my-3" >
                <tr>
                <?php foreach ($adatok[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
                <?php foreach ($adatok as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <?php 
                            if(str_contains($value, ".jpg")){
                                echo "<td><img class=\"img-thumbnail\" src=\"img/$value\"></td>";
                            }else{
                                echo "<td>".$value."</td>";
                            }                 
                            ?>                           
                        <?php endforeach; ?>
                        <td><a class="btn btn-success" href="view.php?id=<?= $sor['id'];?>">Megtekint</a></td>
                        <td><a class="btn btn-success" href=".php?id=<?= $sor['id'];?>">Szerkeszt</a></td>
                        <td><a class="btn btn-success" href="delete.php?id=<?= $sor['id'];?>">Töröl</a></td>
                    </tr>
                <?php endforeach; ?>
            </table>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</html>