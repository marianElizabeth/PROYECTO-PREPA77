<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "
    DELETE FROM  datosdocente_doctorado WHERE CURPDatosDocentes = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerDoctoradoDocente.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>
