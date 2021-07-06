<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "
    DELETE FROM datosdocentes_diplomado WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerDiplomadoDocente.php");    
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>
