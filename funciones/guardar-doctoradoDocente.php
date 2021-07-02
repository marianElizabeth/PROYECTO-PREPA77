<?php
    include("funciones/conexion.php");

    $descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-doctorado)
    $CURPDatosDocentes= $_POST[''];//3  en la BD(docente-doctorado)
    $idDoctorado = $_POST[''];// 4 en la BD(docente-doctorado)
 
    
    $sentencia=" INSERT INTO datosdocente_doctorado VALUES(        
    '$descripcionTituladoPasante',
    '$CURPDatosDocentes',
    '$idDoctorado'
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Escuela agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>