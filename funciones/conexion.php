<?php
    $servidor = "localhost";
    $usuario = "root";
    $contra= "";
    $baseDatos="bdPrepaOficial77";

    $conexion = mysqli_connect(
        $servidor,
        $usuario,
        $contra,
        $baseDatos) OR DIE
        ("no se puede conectar".mysqli_connect_error());
?>