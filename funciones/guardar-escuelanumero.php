<?php

    include("conexion.php");

    $numPlaza= $_POST['txtNoPlaza'];//23 en la BD(datosDocente)
    $numPrelacion= $_POST['txtNumPrelacion'];// 24  en la BD(datosDocente)
    $numHoras = $_POST['txtNumHoras'];// 24  en la BD(datosDocente)
    $CCTEscuela = $_POST['txtEscuelaAsignacion'];// 24  en la BD(datosDocente)
    $CURPDocente = $_POST['txtCURPDocente'];// 24  en la BD(datosDocente)    

    $sentencia=" INSERT INTO escuelasnumeros VALUES(        
        DEFAULT,
        '$numPlaza',
        '$numPrelacion',  
        '$numHoras',
        '$CCTEscuela',
        '$CURPDocente'
    );";
    
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerEscuelaAsignacionDocente.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion)
?>