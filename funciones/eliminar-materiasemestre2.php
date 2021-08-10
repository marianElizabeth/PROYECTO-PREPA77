<?php
    include("conexion.php");
    $matricula=$_GET['txtMatriculaAlum'];
    $idMateria2=$_GET['txtMateria2'];

    $sentencia1= 
    "DELETE FROM `datosalumno-semestre2`
     WHERE `matricula`='$matricula' AND `idMateria2`=$idMateria2
    ;";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verCalificacionesAlumno.php");    
    }
    else{
        echo "Error";
    }
?>