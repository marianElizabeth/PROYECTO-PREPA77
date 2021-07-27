<?php
    include("conexion.php");
    $matricula= $_POST['txtMatriculaAlum'];    

    $txtCalMateI_1= $_POST['txtCalMateI_1'];
    $txtCalMateI_2= $_POST['txtCalMateI_2'];
    $txtCalMateI_3= $_POST['txtCalMateI_3'];
    $txtFaltaMateI_1= $_POST['txtFaltaMateI_1'];
    $txtFaltaMateI_2= $_POST['txtFaltaMateI_2'];
    $txtFaltaMateI_3= $_POST['txtFaltaMateI_3'];
    $txtCalExtraMateI_1 = $_POST['txtCalExtraMateI_1'];
    $txtFechaCalExtraMateI_1 = $_POST['txtFechaCalExtraMateI_1'];
    $txtCalExtraMateI_2 = $_POST['txtCalExtraMateI_2'];
    $txtFechaCalExtraMateI_2 = $_POST['txtFechaCalExtraMateI_2'];
    $txtCalExtraMateI_3 = $_POST['txtCalExtraMateI_3'];
    $txtFechaCalExtraMateI_3 = $_POST['txtFechaCalExtraMateI_3'];
    $txtCalExtraMateI_4 = $_POST['txtCalExtraMateI_4'];
    $txtFechaCalExtraMateI_4 = $_POST['txtFechaCalExtraMateI_4'];

    $txtCalQuimicaI_1= $_POST['txtCalQuimicaI_1'];
    $txtCalQuimicaI_2= $_POST['txtCalQuimicaI_2'];
    $txtCalQuimicaI_3= $_POST['txtCalQuimicaI_3'];
    $txtFaltaQuimicaI_1 = $_POST['txtFaltaQuimicaI_1'];
    $txtFaltaQuimicaI_2 = $_POST['txtFaltaQuimicaI_2'];
    $txtFaltaQuimicaI_3 = $_POST['txtFaltaQuimicaI_3'];
    $txtCalExtraQuimicaI_1 = $_POST['txtCalExtraQuimicaI_1'];
    $txtFechaCalExtraQuimicaI_1 = $_POST['txtFechaCalExtraQuimicaI_1'];
    $txtCalExtraQuimicaI_2 = $_POST['txtCalExtraQuimicaI_2'];
    $txtFechaCalExtraQuimicaI_2 = $_POST['txtFechaCalExtraQuimicaI_2'];
    $txtCalExtraQuimicaI_3 = $_POST['txtCalExtraQuimicaI_3'];
    $txtFechaCalExtraQuimicaI_3 = $_POST['txtFechaCalExtraQuimicaI_3'];
    $txtCalExtraQuimicaI_4 = $_POST['txtCalExtraQuimicaI_4'];
    $txtFechaCalExtraQuimicaI_4 = $_POST['txtFechaCalExtraQuimicaI_4'];

    $txtCalMetodologiaI_1 = $_POST['txtCalMetodologiaI_1'];
    $txtCalMetodologiaI_2 = $_POST['txtCalMetodologiaI_2'];
    $txtCalMetodologiaI_3 = $_POST['txtCalMetodologiaI_3'];
    $txtFaltaMetodologiaI_1 = $_POST['txtFaltaMetodologiaI_1'];
    $txtFaltaMetodologiaI_2 = $_POST['txtFaltaMetodologiaI_2'];
    $txtFaltaMetodologiaI_3 = $_POST['txtFaltaMetodologiaI_3'];
    $txtCalExtraMetodologiaI_1 = $_POST['txtCalExtraMetodologiaI_1'];
    $txtFechaCalExtraMetodologiaI_1 = $_POST['txtFechaCalExtraMetodologiaI_1'];
    $txtCalExtraMetodologiaI_2 = $_POST['txtCalExtraMetodologiaI_2'];
    $txtFechaCalExtraMetodologiaI_2 = $_POST['txtFechaCalExtraMetodologiaI_2'];
    $txtCalExtraMetodologiaI_3 = $_POST['txtCalExtraMetodologiaI_3'];
    $txtFechaCalExtraMetodologiaI_3 = $_POST['txtFechaCalExtraMetodologiaI_3'];
    $txtCalExtraMetodologiaI_4 = $_POST['txtCalExtraMetodologiaI_4'];
    $txtFechaCalExtraMetodologiaI_4= $_POST['txtFechaCalExtraMetodologiaI_4'];

    $txtCalTallerI_1 = $_POST['txtCalTallerI_1'];
    $txtCalTallerI_2 = $_POST['txtCalTallerI_2'];
    $txtCalTallerI_3 = $_POST['txtCalTallerI_3'];
    $txtFaltaTallerI_1= $_POST['txtFaltaTallerI_1'];
    $txtFaltaTallerI_2= $_POST['txtFaltaTallerI_2'];
    $txtFaltaTallerI_3= $_POST['txtFaltaTallerI_3'];
    $txtCalExtraTallerI_1 = $_POST['txtCalExtraTallerI_1'];
    $txtFechaCalExtraTallerI_1= $_POST['txtFechaCalExtraTallerI_1'];
    $txtCalExtraTallerI_2= $_POST['txtCalExtraTallerI_2'];
    $txtFechaCalExtraTallerI_2 = $_POST['txtFechaCalExtraTallerI_2'];
    $txtCalExtraTallerI_3= $_POST['txtCalExtraTallerI_3'];
    $txtFechaCalExtraTallerI_3 = $_POST['txtFechaCalExtraTallerI_3'];
    $txtCalExtraTallerI_4= $_POST['txtCalExtraTallerI_4'];
    $txtFechaCalExtraTallerI_4= $_POST['txtFechaCalExtraTallerI_4'];

    $txtCalInglesI_1= $_POST['txtCalInglesI_1'];
    $txtCalInglesI_2= $_POST['txtCalInglesI_2'];
    $txtCalInglesI_3= $_POST['txtCalInglesI_3'];
    $txtFaltaInglesI_1= $_POST['txtFaltaInglesI_1'];
    $txtFaltaInglesI_2= $_POST['txtFaltaInglesI_2'];
    $txtFaltaInglesI_3= $_POST['txtFaltaInglesI_3'];
    $txtCalExtraInglesI_1 = $_POST['txtCalExtraInglesI_1'];
    $txtFechaCalExtraInglesI_1 = $_POST['txtFechaCalExtraInglesI_1'];
    $txtCalExtraInglesI_2= $_POST['txtCalExtraInglesI_2'];
    $txtFechaCalExtraInglesI_2= $_POST['txtFechaCalExtraInglesI_2'];
    $txtCalExtraInglesI_4= $_POST['txtCalExtraInglesI_3'];
    $txtFechaCalExtraInglesI_3 = $_POST['txtFechaCalExtraInglesI_3'];
    $txtCalExtraInglesI_4= $_POST['txtCalExtraInglesI_4'];
    $txtFechaCalExtraInglesI_4= $_POST['txtFechaCalExtraInglesI_4'];

    $txtCalInfoI_1 = $_POST['txtCalInfoI_1'];
    $txtCalInfoI_2 = $_POST['txtCalInfoI_2'];
    $txtCalInfoI_3 = $_POST['txtCalInfoI_3'];
    $txtFaltaInfoI_1 = $_POST['txtFaltaInfoI_1'];
    $txtFaltaInfoI_2 = $_POST['txtFaltaInfoI_2'];
    $txtFaltaInfoI_3= $_POST['txtFaltaInfoI_3'];
    $txtCalExtraInfoI_1= $_POST['txtCalExtraInfoI_1'];
    $txtFechaCalExtraInfoI_1= $_POST['txtFechaCalExtraInfoI_1'];
    $txtCalExtraInfoI_2= $_POST['txtCalExtraInfoI_2'];
    $txtFechaCalExtraInfoI_2= $_POST['txtFechaCalExtraInfoI_2'];
    $txtCalExtraInfoI_3= $_POST['txtCalExtraInfoI_3'];
    $txtFechaCalExtraInfoI_3= $_POST['txtFechaCalExtraInfoI_3'];
    $txtCalExtraInfoI_4= $_POST['txtCalExtraInfoI_4'];
    $txtFechaCalExtraInfoI_4= $_POST['txtFechaCalExtraInfoI_4'];

    $txtCalEticaI_1 = $_POST['txtCalEticaI_1'];
    $txtCalEticaI_2 = $_POST['txtCalEticaI_2'];
    $txtCalEticaI_3 = $_POST['txtCalEticaI_3'];
    $txtFaltaEticaI_1= $_POST['txtFaltaEticaI_1'];
    $txtFaltaEticaI_2= $_POST['txtFaltaEticaI_2'];
    $txtFaltaEticaI_3= $_POST['txtFaltaEticaI_3'];
    $txtCalExtraEticaI_1= $_POST['txtCalExtraEticaI_1'];
    $txtFechaCalExtraEticaI_1 = $_POST['txtFechaCalExtraEticaI_1'];
    $txtCalExtraEticaI_2= $_POST['txtCalExtraEticaI_2'];
    $txtFechaCalExtraEticaI_2 = $_POST['txtFechaCalExtraEticaI_2'];
    $txtCalExtraEticaI_3 = $_POST['txtCalExtraEticaI_3'];
    $txtFechaCalExtraEticaI_3 = $_POST['txtFechaCalExtraEticaI_3'];
    $txtCalExtraEticaI_= $_POST['txtCalExtraEticaI_4'];
    $txtFechaCalExtraEticaI_4 = $_POST['txtFechaCalExtraEticaI_4'];

    $txtCalAFDRI_1= $_POST['txtCalAFDRI_1'];
    $txtCalAFDRI_2 = $_POST['txtCalAFDRI_2'];
    $txtCalAFDRI_3 = $_POST['txtCalAFDRI_3'];
    $txtFaltaAFDRI_1= $_POST['txtFaltaAFDRI_1'];
    $txtFaltaAFDRI_2= $_POST['txtFaltaAFDRI_2'];
    $txtFaltaAFDRI_3= $_POST['txtFaltaAFDRI_3'];
    $txtCalExtraAFDRI_1= $_POST['txtCalExtraAFDRI_1'];
    $txtFechaCalExtraAFDRI_1 = $_POST['txtFechaCalExtraAFDRI_1'];
    $txtCalExtraAFDRI_2 = $_POST['txtCalExtraAFDRI_2'];
    $txtFechaCalExtraAFDRI_2 = $_POST['txtFechaCalExtraAFDRI_2'];
    $txtCalExtraAFDRI_3= $_POST['txtCalExtraAFDRI_3'];
    $txtFechaCalExtraAFDRI_3= $_POST['txtFechaCalExtraAFDRI_3'];
    $txtCalExtraAFDRI_4= $_POST['txtCalExtraAFDRI_4'];
    $txtFechaCalExtraAFDRI_4= $_POST['txtFechaCalExtraAFDRI_4'];

    $txtCalAACI_1 = $_POST['txtCalAACI_1'];
    $txtCalAACI_2 = $_POST['txtCalAACI_2'];
    $txtCalAACI_3 = $_POST['txtCalAACI_3'];
    $txtFaltaAACI_1= $_POST['txtFaltaAACI_1'];
    $txtFaltaAACI_2= $_POST['txtFaltaAACI_2'];
    $txtFaltaAACI_3= $_POST['txtFaltaAACI_3'];
    $txtCalExtraAACI_1 = $_POST['txtCalExtraAACI_1'];
    $txtFechaCalExtraAACI_1= $_POST['txtFechaCalExtraAACI_1'];
    $txtCalExtraAACI_2= $_POST['txtCalExtraAACI_2'];
    $txtFechaCalExtraAACI_2= $_POST['txtFechaCalExtraAACI_2'];
    $txtCalExtraAACI_3= $_POST['txtCalExtraAACI_3'];
    $txtFechaCalExtraAACI_3 = $_POST['txtFechaCalExtraAACI_3'];
    $txtCalExtraAACI_4= $_POST['txtCalExtraAACI_4'];
    $txtFechaCalExtraAACI_4= $_POST['txtFechaCalExtraAACI_4'];

    $txtCalSaludI_1 = $_POST['txtCalSaludI_1'];
    $txtCalSaludI_2 = $_POST['txtCalSaludI_2'];
    $txtCalSaludI_3 = $_POST['txtCalSaludI_3'];
    $txtFaltaSaludI_1= $_POST['txtFaltaSaludI_1'];
    $txtFaltaSaludI_2= $_POST['txtFaltaSaludI_2'];
    $txtFaltaSaludI_3= $_POST['txtFaltaSaludI_3'];
    $txtCalExtraSaludI_1 = $_POST['txtCalExtraSaludI_1'];
    $txtFechaCalExtraSaludI_1 = $_POST['txtFechaCalExtraSaludI_1'];
    $txtCalExtraSaludI_2 = $_POST['txtCalExtraSaludI_2'];
    $txtFechaCalExtraSaludI_2= $_POST['txtFechaCalExtraSaludI_2'];
    $txtCalExtraSaludI_3= $_POST['txtCalExtraSaludI_3'];
    $txtFechaCalExtraSaludI_3 = $_POST['txtFechaCalExtraSaludI_3'];
    $txtCalExtraSaludI_4 = $_POST['txtCalExtraSaludI_4'];
    $txtFechaCalExtraSaludI_4 = $_POST['txtFechaCalExtraSaludI_4'];

    $calificacionFinal1   = ($txtCalMateI_3 + $txtCalMateI_2 + $txtCalMateI_1)/3;
    $calificacionFinal2   = ($txtCalQuimicaI_3 + $txtCalQuimicaI_2 + $txtCalQuimicaI_1)/3;
    $calificacionFinal3   = ($txtCalMetodologiaI_3 + $txtCalMetodologiaI_2 + $txtCalMetodologiaI_1)/3;
    $calificacionFinal4   = ($txtCalTallerI_3 + $txtCalTallerI_2 + $txtCalTallerI_1)/3;
    $calificacionFinal5   = ($txtCalInglesI_3 + $txtCalInglesI_2 + $txtCalInglesI_1)/3;
    $calificacionFinal6   = ($txtCalInfoI_3 + $txtCalInfoI_2 + $txtCalInfoI_1)/3;
    $calificacionFinal7   = ($txtCalEticaI_3 + $txtCalEticaI_2 + $txtCalEticaI_1)/3;
    $calificacionFinal8   = ($txtCalAFDRI_3 + $txtCalAFDRI_2 + $txtCalAFDRI_1)/3;
    $calificacionFinal9   = ($txtCalAACI_3 + $txtCalAACI_2 + $txtCalAACI_1)/3;
    $calificacionFinal10  = ($txtCalSaludI_3 + $txtCalSaludI_2 + $txtCalSaludI_1)/3;
    $sentencia= "INSERT INTO datosalumno_semestre1 VALUES 
        (DEFAULT,1,'$matricula',$txtFaltaMateI_1,$txtFaltaMateI_2,$txtFaltaMateI_3, $txtCalMateI_1, $txtCalMateI_2, $txtCalMateI_3,$txtCalExtraMateI_1,$txtFechaCalExtraMateI_1,
        $txtCalExtraMateI_2,$txtFechaCalExtraMateI_2,$txtCalExtraMateI_3,$txtFechaCalExtraMateI_3,$txtCalExtraMateI_4,$txtFechaCalExtraMateI_4,$calificacionFinal1),
        (DEFAULT,2,'$matricula',$txtFaltaQuimicaI_1,$txtFaltaQuimicaI_2,$txtFaltaQuimicaI_3, $txtCalQuimicaI_1, $txtCalQuimicaI_2, $txtCalQuimicaI_3,$txtCalExtraQuimicaI_1,$txtFechaCalExtraQuimicaI_1,
        $txtCalExtraQuimicaI_2,$txtFechaCalExtraQuimicaI_2,$txtCalExtraQuimicaI_3,$txtFechaCalExtraQuimicaI_3,$txtCalExtraQuimicaI_4,$txtFechaCalExtraQuimicaI_4,$calificacionFinal2),
        (DEFAULT,3,'$matricula',$txtFaltaMetodologiaI_1,$txtFaltaMetodologiaI_2,$txtFaltaMetodologiaI_3, $txtCalMetodologiaI_1, $txtCalMetodologiaI_2,$txtCalMetodologiaI_3,$txtCalExtraMetodologiaI_1,$txtFechaCalExtraMetodologiaI_1,
        $txtCalExtraMetodologiaI_2,$txtFechaCalExtraMetodologiaI_2,$txtCalExtraMetodologiaI_3,$txtFechaCalExtraMetodologiaI_3,$txtCalExtraMetodologiaI_4,$txtFechaCalExtraMetodologiaI_4,$calificacionFinal3),
        (DEFAULT,4,'$matricula',$txtFaltaTallerI_1,$txtFaltaTallerI_2,$txtFaltaTallerI_3, $txtCalTallerI_1, $txtCalTallerI_2, $txtCalTallerI_3,$txtCalExtraTallerI_1,$txtFechaCalExtraTallerI_1,
        $txtCalExtraTallerI_2,$txtFechaCalExtraTallerI_2,$txtCalExtraTallerI_3,$txtFechaCalExtraTallerI_3,$txtCalExtraTallerI_4,$txtFechaCalExtraTallerI_4,$calificacionFinal4),
        (DEFAULT,5,'$matricula',$txtFaltaInglesI_1,$txtFaltaInglesI_2,$txtFaltaInglesI_3, $txtCalInglesI_1, $txtCalInglesI_2, $txtCalInglesI_3,$txtCalExtraInglesI_1,$txtFechaCalExtraInglesI_1,
        $txtCalExtraInglesI_2,$txtFechaCalExtraInglesI_2,$txtCalExtraInglesI_3,$txtFechaCalExtraInglesI_3,$txtCalExtraInglesI_4,$txtFechaCalExtraInglesI_4,$calificacionFinal5),
        (DEFAULT,6,'$matricula',$txtFaltaInfoI_1,$txtFaltaInfoI_2,$txtFaltaInfoI_3, $txtCalInfoI_1, $txtCalInfoI_2, $txtCalInfoI_3,$txtCalExtraInfoI_1,$txtFechaCalExtraInfoI_1,
        $txtCalExtraInfoI_2,$txtFechaCalExtraInfoI_2,$txtCalExtraInfoI_3,$txtFechaCalExtraInfoI_3,$txtCalExtraInfoI_4,$txtFechaCalExtraInfoI_4,$calificacionFinal6),
        (DEFAULT,7,'$matricula',$txtFaltaEticaI_1,$txtFaltaEticaI_2,$txtFaltaEticaI_3, $txtCalEticaI_1, $txtCalEticaI_2, $txtCalEticaI_3,$txtCalExtraEticaI_1,$txtFechaCalExtraEticaI_1,
        $txtCalExtraEticaI_2,$txtFechaCalExtraEticaI_2,$txtCalExtraEticaI_3,$txtFechaCalExtraEticaI_3,$txtCalExtraEticaI_4,$txtFechaCalExtraEticaI_4,$calificacionFinal7),
        (DEFAULT,8,'$matricula',$txtFaltaAFDRI_1,$txtFaltaAFDRI_2,$txtFaltaAFDRI_3, $txtCalAFDRI_1, $txtCalAFDRI_2, $txtCalAFDRI_3,$txtCalExtraAFDRI_1,$txtFechaCalExtraAFDRI_1,
        $txtCalExtraAFDRI_2,$txtFechaCalExtraAFDRI_2,$txtCalExtraAFDRI_3,$txtFechaCalExtraAFDRI_3,$txtCalExtraAFDRI_4,$txtFechaCalExtraAFDRI_4,$calificacionFinal8),
        (DEFAULT,9,'$matricula',$txtFaltaAACI_1,$txtFaltaAACI_2,$txtFaltaAACI_3, $txtCalAACI_1, $txtCalAACI_2, $txtCalAACI_3,$txtCalExtraAACI_1,$txtFechaCalExtraAACI_1,
        $txtCalExtraAACI_2,$txtFechaCalExtraAACI_2,$txtCalExtraAACI_3,$txtFechaCalExtraAACI_3,$txtCalExtraAACI_4,$txtFechaCalExtraAACI_4,$calificacionFinal9),
        (DEFAULT,10,'$matricula',$txtFaltaSaludI_1,$txtFaltaSaludI_2,$txtFaltaSaludI_3,$txtCalSaludI_1,$txtCalSaludI_2,$txtCalSaludI_3,$txtCalExtraSaludI_1,
        $txtFechaCalExtraSaludI_1,$txtCalExtraSaludI_2,$txtFechaCalExtraSaludI_2,$txtCalExtraSaludI_3,$txtFechaCalExtraSaludI_3,$calificacionFinal10);";
    if(mysqli_query($conexion,$sentencia)){
        header("Location: ../verCalificacionesAlumno.php");}
    else{
        echo "Error";
    }
    mysqli_close($conexion);        
?>