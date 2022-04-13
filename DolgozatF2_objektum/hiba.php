<!DOCTYPE html>
<?php
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hiba</title>
        <link href="../kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--bootstrap card-ot ghasználva a oldal közepén jelenik meg a hibaüzenet és részletes leírása-->
        <div class="container-fluid d-flex justify-content-center align-items-center text-center mt-5" style="height: 100vh;"  >
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Hiba</h5>
                    <h6 class="card-subtitle mb-2 text-muted">Hiba leírása</h6>
                    <p class="card-text">
                        <?php
                        echo "Törlési hiba: " . $_GET['hiba'];
                        ?></p>
                    <a href="index.php" class="btn btn-info">vissza</a>

                </div>
            </div>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>
