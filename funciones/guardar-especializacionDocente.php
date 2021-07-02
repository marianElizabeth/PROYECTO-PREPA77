<?php
    include("funciones/conexion.php");

    $descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-Especializacion)
    $CURPDatosDocentes= $_POST[''];//3  en la BD(docente-Especializacion)
    $idEspecializacion = $_POST[''];// 4 en la BD(docente-Especializacion)
 
    
    $sentencia=" INSERT INTO datosdocente_Especializacion VALUES(        
    '$descripcionTituladoPasante',
    '$CURPDatosDocentes',
    '$idEspecializacion'
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Especializacion agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>