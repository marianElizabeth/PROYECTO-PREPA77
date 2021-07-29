<?php
    include("conexion.php");
    $matricula= $_POST['txtMatriculaAlum'];    

    $txtCalMateVI_1= $_POST['txtCalMateVI_1'];
    $txtCalMateVI_2= $_POST['txtCalMateVI_2'];
    $txtCalMateVI_3= $_POST['txtCalMateVI_3'];
    $txtFaltaMateVI_1= $_POST['txtFaltaMateVI_1'];
    $txtFaltaMateVI_2= $_POST['txtFaltaMateVI_2'];
    $txtFaltaMateVI_3= $_POST['txtFaltaMateVI_3'];
    $txtCalExtraMateVI_1 = $_POST['txtCalExtraMateVI_1'];
    $txtFechaCalExtraMateVI_1 = $_POST['txtFechaCalExtraMateVI_1'];
    $txtCalExtraMateVI_2 = $_POST['txtCalExtraMateVI_2'];
    $txtFechaCalExtraMateVI_2 = $_POST['txtFechaCalExtraMateVI_2'];
    $txtCalExtraMateVI_3 = $_POST['txtCalExtraMateVI_3'];
    $txtFechaCalExtraMateVI_3 = $_POST['txtFechaCalExtraMateVI_3'];
    $txtCalExtraMateVI_4 = $_POST['txtCalExtraMateVI_4'];
    $txtFechaCalExtraMateVI_4 = $_POST['txtFechaCalExtraMateVI_4'];

    $txtCalEMA_1= $_POST['txtCalEMA_1'];
    $txtCalEMA_2= $_POST['txtCalEMA_2'];
    $txtCalEMA_3= $_POST['txtCalEMA_3'];
    $txtFaltaEMA_1 = $_POST['txtFaltaEMA_1'];
    $txtFaltaEMA_2 = $_POST['txtFaltaEMA_2'];
    $txtFaltaEMA_3 = $_POST['txtFaltaEMA_3'];
    $txtCalExtraEMA_1 = $_POST['txtCalExtraEMA_1'];
    $txtFechaCalExtraEMA_1 = $_POST['txtFechaCalExtraEMA_1'];
    $txtCalExtraEMA_2 = $_POST['txtCalExtraEMA_2'];
    $txtFechaCalExtraEMA_2 = $_POST['txtFechaCalExtraEMA_2'];
    $txtCalExtraEMA_3 = $_POST['txtCalExtraEMA_3'];
    $txtFechaCalExtraEMA_3 = $_POST['txtFechaCalExtraEMA_3'];
    $txtCalExtraEMA_4 = $_POST['txtCalExtraEMA_4'];
    $txtFechaCalExtraEMA_4 = $_POST['txtFechaCalExtraEMA_4'];

    $txtCalHUC_1 = $_POST['txtCalHUC_1'];
    $txtCalHUC_2 = $_POST['txtCalHUC_2'];
    $txtCalHUC_3 = $_POST['txtCalHUC_3'];
    $txtFaltaHUC_1 = $_POST['txtFaltaHUC_1'];
    $txtFaltaHUC_2 = $_POST['txtFaltaHUC_2'];
    $txtFaltaHUC_3 = $_POST['txtFaltaHUC_3'];
    $txtCalExtraHUC_1 = $_POST['txtCalExtraHUC_1'];
    $txtFechaCalExtraHUC_1 = $_POST['txtFechaCalExtraHUC_1'];
    $txtCalExtraHUC_2 = $_POST['txtCalExtraHUC_2'];
    $txtFechaCalExtraHUC_2 = $_POST['txtFechaCalExtraHUC_2'];
    $txtCalExtraHUC_3 = $_POST['txtCalExtraHUC_3'];
    $txtFechaCalExtraHUC_3 = $_POST['txtFechaCalExtraHUC_3'];
    $txtCalExtraHUC_4 = $_POST['txtCalExtraHUC_4'];
    $txtFechaCalExtraHUC_4= $_POST['txtFechaCalExtraHUC_4'];

    $txtCalEconomiaII_1 = $_POST['txtCalEconomiaII_1'];
    $txtCalEconomiaII_2 = $_POST['txtCalEconomiaII_2'];
    $txtCalEconomiaII_3 = $_POST['txtCalEconomiaII_3'];
    $txtFaltaEconomiaII_1= $_POST['txtFaltaEconomiaII_1'];
    $txtFaltaEconomiaII_2= $_POST['txtFaltaEconomiaII_2'];
    $txtFaltaEconomiaII_3= $_POST['txtFaltaEconomiaII_3'];
    $txtCalExtraEconomiaII_1 = $_POST['txtCalExtraEconomiaII_1'];
    $txtFechaCalExtraEconomiaII_1= $_POST['txtFechaCalExtraEconomiaII_1'];
    $txtCalExtraEconomiaII_2= $_POST['txtCalExtraEconomiaII_2'];
    $txtFechaCalExtraEconomiaII_2 = $_POST['txtFechaCalExtraEconomiaII_2'];
    $txtCalExtraEconomiaII_3= $_POST['txtCalExtraEconomiaII_3'];
    $txtFechaCalExtraEconomiaII_3 = $_POST['txtFechaCalExtraEconomiaII_3'];
    $txtCalExtraEconomiaII_4= $_POST['txtCalExtraEconomiaII_4'];
    $txtFechaCalExtraEconomiaII_4= $_POST['txtFechaCalExtraEconomiaII_4'];

    $txtCalPDDcologiaII_1= $_POST['txtCalPDDcologiaII_1'];
    $txtCalPDDcologiaII_2= $_POST['txtCalPDDcologiaII_2'];
    $txtCalPDDcologiaII_3= $_POST['txtCalPDDcologiaII_3'];
    $txtFaltaPDDcologiaII_1= $_POST['txtFaltaPDDcologiaII_1'];
    $txtFaltaPDDcologiaII_2= $_POST['txtFaltaPDDcologiaII_2'];
    $txtFaltaPDDcologiaII_3= $_POST['txtFaltaPDDcologiaII_3'];
    $txtCalExtraPDDcologiaII_1 = $_POST['txtCalExtraPDDcologiaII_1'];
    $txtFechaCalExtraPDDcologiaII_1 = $_POST['txtFechaCalExtraPDDcologiaII_1'];
    $txtCalExtraPDDcologiaII_2= $_POST['txtCalExtraPDDcologiaII_2'];
    $txtFechaCalExtraPDDcologiaII_2= $_POST['txtFechaCalExtraPDDcologiaII_2'];
    $txtCalExtraPDDcologiaII_4= $_POST['txtCalExtraPDDcologiaII_3'];
    $txtFechaCalExtraPDDcologiaII_3 = $_POST['txtFechaCalExtraPDDcologiaII_3'];
    $txtCalExtraPDDcologiaII_4= $_POST['txtCalExtraPDDcologiaII_4'];
    $txtFechaCalExtraPDDcologiaII_4= $_POST['txtFechaCalExtraPDDcologiaII_4'];

    $txtCalDerechoII_1 = $_POST['txtCalDerechoII_1'];
    $txtCalDerechoII_2 = $_POST['txtCalDerechoII_2'];
    $txtCalDerechoII_3 = $_POST['txtCalDerechoII_3'];
    $txtFaltaDerechoII_1 = $_POST['txtFaltaDerechoII_1'];
    $txtFaltaDerechoII_2 = $_POST['txtFaltaDerechoII_2'];
    $txtFaltaDerechoII_3= $_POST['txtFaltaDerechoII_3'];
    $txtCalExtraDerechoII_1= $_POST['txtCalExtraDerechoII_1'];
    $txtFechaCalExtraDerechoII_1= $_POST['txtFechaCalExtraDerechoII_1'];
    $txtCalExtraDerechoII_2= $_POST['txtCalExtraDerechoII_2'];
    $txtFechaCalExtraDerechoII_2= $_POST['txtFechaCalExtraDerechoII_2'];
    $txtCalExtraDerechoII_3= $_POST['txtCalExtraDerechoII_3'];
    $txtFechaCalExtraDerechoII_3= $_POST['txtFechaCalExtraDerechoII_3'];
    $txtCalExtraDerechoII_4= $_POST['txtCalExtraDerechoII_4'];
    $txtFechaCalExtraDerechoII_4= $_POST['txtFechaCalExtraDerechoII_4'];

    $txtCalInglesVI_1 = $_POST['txtCalInglesVI_1'];
    $txtCalInglesVI_2 = $_POST['txtCalInglesVI_2'];
    $txtCalInglesVI_3 = $_POST['txtCalInglesVI_3'];
    $txtFaltaInglesVI_1= $_POST['txtFaltaInglesVI_1'];
    $txtFaltaInglesVI_2= $_POST['txtFaltaInglesVI_2'];
    $txtFaltaInglesVI_3= $_POST['txtFaltaInglesVI_3'];
    $txtCalExtraInglesVI_1= $_POST['txtCalExtraInglesVI_1'];
    $txtFechaCalExtraInglesVI_1 = $_POST['txtFechaCalExtraInglesVI_1'];
    $txtCalExtraInglesVI_2= $_POST['txtCalExtraInglesVI_2'];
    $txtFechaCalExtraInglesVI_2 = $_POST['txtFechaCalExtraInglesVI_2'];
    $txtCalExtraInglesVI_3 = $_POST['txtCalExtraInglesVI_3'];
    $txtFechaCalExtraInglesVI_3 = $_POST['txtFechaCalExtraInglesVI_3'];
    $txtCalExtraInglesVI_4= $_POST['txtCalExtraInglesVI_4'];
    $txtFechaCalExtraInglesVI_4 = $_POST['txtFechaCalExtraInglesVI_4'];

    $txtCalFilosofia_1= $_POST['txtCalFilosofia_1'];
    $txtCalFilosofia_2 = $_POST['txtCalFilosofia_2'];
    $txtCalFilosofia_3 = $_POST['txtCalFilosofia_3'];
    $txtFaltaFilosofia_1= $_POST['txtFaltaFilosofia_1'];
    $txtFaltaFilosofia_2= $_POST['txtFaltaFilosofia_2'];
    $txtFaltaFilosofia_3= $_POST['txtFaltaFilosofia_3'];
    $txtCalExtraFilosofia_1= $_POST['txtCalExtraFilosofia_1'];
    $txtFechaCalExtraFilosofia_1 = $_POST['txtFechaCalExtraFilosofia_1'];
    $txtCalExtraFilosofia_2 = $_POST['txtCalExtraFilosofia_2'];
    $txtFechaCalExtraFilosofia_2 = $_POST['txtFechaCalExtraFilosofia_2'];
    $txtCalExtraFilosofia_3= $_POST['txtCalExtraFilosofia_3'];
    $txtFechaCalExtraFilosofia_3= $_POST['txtFechaCalExtraFilosofia_3'];
    $txtCalExtraFilosofia_4= $_POST['txtCalExtraFilosofia_4'];
    $txtFechaCalExtraFilosofia_4= $_POST['txtFechaCalExtraFilosofia_4'];

    $txtCalDD_1 = $_POST['txtCalDD_1'];
    $txtCalDD_2 = $_POST['txtCalDD_2'];
    $txtCalDD_3 = $_POST['txtCalDD_3'];
    $txtFaltaDD_1= $_POST['txtFaltaDD_1'];
    $txtFaltaDD_2= $_POST['txtFaltaDD_2'];
    $txtFaltaDD_3= $_POST['txtFaltaDD_3'];
    $txtCalExtraDD_1 = $_POST['txtCalExtraDD_1'];
    $txtFechaCalExtraDD_1= $_POST['txtFechaCalExtraDD_1'];
    $txtCalExtraDD_2= $_POST['txtCalExtraDD_2'];
    $txtFechaCalExtraDD_2= $_POST['txtFechaCalExtraDD_2'];
    $txtCalExtraDD_3= $_POST['txtCalExtraDD_3'];
    $txtFechaCalExtraDD_3 = $_POST['txtFechaCalExtraDD_3'];
    $txtCalExtraDD_4= $_POST['txtCalExtraDD_4'];
    $txtFechaCalExtraDD_4= $_POST['txtFechaCalExtraDD_4'];

    $txtCalAACIV_1 = $_POST['txtCalAACIV_1'];
    $txtCalAACIV_2 = $_POST['txtCalAACIV_2'];
    $txtCalAACIV_3 = $_POST['txtCalAACIV_3'];
    $txtFaltaAACIV_1= $_POST['txtFaltaAACIV_1'];
    $txtFaltaAACIV_2= $_POST['txtFaltaAACIV_2'];
    $txtFaltaAACIV_3= $_POST['txtFaltaAACIV_3'];
    $txtCalExtraAACIV_1 = $_POST['txtCalExtraAACIV_1'];
    $txtFechaCalExtraAACIV_1 = $_POST['txtFechaCalExtraAACIV_1'];
    $txtCalExtraAACIV_2 = $_POST['txtCalExtraAACIV_2'];
    $txtFechaCalExtraAACIV_2= $_POST['txtFechaCalExtraAACIV_2'];
    $txtCalExtraAACIV_3= $_POST['txtCalExtraAACIV_3'];
    $txtFechaCalExtraAACIV_3 = $_POST['txtFechaCalExtraAACIV_3'];
    $txtCalExtraAACIV_4 = $_POST['txtCalExtraAACIV_4'];
    $txtFechaCalExtraAACIV_4 = $_POST['txtFechaCalExtraAACIV_4'];

    $txtCalSIAVI_1 = $_POST['txtCalSIAVI_1'];
    $txtCalSIAVI_2 = $_POST['txtCalSIAVI_2'];
    $txtCalSIAVI_3 = $_POST['txtCalSIAVI_3'];
    $txtFaltaSIAVI_1= $_POST['txtFaltaSIAVI_1'];
    $txtFaltaSIAVI_2= $_POST['txtFaltaSIAVI_2'];
    $txtFaltaSIAVI_3= $_POST['txtFaltaSIAVI_3'];
    $txtCalExtraSIAVI_1 = $_POST['txtCalExtraSIAVI_1'];
    $txtFechaCalExtraSIAVI_1 = $_POST['txtFechaCalExtraSIAVI_1'];
    $txtCalExtraSIAVI_2 = $_POST['txtCalExtraSIAVI_2'];
    $txtFechaCalExtraSIAVI_2= $_POST['txtFechaCalExtraSIAVI_2'];
    $txtCalExtraSIAVI_3= $_POST['txtCalExtraSIAVI_3'];
    $txtFechaCalExtraSIAVI_3 = $_POST['txtFechaCalExtraSIAVI_3'];
    $txtCalExtraSIAVI_4 = $_POST['txtCalExtraSIAVI_4'];
    $txtFechaCalExtraSIAVI_4 = $_POST['txtFechaCalExtraSIAVI_4'];

    $calFilosofiaicacionFinal1   = ($txtCalMateVI_3 + $txtCalMateVI_2 + $txtCalMateVI_1)/3;
    $calFilosofiaicacionFinal2   = ($txtCalEMA_3 + $txtCalEMA_2 + $txtCalEMA_1)/3;
    $calFilosofiaicacionFinal3   = ($txtCalHUC_3 + $txtCalHUC_2 + $txtCalHUC_1)/3;
    $calFilosofiaicacionFinal4   = ($txtCalEconomiaII_3 + $txtCalEconomiaII_2 + $txtCalEconomiaII_1)/3;
    $calFilosofiaicacionFinal5   = ($txtCalPDDcologiaII_3 + $txtCalPDDcologiaII_2 + $txtCalPDDcologiaII_1)/3;
    $calFilosofiaicacionFinal6   = ($txtCalDerechoII_3 + $txtCalDerechoII_2 + $txtCalDerechoII_1)/3;
    $calFilosofiaicacionFinal7   = ($txtCalInglesVI_3 + $txtCalInglesVI_2 + $txtCalInglesVI_1)/3;
    $calFilosofiaicacionFinal8   = ($txtCalFilosofia_3 + $txtCalFilosofia_2 + $txtCalFilosofia_1)/3;
    $calFilosofiaicacionFinal9   = ($txtCalDD_3 + $txtCalDD_2 + $txtCalDD_1)/3;
    $calFilosofiaicacionFinal10  = ($txtCalAACIV_3 + $txtCalAACIV_2 + $txtCalAACIV_1)/3;
    $calFilosofiaicacionFinal11  = ($txtCalSIAVI_3 + $txtCalSIAVI_2 + $txtCalSIAVI_1)/3;
    $sentencia= "INSERT INTO `datosalumno-semestre6` VALUES 
        (DEFAULT,1,'$matricula',$txtFaltaMateVI_1,$txtFaltaMateVI_2,$txtFaltaMateVI_3,$txtCalMateVI_1,$txtCalMateVI_2,$txtCalMateVI_3,$txtCalExtraMateVI_1,'$txtFechaCalExtraMateVI_1',$txtCalExtraMateVI_2,'$txtFechaCalExtraMateVI_2',$txtCalExtraMateVI_3,'$txtFechaCalExtraMateVI_3',$txtCalExtraMateVI_4,'$txtFechaCalExtraMateVI_4',$calFilosofiaicacionFinal1),
        (DEFAULT,2,'$matricula',$txtFaltaEMA_1,$txtFaltaEMA_2,$txtFaltaEMA_3,$txtCalEMA_1,$txtCalEMA_2,$txtCalEMA_3,$txtCalExtraEMA_1,'$txtFechaCalExtraEMA_1',$txtCalExtraEMA_2,'$txtFechaCalExtraEMA_2',$txtCalExtraEMA_3,'$txtFechaCalExtraEMA_3',$txtCalExtraEMA_4,'$txtFechaCalExtraEMA_4',$calFilosofiaicacionFinal2),
        (DEFAULT,3,'$matricula',$txtFaltaHUC_1,$txtFaltaHUC_2,$txtFaltaHUC_3,$txtCalHUC_1,$txtCalHUC_2,$txtCalHUC_3,$txtCalExtraHUC_1,'$txtFechaCalExtraHUC_1',$txtCalExtraHUC_2,'$txtFechaCalExtraHUC_2',$txtCalExtraHUC_3,'$txtFechaCalExtraHUC_3',$txtCalExtraHUC_4,'$txtFechaCalExtraHUC_4',$calFilosofiaicacionFinal3),
        (DEFAULT,4,'$matricula',$txtFaltaEconomiaII_1,$txtFaltaEconomiaII_2,$txtFaltaEconomiaII_3,$txtCalEconomiaII_1,$txtCalEconomiaII_2,$txtCalEconomiaII_3,$txtCalExtraEconomiaII_1,'$txtFechaCalExtraEconomiaII_1',$txtCalExtraEconomiaII_2,'$txtFechaCalExtraEconomiaII_2',$txtCalExtraEconomiaII_3,'$txtFechaCalExtraEconomiaII_3',$txtCalExtraEconomiaII_4,'$txtFechaCalExtraEconomiaII_4',$calFilosofiaicacionFinal4),
        (DEFAULT,5,'$matricula',$txtFaltaPDDcologiaII_1,$txtFaltaPDDcologiaII_2,$txtFaltaPDDcologiaII_3,$txtCalPDDcologiaII_1,$txtCalPDDcologiaII_2,$txtCalPDDcologiaII_3,$txtCalExtraPDDcologiaII_1,'$txtFechaCalExtraPDDcologiaII_1',$txtCalExtraPDDcologiaII_2,'$txtFechaCalExtraPDDcologiaII_2',$txtCalExtraPDDcologiaII_3,'$txtFechaCalExtraPDDcologiaII_3',$txtCalExtraPDDcologiaII_4,'$txtFechaCalExtraPDDcologiaII_4',$calFilosofiaicacionFinal5),
        (DEFAULT,6,'$matricula',$txtFaltaDerechoII_1,$txtFaltaDerechoII_2,$txtFaltaDerechoII_3,$txtCalDerechoII_1,$txtCalDerechoII_2,$txtCalDerechoII_3,$txtCalExtraDerechoII_1,'$txtFechaCalExtraDerechoII_1',$txtCalExtraDerechoII_2,'$txtFechaCalExtraDerechoII_2',$txtCalExtraDerechoII_3,'$txtFechaCalExtraDerechoII_3',$txtCalExtraDerechoII_4,'$txtFechaCalExtraDerechoII_4',$calFilosofiaicacionFinal6),
        (DEFAULT,7,'$matricula',$txtFaltaInglesVI_1,$txtFaltaInglesVI_2,$txtFaltaInglesVI_3,$txtCalInglesVI_1,$txtCalInglesVI_2,$txtCalInglesVI_3,$txtCalExtraInglesVI_1,'$txtFechaCalExtraInglesVI_1',$txtCalExtraInglesVI_2,'$txtFechaCalExtraInglesVI_2',$txtCalExtraInglesVI_3,'$txtFechaCalExtraInglesVI_3',$txtCalExtraInglesVI_4,'$txtFechaCalExtraInglesVI_4',$calFilosofiaicacionFinal7),
        (DEFAULT,8,'$matricula',$txtFaltaFilosofia_1,$txtFaltaFilosofia_2,$txtFaltaFilosofia_3,$txtCalFilosofia_1,$txtCalFilosofia_2,$txtCalFilosofia_3,$txtCalExtraFilosofia_1,'$txtFechaCalExtraFilosofia_1',$txtCalExtraFilosofia_2,'$txtFechaCalExtraFilosofia_2',$txtCalExtraFilosofia_3,'$txtFechaCalExtraFilosofia_3',$txtCalExtraFilosofia_4,'$txtFechaCalExtraFilosofia_4',$calFilosofiaicacionFinal8),
        (DEFAULT,9,'$matricula',$txtFaltaDD_1,$txtFaltaDD_2,$txtFaltaDD_3,$txtCalDD_1,$txtCalDD_2,$txtCalDD_3,$txtCalExtraDD_1,'$txtFechaCalExtraDD_1',$txtCalExtraDD_2,'$txtFechaCalExtraDD_2',$txtCalExtraDD_3,'$txtFechaCalExtraDD_3',$txtCalExtraDD_4,'$txtFechaCalExtraDD_4',$calFilosofiaicacionFinal9),
        (DEFAULT,10,'$matricula',$txtFaltaAACIV_1,$txtFaltaAACIV_2,$txtFaltaAACIV_3,$txtCalAACIV_1,$txtCalAACIV_2,$txtCalAACIV_3,$txtCalExtraAACIV_1,'$txtFechaCalExtraAACIV_1',$txtCalExtraAACIV_2,'$txtFechaCalExtraAACIV_2',$txtCalExtraAACIV_3,'$txtFechaCalExtraAACIV_3',$txtCalExtraAACIV_4,'$txtFechaCalExtraAACIV_4',$calFilosofiaicacionFinal10),
        (DEFAULT,11,'$matricula',$txtFaltaSIAVI_1,$txtFaltaSIAVI_2,$txtFaltaSIAVI_3,$txtCalSIAVI_1,$txtCalSIAVI_2,$txtCalSIAVI_3,$txtCalExtraSIAVI_1,'$txtFechaCalExtraSIAVI_1',$txtCalExtraSIAVI_2,'$txtFechaCalExtraSIAVI_2',$txtCalExtraSIAVI_3,'$txtFechaCalExtraSIAVI_3',$txtCalExtraSIAVI_4,'$txtFechaCalExtraSIAVI_4',$calFilosofiaicacionFinal11)        
        ;";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verCalificacionesAlumno.php");}
    else{
        echo "Error";
    }
    mysqli_close($conexion);        
?>