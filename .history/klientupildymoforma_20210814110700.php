<?php 
require_once("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kleintu pildymo forma</title>
</head>
<body>
    <form action="klientupildymoforma.php" method="get">
        <input type="text" value="test" name="vardas"/>
        <input type="text" value="test" name="pavarde"/>
        <input type="text" value="5" name="teises_id"/>
        <button type="submit" name="prideti">Pridėti naują klientą</button>
    </form>

    <?php 
    if(isset($_GET["prideti"])) {
        
    }
    
    ?>
</body>
</html>
<?php 
// Sukurti forma, kuri pagal ivestus duomenis isaugo duomenu bazes lenteleje Klientai.


?>