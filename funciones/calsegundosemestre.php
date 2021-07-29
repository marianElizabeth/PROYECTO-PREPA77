<?php
    include("conexion.php");
    $matricula= $_POST['txtMatriculaAlum'];    

    $txtCalMateII_1= $_POST['txtCalMateII_1'];
    $txtCalMateII_2= $_POST['txtCalMateII_2'];
    $txtCalMateII_3= $_POST['txtCalMateII_3'];
    $txtFaltaMateII_1= $_POST['txtFaltaMateII_1'];
    $txtFaltaMateII_2= $_POST['txtFaltaMateII_2'];
    $txtFaltaMateII_3= $_POST['txtFaltaMateII_3'];
    $txtCalExtraMateII_1 = $_POST['txtCalExtraMateII_1'];
    $txtFechaCalExtraMateII_1 = $_POST['txtFechaCalExtraMateII_1'];
    $txtCalExtraMateII_2 = $_POST['txtCalExtraMateII_2'];
    $txtFechaCalExtraMateII_2 = $_POST['txtFechaCalExtraMateII_2'];
    $txtCalExtraMateII_3 = $_POST['txtCalExtraMateII_3'];
    $txtFechaCalExtraMateII_3 = $_POST['txtFechaCalExtraMateII_3'];
    $txtCalExtraMateII_4 = $_POST['txtCalExtraMateII_4'];
    $txtFechaCalExtraMateII_4 = $_POST['txtFechaCalExtraMateII_4'];

    $txtCalQuimicaII_1= $_POST['txtCalQuimicaII_1'];
    $txtCalQuimicaII_2= $_POST['txtCalQuimicaII_2'];
    $txtCalQuimicaII_3= $_POST['txtCalQuimicaII_3'];
    $txtFaltaQuimicaII_1 = $_POST['txtFaltaQuimicaII_1'];
    $txtFaltaQuimicaII_2 = $_POST['txtFaltaQuimicaII_2'];
    $txtFaltaQuimicaII_3 = $_POST['txtFaltaQuimicaII_3'];
    $txtCalExtraQuimicaII_1 = $_POST['txtCalExtraQuimicaII_1'];
    $txtFechaCalExtraQuimicaII_1 = $_POST['txtFechaCalExtraQuimicaII_1'];
    $txtCalExtraQuimicaII_2 = $_POST['txtCalExtraQuimicaII_2'];
    $txtFechaCalExtraQuimicaII_2 = $_POST['txtFechaCalExtraQuimicaII_2'];
    $txtCalExtraQuimicaII_3 = $_POST['txtCalExtraQuimicaII_3'];
    $txtFechaCalExtraQuimicaII_3 = $_POST['txtFechaCalExtraQuimicaII_3'];
    $txtCalExtraQuimicaII_4 = $_POST['txtCalExtraQuimicaII_4'];
    $txtFechaCalExtraQuimicaII_4 = $_POST['txtFechaCalExtraQuimicaII_4'];

    $txtCalICS_1 = $_POST['txtCalICS_1'];
    $txtCalICS_2 = $_POST['txtCalICS_2'];
    $txtCalICS_3 = $_POST['txtCalICS_3'];
    $txtFaltaICS_1 = $_POST['txtFaltaICS_1'];
    $txtFaltaICS_2 = $_POST['txtFaltaICS_2'];
    $txtFaltaICS_3 = $_POST['txtFaltaICS_3'];
    $txtCalExtraICS_1 = $_POST['txtCalExtraICS_1'];
    $txtFechaCalExtraICS_1 = $_POST['txtFechaCalExtraICS_1'];
    $txtCalExtraICS_2 = $_POST['txtCalExtraICS_2'];
    $txtFechaCalExtraICS_2 = $_POST['txtFechaCalExtraICS_2'];
    $txtCalExtraICS_3 = $_POST['txtCalExtraICS_3'];
    $txtFechaCalExtraICS_3 = $_POST['txtFechaCalExtraICS_3'];
    $txtCalExtraICS_4 = $_POST['txtCalExtraICS_4'];
    $txtFechaCalExtraICS_4= $_POST['txtFechaCalExtraICS_4'];

    $txtCalTallerII_1 = $_POST['txtCalTallerII_1'];
    $txtCalTallerII_2 = $_POST['txtCalTallerII_2'];
    $txtCalTallerII_3 = $_POST['txtCalTallerII_3'];
    $txtFaltaTallerII_1= $_POST['txtFaltaTallerII_1'];
    $txtFaltaTallerII_2= $_POST['txtFaltaTallerII_2'];
    $txtFaltaTallerII_3= $_POST['txtFaltaTallerII_3'];
    $txtCalExtraTallerII_1 = $_POST['txtCalExtraTallerII_1'];
    $txtFechaCalExtraTallerII_1= $_POST['txtFechaCalExtraTallerII_1'];
    $txtCalExtraTallerII_2= $_POST['txtCalExtraTallerII_2'];
    $txtFechaCalExtraTallerII_2 = $_POST['txtFechaCalExtraTallerII_2'];
    $txtCalExtraTallerII_3= $_POST['txtCalExtraTallerII_3'];
    $txtFechaCalExtraTallerII_3 = $_POST['txtFechaCalExtraTallerII_3'];
    $txtCalExtraTallerII_4= $_POST['txtCalExtraTallerII_4'];
    $txtFechaCalExtraTallerII_4= $_POST['txtFechaCalExtraTallerII_4'];

    $txtCalInglesII_1= $_POST['txtCalInglesII_1'];
    $txtCalInglesII_2= $_POST['txtCalInglesII_2'];
    $txtCalInglesII_3= $_POST['txtCalInglesII_3'];
    $txtFaltaInglesII_1= $_POST['txtFaltaInglesII_1'];
    $txtFaltaInglesII_2= $_POST['txtFaltaInglesII_2'];
    $txtFaltaInglesII_3= $_POST['txtFaltaInglesII_3'];
    $txtCalExtraInglesII_1 = $_POST['txtCalExtraInglesII_1'];
    $txtFechaCalExtraInglesII_1 = $_POST['txtFechaCalExtraInglesII_1'];
    $txtCalExtraInglesII_2= $_POST['txtCalExtraInglesII_2'];
    $txtFechaCalExtraInglesII_2= $_POST['txtFechaCalExtraInglesII_2'];
    $txtCalExtraInglesII_3= $_POST['txtCalExtraInglesII_3'];
    $txtFechaCalExtraInglesII_3 = $_POST['txtFechaCalExtraInglesII_3'];
    $txtCalExtraInglesII_4= $_POST['txtCalExtraInglesII_4'];
    $txtFechaCalExtraInglesII_4= $_POST['txtFechaCalExtraInglesII_4'];

    $txtCalInfoII_1 = $_POST['txtCalInfoII_1'];
    $txtCalInfoII_2 = $_POST['txtCalInfoII_2'];
    $txtCalInfoII_3 = $_POST['txtCalInfoII_3'];
    $txtFaltaInfoII_1 = $_POST['txtFaltaInfoII_1'];
    $txtFaltaInfoII_2 = $_POST['txtFaltaInfoII_2'];
    $txtFaltaInfoII_3= $_POST['txtFaltaInfoII_3'];
    $txtCalExtraInfoII_1= $_POST['txtCalExtraInfoII_1'];
    $txtFechaCalExtraInfoII_1= $_POST['txtFechaCalExtraInfoII_1'];
    $txtCalExtraInfoII_2= $_POST['txtCalExtraInfoII_2'];
    $txtFechaCalExtraInfoII_2= $_POST['txtFechaCalExtraInfoII_2'];
    $txtCalExtraInfoII_3= $_POST['txtCalExtraInfoII_3'];
    $txtFechaCalExtraInfoII_3= $_POST['txtFechaCalExtraInfoII_3'];
    $txtCalExtraInfoII_4= $_POST['txtCalExtraInfoII_4'];
    $txtFechaCalExtraInfoII_4= $_POST['txtFechaCalExtraInfoII_4'];

    $txtCalEticaII_1 = $_POST['txtCalEticaII_1'];
    $txtCalEticaII_2 = $_POST['txtCalEticaII_2'];
    $txtCalEticaII_3 = $_POST['txtCalEticaII_3'];
    $txtFaltaEticaII_1= $_POST['txtFaltaEticaII_1'];
    $txtFaltaEticaII_2= $_POST['txtFaltaEticaII_2'];
    $txtFaltaEticaII_3= $_POST['txtFaltaEticaII_3'];
    $txtCalExtraEticaII_1= $_POST['txtCalExtraEticaII_1'];
    $txtFechaCalExtraEticaII_1 = $_POST['txtFechaCalExtraEticaII_1'];
    $txtCalExtraEticaII_2= $_POST['txtCalExtraEticaII_2'];
    $txtFechaCalExtraEticaII_2 = $_POST['txtFechaCalExtraEticaII_2'];
    $txtCalExtraEticaII_3 = $_POST['txtCalExtraEticaII_3'];
    $txtFechaCalExtraEticaII_3 = $_POST['txtFechaCalExtraEticaII_3'];
    $txtCalExtraEticaII_4= $_POST['txtCalExtraEticaII_4'];
    $txtFechaCalExtraEticaII_4 = $_POST['txtFechaCalExtraEticaII_4'];

    $txtCalAFDRII_1= $_POST['txtCalAFDRII_1'];
    $txtCalAFDRII_2 = $_POST['txtCalAFDRII_2'];
    $txtCalAFDRII_3 = $_POST['txtCalAFDRII_3'];
    $txtFaltaAFDRII_1= $_POST['txtFaltaAFDRII_1'];
    $txtFaltaAFDRII_2= $_POST['txtFaltaAFDRII_2'];
    $txtFaltaAFDRII_3= $_POST['txtFaltaAFDRII_3'];
    $txtCalExtraAFDRII_1= $_POST['txtCalExtraAFDRII_1'];
    $txtFechaCalExtraAFDRII_1 = $_POST['txtFechaCalExtraAFDRII_1'];
    $txtCalExtraAFDRII_2 = $_POST['txtCalExtraAFDRII_2'];
    $txtFechaCalExtraAFDRII_2 = $_POST['txtFechaCalExtraAFDRII_2'];
    $txtCalExtraAFDRII_3= $_POST['txtCalExtraAFDRII_3'];
    $txtFechaCalExtraAFDRII_3= $_POST['txtFechaCalExtraAFDRII_3'];
    $txtCalExtraAFDRII_4= $_POST['txtCalExtraAFDRII_4'];
    $txtFechaCalExtraAFDRII_4= $_POST['txtFechaCalExtraAFDRII_4'];

    $txtCalAACII_1 = $_POST['txtCalAACII_1'];
    $txtCalAACII_2 = $_POST['txtCalAACII_2'];
    $txtCalAACII_3 = $_POST['txtCalAACII_3'];
    $txtFaltaAACII_1= $_POST['txtFaltaAACII_1'];
    $txtFaltaAACII_2= $_POST['txtFaltaAACII_2'];
    $txtFaltaAACII_3= $_POST['txtFaltaAACII_3'];
    $txtCalExtraAACII_1 = $_POST['txtCalExtraAACII_1'];
    $txtFechaCalExtraAACII_1= $_POST['txtFechaCalExtraAACII_1'];
    $txtCalExtraAACII_2= $_POST['txtCalExtraAACII_2'];
    $txtFechaCalExtraAACII_2= $_POST['txtFechaCalExtraAACII_2'];
    $txtCalExtraAACII_3= $_POST['txtCalExtraAACII_3'];
    $txtFechaCalExtraAACII_3 = $_POST['txtFechaCalExtraAACII_3'];
    $txtCalExtraAACII_4= $_POST['txtCalExtraAACII_4'];
    $txtFechaCalExtraAACII_4= $_POST['txtFechaCalExtraAACII_4'];

    $txtCalSaludII_1 = $_POST['txtCalSaludII_1'];
    $txtCalSaludII_2 = $_POST['txtCalSaludII_2'];
    $txtCalSaludII_3 = $_POST['txtCalSaludII_3'];
    $txtFaltaSaludII_1= $_POST['txtFaltaSaludII_1'];
    $txtFaltaSaludII_2= $_POST['txtFaltaSaludII_2'];
    $txtFaltaSaludII_3= $_POST['txtFaltaSaludII_3'];
    $txtCalExtraSaludII_1 = $_POST['txtCalExtraSaludII_1'];
    $txtFechaCalExtraSaludII_1 = $_POST['txtFechaCalExtraSaludII_1'];
    $txtCalExtraSaludII_2 = $_POST['txtCalExtraSaludII_2'];
    $txtFechaCalExtraSaludII_2= $_POST['txtFechaCalExtraSaludII_2'];
    $txtCalExtraSaludII_3= $_POST['txtCalExtraSaludII_3'];
    $txtFechaCalExtraSaludII_3 = $_POST['txtFechaCalExtraSaludII_3'];
    $txtCalExtraSaludII_4 = $_POST['txtCalExtraSaludII_4'];
    $txtFechaCalExtraSaludII_4 = $_POST['txtFechaCalExtraSaludII_4'];

    $calificacionFinal1   = ($txtCalMateII_3 + $txtCalMateII_2 + $txtCalMateII_1)/3;
    $calificacionFinal2   = ($txtCalQuimicaII_3 + $txtCalQuimicaII_2 + $txtCalQuimicaII_1)/3;
    $calificacionFinal3   = ($txtCalICS_3 + $txtCalICS_2 + $txtCalICS_1)/3;
    $calificacionFinal4   = ($txtCalTallerII_3 + $txtCalTallerII_2 + $txtCalTallerII_1)/3;
    $calificacionFinal5   = ($txtCalInglesII_3 + $txtCalInglesII_2 + $txtCalInglesII_1)/3;
    $calificacionFinal6   = ($txtCalInfoII_3 + $txtCalInfoII_2 + $txtCalInfoII_1)/3;
    $calificacionFinal7   = ($txtCalEticaII_3 + $txtCalEticaII_2 + $txtCalEticaII_1)/3;
    $calificacionFinal8   = ($txtCalAFDRII_3 + $txtCalAFDRII_2 + $txtCalAFDRII_1)/3;
    $calificacionFinal9   = ($txtCalAACII_3 + $txtCalAACII_2 + $txtCalAACII_1)/3;
    $calificacionFinal10  = ($txtCalSaludII_3 + $txtCalSaludII_2 + $txtCalSaludII_1)/3;
    $sentencia= "INSERT INTO `datosalumno-semestre2` VALUES 
        (DEFAULT,1,'$matricula',$txtFaltaMateII_1,$txtFaltaMateII_2,$txtFaltaMateII_3,$txtCalMateII_1,$txtCalMateII_2,$txtCalMateII_3,$txtCalExtraMateII_1,'$txtFechaCalExtraMateII_1',$txtCalExtraMateII_2,'$txtFechaCalExtraMateII_2',$txtCalExtraMateII_3,'$txtFechaCalExtraMateII_3',$txtCalExtraMateII_4,'$txtFechaCalExtraMateII_4',$calificacionFinal1),
        (DEFAULT,2,'$matricula',$txtFaltaQuimicaII_1,$txtFaltaQuimicaII_2,$txtFaltaQuimicaII_3,$txtCalQuimicaII_1,$txtCalQuimicaII_2,$txtCalQuimicaII_3,$txtCalExtraQuimicaII_1,'$txtFechaCalExtraQuimicaII_1',$txtCalExtraQuimicaII_2,'$txtFechaCalExtraQuimicaII_2',$txtCalExtraQuimicaII_3,'$txtFechaCalExtraQuimicaII_3',$txtCalExtraQuimicaII_4,'$txtFechaCalExtraQuimicaII_4',$calificacionFinal2),
        (DEFAULT,3,'$matricula',$txtFaltaICS_1,$txtFaltaICS_2,$txtFaltaICS_3,$txtCalICS_1,$txtCalICS_2,$txtCalICS_3,$txtCalExtraICS_1,'$txtFechaCalExtraICS_1',$txtCalExtraICS_2,'$txtFechaCalExtraICS_2',$txtCalExtraICS_3,'$txtFechaCalExtraICS_3',$txtCalExtraICS_4,'$txtFechaCalExtraICS_4',$calificacionFinal3),
        (DEFAULT,4,'$matricula',$txtFaltaTallerII_1,$txtFaltaTallerII_2,$txtFaltaTallerII_3,$txtCalTallerII_1,$txtCalTallerII_2,$txtCalTallerII_3,$txtCalExtraTallerII_1,'$txtFechaCalExtraTallerII_1',$txtCalExtraTallerII_2,'$txtFechaCalExtraTallerII_2',$txtCalExtraTallerII_3,'$txtFechaCalExtraTallerII_3',$txtCalExtraTallerII_4,'$txtFechaCalExtraTallerII_4',$calificacionFinal4),
        (DEFAULT,5,'$matricula',$txtFaltaInglesII_1,$txtFaltaInglesII_2,$txtFaltaInglesII_3,$txtCalInglesII_1,$txtCalInglesII_2,$txtCalInglesII_3,$txtCalExtraInglesII_1,'$txtFechaCalExtraInglesII_1',$txtCalExtraInglesII_2,'$txtFechaCalExtraInglesII_2',$txtCalExtraInglesII_3,'$txtFechaCalExtraInglesII_3',$txtCalExtraInglesII_4,'$txtFechaCalExtraInglesII_4',$calificacionFinal5),
        (DEFAULT,6,'$matricula',$txtFaltaInfoII_1,$txtFaltaInfoII_2,$txtFaltaInfoII_3,$txtCalInfoII_1,$txtCalInfoII_2,$txtCalInfoII_3,$txtCalExtraInfoII_1,'$txtFechaCalExtraInfoII_1',$txtCalExtraInfoII_2,'$txtFechaCalExtraInfoII_2',$txtCalExtraInfoII_3,'$txtFechaCalExtraInfoII_3',$txtCalExtraInfoII_4,'$txtFechaCalExtraInfoII_4',$calificacionFinal6),
        (DEFAULT,7,'$matricula',$txtFaltaEticaII_1,$txtFaltaEticaII_2,$txtFaltaEticaII_3,$txtCalEticaII_1,$txtCalEticaII_2,$txtCalEticaII_3,$txtCalExtraEticaII_1,'$txtFechaCalExtraEticaII_1',$txtCalExtraEticaII_2,'$txtFechaCalExtraEticaII_2',$txtCalExtraEticaII_3,'$txtFechaCalExtraEticaII_3',$txtCalExtraEticaII_4,'$txtFechaCalExtraEticaII_4',$calificacionFinal7),
        (DEFAULT,8,'$matricula',$txtFaltaAFDRII_1,$txtFaltaAFDRII_2,$txtFaltaAFDRII_3,$txtCalAFDRII_1,$txtCalAFDRII_2,$txtCalAFDRII_3,$txtCalExtraAFDRII_1,'$txtFechaCalExtraAFDRII_1',$txtCalExtraAFDRII_2,'$txtFechaCalExtraAFDRII_2',$txtCalExtraAFDRII_3,'$txtFechaCalExtraAFDRII_3',$txtCalExtraAFDRII_4,'$txtFechaCalExtraAFDRII_4',$calificacionFinal8),
        (DEFAULT,9,'$matricula',$txtFaltaAACII_1,$txtFaltaAACII_2,$txtFaltaAACII_3,$txtCalAACII_1,$txtCalAACII_2,$txtCalAACII_3,$txtCalExtraAACII_1,'$txtFechaCalExtraAACII_1',$txtCalExtraAACII_2,'$txtFechaCalExtraAACII_2',$txtCalExtraAACII_3,'$txtFechaCalExtraAACII_3',$txtCalExtraAACII_4,'$txtFechaCalExtraAACII_4',$calificacionFinal9),
        (DEFAULT,10,'$matricula',$txtFaltaSaludII_1,$txtFaltaSaludII_2,$txtFaltaSaludII_3,$txtCalSaludII_1,$txtCalSaludII_2,$txtCalSaludII_3,$txtCalExtraSaludII_1,'$txtFechaCalExtraSaludII_1',$txtCalExtraSaludII_2,'$txtFechaCalExtraSaludII_2',$txtCalExtraSaludII_3,'$txtFechaCalExtraSaludII_3,'$txtCalExtraSaludII_4,'$txtFechaCalExtraSaludII_4',$calificacionFinal10);";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verCalificacionesAlumno.php");}
    else{
        echo "Error";
    }
    mysqli_close($conexion);        
?>