<?php 


//Prisijungimai prie duomenu bazes yra duodami
$duomenu_bazes_serveris = "localhost";
$duomenu_bazes_slapyvardis = "root";
$duomenu_bazes_slaptazodis = "";
$duomenu_bazes_pavadinimas = "klientuvaldymosistema";


$prisijungimas = mysqli_connect($duomenu_bazes_serveris,$duomenu_bazes_slapyvardis,$duomenu_bazes_slaptazodis,$duomenu_bazes_pavadinimas);

//false - kai prisijungimas yra nesekmingas, ir negrazino nieko-kai prisijungimas yra sekmingas

if($prisijungimas == false) {
    
}

?>