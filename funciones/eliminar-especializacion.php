<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "
        DELETE FROM  datosdocente_especializacion WHERE CURPDatosDocentes = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerEspecializacionDocente.php");    
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>
