<?php
    include("funciones/conexion.php");

    $descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-Licenciatura)
    $CURPDatosDocentes= $_POST[''];//3  en la BD(docente-Licenciatura)
    $idLicenciatura = $_POST[''];// 4 en la BD(docente-Licenciatura)
    $escuelaEgresionLicenciatura = $_POST[''];// 5 en la BD(docente-Licenciatura)
 
    
    $sentencia=" INSERT INTO datosdocente_Licenciatura VALUES(        
    '$descripcionTituladoPasante',
    '$CURPDatosDocentes',
    '$idLicenciatura',
    '$escuelaEgresionLicenciatura'

    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Licenciatura agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>