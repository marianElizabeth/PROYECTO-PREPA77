<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "
    DELETE FROM escuelasnumeros WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerEscuelaAsignacionDocente.php");    
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>
