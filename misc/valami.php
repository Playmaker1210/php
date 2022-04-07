<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Dunno</title>
        <?php include_once 'functions.php'?>
    </head>
    <body>
    <form name="adatok" method="POST">
        <legend>Adatok bekerese</legend>
        <fieldset>
            <label for="neme">Nem:</label>
            <div>
                <select id="neme" name="nem">
                    <option value="F">Férfi</option>
                    <option value="N">Nő</option>
                </select>
            </div>
            <div><br>
                <label for="kor">Kor: </label>
                <input type="number" name="kor" id="kor" value=""/>
            </div><br>
            <input type="submit" name="elkuld" value="elkuld"/>
        </fieldset>   
    </form> 
    </body>
</html>