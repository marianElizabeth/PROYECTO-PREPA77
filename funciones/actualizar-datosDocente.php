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
    //$telefonoFijo= $_POST['txtTelefonoFijoDocente'];//9 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
    
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
        ape2Docente = '$ape2Docente',
        fechaNacimientoDocente = '$fechaNacimientoDocente',
        RFCDocente = '$RFCDocente',
        claveISSEMYM = '$claveISSEMYM',
        telefonoCelular ='$telefonoCelular',
              
        fechaDeIngresoSEducativoEstatal = '$fechaDeIngresoSEducativoEstatal',
        fechaDeIngresoAlNivel = '$fechaDeIngresoAlNivel',
        fechaDeBaseAlNivel ='$fechaDeBaseAlNivel',
        fechaDeIngresoAlCargo = '$fechaDeIngresoAlCargo',
        fechaDeIngresoInstitucion = '$fechaDeIngresoInstitucion',
        fechaDeIngresoCarreraDocente = '$fechaDeIngresoCarreraDocente',
        puntajeEscalafonario = '$puntajeEscalafonario',    
        CCTEscuela = (SELECT CCTEscuela FROM escuela WHERE nombreEscuela = '$CCTEscuela'),
        idNivelLaboral = (SELECT idNivelLaboral FROM nivelLaboral WHERE descripcionNivelLaboral = '$idNivelLaboral'),
        idPuestoInstitucional = (SELECT idPuestoInstitucional FROM puestoInstitucional WHERE descripcionInstitucional = '$idPuestoInstitucional'),
        idLocalidad = (SELECT idLocalidad FROM localidad WHERE localidad = '$idLocalidad'),        
        calleDocente = '$calleDocente',
        numeroDocente = '$numeroDomicilio',
        coloniaDocente = '$colonia',
        CPDocente = '$CP'   
        WHERE CURPDocente='$CURPDocente';";    
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerDatosDocentes.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
    //telefonoFijo = '$telefonoFijo',  
?>