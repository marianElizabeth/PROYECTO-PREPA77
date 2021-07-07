<?php
    include("conexion.php");

    //INSERTAR DATOS EN LA LICENCIATURA
    $descripcionTituladoPasanteLicenciatura= $_POST['cmbEstatusDocente'];// 2 en la BD( docente-Licenciatura)---php linea 333
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Licenciatura) ---php linea
    $idLicenciatura = $_POST['txtLicDocente'];// 4 en la BD(docente-Licenciatura)---php linea 317
    $escuelaEgresionLicenciatura = $_POST['txtEscEgresion'];// 5 en la BD(docente-Licenciatura) ---php linea 345
    $noCedulaProfesional= $_POST['txtNoCedulaProfDocente'];// 10 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  341)
    $fechaEscuelaEgresion= $_POST['fechaEgresion'];//11 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  349)
 
    
    $sentenciaLicenciature=" INSERT INTO datosdocente_licenciatura VALUES(    
    DEFAULT,    
    '$descripcionTituladoPasanteLicenciatura',
    '$CURPDatosDocentes',
    $idLicenciatura,
    '$escuelaEgresionLicenciatura',
    $noCedulaProfesional,
    '$fechaEscuelaEgresion'
    );";

    if(mysqli_query($conexion,$sentenciaLicenciature)){
        header("Location: ../VerLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>