<?php
    include("conexion.php");

    $matricula= $_POST['txtMatriculaAlum'];//1  en la BD(datosAlumno) -- en PHP(linea 141)
    $nombreAlumno= $_POST['txtNombreAlum'];// 2 en la BD(datosAlumno)-- en PHP(linea 214 )
    $ape1Alumno= $_POST['txtApePAlum'];// 3 en la BD(datosAlumno)-- en PHP(linea 218)
    $ape2Alumno= $_POST['txtApeMAlum'];// 4 en la BD(datosAlumno)-- en PHP(linea 222)
    $fechaBaja= $_POST['fechaBajaAlum'];// 5 en la BD(datosAlumno)-- en PHP(linea 408 )
    $numExpediente= $_POST['txtNumExpedienteAlum'];//6  en la BD(datosAlumno) -- en PHP(linea 145)
    $folioAlumno= $_POST['txtFolioAlum'];//7  en la BD(datosAlumno)-- en PHP(linea 149)
    $CURPAlumno= $_POST['txtCurpAlum'];// 8 en la BD(datosAlumno)-- en PHP(linea 202)
    $fechaNacimientoAlumno= $_POST['fechaNacimientoAlum'];// 9 en la BD(datosAlumno) -- en PHP(linea 259 )
    $correoPersonalAlumno= $_POST['txtCorreoPersonalAlum'];// 10 en la BD(datosAlumno) -- en PHP(linea 332)
    $correoInstitucionalAlumno= $_POST['txtCorreoInstitucionalAlum'];// 11 en la BD(datosAlumno) -- en PHP(linea 336)
    $referenciaDomicilio= $_POST['txtReferenciaAlum'];//12 en la BD(datosAlumno) -- en PHP(linea 508)
    $telefonoFijoAlumno= $_POST['txtTelefonoFijoAlum'];//13 en la BD(datosAlumno) -- en PHP(linea 287)
    $telefonoCelularAlumno= $_POST['txtTelefonoCelAlum'];//14 en la BD(datosAlumno)-- en PHP(linea 283)
    $numSeguroSocial= $_POST['txtNumSeguroSocialAlum'];//15 en la BD(datosAlumno) -- en PHP(linea 327)
    $folioBeca= $_POST['txtFolioBecaAlum'];//16 en la BD(datosAlumno)    -- en PHP(linea 372)
    $aciertosExamenIngresoAlumno= $_POST['txtAciertosExamenIngresoAlum'];//17 en la BD(datosAlumno) -- en PHP(linea 418 )
    $promSecundaria= $_POST['txtPromedioEgresoSecundariaAlum'];//18 en la BD(datosAlumno)-- en PHP(linea 440)
    $nombreTutor= $_POST['txtNombreTutorAlum'];//19 en la BD(datosAlumno) -- en PHP(linea 291)

    $idSexo= $_POST['cmbSexoAlum']; //20 en la BD(datosAlumno) -- en PHP(linea 226 )
    
    $idEdad= $_POST['cmbEdadAlum']; //21 en la BD(datosAlumno) -- en PHP(linea 242)

    $idGrupo= $_POST['cmbGrupo'];//22 en la BD(datosAlumno) -- en PHP(linea  185)

    $idGrado= $_POST['cmbGradoAlum'];//23 en la BD(datosAlumno) -- en PHP(linea 169)

    $idLocalidad= $_POST['cmbLocalidadAlum'];// 24 en la BD(datosAlumno) -- en PHP(linea 466)

    $idAlumnoTrabaja= $_POST['cmbTrabaja'];// 25  en la BD(datosAlumno) -- en PHP(linea 340)

    $idTipoSeguroSocial= $_POST['cmbTipoSocialAlum'];// 26  en la BD(datosAlumno) -- en PHP(linea 311)

    $idInscritoAlumnno= $_POST['cmbInscritoAlum'];//27  en la BD(datosAlumno) -- en PHP(linea 153 )
    
    $idParentesco= $_POST['cmbDependeEconomicamenteAlum'];// 28 en la BD(datosAlumno) -- en PHP(linea 376) -- la opcion de parentesco del tutor no esta en la base de datos linea 295
     
    $idBeca= $_POST['cmbBecaAlum'];//29  en la BD(datosAlumno) -- en PHP(linea 356 )

    $idEntidadFederativa= $_POST['cmbEntidadFederativaAlum'];// 30 en la BD(datosAlumno) -- en PHP(linea 267)

    $CCTEscuela= $_POST['cmbSecundariaProcedenciaAlum'];//31  en la BD(datosAlumno) -- en PHP(linea 423 )

    $numDomicilio= $_POST['txtNumeroAlum'];//32  en la BD(datosAlumno) -- en PHP(linea 453)
    $calleDomicilio= $_POST['txtCalleAlum'];//33  en la BD(datosAlumno)    -- en PHP(linea 448 )
    $colonia= $_POST['txtColoniaAlum'];//34  en la BD(datosAlumno) -- en PHP(linea 458)
    $CP= $_POST['txtCodiopostalAlum'];//35  en la BD(datosAlumno) -- en PHP(linea 462)

    $idOcupacion= $_POST['cmbOcupacionDependeEconomicamenteAlum'];//36  en la BD(datosAlumno) -- en PHP(linea 392 )

    $folioCURPAlumno= $_POST['txtFolioCurpAlum'];//37  en la BD(datosAlumno) -- en PHP(linea 206 )
    $RFCAlumno= $_POST['txtRFCAlum'];//38  en la BD(datosAlumno) -- en PHP(linea  210)

    $municipioNacimientoAlumno= $_POST['txtMunicipioNacimientoAlum'];//39  en la BD(datosAlumno) -- en PHP(linea 263)    

    $fechaInscripcionAlumno = $_POST['fechaInscripcionAlum'];// //40  en la BD(datosAlumno) -- en PHP(linea 263)        
    
    $sentencia=" UPDATE datosalumno SET        
        nombreAlumno='$nombreAlumno',
        ape1Alumno='$ape1Alumno',
        ape2Alumno='$ape2Alumno',
        fechaBaja = '',
        numExpediente = '$numExpediente',
        folioAlumno = '$folioAlumno',
        CURPAlumno = '$CURPAlumno',
        fechaNacimientoAlumno ='$fechaNacimientoAlumno',
        correoPersonalAlumno ='$correoPersonalAlumno',
        correoInstitucionalAlumno = '$correoInstitucionalAlumno',
        referenciaDomicilio = '$referenciaDomicilio',
        telefonoFijoAlumno = '$telefonoFijoAlumno',
        telefonoCelularAlumno = '$telefonoCelularAlumno',
        numSeguroSocial = '$numSeguroSocial',
        folioBeca = '$folioBeca',
        aciertosExamenIngresoAlumno = '$aciertosExamenIngresoAlumno',
        promSecundaria = '$promSecundaria',
        nombreTutor = '$nombreTutor',
        idSexo = (SELECT idSexo FROM sexo WHERE descripcionSexo = '$idSexo'),
        idEdad = (SELECT idEdad FROM edad WHERE edad = '$idEdad'),
        idGrupo = (SELECT idGrupo FROM grupo WHERE grupo = '$idGrupo'),
        idGrado = (SELECT idGrado FROM grado WHERE grado = '$idGrado'),
        idLocalidad = (SELECT idLocalidad FROM localidad WHERE localidad = '$idLocalidad'),
        idAlumnoTrabaja = (SELECT idAlumnoTrabaja FROM alumnoTrabaja WHERE descripcionTrabaja= '$idAlumnoTrabaja'),
        idTipoSeguroSocial = (SELECT idSeguroSocial FROM tipoSeguroSocial WHERE tipoSeguroSocial = '$idTipoSeguroSocial'),
        idInscritoAlumnno = (SELECT idInscrito FROM inscritoAlumno WHERE descripcionInscrito = '$idInscritoAlumnno'),    
        idParentesco = (SELECT idParentesco FROM parentesco WHERE descripcionParentesco = '$idParentesco'),
        idBeca = (SELECT idBeca FROM beca WHERE tipoBeca = '$idBeca'),
        idEntidadFederativa = (SELECT idEntidadFederativa FROM entidadFederativa WHERE descripcionEntidad = '$idEntidadFederativa'),
        CCTEscuela = (SELECT CCTEscuela FROM escuela WHERE nombreEscuela = '$CCTEscuela'),
        numDomicilio = '$numDomicilio',
        calleDomicilio = '$calleDomicilio',
        colonia = '$colonia',
        CP = '$CP',
        idOcupacion = (SELECT idOcupacion FROM ocupacion WHERE descripcionOcupacion = '$idOcupacion'),
        folioCURPAlumno = '$folioCURPAlumno',
        RFCAlumno = '$RFCAlumno',
        municipioNacimientoAlumno = '$municipioNacimientoAlumno',
        fechaInscripcionAlumno ='$fechaInscripcionAlumno'
        WHERE matricula='$matricula';";

    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verInformacionAlumno.php");    
    }
    else{
        echo "Error";
    }


    // DATOS PARA INSERTAR PADRE
    $nombrePadre= $_POST['txtNombrePadre']; //  en la BD() -- en PHP DatosAlumno(linea  515)
    $ape1Padre= $_POST['txtApePPadre']; //  en la BD() -- en PHP DatosAlumno(linea 519)
    $ape2Padre= $_POST['txtApeMPadre']; //  en la BD() -- en PHP DatosAlumno(linea 523 )
    $telefonoCelularPadre= $_POST['txtTelefonoCelPadre']; //  en la BD() -- en PHP DatosAlumno(linea  559)
    $CURPPadre= $_POST['txtxCurpPadre']; //  en la BD() -- en PHP DatosAlumno(linea  567)
    $claveElectorPadre= $_POST['txtClaveElectorPadre']; //  en la BD() -- en PHP DatosAlumno(linea  563)
    $idOcupacionPadre= $_POST['cmbOcupacionPadre']; //  en la BD() -- en PHP DatosAlumno(linea 543 )
    $idNivelEscolarPadre= $_POST['cmbUltimoGradoPadre']; //  en la BD() -- en PHP DatosAlumno(linea  571)
    $idParentescoPadre= $_POST['cmbParentescoPadre']; //  en la BD() -- en PHP DatosAlumno(linea 527)
    //$matricula= $_POST['']; //  en la BD() -- en PHP DatosAlumno(linea  )

    $sentenciaPadre=" UPDATE padre SET        
        
        nombrePadre ='$nombrePadre',
        ape1Padre = '$ape1Padre',
        ape2Padre = '$ape2Padre',
        telefonoCelularPadre ='$telefonoCelularPadre',
        CURPPadre ='$CURPPadre',
        claveElectorPadre = '$claveElectorPadre',
        idOcupacion = (SELECT idOcupacion FROM ocupacion WHERE descripcionOcupacion = '$idOcupacionPadre'),
        idNivelEscolar = (SELECT idNivelEscolar FROM nivelEscolar WHERE descripcionNivelEscolar = '$idNivelEscolarPadre'),
        idParentesco = (SELECT idParentesco FROM parentesco WHERE descripcionParentesco = '$idParentescoPadre')
        WHERE matricula='$matricula' ;";

    if(mysqli_query($conexion,$sentenciaPadre)){
        header("Location: ../verPadre.php");    
    }
    else{
        echo "Error";
    }

    //mysqli_close($conexion);


    // DATOS PARA INSERTAR MADRE
    $nombreMadre= $_POST['txtNombreMadre']; //  en la BD() -- en PHP DatosAlumno(linea 590 )    
    $ape1Madre= $_POST['txtApePMadre'];  //  en la BD() -- en PHP DatosAlumno(linea 594)
    $ape2Madre= $_POST['txtApeMMadre']; //  en la BD() -- en PHP DatosAlumno(linea 598)
    $telefonoCelularMadre= $_POST['txtTelefonoCelMadre'];  //  en la BD() -- en PHP DatosAlumno(linea 634 )
    $CURPMadre= $_POST['txtxCurpMadre']; //  en la BD() -- en PHP DatosAlumno(linea 642)
    $claveElectroMadre= $_POST['txtClaveElectorMadre']; //  en la BD() -- en PHP DatosAlumno(linea 638 )
    $idOcupacionMadre= $_POST['cmbOcupacionMadre']; //  en la BD() -- en PHP DatosAlumno(linea 618)
    $idNivelEscolarMadre= $_POST['cmbUltimoGradoMadre']; //  en la BD() -- en PHP DatosAlumno(linea 646 )
    $idParentescoMadre= $_POST['cmbParentescoMadre']; //  en la BD() -- en PHP DatosAlumno(linea  602)
    //$matricula= $_POST['']; //  en la BD() -- en PHP DatosAlumno(linea )

    $sentenciaMadre= "UPDATE madre SET        
        nombreMadre ='$nombreMadre',
        ape1Madre = '$ape1Madre',
        ape2Madre ='$ape2Madre',
        telefonoCelularMadre ='$telefonoCelularMadre',
        CURPMadre = '$CURPMadre',
        claveElectorMadre ='$claveElectroMadre',
        idOcupacion = (SELECT idOcupacion FROM ocupacion WHERE descripcionOcupacion = '$idOcupacionMadre'),
        idNivelEscolar = (SELECT idNivelEscolar FROM nivelEscolar WHERE descripcionNivelEscolar = '$idNivelEscolarMadre'),
        idParentesco = (SELECT idParentesco FROM parentesco WHERE descripcionParentesco = '$idParentescoMadre')
        WHERE matricula='$matricula';";
    if(mysqli_query($conexion,$sentenciaMadre)){
        header("Location: ../verPadre.php");    
      }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>