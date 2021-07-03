<?php
    include("funciones/conexion.php");

    $CURPDocente= $_POST['txtCURPDocente'];// 1 en la BD(datosDocente)
    $nombreDocente = $_POST['txtNombreDocente'];// 2 en la BD(datosAlumono)
    $ape1Docente = $_POST['txtApePDocente'];// 3 en la BD(datosAlumono)
    $ape2Docente = $_POST['txtApeMDocente'];// 4 en la BD(datosAlumono)
    $fechaNacimientoDocente = $_POST['fechaNacimientoDocente'];// 5 en la BD(datosAlumono)
    $RFCDocente = $_POST['txtRFCDocente'];//6  en la BD(datosAlumono)
    $claveISSEMYM= $_POST['txtClaveISSEMYM'];//7 en la BD(datosAlumono)
    $telefonoCelular= $_POST['txtTelefonoCelularDocente'];//8 en la BD(datosAlumono)
    $telefonoFijo= $_POST['txtTelefonoFijoDocente'];//9 en la BD(datosAlumono)
    

    $noCedulaProfesional= $_POST['txtNoCedulaProfDocente'];// 10 en la BD(datosAlumono)
    $fechaEscuelaEgresion= $_POST['fechaEgresion'];//11 en la BD(datosAlumono)
    $fechaEgresoEspecializacion= $_POST['fechaEgresoEspecializacion'];//12  en la BD(datosAlumono)
    $fechaEgresoDiplomado= $_POST['fechaEgresoDiplomado'];// 13 en la BD(datosAlumono)
    $noCedulaProfesionalMaestria= $_POST['txtNoCedulaMaestria'];// 14 en la BD(datosAlumono)
    $noCedulaProfesionalDoctorado= $_POST['txtNCedulaDoctorado'];//15 en la BD(datosAlumono)
    $fechaDeIngresoSEducativoEstatal= $_POST['fechaIngresoSEducativo'];//16 en la BD(datosAlumono)    
    $fechaDeIngresoAlNivel= $_POST['fechaIngresoNivel'];//17 en la BD(datosAlumono)
    $fechaDeBaseAlNivel= $_POST['fechaBaseNivel'];//18 en la BD(datosAlumono)
    $fechaDeIngresoAlCargo= $_POST['fechaIngresoCargo'];//19 en la BD(datosAlumono)
    $fechaDeIngresoInstitucion= $_POST['fechaIngresoInstitucional']; //20 en la BD(datosAlumono)
    $fechaDeIngresoCarreraDocente= $_POST['fechaCarreraDocente']; //21 en la BD(datosAlumono)
    $puntajeEscalafonario= $_POST[''];//22 en la BD(datosAlumono)
    $numPlaza= $_POST['txtNoPlaza'];//23 en la BD(datosAlumono)
    $numPrelacion= $_POST['txtNumPrelacion'];// 24  en la BD(datosAlumono)
    
    $CCTEscuela= $_POST[''];//25  en la BD(datosAlumono)
    $idNivelLaboral= $_POST['cmbNivel'];// 26  en la BD(datosAlumono)
    $idPuestoInstitucional= $_POST['txtPuestoFuncional'];//27  en la BD(datosAlumono)
    $idLocalidad= $_POST['txtLocalidadDocente'];// 28 en la BD(datosAlumono)
    $calleDocente= $_POST['txtCalleDocente'];//29  en la BD(datosAlumono)    
    $numeroDomicilio= $_POST['txtNumDocente'];//30  en la BD(datosAlumono)
    $colonia= $_POST['txtColoniaDocente'];//31  en la BD(datosAlumono)
    $CP= $_POST['txtCPDocente'];//32  en la BD(datosAlumono)    
    
    $sentencia="UPDATE datosDocentes SET        
        CURPDocente= '$CURPDocente',
        nombreDocente= '$nombreDocente',
        ape1Docente= '$ape1Docente',
        ape2Docente= '$ape2Docente ',
        fechaNacimientoDocente= '$fechaNacimientoDocente',
        RFCDocente= '$RFCDocente',
        claveISSEMYM= '$claveISSEMYM',
        telefonoCelular= '$telefonoCelular',
        telefonoFijo= '$telefonoFijo',
        noCedulaProfesional= '$noCedulaProfesional',
        fechaEscuelaEgresion= '$fechaEscuelaEgresion',
        fechaEgresionEspecializacion= '$fechaEgresoEspecializacion',
        fechaEgresionDiplomado= '$fechaEgresoDiplomado',
        noCedulaProfesionalMaestria= '$noCedulaProfesionalMaestria',
        noCedulaProfesioanlDoctorado= '$noCedulaProfesionalDoctorado',
        fechaDeIngresoSEducativoEstatal= '$fechaDeIngresoSEducativoEstatal',
        fechaDeIngresoAlNivel= '$fechaDeIngresoAlNivel',
        fechaDeBaseAlNivel= '$fechaDeBaseAlNivel',
        fechaDeIngresoAlCargo= '$fechaDeIngresoAlCargo',
        fechaDeIngresoInstitucion= '$fechaDeIngresoInstitucion',
        fechaDeIngresoCarreraDocente= '$fechaDeIngresoCarreraDocente',
        puntajeEscalofonario= '$puntajeEscalafonario',
        numPlaza= '$numPlaza',
        numPrelacion= '$numPrelacion',    
        CCTEscuela= '$CCTEscuela',
        idNivelLaboral= $idNivelLaboral,
        idPuestoInstitucional= $idPuestoInstitucional,
        idLocalidad= $idLocalidad,        
        calleDocente= '$calleDocente',
        numeroDomicilio= '$numeroDomicilio',
        colonia= '$colonia',
        CP= '$CP'   
    WHERE CURPDocente= '$CURPDocente'";

    if(mysqli_query($conexion,$sentencia)){
        echo("Docente Almacenado Correctamene");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>