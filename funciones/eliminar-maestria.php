<?php
    include("conexion.php");
    
    $CURPDocente=$_GET['CurpDelete'];

    $sentencia= "

    DELETE FROM datosdocente_maestria WHERE CURPDatosDocente = '$CURPDocente';
    ;
    ";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../VerMaestriaDocente.php");    
    }
    else{
        echo "Error";
    }

    mysqli_close($conexion);
?>
