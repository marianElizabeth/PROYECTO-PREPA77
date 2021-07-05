<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia1= "
    DELETE FROM escuelasnumeros WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia1)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia2= "

    DELETE FROM  escuelaslabora WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia2)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia3= "
    DELETE FROM datosdocentes_diplomado WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia3)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia4= "

    DELETE FROM datosdocente_maestria WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia4)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia5= "
        DELETE FROM  datosdocente_licenciatura WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia5)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia6= "
        DELETE FROM  datosdocente_especializacion WHERE CURPDatosDocentes = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia6)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia7= "
    DELETE FROM  datosdocente_doctorado WHERE CURPDatosDocentes = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia7)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    $sentencia8= "
        DELETE FROM datosdocentes WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia8)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>
