<?php
    include("funciones/conexion.php");

    $CURPDocente= $_POST[''];// 1 en la BD(datosDocente)
    $nombreDocente = $_POST[''];// 2 en la BD(datosAlumono)
    $ape1Docente = $_POST[''];// 3 en la BD(datosAlumono)
    $ape2Docente = $_POST[''];// 4 en la BD(datosAlumono)
    $fechaNacimientoDocente = $_POST[''];// 5 en la BD(datosAlumono)
    $RFCDocente = $_POST[''];//6  en la BD(datosAlumono)
    $claveISSEMYM= $_POST[''];//7 en la BD(datosAlumono)
    $telefonoCelular= $_POST[''];//8 en la BD(datosAlumono)
    $telefonoFijo= $_POST[''];//9 en la BD(datosAlumono)
    

    $noCedulaProfesional= $_POST[''];// 10 en la BD(datosAlumono)
    $fechaEscuelaEgresion= $_POST[''];//11 en la BD(datosAlumono)
    $fechaEgresoEspecializacion= $_POST[''];//12  en la BD(datosAlumono)
    $fechaEgresoDiplomado= $_POST[''];// 13 en la BD(datosAlumono)
    $noCedulaProfesionalMaestria= $_POST[''];// 14 en la BD(datosAlumono)
    $noCedulaProfesionalDoctorado= $_POST[''];//15 en la BD(datosAlumono)
    $fechaDeIngresoSEducativoEstatal= $_POST[''];//16 en la BD(datosAlumono)    
    $fechaDeIngresoAlNivel= $_POST[''];//17 en la BD(datosAlumono)
    $fechaDeBaseAlNivel= $_POST[''];//18 en la BD(datosAlumono)
    $fechaDeIngresoAlCargo= $_POST[''];//19 en la BD(datosAlumono)
    $fechaDeIngresoInstitucion= $_POST['']; //20 en la BD(datosAlumono)
    $fechaDeIngresoCarreraDocente= $_POST['']; //21 en la BD(datosAlumono)
    $puntajeEscalafonario= $_POST[''];//22 en la BD(datosAlumono)
    $numPlaza= $_POST[''];//23 en la BD(datosAlumono)
    $numPrelacion= $_POST[''];// 24  en la BD(datosAlumono)
    
    $CCTEscuela= $_POST[''];//25  en la BD(datosAlumono)
    $idNivelLaboral= $_POST[''];// 26  en la BD(datosAlumono)
    $idPuestoInstitucional= $_POST[''];//27  en la BD(datosAlumono)
    $idLocalidad= $_POST[''];// 28 en la BD(datosAlumono)
    $calleDocente= $_POST[''];//29  en la BD(datosAlumono)    
    $numeroDomicilio= $_POST[''];//30  en la BD(datosAlumono)
    $colonia= $_POST[''];//31  en la BD(datosAlumono)
    $CP= $_POST[''];//32  en la BD(datosAlumono)    
    
    $sentencia=" INSERT INTO datosDocente (CURPDocente,nombreDocente,ape1Docente,ape2Docente,fechaNacimientoDocente,RFCDocente,claveISSEMYM,telefonoCelular,telefonoFijo) VALUES(        
        '$CURPDocente',
        '$nombreDocente',
        '$ape1Docente',
        '$ape2Docente ',
        '$fechaNacimientoDocente',
        '$RFCDocente',
        '$claveISSEMYM',
        '$telefonoCelular',
        '$telefonoFijo',
        '$noCedulaProfesional',
        '$fechaEscuelaEgresion',
        '$fechaEgresoEspecializacion',
        '$fechaEgresoDiplomado',
        '$noCedulaProfesionalMaestria',
        '$noCedulaProfesionalDoctorado',
        '$fechaDeIngresoSEducativoEstatal',
        '$fechaDeIngresoAlNivel',
        '$fechaDeBaseAlNivel',
        '$fechaDeIngresoAlCargo',
        '$fechaDeIngresoInstitucion',
        '$fechaDeIngresoCarreraDocente',
        '$puntajeEscalafonario',
        '$numPlaza',
        '$numPrelacion',    
        '$CCTEscuela',
        '$idNivelLaboral',
        '$idPuestoInstitucional',
        '$idLocalidad',        
        '$calleDocente',
        '$numeroDomicilio',
        '$colonia',
        '$CP'   
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Docente Almacenado Correctamene");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>