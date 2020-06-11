
<?php  
 
 $server = "localhost";
 $user = "root";
 $password = "";
 $db = "costos";
 
 $conectar = mysqli_connect($server, $user, $password, $db);
 if (!$conectar) {
     echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
 }
 
  ?>