<?php 

    include("db.php");
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $dom = $_POST['domicilio'];
    $cp = $_POST['codigopostal'];
    $tel = $_POST['telefono'];
    $email = $_POST['email'];
    $loca = $_POST['localidad'];
    $estado = $_POST['estado'];
    $pais = $_POST['pais'];
    
    $cat = $_POST['id_categoria'];

    $actu="UPDATE provedor SET nombre_pro = '$nombre', domicilio = '$dom', cp = '$cp', 
    localidad = '$loca', estado = '$estado', pais = '$pais', telefono = '$tel', email = '$email', id_categoria = '$cat' WHERE id = '$id'";
    $resultado=mysqli_query($conectar, $actu);
    
    header('location: ../Tprovedores.php');
    ?>