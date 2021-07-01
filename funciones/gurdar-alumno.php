<?php
    include("funciones/conexion.php");

    $matricula= $_POST['txtMatriculaAlum'];//1  en la BD(datosAlumono)
    $nombreAlumno= $_POST['txtNombreAlum'];// 2 en la BD(datosAlumono)
    $ape1Alumno= $_POST['txtApePAlum'];// 3 en la BD(datosAlumono)
    $ape2Alumno= $_POST['txtApeMAlum'];// 4 en la BD(datosAlumono)
    $fechaBaja= $_POST['fechaBajaAlum'];// 5 en la BD(datosAlumono)
    $numExpediente= $_POST['txtNumExpedienteAlum'];//6  en la BD(datosAlumono)
    $folioAlumno= $_POST['txtFolioAlum'];//7  en la BD(datosAlumono)
    $CURPAlumno= $_POST['txtCurpAlum'];// 8 en la BD(datosAlumono)
    $fechaNacimientoAlumno= $_POST['fechaNacimientoAlum'];// 9 en la BD(datosAlumono)
    $correoPersonalAlumno= $_POST['txtCorreoPersonalAlum'];// 10 en la BD(datosAlumono)
    $correoInstitucionalAlumno= $_POST['txtCorreoInstitucionalAlum'];// 11 en la BD(datosAlumono)
    $referenciaDomicilio= $_POST['txtReferenciaAlum'];//12 en la BD(datosAlumono)
    $telefonoFijoAlumno= $_POST['txtTelefonoFijoAlum'];//13 en la BD(datosAlumono)
    $telefonoCelularAlumno= $_POST['txtTelefonoCelAlum'];//14 en la BD(datosAlumono)
    $numSeguroSocial= $_POST['txtNumSeguroSocialAlum'];//15 en la BD(datosAlumono)
    $folioBeca= $_POST['txtFolioBecaAlum'];//16 en la BD(datosAlumono)    
    $aciertosExamenIngresoAlumno= $_POST['txtAciertosExamenIngresoAlum'];//17 en la BD(datosAlumono)
    $promSecundaria= $_POST['txtPromedioEgresoSecundariaAlum'];//18 en la BD(datosAlumono)
    $nombreTutor= $_POST['txtNombreTutorAlum'];//19 en la BD(datosAlumono)

    $idSexo= $_POST['cmbSexoAlum']; //20 en la BD(datosAlumono)
    
    $idEdad= $_POST['txtEdadAlum']; //21 en la BD(datosAlumono)

    $idGrupo= $_POST['txtGrupoAlum'];//22 en la BD(datosAlumono)

    $idGrado= $_POST['cmbGradoAlum'];//23 en la BD(datosAlumono)

    $idLocalidad= $_POST['txtLocalidadAlum'];// 24 en la BD(datosAlumono)

    $idAlumnoTrabaja= $_POST['cmbTrabajaAlum'];// 25  en la BD(datosAlumono)

    $idTipoSeguroSocial= $_POST['cmbTipoSocialAlum'];// 26  en la BD(datosAlumono)

    $idInscritoAlumnno= $_POST['cmbInscritoAlum'];//27  en la BD(datosAlumono)
    
    $idParentesco= $_POST['cmbParentescoTutorAlum'];// 28 en la BD(datosAlumono)
    
    $idBeca= $_POST['cmbBecaAlum'];//29  en la BD(datosAlumono)

    $idMunicipio= $_POST['txtEstadoNacimientoAlum'];// 30 en la BD(datosAlumono)

    $CCTEscuela= $_POST['txtSecundariaProcedenciaAlum'];//31  en la BD(datosAlumono)

    $numDomicilio= $_POST['txtNumeroAlum'];//32  en la BD(datosAlumono)
    $calleDomicilio= $_POST['txtCalleAlum'];//33  en la BD(datosAlumono)    
    $colonia= $_POST['txtColoniaAlum'];//34  en la BD(datosAlumono)
    $CP= $_POST['txtCodiopostalAlum'];//35  en la BD(datosAlumono)

    $idOcupacion= $_POST['cmbOcupacionDependeEconomicamenteAlum'];//36  en la BD(datosAlumono)

    $folioCURPAlumno= $_POST['txtFolioCurpAlum'];//37  en la BD(datosAlumono)
    $RFCAlumno= $_POST['txtRFCAlum'];//38  en la BD(datosAlumono)
    
    //$= $_POST['PROCEDENDCIA LINEA 317 -- DATOS GENERALES ALUMNO'];    
    //DATOS DE LA DIRECCIÓN    
    //$= $_POST['txtColoniaAlum'];//  en la BD(datosAlumono)
    //$= $_POST['cmbEstado'];//  en la BD(datosAlumono)
    //$= $_POST['cmbMunicipio'];//  en la BD(datosAlumono)
    //$= $_POST[''];
    
    $sentencia=" INSERT INTO datosAlumno VALUES(
        '$matricula',
        '$nombreAlumno',
        '$ape1Alumno',
        '$ape2Alumno',
        '$fechaBaja',
        '$numExpediente',
        '$folioAlumno',
        '$CURPAlumno',
         $fechaNacimientoAlumno,
        '$correoPersonalAlumno',
        '$correoInstitucionalAlumno',
        '$referenciaDomicilio',
        '$telefonoFijoAlumno',
        '$telefonoCelularAlumno',
        '$numSeguroSocial',
        '$folioBeca',
        '$aciertosExamenIngresoAlumno',
        '$promSecundaria',
        '$nombreTutor',
        $idSexo,
        $idEdad,
        $idGrupo,
        $idGrado,
        $idLocalidad,
        $idAlumnoTrabaja,
        $idTipoSeguroSocial',
        $idInscritoAlumnno',    
        $idParentesco,
        $idBeca,
        $idMunicipio,
        '$CCTEscuela',
        '$numDomicilio',
        '$calleDomicilio',
        '$colonia',
        '$CP',
        '$idOcupacion,
        '$folioCURPAlumno',
        '$RFCAlumno'
    );";

    if(mysqli_query($conexion,$sentencia)){
        echo("Alumno Almacenado Correctamene");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>