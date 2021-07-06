<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "
        DELETE FROM  datosdocente_licenciatura WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verLicenciatura.php");    
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>
