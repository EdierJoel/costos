
<?php

$server = "servidor1242.il.controladordns.com";
$user = "sonicbea_tram";
$password = "VfQnYRVhg39RCgq";
$db = "sonicbea_erp";

 /*$server = "localhost";
 $user = "root";
 $password = "";
 $db = "costos";*/

$conectar = mysqli_connect($server, $user, $password, $db);
if (!$conectar) {
    echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
}

?>