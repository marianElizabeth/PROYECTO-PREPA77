<?php 
    include("conexion.php");
    //DOCTORADE
    $descripcionTituladoPasante= $_POST['cmbEstatusDoctorado'];// 2 en la BD( docente-doctorado)
    $CURPDatosDocentes= $_POST['txtCURPDocente'];//3  en la BD(docente-doctorado)
    $idDoctorado = $_POST['cmbDoctorado'];// 4 en la BD(docente-doctorado)
    $noCedulaProfesionalDoctorado= $_POST['txtNCedulaDoctorado'];//15 en la BD(dato) -- en PHP guardar-datosgeneralesdocente(linea  )
 
    
    $sentenciaDoctorado=" UPDATE datosdocente_doctorado SET        
        descripcionTituladoPasante='$descripcionTituladoPasante',
        idDoctorado = (SELECT idDoctorado FROM doctorado WHERE descripcionDoctorado = '$idDoctorado'),
        noCedulaProfesionalDoctorado='$noCedulaProfesionalDoctorado'
        WHERE CURPDatosDocentes='$CURPDatosDocentes';";
    
        if(mysqli_query($conexion,$sentenciaDoctorado)){
            echo("Doctorado actualizado correctamente");
        }
        else{
            echo "Error";
        }
    mysqli_close($conexion);
?>