<?php
include "kapcsolat.php";

try{
    deleteOne($dbc, 'pizzak', $_GET['id']);
    header('location: f2.php');
}catch(Exception $exc){
    header("Location: hiba.php?hiba=" . $exc->getMessage());
}

?>