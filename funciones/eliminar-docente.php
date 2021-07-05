<?php
    include("conexion.php");
    $CURPDocente = "JHT3H3N3DM90DNHTF3";
    //$CURPDocente = $_GET['CURPDocente'];

    $sentencia1= "
    DELETE FROM escuelasnumeros WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia1)){
        echo("Se elimino Corectamente escuelasnumeros");
    }
    else{
        echo "Error";
    }

    $sentencia2= "

    DELETE FROM  escuelaslabora WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia2)){
        echo("Se elimino Corectamente escuelaslabora");
    }
    else{
        echo "Error";
    }

    $sentencia3= "
    DELETE FROM datosdocentes_diplomado WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia3)){
        echo("Se elimino Corectamente datosdocentes_diplomado");
    }
    else{
        echo "Error";
    }

    $sentencia4= "

    DELETE FROM datosdocente_maestria WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia4)){
        echo("Se elimino Corectamente datosdocente_maestria");
    }
    else{
        echo "Error";
    }

    $sentencia5= "
        DELETE FROM  datosdocente_licenciatura WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia5)){
        echo("Se elimino Corectamente datosdocente_licenciatura");
    }
    else{
        echo "Error";
    }

    $sentencia6= "
        DELETE FROM  datosdocente_especializacion WHERE CURPDatosDocentes = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia6)){
        echo("Se elimino Corectamente datosdocente_especializacion");
    }
    else{
        echo "Error";
    }

    $sentencia7= "
    DELETE FROM  datosdocente_doctorado WHERE CURPDatosDocentes = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia7)){
        echo("Se elimino Corectamente datosdocente_doctorado");
    }
    else{
        echo "Error";
    }

    $sentencia8= "
        DELETE FROM datosdocentes WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia8)){
        echo("Se elimino Corectamente datosdocentes");
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>
