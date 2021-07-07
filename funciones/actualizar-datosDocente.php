<?php
    include("conexion.php");
    //ES DE DATOS PERSONALES
    $CURPDocente= $_POST['txtCURPDocente'];// 1 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  161)
    $nombreDocente = $_POST['txtNombreDocente'];// 2 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  141)
    $ape1Docente = $_POST['txtApePDocente'];// 3 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  145)
    $ape2Docente = $_POST['txtApeMDocente'];// 4 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  149)
    $fechaNacimientoDocente = $_POST['fechaNacimientoDocente'];// 5 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  153)
    $RFCDocente = $_POST['txtRFCDocente'];//6  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  157)
    $claveISSEMYM= $_POST['txtClaveISSEMYM'];//7 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $telefonoCelular= $_POST['txtTelefonoCelularDocente'];//8 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $telefonoFijo= $_POST['txtTelefonoFijoDocente'];//9 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    
    $fechaDeIngresoSEducativoEstatal= $_POST['fechaIngresoSEducativo'];//16 en la BD(datosDocente)     -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoAlNivel= $_POST['fechaIngresoNivel'];//17 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeBaseAlNivel= $_POST['fechaBaseNivel'];//18 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoAlCargo= $_POST['fechaIngresoCargo'];//19 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoInstitucion= $_POST['fechaIngresoInstitucional']; //20 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoCarreraDocente= $_POST['fechaCarreraDocente']; //21 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $puntajeEscalafonario= $_POST['txtPuntajeEscalafonario'];//$_POST[''];//22 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    
    //Datos del Centro de Trabajo
    $CCTEscuela= $_POST['txtNombreEscuelaDocente'];//25  en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )


    $idNivelLaboral= $_POST['cmbNivel'];// 26  en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $idPuestoInstitucional= $_POST['cmbPuestoFuncional'];//27  en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )

    //ES DE DATOS PERSONALES
    $idLocalidad= $_POST['txtLocalidadDocente'];// 28 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $calleDocente= $_POST['txtCalleDocente'];//29  en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $numeroDomicilio= $_POST['txtNumDocente'];//30  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $colonia= $_POST['txtColoniaDocente'];//31  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $CP= $_POST['txtCPDocente'];//32  en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )  
    
    $sentencia=" UPDATE datosdocentes SET           
        nombreDocente = '$nombreDocente',
        ape1Docente = '$ape1Docente',
        ape2Docente = '$ape2Docente ',
        fechaNacimientoDocente = '$fechaNacimientoDocente',
        RFCDocente = '$RFCDocente',
        claveISSEMYM = '$claveISSEMYM',
        telefonoCelular ='$telefonoCelular',
        telefonoFijo = '$telefonoFijo',        
        fechaDeIngresoSEducativoEstatal = '$fechaDeIngresoSEducativoEstatal',
        fechaDeIngresoAlNivel = '$fechaDeIngresoAlNivel',
        fechaDeBaseAlNivel ='$fechaDeBaseAlNivel',
        fechaDeIngresoAlCargo = '$fechaDeIngresoAlCargo',
        fechaDeIngresoInstitucion = '$fechaDeIngresoInstitucion',
        fechaDeIngresoCarreraDocente = '$fechaDeIngresoCarreraDocente',
        puntajeEscalafonario = '$puntajeEscalafonario',    
        CCTEscuela = '$CCTEscuela'(SELECT CCTEcuela FROM escuela WHERE nombreEscuela = '$CCTEscuela'),
        idNivelLaboral = $idNivelLaboral(SELECT idNivelLaboral FROM nivelLaboral WHERE descripcionNivelLaboral = '$idNivelLaboral'),
        idPuestoInstitucional = $idPuestoInstitucional(SELECT idPuestoInstitucional FROM puestoInstitucional WHERE descripcionInstitucional = '$idPuestoInstitucional'),
        idLocalidad = $idLocalidad (SELECT idLocalidad FROM localidad WHERE localidad = '$idLocalidad'),        
        calleDocente = '$calleDocente',
        numeroDocente = '$numeroDomicilio',
        coloniaDocente = '$colonia',
        CPDocente = '$CP'   
        WHERE CURPDocente='$CURPDocente';";    
    if(mysqli_query($conexion,$sentencia)){
        echo("Docente Actualizado Correctamene");
    }
    else{
        echo "Error";
    }


    //DIPLOMADO
    //$CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-diplomado)
    $idDiplomado = $_POST['cmbDiplomado'];// 4 en la BD(docente-diplomado)---php 373
    $fechaEgresoDiplomado= $_POST['fechaEgresoDiplomado'];// 13 en la BD(datosDocente)   -- en PHP guardar-datosgeneralesdocente(linea  )

    $sentenciaDiplomado=" UPDATE datosdocentes_diplomado SET         
        idDiplomado = $idDiplomado (SELECT idDiplomado FROM diplomado WHERE descripcionDiplomado = '$idDiplomado'),
        fechaEgresoDiplomado='$fechaEgresoDiplomado'
        WHERE CURPDatosDocente='$CURPDocente';";

    if(mysqli_query($conexion,$sentenciaDiplomado)){
        echo("Diplomado Actualizado correctamente");
    }
    else{
        echo "Error";
    }

    //DOCTORADE
    $descripcionTituladoPasante= $_POST['cmbEstatusDoctorado'];// 2 en la BD( docente-doctorado)
    //$CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-doctorado)
    $idDoctorado = $_POST['cmbDoctorado'];// 4 en la BD(docente-doctorado)
    $noCedulaProfesionalDoctorado= $_POST['txtNCedulaDoctorado'];//15 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
 
    
    $sentenciaDoctorado=" UPDATE datosdocente_doctorado SET        
        descripcionTituladoPasante='$descripcionTituladoPasante',
        idDoctorado = (SELECT idDoctorado FROM doctorado WHERE descripcionDoctorado = '$idDoctorado'),
        noCedulaProfesionalDoctorado='$noCedulaProfesionalDoctorado'
        WHERE CURPDatosDocentes='$CURPDocente';";
    
        if(mysqli_query($conexion,$sentenciaDoctorado)){
            echo("Doctorado actualizado correctamente");
        }
        else{
            echo "Error";
        }

        //ESCUELAS LABORA
       // $CURPDocente= $_POST['txtCurpDocente'];// 1 en la BD(datosDocente)
        $CCTEscuela= $_POST['cmbNombreEscuela'];//25  en la BD(datosAlumono)
        $idPuestoInstitucionalLabora = $_POST['cmbPuesto'];// 2 en la BD(datosAlumono)
        $numeroHoras = $_POST['txtNoHoras'];// 3 en la BD(datosAlumono)
 
    
        $sentenciaLabora=" UPDATE escuelasLabora SET        
            CCTEscuela=(SELECT CCTEscuela FROM escuela WHERE nombreEscuela = '$CCTEscuela'),
            idPuestoInstitucional= (SELECT idPuestoInstitucional FROM puestoInstitucional WHERE descripcionInstitucional = '$idPuestoInstitucionalLabora'),
            numeroHoras='$numeroHoras'
            WHERE CURPDocente='$CURPDocente';";

    if(mysqli_query($conexion,$sentenciaLabora)){
        echo("Escuela  labora actualizada correctamente");
    }
    else{
        echo "Error";
    }
    //ESCUELASNUMEROS
    $numPlaza= $_POST['txtNoPlaza'];//23 en la BD(datosDocente)
    $numPrelacion= $_POST['txtNumPrelacion'];// 24  en la BD(datosDocente)
    $numHoras = $_POST['txtNumHoras'];// 24  en la BD(datosDocente)
    $CCTEscuela = $_POST['txtEscuelaAsignacion'];
    //$CURPDocente = $_POST['txtCURPDocente'];// 24  en la BD(datosDocente)    

    $sentencia2=" UPDATE escuelasnumeros SET
        numPlaza='$numPlaza',
        numPrelacion='$numPrelacion',  
        numHoras='$numHoras',
        CCTEscuela= (SELECT CCTEscuela FROM escuela WHERE nombreEscuela = '$CCTEscuela'),
        WHERE CURPDocente='$CURPDocente';";    
    
    if(mysqli_query($conexion,$sentencia2)){
        echo("ESCUELA CON NUMEROS Actualizada Correctamene");
    }
    else{
        echo "Error";
    }
    //ESPECIALIZACION
    //$CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Especializacion) ---PHP LINEA
    $idEspecializacion = $_POST['cmbEspecializacion'];// 4 en la BD(docente-Especializacion) ---PHP LINEA 353
    $fechaEgresoEspecializacion= $_POST['fechaEgresoEspecializacion'];//12  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea 369  )
 
    
    $sentenciaEspecializacion=" UPDATE datosdocente_especializacion SET
        idEspecializacion=(SELECT idEspecializacion FROM especializacion WHERE descripcionEspecializacion = '$idEspecializacion'),
        fechaEgresoEspecializacion='$fechaEgresoEspecializacion'
        WHERE CURPDatosDocentes='$CURPDocente';";  

    if(mysqli_query($conexion,$sentenciaEspecializacion)){
        echo("Especializacion actualizada correctamente");
    }
    else{
        echo "Error";
    }
    //LICENCIATURE
    $descripcionTituladoPasanteLicenciatura= $_POST['cmbEstatusDocente'];// 2 en la BD( docente-Licenciatura)---php linea 333
    //$CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Licenciatura) ---php linea
    $idLicenciatura = $_POST['txtLicDocente'];// 4 en la BD(docente-Licenciatura)---php linea 317
    $escuelaEgresionLicenciatura = $_POST['txtEscEgresion'];// 5 en la BD(docente-Licenciatura) ---php linea 345
    $noCedulaProfesional= $_POST['txtNoCedulaProfDocente'];// 10 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  341)
    $fechaEscuelaEgresion= $_POST['fechaEgresion'];//11 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  349)
 
    
    $sentenciaLicenciature=" UPDATE datosdocente_licenciatura SET
        descripcionTituladoPasante='$descripcionTituladoPasanteLicenciatura',
        idLicenciatura=(SELECT idLicenciatura FROM licenciatura WHERE descripcionLicenciatura = '$idLicenciatura'),
        escuelaEgresionLicenciatura= '$escuelaEgresionLicenciatura'
        noCedulaProfesional=$noCedulaProfesional,
        fechaEscuelaEgresion='$fechaEscuelaEgresion'
        WHERE CURPDatosDocente='$CURPDocente';";  

    if(mysqli_query($conexion,$sentenciaLicenciature)){
        echo("Licenciatura actualizado correctamente");
    }
    else{
        echo "Error";
    }

    //MAESTRIA
    $descripcionTituladoPasanteMaestria= $_POST['cmbEstatusMaestria'];// 2 en la BD( docente-Maestria)
    //$CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Maestria)
    $idMaestria = $_POST['cmbMaestria'];// 4 en la BD(docente-Maestria)
    $noCedulaProfesionalMaestria= $_POST['txtNoCedulaMaestria'];// 14 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )    
 
    
    $sentenciaMaestria="  UPDATE datosdocente_maestria SET
    descripcionTituladoPasante ='$descripcionTituladoPasanteMaestria',
    idMaestria = (SELECT idMaestria FROM maestria WHERE descripcionMaestria = '$idMaestria'),
    noCedulaProfesionalMaestria ='$noCedulaProfesionalMaestria'
    WHERE CURPDatosDocente='$CURPDocente';";

    if(mysqli_query($conexion,$sentenciaMaestria)){
        echo("Maestria actualizada correctamente");
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>