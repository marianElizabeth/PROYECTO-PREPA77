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
    
    //DATOS PARA LICENCIATURA-DOCENTE
    $noCedulaProfesional= $_POST['txtNoCedulaProfDocente'];// 10 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  341)
    $fechaEscuelaEgresion= $_POST['fechaEgresion'];//11 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  349)

    //ESPECIALIZACION
    $fechaEgresoEspecializacion= $_POST['fechaEgresoEspecializacion'];//12  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea 369  )

    //DIPLOMADO
    $fechaEgresoDiplomado= $_POST['fechaEgresoDiplomado'];// 13 en la BD(datosDocente)   -- en PHP guardar-datosgeneralesdocente(linea  )
    
    //DOCTORADO
    $noCedulaProfesionalDoctorado= $_POST['txtNCedulaDoctorado'];//15 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )

    //MAESTRIA
    $noCedulaProfesionalMaestria= $_POST['txtNoCedulaMaestria'];// 14 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )    

    $fechaDeIngresoSEducativoEstatal= $_POST['fechaIngresoSEducativo'];//16 en la BD(datosDocente)     -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoAlNivel= $_POST['fechaIngresoNivel'];//17 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeBaseAlNivel= $_POST['fechaBaseNivel'];//18 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoAlCargo= $_POST['fechaIngresoCargo'];//19 en la BD(datosDocente)  -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoInstitucion= $_POST['fechaIngresoInstitucional']; //20 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $fechaDeIngresoCarreraDocente= $_POST['fechaCarreraDocente']; //21 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    $puntajeEscalafonario= "2000";//$_POST[''];//22 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    //$numPlaza= $_POST['txtNoPlaza'];//23 en la BD(datosDocente)
    //$numPrelacion= $_POST['txtNumPrelacion'];// 24  en la BD(datosDocente)
    
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
    
    $sentencia=" INSERT INTO datosDocentes VALUES(        
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
        '$CCTEscuela',
        $idNivelLaboral,
        $idPuestoInstitucional,
        $idLocalidad,        
        '$calleDocente',
        '$numeroDomicilio',
        '$colonia',
        '$CP'   
    );";
    // '$numPlaza',
    //'$numPrelacion',
    if(mysqli_query($conexion,$sentencia)){
        echo("Docente Almacenado Correctamene");
    }
    else{
        echo "Error";
    }
    //INSERTAR DATOS EN LA LICENCIATURA
    $descripcionTituladoPasanteLicenciatura= $_POST['cmbEstatusDocente'];// 2 en la BD( docente-Licenciatura)---php linea 333
    //$CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Licenciatura) ---php linea
    $idLicenciatura = $_POST['txtLicDocente'];// 4 en la BD(docente-Licenciatura)---php linea 317
    $escuelaEgresionLicenciatura = $_POST['txtEscEgresion'];// 5 en la BD(docente-Licenciatura) ---php linea 345
 
    
    $sentenciaLicenciature=" INSERT INTO datosdocente_licenciatura VALUES(    
    DEFAULT,    
    '$descripcionTituladoPasanteLicenciatura',
    '$CURPDocente',
    $idLicenciatura,
    '$escuelaEgresionLicenciatura'
    );";

    if(mysqli_query($conexion,$sentenciaLicenciature)){
        echo("Licenciatura agregada correctamente");
    }
    else{
        echo "Error";
    }

    //INSERTAR DATOS EN ESPECIALIZACION
    //$descripcionTituladoPasanteEspecializacion= $_POST[''];// 2 en la BD( docente-Especializacion) ---PHP LINEA
    //$CURPDatosDocentes= $_POST[''];//3  en la BD(docente-Especializacion) ---PHP LINEA
    $idEspecializacion = $_POST['cmbEspecializacion'];// 4 en la BD(docente-Especializacion) ---PHP LINEA 353
 
    
    $sentenciaEspecializacion=" INSERT INTO datosdocente_especializacion VALUES(        
    DEFAULT,
    '$CURPDocente',
    $idEspecializacion
    );";

    if(mysqli_query($conexion,$sentenciaEspecializacion)){
        echo("Especializacion agregada correctamente");
    }
    else{
        echo "Error";
    }


    //DIPLOMADO 
    //$descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-diplomado)
    //$CURPDatosDocentes= $_POST[''];//3  en la BD(docente-diplomado)
    $idDiplomado = $_POST['cmbDiplomado'];// 4 en la BD(docente-diplomado)---php 373

    $sentenciaDiplomado=" INSERT INTO datosdocentes_diplomado VALUES(        
    DEFAULT,
    '$CURPDocente',
    $idDiplomado
    );";

    if(mysqli_query($conexion,$sentenciaDiplomado)){
        echo("Diplomado agregada correctamente");
    }
    else{
        echo "Error";
    }

    //MAESTRIA
    $descripcionTituladoPasanteMaestria= $_POST['cmbEstatusMaestria'];// 2 en la BD( docente-Maestria)
    //$CURPDatosDocentes= $_POST[''];//3  en la BD(docente-Maestria)
    $idMaestria = $_POST['cmbMaestria'];// 4 en la BD(docente-Maestria)
 
    
    $sentenciaMaestria=" INSERT INTO datosdocente_maestria VALUES(        
    DEFAULT,
    '$descripcionTituladoPasanteMaestria',
    '$CURPDocente',
    $idMaestria
    );";

    if(mysqli_query($conexion,$sentenciaMaestria)){
        echo("Maestria agregada correctamente");
    }
    else{
        echo "Error";
    }


    //doctorado
    $descripcionTituladoPasanteDoctorado= $_POST['cmbEstatusDoctorado'];// 2 en la BD( docente-doctorado)
    //$CURPDatosDocentes= $_POST[''];//3  en la BD(docente-doctorado)
    $idDoctorado = $_POST['cmbDoctorado'];// 4 en la BD(docente-doctorado)---php 421
 
    
    $sentenciaDoctorado=" INSERT INTO datosdocente_doctorado VALUES(        
    DEFAULT,
    '$descripcionTituladoPasanteDoctorado',
    '$CURPDocente',
    $idDoctorado
    );";

    if(mysqli_query($conexion,$sentenciaDoctorado)){
        echo("Doctorado agregada correctamente");
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>