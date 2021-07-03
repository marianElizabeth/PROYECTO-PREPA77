<?php
    include("funciones/conexion.php");

    $nombrePadre= $_POST[''];
    $ape1Padre= $_POST[''];
    $ape2Padre= $_POST[''];
    $telefonoCelularPadre= $_POST[''];
    $CURPPadre= $_POST[''];
    $claveElectorPadre= $_POST[''];
    $idOcupacion= $_POST[''];
    $idNivelEscolar= $_POST[''];
    $idParentesco= $_POST[''];
    $matricula= $_POST[''];

    $sentencia=" INSERT INTO padre VALUES(
        '$nombrePadre',
        '$ape1Padre',
        '$ape2Padre',
        '$telefonoCelularPadre',
        '$CURPPadre',
        '$claveElectorPadre',
        $idOcupacion,
        $idNivelEscolar,
        $idParentesco,
        '$matricula'
    )";

    if(mysqli_query($conexion,$sentencia)){
        echo "Padre Almacenado Correctamente";
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);

?>