<?php
    include("funciones/conexion.php");

    $CURPDocente= $_POST['txtCURPDocente'];// 1 en la BD(datosDocente)
    $nombreDocente = $_POST['txtNombreDocente'];// 2 en la BD(datosDocente)
    $ape1Docente = $_POST['txtApePDocente'];// 3 en la BD(datosDocente)
    $ape2Docente = $_POST['txtApeMDocente'];// 4 en la BD(datosDocente)
    $fechaNacimientoDocente = $_POST['fechaNacimientoDocente'];// 5 en la BD(datosDocente)
    $RFCDocente = $_POST['txtRFCDocente'];//6  en la BD(datosDocente)
    $claveISSEMYM= $_POST['txtClaveISSEMYM'];//7 en la BD(datosDocente)
    $telefonoCelular= $_POST['txtTelefonoCelularDocente'];//8 en la BD(datosDocente)
    $telefonoFijo= $_POST['txtTelefonoFijoDocente'];//9 en la BD(datosDocente)
    

    $noCedulaProfesional= $_POST['txtNoCedulaProfDocente'];// 10 en la BD(datosDocente)
    $fechaEscuelaEgresion= $_POST['fechaEgresion'];//11 en la BD(datosDocente)
    $fechaEgresoEspecializacion= $_POST['fechaEgresoEspecializacion'];//12  en la BD(datosDocente)
    $fechaEgresoDiplomado= $_POST['fechaEgresoDiplomado'];// 13 en la BD(datosDocente)
    $noCedulaProfesionalMaestria= $_POST['txtNoCedulaMaestria'];// 14 en la BD(datosDocente)
    $noCedulaProfesionalDoctorado= $_POST['txtNCedulaDoctorado'];//15 en la BD(datosDocente)
    $fechaDeIngresoSEducativoEstatal= $_POST['fechaIngresoSEducativo'];//16 en la BD(datosDocente)    
    $fechaDeIngresoAlNivel= $_POST['fechaIngresoNivel'];//17 en la BD(datosDocente)
    $fechaDeBaseAlNivel= $_POST['fechaBaseNivel'];//18 en la BD(datosDocente)
    $fechaDeIngresoAlCargo= $_POST['fechaIngresoCargo'];//19 en la BD(datosDocente)
    $fechaDeIngresoInstitucion= $_POST['fechaIngresoInstitucional']; //20 en la BD(datosDocente)
    $fechaDeIngresoCarreraDocente= $_POST['fechaCarreraDocente']; //21 en la BD(datosDocente)
    $puntajeEscalafonario= $_POST[''];//22 en la BD(datosDocente)
    $numPlaza= $_POST['txtNoPlaza'];//23 en la BD(datosDocente)
    $numPrelacion= $_POST['txtNumPrelacion'];// 24  en la BD(datosDocente)
    
    $CCTEscuela= $_POST[''];//25  en la BD(datosDocente)
    $idNivelLaboral= $_POST['cmbNivel'];// 26  en la BD(datosDocente)
    $idPuestoInstitucional= $_POST['txtPuestoFuncional'];//27  en la BD(datosDocente)
    $idLocalidad= $_POST['txtLocalidadDocente'];// 28 en la BD(datosDocente)
    $calleDocente= $_POST['txtCalleDocente'];//29  en la BD(datosDocente)    
    $numeroDomicilio= $_POST['txtNumDocente'];//30  en la BD(datosDocente)
    $colonia= $_POST['txtColoniaDocente'];//31  en la BD(datosDocente)
    $CP= $_POST['txtCPDocente'];//32  en la BD(datosDocente)    
    
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
        $idNivelLaboral,
        $idPuestoInstitucional,
        $idLocalidad,        
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