<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra= "lamp1999";
    $baseDatos="pre77";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $contra,
        $baseDatos) OR DIE
        ("no se puede conectar".mysqli_connect_error());
?>