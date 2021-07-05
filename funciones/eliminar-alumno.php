<?php
    include("conexion.php");
    $matricula = "12121";
    //$CURPDocente = $_GET['CURPDocente'];

    $sentencia= "
    DELETE FROM padre WHERE matricula = '$matricula';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        echo("Se elimino Corectamente  padre");
    }
    else{
        echo "Error";
    }

    $sentencia1= "
    DELETE FROM madre WHERE matricula = '$matricula';
    ;
    ";
    if(mysqli_query($conexion,$sentencia1)){
        echo("Se elimino Corectamente  madre");
    }
    else{
        echo "Error";
    }

    $sentencia1= "
    DELETE FROM datosalumno WHERE matricula = '$matricula';
    ;
    ";
    if(mysqli_query($conexion,$sentencia1)){
        echo("Se elimino Corectamente  datosalumno");
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>