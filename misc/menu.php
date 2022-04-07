<html>
    <head>
        <title>Menu</title>
        <link rel="stylesheet" href="menu.css">
        <?php
            include_once 'fuggvenyek.php';
        ?>
    </head>
    <body>
        <header><?php echo $oldal['header'] ?></header>
        <main>
            <br>
            <?php
                for($i = 0; $i < count($oldal['tartalom']); $i++){
                    echo "<h4>".$oldal['tartalom'][$i][0]."</h4><p>".$oldal['tartalom'][$i][1]."</p><br>";
                }
            ?>
        </main>
        <footer>
            <?= 'Készítette:'.$oldal['footer']['ceg'].'     &COPY '.$oldal['footer']['ev']; ?>
        </footer>
    </body>
</html>