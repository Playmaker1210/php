<?php

$host = 'localhost';
$dbuser = 'root';
$password = '';
$dbname = 'pizzeria';

try {
    $datasourcename = "mysql:host=$host;dbname=$dbname";
    echo $datasourcename . "<hr>";
    $options = [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8", PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION];
    $dbc = new PDO($datasourcename, $dbuser, $password, $options);
} catch (PDOException $exc) {
    echo "Kapcsolódási hiba:" . $exc->getMessage();
}

function readAll($dbc, $table){
    $sql = "SELECT * FROM $table;";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();
    return $utasitas->fetchAll(PDO::FETCH_ASSOC);
}

function readOne($dbc, $table, $id){
    $sql = "SELECT * FROM $table WHERE id=$id;";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();
    return $utasitas->fetchAll(PDO::FETCH_ASSOC);
}

function deleteOne($dbc, $table, $id){
    $sql = "DELETE FROM $table WHERE id=$id";
    $utasitas = $dbc->prepare($sql);
    $utasitas->execute();
}