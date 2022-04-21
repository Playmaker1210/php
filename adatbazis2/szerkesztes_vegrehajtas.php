<!DOCTYPE html>
<html>
    <body>
    <?php
        include "kozos/kapcsolat.php";

        $id = $_POST['id'];
        $name = $_POST['name'];
        $address = $_POST['address'];
        $salary = $_POST['salary'];
        echo $name."<br>";
        echo $address."<br>";
        echo $salary."<br>";

        try{
            //$kapcsolat->deleteOne($kapcsolat->getDBC(), 'employees', $id); //rekord torlese az uj adatok atadasa elott
            //$uj = "UPDATE `employees` (`id`, `name`, `address`, `salary`) VALUES ('$id','$nev','$address','$salary')"; //sql parancs
            $sql = "UPDATE `employees` SET name='$name' and address='$address' and salary='$salary' WHERE id='$id'";
            $kapcsolat->getDBC()->exec($sql);
            echo "Az új rekord létrehozása sikeres!";
        }catch(PDOException $e){
            echo $sql."<br>".$e->getMessage();
        }
    ?>
    <br><br><a href="employees.php" class="btn btn-info" role="button">Vissza</a>
    </body>
</html>
