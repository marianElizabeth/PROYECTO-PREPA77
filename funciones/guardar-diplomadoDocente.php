<?php
    include("conexion.php");

    //DIPLOMADO 
    //$descripcionTituladoPasante= $_POST[''];// 2 en la BD( docente-diplomado)

    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-diplomado)
    $idDiplomado = $_POST['cmbDiplomado'];// 4 en la BD(docente-diplomado)---php 373
    $fechaEgresoDiplomado= $_POST['fechaEgresoDiplomado'];// 13 en la BD(datosDocente)   -- en PHP guardar-datosgeneralesdocente(linea  )

    $sentenciaDiplomado=" INSERT INTO datosdocentes_diplomado VALUES(        
    DEFAULT,
    '$CURPDatosDocentes',
    $idDiplomado,
    '$fechaEgresoDiplomado'
    );";

    if(mysqli_query($conexion,$sentenciaDiplomado)){
        echo("Diplomado agregada correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>