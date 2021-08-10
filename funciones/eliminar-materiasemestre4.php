<?php
    include("conexion.php");
    $matricula=$_GET['txtMatriculaAlum'];
    $idMateria4=$_GET['txtMateria4'];

    $sentencia1= 
    "DELETE FROM `datosalumno-semestre4`
     WHERE `matricula`='$matricula' AND `idMateria4`=$idMateria4
    ;";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verCalificacionesAlumno.php");    
    }
    else{
        echo "Error";
    }
?>