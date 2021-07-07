<?php 
    include("conexion.php");
    //DIPLOMADO
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-diplomado)
    $idDiplomado = $_POST['cmbDiplomado'];// 4 en la BD(docente-diplomado)---php 373
    $fechaEgresoDiplomado= $_POST['fechaEgresoDiplomado'];// 13 en la BD(datosDocente)   -- en PHP guardar-datosgeneralesdocente(linea  )

    $sentenciaDiplomado=" UPDATE datosdocentes_diplomado SET         
        idDiplomado = $idDiplomado (SELECT idDiplomado FROM diplomado WHERE descripcionDiplomado = '$idDiplomado'),
        fechaEgresoDiplomado='$fechaEgresoDiplomado'
        WHERE CURPDatosDocente='$CURPDatosDocentes';";

    if(mysqli_query($conexion,$sentenciaDiplomado)){
        echo("Diplomado Actualizado correctamente");
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>