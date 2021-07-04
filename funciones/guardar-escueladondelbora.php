<?php
    include("conexion.php");

    $CURPDocente= $_POST['txtCurpDocente'];// 1 en la BD(datosDocente)
    $CCTEscuela= $_POST['cmbNombreEscuela'];//25  en la BD(datosAlumono)
    $idPuestoInstitucional = $_POST['cmbPuesto'];// 2 en la BD(datosAlumono)
    $numeroHoras = $_POST['txtNoHoras'];// 3 en la BD(datosAlumono)
 
    
    $sentencia=" INSERT INTO escuelasLabora VALUES(    
        DEFAULT,    
        '$CURPDocente',
        '$CCTEscuela',
        $idPuestoInstitucional,
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