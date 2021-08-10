<?php
    include("conexion.php");
    $matricula=$_GET['txtMatriculaAlum'];
    $idMateria5=$_GET['txtMateria5'];

    $sentencia1= 
    "DELETE FROM `datosalumno-semestre5`
     WHERE `matricula`='$matricula' AND `idMateria5`=$idMateria5
    ;";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verCalificacionesAlumno.php");    
    }
    else{
        echo "Error";
    }
?>