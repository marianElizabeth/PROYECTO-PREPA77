<?php
    $servidor= "localhost";
    $usuario="root";
    $password="";
    $bD="bdPrepa";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $bD) OR DIE
        ("no se puede conectar".mysqli_connect_error());
?>