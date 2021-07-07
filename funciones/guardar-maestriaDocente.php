<?php
    include("conexion.php");
    //MAESTRIA
    $descripcionTituladoPasanteMaestria= $_POST['cmbEstatusMaestria'];// 2 en la BD( docente-Maestria)
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Maestria)
    $idMaestria = $_POST['cmbMaestria'];// 4 en la BD(docente-Maestria)
    $noCedulaProfesionalMaestria= $_POST['txtNoCedulaMaestria'];// 14 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )    
 
    
    $sentenciaMaestria=" INSERT INTO datosdocente_maestria VALUES(        
    DEFAULT,
    '$descripcionTituladoPasanteMaestria',
    '$CURPDatosDocentes',
    $idMaestria,
    '$noCedulaProfesionalMaestria'
    );";

    if(mysqli_query($conexion,$sentenciaMaestria)){
        header("Location: ../VerMaestriaDocente.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>

