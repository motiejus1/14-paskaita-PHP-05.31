<?php



require_once("connection.php");

//Read - SELECT 
$sql = "SELECT * FROM `klientai` WHERE ID=12"; // tekstas

$result = mysqli_query($prisijungimas,$sql);

while($klientai = mysqli_fetch_array($result)) {
    echo $klientai["ID"];
    echo " ";
    echo $klientai["vardas"];
    echo " ";
    echo $klientai["pavarde"];
    echo " ";
    echo $klientai["teises_id"];
    echo "<br>";
}

mysqli_close($prisijungimas);




?>