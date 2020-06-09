<?php 

    include("db.php");

    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $fecha = $_POST['fecha'];

    $consulta="INSERT INTO reglamento (titulo, descripcion, fecha) VALUES ('$titulo', '$descripcion', '$fecha')";
    $resul=mysqli_query($conectar, $consulta);

    header('location: Treglamento.php')
    
    ?>