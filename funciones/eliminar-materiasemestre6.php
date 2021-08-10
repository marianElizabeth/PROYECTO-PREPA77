<?php
    include("conexion.php");
    $matricula=$_GET['txtMatriculaAlum'];
    $idMateria6=$_GET['txtMateria6'];

    $sentencia1= 
    "DELETE FROM `datosalumno-semestre6`
     WHERE `matricula`='$matricula' AND `idMateria6`=$idMateria6
    ;";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verCalificacionesAlumno.php");    
    }
    else{
        echo "Error";
    }
?>