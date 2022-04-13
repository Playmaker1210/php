<?php
include "kozos/kapcsolat.php";

try {
    $kapcsolat->deleteOne($kapcsolat->getDBC(), 'pizzak', $_GET['id']);
    header('location: index.php');
} catch (Exception $exc) {
    header("Location: hiba.php?hiba=" . $exc->getMessage());
}


