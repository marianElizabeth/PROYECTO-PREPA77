<?php
    include("funciones/conexion.php");

    $CURPDocente= $_POST[''];// 1 en la BD(datosDocente)
    $CCTEscuela= $_POST[''];//25  en la BD(datosAlumono)
    $idPuestoInstitucional = $_POST[''];// 2 en la BD(datosAlumono)
    $numeroHoras = $_POST[''];// 3 en la BD(datosAlumono)
 
    
    $sentencia=" INSERT INTO escuelasLabora VALUES(        
        '$CURPDocente',
        '$CCTEscuela',
        '$idPuestoInstitucional',
        '$numeroHoras'
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Escuela agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>