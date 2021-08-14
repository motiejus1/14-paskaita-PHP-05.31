<?php 

require_once("connection.php");


$sql = "SELECT * FROM `klientai`"; // tekstas

$result = mysqli_query($prisijungimas,$sql);

while($klientai = mysqli_fetch_array($result)) {



    echo $klientai["ID"];
    echo " ";
    echo $klientai["vardas"];
    echo " ";
    echo $klientai["pavarde"];
    echo " ";
    echo $klientai["teises_id"];

    echo "<a href='klientai.php?klientoid=".$klientai["ID"]."'>".$klientai["vardas"]."</a>";

    echo "<br>";
}





?>