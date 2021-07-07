<?php 
    include("conexion.php");
    //ESCUELASNUMEROS
    $numPlaza= $_POST['txtNoPlaza'];//23 en la BD(datosDocente)
    $numPrelacion= $_POST['txtNumPrelacion'];// 24  en la BD(datosDocente)
    $numHoras = $_POST['txtNumHoras'];// 24  en la BD(datosDocente)
    $CCTEscuela = $_POST['txtEscuelaAsignacion'];
    $CURPDocente = $_POST['txtCURPDocente'];// 24  en la BD(datosDocente)    

    $sentencia2=" UPDATE escuelasnumeros SET
        numPlaza='$numPlaza',
        numPrelacion='$numPrelacion',  
        numHoras='$numHoras',
        CCTEscuela= (SELECT CCTEscuela FROM escuela WHERE nombreEscuela = '$CCTEscuela')
        WHERE CURPDocente='$CURPDocente';";    
    
    if(mysqli_query($conexion,$sentencia2)){
        header("Location: ../VerEscuelaAsignacionDocente.php");    
    }
    else{
        echo "Error";
    }
    mysqli_close($conexion);
?>