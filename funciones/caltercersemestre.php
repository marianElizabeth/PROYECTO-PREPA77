<?php
    include("conexion.php");
    $matricula= $_POST['txtMatriculaAlum'];    

    $txtCalMateIII_1= $_POST['txtCalMateIII_1'];
    $txtCalMateIII_2= $_POST['txtCalMateIII_2'];
    $txtCalMateIII_3= $_POST['txtCalMateIII_3'];
    $txtFaltaMateIII_1= $_POST['txtFaltaMateIII_1'];
    $txtFaltaMateIII_2= $_POST['txtFaltaMateIII_2'];
    $txtFaltaMateIII_3= $_POST['txtFaltaMateIII_3'];
    $txtCalExtraMateIII_1 = $_POST['txtCalExtraMateIII_1'];
    $txtFechaCalExtraMateIII_1 = $_POST['txtFechaCalExtraMateIII_1'];
    $txtCalExtraMateIII_2 = $_POST['txtCalExtraMateIII_2'];
    $txtFechaCalExtraMateIII_2 = $_POST['txtFechaCalExtraMateIII_2'];
    $txtCalExtraMateIII_3 = $_POST['txtCalExtraMateIII_3'];
    $txtFechaCalExtraMateIII_3 = $_POST['txtFechaCalExtraMateIII_3'];
    $txtCalExtraMateIII_4 = $_POST['txtCalExtraMateIII_4'];
    $txtFechaCalExtraMateIII_4 = $_POST['txtFechaCalExtraMateIII_4'];

    $txtCalBiologiaI_1= $_POST['txtCalBiologiaI_1'];
    $txtCalBiologiaI_2= $_POST['txtCalBiologiaI_2'];
    $txtCalBiologiaI_3= $_POST['txtCalBiologiaI_3'];
    $txtFaltaBiologiaI_1 = $_POST['txtFaltaBiologiaI_1'];
    $txtFaltaBiologiaI_2 = $_POST['txtFaltaBiologiaI_2'];
    $txtFaltaBiologiaI_3 = $_POST['txtFaltaBiologiaI_3'];
    $txtCalExtraBiologiaI_1 = $_POST['txtCalExtraBiologiaI_1'];
    $txtFechaCalExtraBiologiaI_1 = $_POST['txtFechaCalExtraBiologiaI_1'];
    $txtCalExtraBiologiaI_2 = $_POST['txtCalExtraBiologiaI_2'];
    $txtFechaCalExtraBiologiaI_2 = $_POST['txtFechaCalExtraBiologiaI_2'];
    $txtCalExtraBiologiaI_3 = $_POST['txtCalExtraBiologiaI_3'];
    $txtFechaCalExtraBiologiaI_3 = $_POST['txtFechaCalExtraBiologiaI_3'];
    $txtCalExtraBiologiaI_4 = $_POST['txtCalExtraBiologiaI_4'];
    $txtFechaCalExtraBiologiaI_4 = $_POST['txtFechaCalExtraBiologiaI_4'];

    $txtCalFisicaI_1 = $_POST['txtCalFisicaI_1'];
    $txtCalFisicaI_2 = $_POST['txtCalFisicaI_2'];
    $txtCalFisicaI_3 = $_POST['txtCalFisicaI_3'];
    $txtFaltaFisicaI_1 = $_POST['txtFaltaFisicaI_1'];
    $txtFaltaFisicaI_2 = $_POST['txtFaltaFisicaI_2'];
    $txtFaltaFisicaI_3 = $_POST['txtFaltaFisicaI_3'];
    $txtCalExtraFisicaI_1 = $_POST['txtCalExtraFisicaI_1'];
    $txtFechaCalExtraFisicaI_1 = $_POST['txtFechaCalExtraFisicaI_1'];
    $txtCalExtraFisicaI_2 = $_POST['txtCalExtraFisicaI_2'];
    $txtFechaCalExtraFisicaI_2 = $_POST['txtFechaCalExtraFisicaI_2'];
    $txtCalExtraFisicaI_3 = $_POST['txtCalExtraFisicaI_3'];
    $txtFechaCalExtraFisicaI_3 = $_POST['txtFechaCalExtraFisicaI_3'];
    $txtCalExtraFisicaI_4 = $_POST['txtCalExtraFisicaI_4'];
    $txtFechaCalExtraFisicaI_4= $_POST['txtFechaCalExtraFisicaI_4'];

    $txtCalHMI_1 = $_POST['txtCalHMI_1'];
    $txtCalHMI_2 = $_POST['txtCalHMI_2'];
    $txtCalHMI_3 = $_POST['txtCalHMI_3'];
    $txtFaltaHMI_1= $_POST['txtFaltaHMI_1'];
    $txtFaltaHMI_2= $_POST['txtFaltaHMI_2'];
    $txtFaltaHMI_3= $_POST['txtFaltaHMI_3'];
    $txtCalExtraHMI_1 = $_POST['txtCalExtraHMI_1'];
    $txtFechaCalExtraHMI_1= $_POST['txtFechaCalExtraHMI_1'];
    $txtCalExtraHMI_2= $_POST['txtCalExtraHMI_2'];
    $txtFechaCalExtraHMI_2 = $_POST['txtFechaCalExtraHMI_2'];
    $txtCalExtraHMI_3= $_POST['txtCalExtraHMI_3'];
    $txtFechaCalExtraHMI_3 = $_POST['txtFechaCalExtraHMI_3'];
    $txtCalExtraHMI_4= $_POST['txtCalExtraHMI_4'];
    $txtFechaCalExtraHMI_4= $_POST['txtFechaCalExtraHMI_4'];

    $txtCalInglesIII_1= $_POST['txtCalInglesIII_1'];
    $txtCalInglesIII_2= $_POST['txtCalInglesIII_2'];
    $txtCalInglesIII_3= $_POST['txtCalInglesIII_3'];
    $txtFaltaInglesIII_1= $_POST['txtFaltaInglesIII_1'];
    $txtFaltaInglesIII_2= $_POST['txtFaltaInglesIII_2'];
    $txtFaltaInglesIII_3= $_POST['txtFaltaInglesIII_3'];
    $txtCalExtraInglesIII_1 = $_POST['txtCalExtraInglesIII_1'];
    $txtFechaCalExtraInglesIII_1 = $_POST['txtFechaCalExtraInglesIII_1'];
    $txtCalExtraInglesIII_2= $_POST['txtCalExtraInglesIII_2'];
    $txtFechaCalExtraInglesIII_2= $_POST['txtFechaCalExtraInglesIII_2'];
    $txtCalExtraInglesIII_4= $_POST['txtCalExtraInglesIII_3'];
    $txtFechaCalExtraInglesIII_3 = $_POST['txtFechaCalExtraInglesIII_3'];
    $txtCalExtraInglesIII_4= $_POST['txtCalExtraInglesIII_4'];
    $txtFechaCalExtraInglesIII_4= $_POST['txtFechaCalExtraInglesIII_4'];

    $txtCalLiteraturaI_1 = $_POST['txtCalLiteraturaI_1'];
    $txtCalLiteraturaI_2 = $_POST['txtCalLiteraturaI_2'];
    $txtCalLiteraturaI_3 = $_POST['txtCalLiteraturaI_3'];
    $txtFaltaLiteraturaI_1 = $_POST['txtFaltaLiteraturaI_1'];
    $txtFaltaLiteraturaI_2 = $_POST['txtFaltaLiteraturaI_2'];
    $txtFaltaLiteraturaI_3= $_POST['txtFaltaLiteraturaI_3'];
    $txtCalExtraLiteraturaI_1= $_POST['txtCalExtraLiteraturaI_1'];
    $txtFechaCalExtraLiteraturaI_1= $_POST['txtFechaCalExtraLiteraturaI_1'];
    $txtCalExtraLiteraturaI_2= $_POST['txtCalExtraLiteraturaI_2'];
    $txtFechaCalExtraLiteraturaI_2= $_POST['txtFechaCalExtraLiteraturaI_2'];
    $txtCalExtraLiteraturaI_3= $_POST['txtCalExtraLiteraturaI_3'];
    $txtFechaCalExtraLiteraturaI_3= $_POST['txtFechaCalExtraLiteraturaI_3'];
    $txtCalExtraLiteraturaI_4= $_POST['txtCalExtraLiteraturaI_4'];
    $txtFechaCalExtraLiteraturaI_4= $_POST['txtFechaCalExtraLiteraturaI_4'];

    $txtCalGAT_1 = $_POST['txtCalGAT_1'];
    $txtCalGAT_2 = $_POST['txtCalGAT_2'];
    $txtCalGAT_3 = $_POST['txtCalGAT_3'];
    $txtFaltaGAT_1= $_POST['txtFaltaGAT_1'];
    $txtFaltaGAT_2= $_POST['txtFaltaGAT_2'];
    $txtFaltaGAT_3= $_POST['txtFaltaGAT_3'];
    $txtCalExtraGAT_1= $_POST['txtCalExtraGAT_1'];
    $txtFechaCalExtraGAT_1 = $_POST['txtFechaCalExtraGAT_1'];
    $txtCalExtraGAT_2= $_POST['txtCalExtraGAT_2'];
    $txtFechaCalExtraGAT_2 = $_POST['txtFechaCalExtraGAT_2'];
    $txtCalExtraGAT_3 = $_POST['txtCalExtraGAT_3'];
    $txtFechaCalExtraGAT_3 = $_POST['txtFechaCalExtraGAT_3'];
    $txtCalExtraGAT_4= $_POST['txtCalExtraGAT_4'];
    $txtFechaCalExtraGAT_4 = $_POST['txtFechaCalExtraGAT_4'];

    $txtCalHCA_1= $_POST['txtCalHCA_1'];
    $txtCalHCA_2 = $_POST['txtCalHCA_2'];
    $txtCalHCA_3 = $_POST['txtCalHCA_3'];
    $txtFaltaHCA_1= $_POST['txtFaltaHCA_1'];
    $txtFaltaHCA_2= $_POST['txtFaltaHCA_2'];
    $txtFaltaHCA_3= $_POST['txtFaltaHCA_3'];
    $txtCalExtraHCA_1= $_POST['txtCalExtraHCA_1'];
    $txtFechaCalExtraHCA_1 = $_POST['txtFechaCalExtraHCA_1'];
    $txtCalExtraHCA_2 = $_POST['txtCalExtraHCA_2'];
    $txtFechaCalExtraHCA_2 = $_POST['txtFechaCalExtraHCA_2'];
    $txtCalExtraHCA_3= $_POST['txtCalExtraHCA_3'];
    $txtFechaCalExtraHCA_3= $_POST['txtFechaCalExtraHCA_3'];
    $txtCalExtraHCA_4= $_POST['txtCalExtraHCA_4'];
    $txtFechaCalExtraHCA_4= $_POST['txtFechaCalExtraHCA_4'];

    $txtCalAFDRIII_1 = $_POST['txtCalAFDRIII_1'];
    $txtCalAFDRIII_2 = $_POST['txtCalAFDRIII_2'];
    $txtCalAFDRIII_3 = $_POST['txtCalAFDRIII_3'];
    $txtFaltaAFDRIII_1= $_POST['txtFaltaAFDRIII_1'];
    $txtFaltaAFDRIII_2= $_POST['txtFaltaAFDRIII_2'];
    $txtFaltaAFDRIII_3= $_POST['txtFaltaAFDRIII_3'];
    $txtCalExtraAFDRIII_1 = $_POST['txtCalExtraAFDRIII_1'];
    $txtFechaCalExtraAFDRIII_1= $_POST['txtFechaCalExtraAFDRIII_1'];
    $txtCalExtraAFDRIII_2= $_POST['txtCalExtraAFDRIII_2'];
    $txtFechaCalExtraAFDRIII_2= $_POST['txtFechaCalExtraAFDRIII_2'];
    $txtCalExtraAFDRIII_3= $_POST['txtCalExtraAFDRIII_3'];
    $txtFechaCalExtraAFDRIII_3 = $_POST['txtFechaCalExtraAFDRIII_3'];
    $txtCalExtraAFDRIII_4= $_POST['txtCalExtraAFDRIII_4'];
    $txtFechaCalExtraAFDRIII_4= $_POST['txtFechaCalExtraAFDRIII_4'];

    $txtCalSaludIII_1 = $_POST['txtCalSaludIII_1'];
    $txtCalSaludIII_2 = $_POST['txtCalSaludIII_2'];
    $txtCalSaludIII_3 = $_POST['txtCalSaludIII_3'];
    $txtFaltaSaludIII_1= $_POST['txtFaltaSaludIII_1'];
    $txtFaltaSaludIII_2= $_POST['txtFaltaSaludIII_2'];
    $txtFaltaSaludIII_3= $_POST['txtFaltaSaludIII_3'];
    $txtCalExtraSaludIII_1 = $_POST['txtCalExtraSaludIII_1'];
    $txtFechaCalExtraSaludIII_1 = $_POST['txtFechaCalExtraSaludIII_1'];
    $txtCalExtraSaludIII_2 = $_POST['txtCalExtraSaludIII_2'];
    $txtFechaCalExtraSaludIII_2= $_POST['txtFechaCalExtraSaludIII_2'];
    $txtCalExtraSaludIII_3= $_POST['txtCalExtraSaludIII_3'];
    $txtFechaCalExtraSaludIII_3 = $_POST['txtFechaCalExtraSaludIII_3'];
    $txtCalExtraSaludIII_4 = $_POST['txtCalExtraSaludIII_4'];
    $txtFechaCalExtraSaludIII_4 = $_POST['txtFechaCalExtraSaludIII_4'];

    $txtCalHR_1 = $_POST['txtCalHR_1'];
    $txtCalHR_2 = $_POST['txtCalHR_2'];
    $txtCalHR_3 = $_POST['txtCalHR_3'];
    $txtFaltaHR_1= $_POST['txtFaltaHR_1'];
    $txtFaltaHR_2= $_POST['txtFaltaHR_2'];
    $txtFaltaHR_3= $_POST['txtFaltaHR_3'];
    $txtCalExtraHR_1 = $_POST['txtCalExtraHR_1'];
    $txtFechaCalExtraHR_1 = $_POST['txtFechaCalExtraHR_1'];
    $txtCalExtraHR_2 = $_POST['txtCalExtraHR_2'];
    $txtFechaCalExtraHR_2= $_POST['txtFechaCalExtraHR_2'];
    $txtCalExtraHR_3= $_POST['txtCalExtraHR_3'];
    $txtFechaCalExtraHR_3 = $_POST['txtFechaCalExtraHR_3'];
    $txtCalExtraHR_4 = $_POST['txtCalExtraHR_4'];
    $txtFechaCalExtraHR_4 = $_POST['txtFechaCalExtraHR_4'];

    $calificacionFinal1   = ($txtCalMateIII_3 + $txtCalMateIII_2 + $txtCalMateIII_1)/3;
    $calificacionFinal2   = ($txtCalBiologiaI_3 + $txtCalBiologiaI_2 + $txtCalBiologiaI_1)/3;
    $calificacionFinal3   = ($txtCalFisicaI_3 + $txtCalFisicaI_2 + $txtCalFisicaI_1)/3;
    $calificacionFinal4   = ($txtCalHMI_3 + $txtCalHMI_2 + $txtCalHMI_1)/3;
    $calificacionFinal5   = ($txtCalInglesIII_3 + $txtCalInglesIII_2 + $txtCalInglesIII_1)/3;
    $calificacionFinal6   = ($txtCalLiteraturaI_3 + $txtCalLiteraturaI_2 + $txtCalLiteraturaI_1)/3;
    $calificacionFinal7   = ($txtCalGAT_3 + $txtCalGAT_2 + $txtCalGAT_1)/3;
    $calificacionFinal8   = ($txtCalHCA_3 + $txtCalHCA_2 + $txtCalHCA_1)/3;
    $calificacionFinal9   = ($txtCalAFDRIII_3 + $txtCalAFDRIII_2 + $txtCalAFDRIII_1)/3;
    $calificacionFinal10  = ($txtCalSaludIII_3 + $txtCalSaludIII_2 + $txtCalSaludIII_1)/3;
    $calificacionFinal11  = ($txtCalHR_3 + $txtCalHR_2 + $txtCalHR_1)/3;
    $sentencia= "INSERT INTO `datosalumno-semestre3` VALUES 
        (DEFAULT,1,'$matricula',$txtFaltaMateIII_1,$txtFaltaMateIII_2,$txtFaltaMateIII_3,$txtCalMateIII_1,$txtCalMateIII_2,$txtCalMateIII_3,$txtCalExtraMateIII_1,'$txtFechaCalExtraMateIII_1',$txtCalExtraMateIII_2,'$txtFechaCalExtraMateIII_2',$txtCalExtraMateIII_3,'$txtFechaCalExtraMateIII_3',$txtCalExtraMateIII_4,'$txtFechaCalExtraMateIII_4',$calificacionFinal1),
        (DEFAULT,2,'$matricula',$txtFaltaBiologiaI_1,$txtFaltaBiologiaI_2,$txtFaltaBiologiaI_3,$txtCalBiologiaI_1,$txtCalBiologiaI_2,$txtCalBiologiaI_3,$txtCalExtraBiologiaI_1,'$txtFechaCalExtraBiologiaI_1',$txtCalExtraBiologiaI_2,'$txtFechaCalExtraBiologiaI_2',$txtCalExtraBiologiaI_3,'$txtFechaCalExtraBiologiaI_3',$txtCalExtraBiologiaI_4,'$txtFechaCalExtraBiologiaI_4',$calificacionFinal2),
        (DEFAULT,3,'$matricula',$txtFaltaFisicaI_1,$txtFaltaFisicaI_2,$txtFaltaFisicaI_3,$txtCalFisicaI_1,$txtCalFisicaI_2,$txtCalFisicaI_3,$txtCalExtraFisicaI_1,'$txtFechaCalExtraFisicaI_1',$txtCalExtraFisicaI_2,'$txtFechaCalExtraFisicaI_2',$txtCalExtraFisicaI_3,'$txtFechaCalExtraFisicaI_3',$txtCalExtraFisicaI_4,'$txtFechaCalExtraFisicaI_4',$calificacionFinal3),
        (DEFAULT,4,'$matricula',$txtFaltaHMI_1,$txtFaltaHMI_2,$txtFaltaHMI_3,$txtCalHMI_1,$txtCalHMI_2,$txtCalHMI_3,$txtCalExtraHMI_1,'$txtFechaCalExtraHMI_1',$txtCalExtraHMI_2,'$txtFechaCalExtraHMI_2',$txtCalExtraHMI_3,'$txtFechaCalExtraHMI_3',$txtCalExtraHMI_4,'$txtFechaCalExtraHMI_4',$calificacionFinal4),
        (DEFAULT,5,'$matricula',$txtFaltaInglesIII_1,$txtFaltaInglesIII_2,$txtFaltaInglesIII_3,$txtCalInglesIII_1,$txtCalInglesIII_2,$txtCalInglesIII_3,$txtCalExtraInglesIII_1,'$txtFechaCalExtraInglesIII_1',$txtCalExtraInglesIII_2,'$txtFechaCalExtraInglesIII_2',$txtCalExtraInglesIII_3,'$txtFechaCalExtraInglesIII_3',$txtCalExtraInglesIII_4,'$txtFechaCalExtraInglesIII_4',$calificacionFinal5),
        (DEFAULT,6,'$matricula',$txtFaltaLiteraturaI_1,$txtFaltaLiteraturaI_2,$txtFaltaLiteraturaI_3,$txtCalLiteraturaI_1,$txtCalLiteraturaI_2,$txtCalLiteraturaI_3,$txtCalExtraLiteraturaI_1,'$txtFechaCalExtraLiteraturaI_1',$txtCalExtraLiteraturaI_2,'$txtFechaCalExtraLiteraturaI_2',$txtCalExtraLiteraturaI_3,'$txtFechaCalExtraLiteraturaI_3',$txtCalExtraLiteraturaI_4,'$txtFechaCalExtraLiteraturaI_4',$calificacionFinal6),
        (DEFAULT,7,'$matricula',$txtFaltaGAT_1,$txtFaltaGAT_2,$txtFaltaGAT_3,$txtCalGAT_1,$txtCalGAT_2,$txtCalGAT_3,$txtCalExtraGAT_1,'$txtFechaCalExtraGAT_1',$txtCalExtraGAT_2,'$txtFechaCalExtraGAT_2',$txtCalExtraGAT_3,'$txtFechaCalExtraGAT_3',$txtCalExtraGAT_4,'$txtFechaCalExtraGAT_4',$calificacionFinal7),
        (DEFAULT,8,'$matricula',$txtFaltaHCA_1,$txtFaltaHCA_2,$txtFaltaHCA_3,$txtCalHCA_1,$txtCalHCA_2,$txtCalHCA_3,$txtCalExtraHCA_1,'$txtFechaCalExtraHCA_1',$txtCalExtraHCA_2,'$txtFechaCalExtraHCA_2',$txtCalExtraHCA_3,'$txtFechaCalExtraHCA_3',$txtCalExtraHCA_4,'$txtFechaCalExtraHCA_4',$calificacionFinal8),
        (DEFAULT,9,'$matricula',$txtFaltaAFDRIII_1,$txtFaltaAFDRIII_2,$txtFaltaAFDRIII_3,$txtCalAFDRIII_1,$txtCalAFDRIII_2,$txtCalAFDRIII_3,$txtCalExtraAFDRIII_1,'$txtFechaCalExtraAFDRIII_1',$txtCalExtraAFDRIII_2,'$txtFechaCalExtraAFDRIII_2',$txtCalExtraAFDRIII_3,'$txtFechaCalExtraAFDRIII_3',$txtCalExtraAFDRIII_4,'$txtFechaCalExtraAFDRIII_4',$calificacionFinal9),
        (DEFAULT,10,'$matricula',$txtFaltaSaludIII_1,$txtFaltaSaludIII_2,$txtFaltaSaludIII_3,$txtCalSaludIII_1,$txtCalSaludIII_2,$txtCalSaludIII_3,$txtCalExtraSaludIII_1,'$txtFechaCalExtraSaludIII_1',$txtCalExtraSaludIII_2,'$txtFechaCalExtraSaludIII_2',$txtCalExtraSaludIII_3,'$txtFechaCalExtraSaludIII_3',$calificacionFinal10),
        (DEFAULT,11,'$matricula',$txtFaltaHR_1,$txtFaltaHR_2,$txtFaltaHR_3,$txtCalHR_1,$txtCalHR_2,$txtCalHR_3,$txtCalExtraHR_1,'$txtFechaCalExtraHR_1',$txtCalExtraHR_2,'$txtFechaCalExtraHR_2',$txtCalExtraHR_3,'$txtFechaCalExtraHR_3',$txtCalExtraHR_4,'$txtFechaCalExtraHR_4',$calificacionFinal11);";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verCalificacionesAlumno.php");}
    else{
        echo "Error";
    }
    mysqli_close($conexion);        
?>