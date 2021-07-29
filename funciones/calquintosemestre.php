<?php
    include("conexion.php");
    $matricula= $_POST['txtMatriculaAlum'];    

    $txtCalMateV_1= $_POST['txtCalMateV_1'];
    $txtCalMateV_2= $_POST['txtCalMateV_2'];
    $txtCalMateV_3= $_POST['txtCalMateV_3'];
    $txtFaltaMateV_1= $_POST['txtFaltaMateV_1'];
    $txtFaltaMateV_2= $_POST['txtFaltaMateV_2'];
    $txtFaltaMateV_3= $_POST['txtFaltaMateV_3'];
    $txtCalExtraMateV_1 = $_POST['txtCalExtraMateV_1'];
    $txtFechaCalExtraMateV_1 = $_POST['txtFechaCalExtraMateV_1'];
    $txtCalExtraMateV_2 = $_POST['txtCalExtraMateV_2'];
    $txtFechaCalExtraMateV_2 = $_POST['txtFechaCalExtraMateV_2'];
    $txtCalExtraMateV_3 = $_POST['txtCalExtraMateV_3'];
    $txtFechaCalExtraMateV_3 = $_POST['txtFechaCalExtraMateV_3'];
    $txtCalExtraMateV_4 = $_POST['txtCalExtraMateV_4'];
    $txtFechaCalExtraMateV_4 = $_POST['txtFechaCalExtraMateV_4'];

    $txtCalGeografia_1= $_POST['txtCalGeografia_1'];
    $txtCalGeografia_2= $_POST['txtCalGeografia_2'];
    $txtCalGeografia_3= $_POST['txtCalGeografia_3'];
    $txtFaltaGeografia_1 = $_POST['txtFaltaGeografia_1'];
    $txtFaltaGeografia_2 = $_POST['txtFaltaGeografia_2'];
    $txtFaltaGeografia_3 = $_POST['txtFaltaGeografia_3'];
    $txtCalExtraGeografia_1 = $_POST['txtCalExtraGeografia_1'];
    $txtFechaCalExtraGeografia_1 = $_POST['txtFechaCalExtraGeografia_1'];
    $txtCalExtraGeografia_2 = $_POST['txtCalExtraGeografia_2'];
    $txtFechaCalExtraGeografia_2 = $_POST['txtFechaCalExtraGeografia_2'];
    $txtCalExtraGeografia_3 = $_POST['txtCalExtraGeografia_3'];
    $txtFechaCalExtraGeografia_3 = $_POST['txtFechaCalExtraGeografia_3'];
    $txtCalExtraGeografia_4 = $_POST['txtCalExtraGeografia_4'];
    $txtFechaCalExtraGeografia_4 = $_POST['txtFechaCalExtraGeografia_4'];

    $txtCalESM_1 = $_POST['txtCalESM_1'];
    $txtCalESM_2 = $_POST['txtCalESM_2'];
    $txtCalESM_3 = $_POST['txtCalESM_3'];
    $txtFaltaESM_1 = $_POST['txtFaltaESM_1'];
    $txtFaltaESM_2 = $_POST['txtFaltaESM_2'];
    $txtFaltaESM_3 = $_POST['txtFaltaESM_3'];
    $txtCalExtraESM_1 = $_POST['txtCalExtraESM_1'];
    $txtFechaCalExtraESM_1 = $_POST['txtFechaCalExtraESM_1'];
    $txtCalExtraESM_2 = $_POST['txtCalExtraESM_2'];
    $txtFechaCalExtraESM_2 = $_POST['txtFechaCalExtraESM_2'];
    $txtCalExtraESM_3 = $_POST['txtCalExtraESM_3'];
    $txtFechaCalExtraESM_3 = $_POST['txtFechaCalExtraESM_3'];
    $txtCalExtraESM_4 = $_POST['txtCalExtraESM_4'];
    $txtFechaCalExtraESM_4= $_POST['txtFechaCalExtraESM_4'];

    $txtCalEconomiaI_1 = $_POST['txtCalEconomiaI_1'];
    $txtCalEconomiaI_2 = $_POST['txtCalEconomiaI_2'];
    $txtCalEconomiaI_3 = $_POST['txtCalEconomiaI_3'];
    $txtFaltaEconomiaI_1= $_POST['txtFaltaEconomiaI_1'];
    $txtFaltaEconomiaI_2= $_POST['txtFaltaEconomiaI_2'];
    $txtFaltaEconomiaI_3= $_POST['txtFaltaEconomiaI_3'];
    $txtCalExtraEconomiaI_1 = $_POST['txtCalExtraEconomiaI_1'];
    $txtFechaCalExtraEconomiaI_1= $_POST['txtFechaCalExtraEconomiaI_1'];
    $txtCalExtraEconomiaI_2= $_POST['txtCalExtraEconomiaI_2'];
    $txtFechaCalExtraEconomiaI_2 = $_POST['txtFechaCalExtraEconomiaI_2'];
    $txtCalExtraEconomiaI_3= $_POST['txtCalExtraEconomiaI_3'];
    $txtFechaCalExtraEconomiaI_3 = $_POST['txtFechaCalExtraEconomiaI_3'];
    $txtCalExtraEconomiaI_4= $_POST['txtCalExtraEconomiaI_4'];
    $txtFechaCalExtraEconomiaI_4= $_POST['txtFechaCalExtraEconomiaI_4'];

    $txtCalPsicologiaI_1= $_POST['txtCalPsicologiaI_1'];
    $txtCalPsicologiaI_2= $_POST['txtCalPsicologiaI_2'];
    $txtCalPsicologiaI_3= $_POST['txtCalPsicologiaI_3'];
    $txtFaltaPsicologiaI_1= $_POST['txtFaltaPsicologiaI_1'];
    $txtFaltaPsicologiaI_2= $_POST['txtFaltaPsicologiaI_2'];
    $txtFaltaPsicologiaI_3= $_POST['txtFaltaPsicologiaI_3'];
    $txtCalExtraPsicologiaI_1 = $_POST['txtCalExtraPsicologiaI_1'];
    $txtFechaCalExtraPsicologiaI_1 = $_POST['txtFechaCalExtraPsicologiaI_1'];
    $txtCalExtraPsicologiaI_2= $_POST['txtCalExtraPsicologiaI_2'];
    $txtFechaCalExtraPsicologiaI_2= $_POST['txtFechaCalExtraPsicologiaI_2'];
    $txtCalExtraPsicologiaI_4= $_POST['txtCalExtraPsicologiaI_3'];
    $txtFechaCalExtraPsicologiaI_3 = $_POST['txtFechaCalExtraPsicologiaI_3'];
    $txtCalExtraPsicologiaI_4= $_POST['txtCalExtraPsicologiaI_4'];
    $txtFechaCalExtraPsicologiaI_4= $_POST['txtFechaCalExtraPsicologiaI_4'];

    $txtCalDerechoI_1 = $_POST['txtCalDerechoI_1'];
    $txtCalDerechoI_2 = $_POST['txtCalDerechoI_2'];
    $txtCalDerechoI_3 = $_POST['txtCalDerechoI_3'];
    $txtFaltaDerechoI_1 = $_POST['txtFaltaDerechoI_1'];
    $txtFaltaDerechoI_2 = $_POST['txtFaltaDerechoI_2'];
    $txtFaltaDerechoI_3= $_POST['txtFaltaDerechoI_3'];
    $txtCalExtraDerechoI_1= $_POST['txtCalExtraDerechoI_1'];
    $txtFechaCalExtraDerechoI_1= $_POST['txtFechaCalExtraDerechoI_1'];
    $txtCalExtraDerechoI_2= $_POST['txtCalExtraDerechoI_2'];
    $txtFechaCalExtraDerechoI_2= $_POST['txtFechaCalExtraDerechoI_2'];
    $txtCalExtraDerechoI_3= $_POST['txtCalExtraDerechoI_3'];
    $txtFechaCalExtraDerechoI_3= $_POST['txtFechaCalExtraDerechoI_3'];
    $txtCalExtraDerechoI_4= $_POST['txtCalExtraDerechoI_4'];
    $txtFechaCalExtraDerechoI_4= $_POST['txtFechaCalExtraDerechoI_4'];

    $txtCalInglesV_1 = $_POST['txtCalInglesV_1'];
    $txtCalInglesV_2 = $_POST['txtCalInglesV_2'];
    $txtCalInglesV_3 = $_POST['txtCalInglesV_3'];
    $txtFaltaInglesV_1= $_POST['txtFaltaInglesV_1'];
    $txtFaltaInglesV_2= $_POST['txtFaltaInglesV_2'];
    $txtFaltaInglesV_3= $_POST['txtFaltaInglesV_3'];
    $txtCalExtraInglesV_1= $_POST['txtCalExtraInglesV_1'];
    $txtFechaCalExtraInglesV_1 = $_POST['txtFechaCalExtraInglesV_1'];
    $txtCalExtraInglesV_2= $_POST['txtCalExtraInglesV_2'];
    $txtFechaCalExtraInglesV_2 = $_POST['txtFechaCalExtraInglesV_2'];
    $txtCalExtraInglesV_3 = $_POST['txtCalExtraInglesV_3'];
    $txtFechaCalExtraInglesV_3 = $_POST['txtFechaCalExtraInglesV_3'];
    $txtCalExtraInglesV_4= $_POST['txtCalExtraInglesV_4'];
    $txtFechaCalExtraInglesV_4 = $_POST['txtFechaCalExtraInglesV_4'];

    $txtCalIF_1= $_POST['txtCalIF_1'];
    $txtCalIF_2 = $_POST['txtCalIF_2'];
    $txtCalIF_3 = $_POST['txtCalIF_3'];
    $txtFaltaIF_1= $_POST['txtFaltaIF_1'];
    $txtFaltaIF_2= $_POST['txtFaltaIF_2'];
    $txtFaltaIF_3= $_POST['txtFaltaIF_3'];
    $txtCalExtraIF_1= $_POST['txtCalExtraIF_1'];
    $txtFechaCalExtraIF_1 = $_POST['txtFechaCalExtraIF_1'];
    $txtCalExtraIF_2 = $_POST['txtCalExtraIF_2'];
    $txtFechaCalExtraIF_2 = $_POST['txtFechaCalExtraIF_2'];
    $txtCalExtraIF_3= $_POST['txtCalExtraIF_3'];
    $txtFechaCalExtraIF_3= $_POST['txtFechaCalExtraIF_3'];
    $txtCalExtraIF_4= $_POST['txtCalExtraIF_4'];
    $txtFechaCalExtraIF_4= $_POST['txtFechaCalExtraIF_4'];

    $txtCalSI_1 = $_POST['txtCalSI_1'];
    $txtCalSI_2 = $_POST['txtCalSI_2'];
    $txtCalSI_3 = $_POST['txtCalSI_3'];
    $txtFaltaSI_1= $_POST['txtFaltaSI_1'];
    $txtFaltaSI_2= $_POST['txtFaltaSI_2'];
    $txtFaltaSI_3= $_POST['txtFaltaSI_3'];
    $txtCalExtraSI_1 = $_POST['txtCalExtraSI_1'];
    $txtFechaCalExtraSI_1= $_POST['txtFechaCalExtraSI_1'];
    $txtCalExtraSI_2= $_POST['txtCalExtraSI_2'];
    $txtFechaCalExtraSI_2= $_POST['txtFechaCalExtraSI_2'];
    $txtCalExtraSI_3= $_POST['txtCalExtraSI_3'];
    $txtFechaCalExtraSI_3 = $_POST['txtFechaCalExtraSI_3'];
    $txtCalExtraSI_4= $_POST['txtCalExtraSI_4'];
    $txtFechaCalExtraSI_4= $_POST['txtFechaCalExtraSI_4'];

    $txtCalProgramacion_1 = $_POST['txtCalProgramacion_1'];
    $txtCalProgramacion_2 = $_POST['txtCalProgramacion_2'];
    $txtCalProgramacion_3 = $_POST['txtCalProgramacion_3'];
    $txtFaltaProgramacion_1= $_POST['txtFaltaProgramacion_1'];
    $txtFaltaProgramacion_2= $_POST['txtFaltaProgramacion_2'];
    $txtFaltaProgramacion_3= $_POST['txtFaltaProgramacion_3'];
    $txtCalExtraProgramacion_1 = $_POST['txtCalExtraProgramacion_1'];
    $txtFechaCalExtraProgramacion_1 = $_POST['txtFechaCalExtraProgramacion_1'];
    $txtCalExtraProgramacion_2 = $_POST['txtCalExtraProgramacion_2'];
    $txtFechaCalExtraProgramacion_2= $_POST['txtFechaCalExtraProgramacion_2'];
    $txtCalExtraProgramacion_3= $_POST['txtCalExtraProgramacion_3'];
    $txtFechaCalExtraProgramacion_3 = $_POST['txtFechaCalExtraProgramacion_3'];
    $txtCalExtraProgramacion_4 = $_POST['txtCalExtraProgramacion_4'];
    $txtFechaCalExtraProgramacion_4 = $_POST['txtFechaCalExtraProgramacion_4'];

    $txtCalAACIII_1 = $_POST['txtCalAACIII_1'];
    $txtCalAACIII_2 = $_POST['txtCalAACIII_2'];
    $txtCalAACIII_3 = $_POST['txtCalAACIII_3'];
    $txtFaltaAACIII_1= $_POST['txtFaltaAACIII_1'];
    $txtFaltaAACIII_2= $_POST['txtFaltaAACIII_2'];
    $txtFaltaAACIII_3= $_POST['txtFaltaAACIII_3'];
    $txtCalExtraAACIII_1 = $_POST['txtCalExtraAACIII_1'];
    $txtFechaCalExtraAACIII_1 = $_POST['txtFechaCalExtraAACIII_1'];
    $txtCalExtraAACIII_2 = $_POST['txtCalExtraAACIII_2'];
    $txtFechaCalExtraAACIII_2= $_POST['txtFechaCalExtraAACIII_2'];
    $txtCalExtraAACIII_3= $_POST['txtCalExtraAACIII_3'];
    $txtFechaCalExtraAACIII_3 = $_POST['txtFechaCalExtraAACIII_3'];
    $txtCalExtraAACIII_4 = $_POST['txtCalExtraAACIII_4'];
    $txtFechaCalExtraAACIII_4 = $_POST['txtFechaCalExtraAACIII_4'];

    $txtCalSIAV_1 = $_POST['txtCalSIAV_1'];
    $txtCalSIAV_2 = $_POST['txtCalSIAV_2'];
    $txtCalSIAV_3 = $_POST['txtCalSIAV_3'];
    $txtFaltaSIAV_1= $_POST['txtFaltaSIAV_1'];
    $txtFaltaSIAV_2= $_POST['txtFaltaSIAV_2'];
    $txtFaltaSIAV_3= $_POST['txtFaltaSIAV_3'];
    $txtCalExtraSIAV_1 = $_POST['txtCalExtraSIAV_1'];
    $txtFechaCalExtraSIAV_1 = $_POST['txtFechaCalExtraSIAV_1'];
    $txtCalExtraSIAV_2 = $_POST['txtCalExtraSIAV_2'];
    $txtFechaCalExtraSIAV_2= $_POST['txtFechaCalExtraSIAV_2'];
    $txtCalExtraSIAV_3= $_POST['txtCalExtraSIAV_3'];
    $txtFechaCalExtraSIAV_3 = $_POST['txtFechaCalExtraSIAV_3'];
    $txtCalExtraSIAV_4 = $_POST['txtCalExtraSIAV_4'];
    $txtFechaCalExtraSIAV_4 = $_POST['txtFechaCalExtraSIAV_4'];

    $calificacionFinal1   = ($txtCalMateV_3 + $txtCalMateV_2 + $txtCalMateV_1)/3;
    $calificacionFinal2   = ($txtCalGeografia_3 + $txtCalGeografia_2 + $txtCalGeografia_1)/3;
    $calificacionFinal3   = ($txtCalESM_3 + $txtCalESM_2 + $txtCalESM_1)/3;
    $calificacionFinal4   = ($txtCalEconomiaI_3 + $txtCalEconomiaI_2 + $txtCalEconomiaI_1)/3;
    $calificacionFinal5   = ($txtCalPsicologiaI_3 + $txtCalPsicologiaI_2 + $txtCalPsicologiaI_1)/3;
    $calificacionFinal6   = ($txtCalDerechoI_3 + $txtCalDerechoI_2 + $txtCalDerechoI_1)/3;
    $calificacionFinal7   = ($txtCalInglesV_3 + $txtCalInglesV_2 + $txtCalInglesV_1)/3;
    $calificacionFinal8   = ($txtCalIF_3 + $txtCalIF_2 + $txtCalIF_1)/3;
    $calificacionFinal9   = ($txtCalSI_3 + $txtCalSI_2 + $txtCalSI_1)/3;
    $calificacionFinal10  = ($txtCalProgramacion_3 + $txtCalProgramacion_2 + $txtCalProgramacion_1)/3;
    $calificacionFinal11  = ($txtCalAACIII_3 + $txtCalAACIII_2 + $txtCalAACIII_1)/3;
    $calificacionFinal12  = ($txtCalSIAV_3 + $txtCalSIAV_2 + $txtCalSIAV_1)/3;
    $sentencia= "INSERT INTO `datosalumno-semestre5` VALUES 
        (DEFAULT,1,'$matricula',$txtFaltaMateV_1,$txtFaltaMateV_2,$txtFaltaMateV_3,$txtCalMateV_1,$txtCalMateV_2,$txtCalMateV_3,$txtCalExtraMateV_1,'$txtFechaCalExtraMateV_1',$txtCalExtraMateV_2,'$txtFechaCalExtraMateV_2',$txtCalExtraMateV_3,'$txtFechaCalExtraMateV_3',$txtCalExtraMateV_4,'$txtFechaCalExtraMateV_4',$calificacionFinal1),
        (DEFAULT,2,'$matricula',$txtFaltaGeografia_1,$txtFaltaGeografia_2,$txtFaltaGeografia_3,$txtCalGeografia_1,$txtCalGeografia_2,$txtCalGeografia_3,$txtCalExtraGeografia_1,'$txtFechaCalExtraGeografia_1',$txtCalExtraGeografia_2,'$txtFechaCalExtraGeografia_2',$txtCalExtraGeografia_3,'$txtFechaCalExtraGeografia_3',$txtCalExtraGeografia_4,'$txtFechaCalExtraGeografia_4',$calificacionFinal2),
        (DEFAULT,3,'$matricula',$txtFaltaESM_1,$txtFaltaESM_2,$txtFaltaESM_3,$txtCalESM_1,$txtCalESM_2,$txtCalESM_3,$txtCalExtraESM_1,'$txtFechaCalExtraESM_1',$txtCalExtraESM_2,'$txtFechaCalExtraESM_2',$txtCalExtraESM_3,'$txtFechaCalExtraESM_3',$txtCalExtraESM_4,'$txtFechaCalExtraESM_4',$calificacionFinal3),
        (DEFAULT,4,'$matricula',$txtFaltaEconomiaI_1,$txtFaltaEconomiaI_2,$txtFaltaEconomiaI_3,$txtCalEconomiaI_1,$txtCalEconomiaI_2,$txtCalEconomiaI_3,$txtCalExtraEconomiaI_1,'$txtFechaCalExtraEconomiaI_1',$txtCalExtraEconomiaI_2,'$txtFechaCalExtraEconomiaI_2',$txtCalExtraEconomiaI_3,'$txtFechaCalExtraEconomiaI_3',$txtCalExtraEconomiaI_4,'$txtFechaCalExtraEconomiaI_4',$calificacionFinal4),
        (DEFAULT,5,'$matricula',$txtFaltaPsicologiaI_1,$txtFaltaPsicologiaI_2,$txtFaltaPsicologiaI_3,$txtCalPsicologiaI_1,$txtCalPsicologiaI_2,$txtCalPsicologiaI_3,$txtCalExtraPsicologiaI_1,'$txtFechaCalExtraPsicologiaI_1',$txtCalExtraPsicologiaI_2,'$txtFechaCalExtraPsicologiaI_2',$txtCalExtraPsicologiaI_3,'$txtFechaCalExtraPsicologiaI_3',$txtCalExtraPsicologiaI_4,'$txtFechaCalExtraPsicologiaI_4',$calificacionFinal5),
        (DEFAULT,6,'$matricula',$txtFaltaDerechoI_1,$txtFaltaDerechoI_2,$txtFaltaDerechoI_3,$txtCalDerechoI_1,$txtCalDerechoI_2,$txtCalDerechoI_3,$txtCalExtraDerechoI_1,'$txtFechaCalExtraDerechoI_1',$txtCalExtraDerechoI_2,'$txtFechaCalExtraDerechoI_2',$txtCalExtraDerechoI_3,'$txtFechaCalExtraDerechoI_3',$txtCalExtraDerechoI_4,'$txtFechaCalExtraDerechoI_4',$calificacionFinal6),
        (DEFAULT,7,'$matricula',$txtFaltaInglesV_1,$txtFaltaInglesV_2,$txtFaltaInglesV_3,$txtCalInglesV_1,$txtCalInglesV_2,$txtCalInglesV_3,$txtCalExtraInglesV_1,'$txtFechaCalExtraInglesV_1',$txtCalExtraInglesV_2,'$txtFechaCalExtraInglesV_2',$txtCalExtraInglesV_3,'$txtFechaCalExtraInglesV_3',$txtCalExtraInglesV_4,'$txtFechaCalExtraInglesV_4',$calificacionFinal7),
        (DEFAULT,8,'$matricula',$txtFaltaIF_1,$txtFaltaIF_2,$txtFaltaIF_3,$txtCalIF_1,$txtCalIF_2,$txtCalIF_3,$txtCalExtraIF_1,'$txtFechaCalExtraIF_1',$txtCalExtraIF_2,'$txtFechaCalExtraIF_2',$txtCalExtraIF_3,'$txtFechaCalExtraIF_3',$txtCalExtraIF_4,'$txtFechaCalExtraIF_4',$calificacionFinal8),
        (DEFAULT,9,'$matricula',$txtFaltaSI_1,$txtFaltaSI_2,$txtFaltaSI_3,$txtCalSI_1,$txtCalSI_2,$txtCalSI_3,$txtCalExtraSI_1,'$txtFechaCalExtraSI_1',$txtCalExtraSI_2,'$txtFechaCalExtraSI_2',$txtCalExtraSI_3,'$txtFechaCalExtraSI_3',$txtCalExtraSI_4,'$txtFechaCalExtraSI_4',$calificacionFinal9),
        (DEFAULT,10,'$matricula',$txtFaltaProgramacion_1,$txtFaltaProgramacion_2,$txtFaltaProgramacion_3,$txtCalProgramacion_1,$txtCalProgramacion_2,$txtCalProgramacion_3,$txtCalExtraProgramacion_1,'$txtFechaCalExtraProgramacion_1',$txtCalExtraProgramacion_2,'$txtFechaCalExtraProgramacion_2',$txtCalExtraProgramacion_3,'$txtFechaCalExtraProgramacion_3',$calificacionFinal10),
        (DEFAULT,11,'$matricula',$txtFaltaAACIII_1,$txtFaltaAACIII_2,$txtFaltaAACIII_3,$txtCalAACIII_1,$txtCalAACIII_2,$txtCalAACIII_3,$txtCalExtraAACIII_1,'$txtFechaCalExtraAACIII_1',$txtCalExtraAACIII_2,'$txtFechaCalExtraAACIII_2',$txtCalExtraAACIII_3,'$txtFechaCalExtraAACIII_3',$calificacionFinal11),
        (DEFAULT,12,'$matricula',$txtFaltaSIAV_1,$txtFaltaSIAV_2,$txtFaltaSIAV_3,$txtCalSIAV_1,$txtCalSIAV_2,$txtCalSIAV_3,$txtCalExtraSIAV_1,'$txtFechaCalExtraSIAV_1',$txtCalExtraSIAV_2,'$txtFechaCalExtraSIAV_2',$txtCalExtraSIAV_3,'$txtFechaCalExtraSIAV_3',$txtCalExtraSIAV_4,'$txtFechaCalExtraSIAV_4',$calificacionFinal12)
        ;";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verCalificacionesAlumno.php");}
    else{
        echo "Error";
    }
    mysqli_close($conexion);        
?>