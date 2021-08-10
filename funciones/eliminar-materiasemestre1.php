<?php
    include("conexion.php");
    $matricula=$_GET['txtMatriculaAlum'];
    $idMateria1=$_GET['txtMateria1'];

    $sentencia1= 
    "DELETE FROM `datosalumno-semestre1`
     WHERE `matricula`='$matricula' AND `idMateria1`=$idMateria1
    ;";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verCalificacionesAlumno.php");    
    }
    else{
        echo "Error";
    }
?>