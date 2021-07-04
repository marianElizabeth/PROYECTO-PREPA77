<?php
    include("conexion.php");

    $descripcionTituladoPasante= $_POST['cmbEstatusDoctorado'];// 2 en la BD( docente-doctorado)
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-doctorado)
    $idDoctorado = $_POST['cmbDoctorado'];// 4 en la BD(docente-doctorado)
    $noCedulaProfesionalDoctorado= $_POST['txtNCedulaDoctorado'];//15 en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea  )
 
    
    $sentenciaDoctorado=" INSERT INTO datosdocente_doctorado VALUES(        
        DEFAULT,
        '$descripcionTituladoPasante',
        '$CURPDatosDocentes',
        $idDoctorado,
        '$noCedulaProfesionalDoctorado'
        );";
    
        if(mysqli_query($conexion,$sentenciaDoctorado)){
            echo("Doctorado agregada correctamente");
        }
        else{
            echo "Error";
        }

    mysqli_close($conexion);
?>