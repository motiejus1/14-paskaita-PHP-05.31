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

//Create - INSERT

$sql = "INSERT INTO `klientai(vardas, pavarde, teises_id) VALUES ('IdetasPErPHp','IdetasPErPHp',6)";

if(mysqli_query($prisijungimas, $sql)) {
    echo "Irasas yra pridetas";
} else {
    echo "Kazkas ivyko negerai";
}

mysqli_close($prisijungimas);



?>