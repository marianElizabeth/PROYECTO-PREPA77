<?php
    include("funciones/conexion.php");

    $descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-diplomado)
    $CURPDatosDocentes= $_POST[''];//3  en la BD(docente-diplomado)
    $idDiplomado = $_POST[''];// 4 en la BD(docente-diplomado)
 
    
    $sentencia=" INSERT INTO datosdocente_Diplomado VALUES(        
    '$descripcionTituladoPasante',
    '$CURPDatosDocentes',
    '$idDiplomado'
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Diplomado agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>