<?php
    include("conexion.php");
    $matricula=$_GET["MatriculaDelete"];

    $sentencia= "
    DELETE FROM padre WHERE matricula = '$matricula';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verInfoPersonalAlumno.php");    }
    else{
        echo "Error";
    }

    $sentencia1= "
    DELETE FROM madre WHERE matricula = '$matricula';
    ;
    ";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verInfoPersonalAlumno.php");    }
    else{
        echo "Error";
    }

    $sentencia1= "
    DELETE FROM datosalumno WHERE matricula = '$matricula';
    ;
    ";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verInfoPersonalAlumno.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>