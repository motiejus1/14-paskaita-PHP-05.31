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
        if(isset($_GET["vardas"]) && !empty($_GET["vardas"]) && isset($_GET["pavarde"]) && !empty($_GET["pavarde"]) && isset($_GET["teises_id"]) && !empty($_GET["teises_id"]) ) {
            $vardas = $_GET["vardas"];
            $pavarde = $_GET["pavarde"];
            $vardas = $_GET["vardas"];

            $sql = "INSERT INTO klientai (vardas, pavarde, teises_id) VALUES ('IdetasPErPHp','IdetasPErPHp',6)";

            if(mysqli_query($prisijungimas, $sql)) {
                echo "Irasas yra pridetas";
            } else {
                echo "Kazkas ivyko negerai";
            }
        }
    }
    
    ?>
</body>
</html>
<?php 
// Sukurti forma, kuri pagal ivestus duomenis isaugo duomenu bazes lenteleje Klientai.


?>