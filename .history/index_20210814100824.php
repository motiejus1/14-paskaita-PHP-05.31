<?php 

//1. Turime prisijungti prie duomenu bazes
//2. Atlikti tam tikras uzklausas(SELECT, UPDATE, DELETE, INSERT)
//3. Uzdaryti prisijungima

// 1.Prisijungimas

require_once("connection.php");
//connection.php faile, index.php faile dabar yra pasiekiami

//$uzklausa = ""
$sql = "SELECT * FROM `klientai` WHERE 1"; // tekstas
$rezultatas = $prisijungimas->query($sql);// vykdo uzklausa

//Grazina ne viena rezultata

while($klientai = mysqli_fetch_array($rezultatas)) {
    echo $klientai
}
 // is uzklausos paimk rezultatus ir juos sudek i masyva

var_dump($klientai);

?>