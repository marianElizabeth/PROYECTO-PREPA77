<?php
    include("funciones/conexion.php");

    $descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-Maestria)
    $CURPDatosDocentes= $_POST[''];//3  en la BD(docente-Maestria)
    $idMaestria = $_POST[''];// 4 en la BD(docente-Maestria)
 
    
    $sentencia=" INSERT INTO datosdocente_Maestria VALUES(        
    '$descripcionTituladoPasante',
    '$CURPDatosDocentes',
    '$idMaestria'
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Escuela agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>