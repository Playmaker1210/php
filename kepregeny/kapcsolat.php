<?php

class Kapcsolat{
    //adattagok
    private $host = 'localhost';
    private $dbuser = 'root';
    private $password = '';
    private $dbname = 'kepregeny';
    private $dbc;

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

    //metodusok
    public function getDBC(){
        return $this->dbc;
    }
  
    public function readAll($dbc, $table) {
        $sql = "SELECT * FROM $table;";
        $utasitas = $dbc->prepare($sql);
        $utasitas->execute();
    
        return $utasitas->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //egy rekord beolvasasa
    public function readOne($dbc, $table, $id) {
        $sql = "SELECT * FROM $table WHERE id=$id;";
        $utasitas = $dbc->prepare($sql);
        $utasitas->execute();
    
        return $utasitas->fetchAll(PDO::FETCH_ASSOC);
    }

    public function kereses($dbc, $table, $szereplo) {
        $sql = "SELECT * FROM $table WHERE Szereplők = '$szereplo'";
        $utasitas = $dbc->prepare($sql);
        $utasitas->execute();
    
        return $utasitas->fetchAll(PDO::FETCH_ASSOC);
    }
    
    //egy rekord torlese
    public function deleteOne($dbc, $table, $id) {
        $sql = "DELETE FROM $table WHERE id=$id;";
        $utasitas = $dbc->prepare($sql);
        $utasitas->execute();
    }
    
    // Mivel az id automatikusan generalodik ezért a id értéke helyett NULL értéket adunk meg beillesztéskor
    //uj rekord beszurasa
    public function insert($dbc, $table, $datas) {
        $sql = "INSERT INTO $table VALUES (NULL, '";
        foreach ($datas as $value) {
            $sql .= $value . "', '";
        }
        $sql = substr($sql, 0, strlen($sql) - 3);
        $sql .= ");";
        $utasitas = $dbc->prepare($sql);
        $utasitas->execute();
    }
    
    //rekord adatinak szerkesztese
    public function update($dbc, $table, $datas) {
        $sql = "UPDATE $table SET ";
        //print_r($datas);
        foreach ($datas as $key => $value) {
            if ($key <> 'id') {
                $sql .= $key . "='" . $value . "', ";
            }
        }
        $sql = substr($sql, 0, strlen($sql) - 2);
        $sql .= " WHERE id =" . $datas['id'] . ";";
        //print_r($sql);
        $utasitas = $dbc->prepare($sql);
        $utasitas->execute();
    }
}

$kapcsolat = new Kapcsolat();
?>