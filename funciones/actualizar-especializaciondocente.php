<?php 
    include("conexion.php");
    //ESPECIALIZACION
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-Especializacion) ---PHP LINEA
    $idEspecializacion = $_POST['cmbEspecializacion'];// 4 en la BD(docente-Especializacion) ---PHP LINEA 353
    $fechaEgresoEspecializacion= $_POST['fechaEgresoEspecializacion'];//12  en la BD(datosDocente) -- en PHP guardar-datosgeneralesdocente(linea 369  )
 
    
    $sentenciaEspecializacion=" UPDATE datosdocente_especializacion SET
        idEspecializacion=(SELECT idEspecializacion FROM especializacion WHERE descripcionEspecializacion = '$idEspecializacion'),
        fechaEgresoEspecializacion='$fechaEgresoEspecializacion'
        WHERE CURPDatosDocentes='$CURPDatosDocentes';";  

    if(mysqli_query($conexion,$sentenciaEspecializacion)){
        header("Location: ../VerEspecializacionDocente.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>