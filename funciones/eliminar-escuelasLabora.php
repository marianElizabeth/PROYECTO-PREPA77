<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "

    DELETE FROM  escuelaslabora WHERE CURPDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerEscuelasLaboraDocente.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>
