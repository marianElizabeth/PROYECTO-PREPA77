<?php
    $servidor= "localhost";
    $usuario="root";
    $password="lamp1999";
    $bD="pre77";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $password,
        $bD) OR DIE
        ("no se puede conectar".mysqli_connect_error());
?>