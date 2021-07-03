<?php
    include("funciones/conexion.php");

    $nombreMadre= $_POST[''];
    $ape1Madre= $_POST[''];
    $ape2Madre= $_POST[''];
    $telefonoCelularMadre= $_POST[''];
    $CURPMadre= $_POST[''];
    $claveElectroMadre= $_POST[''];
    $idOcupacion= $_POST[''];
    $idNivelEscolar= $_POST[''];
    $idParentesco= $_POST[''];
    $matricula= $_POST[''];

    $sentencia= "INSERT INTO madre VALUES (
        '$nombreMadre',
        '$ape1Madre',
        '$ape2Madre',
        '$telefonoCelularMadre',
        '$CURPMadre',
        '$claveElectroMadre',
        $idOcupacion,
        $idNivelEscolar,
        $idParentesco,
        '$matricula'
    )";
    if(mysqli_query($conexion,$sentencia)){
        echo "Madre Almacenado correctamente";
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>