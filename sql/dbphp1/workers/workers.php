<!DOCTYPE html>
<?php
    include "../kozos/kapcsolat.php";
    $alkalmazottak = readAll($dbc, 'workers');
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Munkaviszonyok</title>
        <link href="kozos/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="container">
            <table class="table table-success table-striped my-3" >
                <tr>
                    <?php foreach ($alkalmazottak[0] as $key => $value) : ?>
                        <th><?= $key; ?></th>
                    <?php endforeach; ?>

                </tr>

                <?php foreach ($alkalmazottak as $sor) : ?>
                    <tr>
                        <?php foreach ($sor as $value) : ?>
                            <td><?= $value; ?></td>
                        <?php endforeach; ?>
                    </tr>
                <?php endforeach; ?>
            </table>
            <a href="index.php" class="btn btn-info" role="button">Vissza</a>
        </div>
        <script src="../kozos/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>