<?php
    include("conexion.php");
    $matricula=$_GET['txtMatriculaAlum'];
    $idMateria3=$_GET['txtMateria3'];

    $sentencia1= 
    "DELETE FROM `datosalumno-semestre3`
     WHERE `matricula`='$matricula' AND `idMateria3`=$idMateria3
    ;";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verCalificacionesAlumno.php");    
    }
    else{
        echo "Error";
    }
?>