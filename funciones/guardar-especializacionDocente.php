<?php
    include("funciones/conexion.php");

    //INSERTAR DATOS EN ESPECIALIZACION
    //$descripcionTituladoPasanteEspecializacion= $_POST[''];// 2 en la BD( docente-Especializacion) ---PHP LINEA
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Especializacion) ---PHP LINEA
    $idEspecializacion = $_POST['cmbEspecializacion'];// 4 en la BD(docente-Especializacion) ---PHP LINEA 353
    $fechaEgresoEspecializacion= $_POST['fechaEgresoEspecializacion'];//12  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea 369  )
 
    
    $sentenciaEspecializacion=" INSERT INTO datosdocente_especializacion VALUES(        
    DEFAULT,
    '$CURPDatosDocentes',
    $idEspecializacion,
    '$fechaEgresoEspecializacion'
    );";

    if(mysqli_query($conexion,$sentenciaEspecializacion)){
        echo("Especializacion agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>