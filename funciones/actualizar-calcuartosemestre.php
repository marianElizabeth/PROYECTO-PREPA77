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

    $txtCalBiologiaII_1= $_POST['txtCalBiologiaII_1'];
    $txtCalBiologiaII_2= $_POST['txtCalBiologiaII_2'];
    $txtCalBiologiaII_3= $_POST['txtCalBiologiaII_3'];
    $txtFaltaBiologiaII_1 = $_POST['txtFaltaBiologiaII_1'];
    $txtFaltaBiologiaII_2 = $_POST['txtFaltaBiologiaII_2'];
    $txtFaltaBiologiaII_3 = $_POST['txtFaltaBiologiaII_3'];
    $txtCalExtraBiologiaII_1 = $_POST['txtCalExtraBiologiaII_1'];
    $txtFechaCalExtraBiologiaII_1 = $_POST['txtFechaCalExtraBiologiaII_1'];
    $txtCalExtraBiologiaII_2 = $_POST['txtCalExtraBiologiaII_2'];
    $txtFechaCalExtraBiologiaII_2 = $_POST['txtFechaCalExtraBiologiaII_2'];
    $txtCalExtraBiologiaII_3 = $_POST['txtCalExtraBiologiaII_3'];
    $txtFechaCalExtraBiologiaII_3 = $_POST['txtFechaCalExtraBiologiaII_3'];
    $txtCalExtraBiologiaII_4 = $_POST['txtCalExtraBiologiaII_4'];
    $txtFechaCalExtraBiologiaII_4 = $_POST['txtFechaCalExtraBiologiaII_4'];

    $txtCalFisicaII_1 = $_POST['txtCalFisicaII_1'];
    $txtCalFisicaII_2 = $_POST['txtCalFisicaII_2'];
    $txtCalFisicaII_3 = $_POST['txtCalFisicaII_3'];
    $txtFaltaFisicaII_1 = $_POST['txtFaltaFisicaII_1'];
    $txtFaltaFisicaII_2 = $_POST['txtFaltaFisicaII_2'];
    $txtFaltaFisicaII_3 = $_POST['txtFaltaFisicaII_3'];
    $txtCalExtraFisicaII_1 = $_POST['txtCalExtraFisicaII_1'];
    $txtFechaCalExtraFisicaII_1 = $_POST['txtFechaCalExtraFisicaII_1'];
    $txtCalExtraFisicaII_2 = $_POST['txtCalExtraFisicaII_2'];
    $txtFechaCalExtraFisicaII_2 = $_POST['txtFechaCalExtraFisicaII_2'];
    $txtCalExtraFisicaII_3 = $_POST['txtCalExtraFisicaII_3'];
    $txtFechaCalExtraFisicaII_3 = $_POST['txtFechaCalExtraFisicaII_3'];
    $txtCalExtraFisicaII_4 = $_POST['txtCalExtraFisicaII_4'];
    $txtFechaCalExtraFisicaII_4= $_POST['txtFechaCalExtraFisicaII_4'];

    $txtCalHMII_1 = $_POST['txtCalHMII_1'];
    $txtCalHMII_2 = $_POST['txtCalHMII_2'];
    $txtCalHMII_3 = $_POST['txtCalHMII_3'];
    $txtFaltaHMII_1= $_POST['txtFaltaHMII_1'];
    $txtFaltaHMII_2= $_POST['txtFaltaHMII_2'];
    $txtFaltaHMII_3= $_POST['txtFaltaHMII_3'];
    $txtCalExtraHMII_1 = $_POST['txtCalExtraHMII_1'];
    $txtFechaCalExtraHMII_1= $_POST['txtFechaCalExtraHMII_1'];
    $txtCalExtraHMII_2= $_POST['txtCalExtraHMII_2'];
    $txtFechaCalExtraHMII_2 = $_POST['txtFechaCalExtraHMII_2'];
    $txtCalExtraHMII_3= $_POST['txtCalExtraHMII_3'];
    $txtFechaCalExtraHMII_3 = $_POST['txtFechaCalExtraHMII_3'];
    $txtCalExtraHMII_4= $_POST['txtCalExtraHMII_4'];
    $txtFechaCalExtraHMII_4= $_POST['txtFechaCalExtraHMII_4'];

    $txtCalInglesIV_1= $_POST['txtCalInglesIV_1'];
    $txtCalInglesIV_2= $_POST['txtCalInglesIV_2'];
    $txtCalInglesIV_3= $_POST['txtCalInglesIV_3'];
    $txtFaltaInglesIV_1= $_POST['txtFaltaInglesIV_1'];
    $txtFaltaInglesIV_2= $_POST['txtFaltaInglesIV_2'];
    $txtFaltaInglesIV_3= $_POST['txtFaltaInglesIV_3'];
    $txtCalExtraInglesIV_1 = $_POST['txtCalExtraInglesIV_1'];
    $txtFechaCalExtraInglesIV_1 = $_POST['txtFechaCalExtraInglesIV_1'];
    $txtCalExtraInglesIV_2= $_POST['txtCalExtraInglesIV_2'];
    $txtFechaCalExtraInglesIV_2= $_POST['txtFechaCalExtraInglesIV_2'];
    $txtCalExtraInglesIV_3= $_POST['txtCalExtraInglesIV_3'];
    $txtFechaCalExtraInglesIV_3 = $_POST['txtFechaCalExtraInglesIV_3'];
    $txtCalExtraInglesIV_4= $_POST['txtCalExtraInglesIV_4'];
    $txtFechaCalExtraInglesIV_4= $_POST['txtFechaCalExtraInglesIV_4'];

    $txtCalLiteraturaII_1 = $_POST['txtCalLiteraturaII_1'];
    $txtCalLiteraturaII_2 = $_POST['txtCalLiteraturaII_2'];
    $txtCalLiteraturaII_3 = $_POST['txtCalLiteraturaII_3'];
    $txtFaltaLiteraturaII_1 = $_POST['txtFaltaLiteraturaII_1'];
    $txtFaltaLiteraturaII_2 = $_POST['txtFaltaLiteraturaII_2'];
    $txtFaltaLiteraturaII_3= $_POST['txtFaltaLiteraturaII_3'];
    $txtCalExtraLiteraturaII_1= $_POST['txtCalExtraLiteraturaII_1'];
    $txtFechaCalExtraLiteraturaII_1= $_POST['txtFechaCalExtraLiteraturaII_1'];
    $txtCalExtraLiteraturaII_2= $_POST['txtCalExtraLiteraturaII_2'];
    $txtFechaCalExtraLiteraturaII_2= $_POST['txtFechaCalExtraLiteraturaII_2'];
    $txtCalExtraLiteraturaII_3= $_POST['txtCalExtraLiteraturaII_3'];
    $txtFechaCalExtraLiteraturaII_3= $_POST['txtFechaCalExtraLiteraturaII_3'];
    $txtCalExtraLiteraturaII_4= $_POST['txtCalExtraLiteraturaII_4'];
    $txtFechaCalExtraLiteraturaII_4= $_POST['txtFechaCalExtraLiteraturaII_4'];

    $txtCalCV_1 = $_POST['txtCalCV_1'];
    $txtCalCV_2 = $_POST['txtCalCV_2'];
    $txtCalCV_3 = $_POST['txtCalCV_3'];
    $txtFaltaCV_1= $_POST['txtFaltaCV_1'];
    $txtFaltaCV_2= $_POST['txtFaltaCV_2'];
    $txtFaltaCV_3= $_POST['txtFaltaCV_3'];
    $txtCalExtraCV_1= $_POST['txtCalExtraCV_1'];
    $txtFechaCalExtraCV_1 = $_POST['txtFechaCalExtraCV_1'];
    $txtCalExtraCV_2= $_POST['txtCalExtraCV_2'];
    $txtFechaCalExtraCV_2 = $_POST['txtFechaCalExtraCV_2'];
    $txtCalExtraCV_3 = $_POST['txtCalExtraCV_3'];
    $txtFechaCalExtraCV_3 = $_POST['txtFechaCalExtraCV_3'];
    $txtCalExtraCV_4= $_POST['txtCalExtraCV_4'];
    $txtFechaCalExtraCV_4 = $_POST['txtFechaCalExtraCV_4'];

    $txtCalMRC_1= $_POST['txtCalMRC_1'];
    $txtCalMRC_2 = $_POST['txtCalMRC_2'];
    $txtCalMRC_3 = $_POST['txtCalMRC_3'];
    $txtFaltaMRC_1= $_POST['txtFaltaMRC_1'];
    $txtFaltaMRC_2= $_POST['txtFaltaMRC_2'];
    $txtFaltaMRC_3= $_POST['txtFaltaMRC_3'];
    $txtCalExtraMRC_1= $_POST['txtCalExtraMRC_1'];
    $txtFechaCalExtraMRC_1 = $_POST['txtFechaCalExtraMRC_1'];
    $txtCalExtraMRC_2 = $_POST['txtCalExtraMRC_2'];
    $txtFechaCalExtraMRC_2 = $_POST['txtFechaCalExtraMRC_2'];
    $txtCalExtraMRC_3= $_POST['txtCalExtraMRC_3'];
    $txtFechaCalExtraMRC_3= $_POST['txtFechaCalExtraMRC_3'];
    $txtCalExtraMRC_4= $_POST['txtCalExtraMRC_4'];
    $txtFechaCalExtraMRC_4= $_POST['txtFechaCalExtraMRC_4'];

    $txtCalAFDRIV_1 = $_POST['txtCalAFDRIV_1'];
    $txtCalAFDRIV_2 = $_POST['txtCalAFDRIV_2'];
    $txtCalAFDRIV_3 = $_POST['txtCalAFDRIV_3'];
    $txtFaltaAFDRIV_1= $_POST['txtFaltaAFDRIV_1'];
    $txtFaltaAFDRIV_2= $_POST['txtFaltaAFDRIV_2'];
    $txtFaltaAFDRIV_3= $_POST['txtFaltaAFDRIV_3'];
    $txtCalExtraAFDRIV_1 = $_POST['txtCalExtraAFDRIV_1'];
    $txtFechaCalExtraAFDRIV_1= $_POST['txtFechaCalExtraAFDRIV_1'];
    $txtCalExtraAFDRIV_2= $_POST['txtCalExtraAFDRIV_2'];
    $txtFechaCalExtraAFDRIV_2= $_POST['txtFechaCalExtraAFDRIV_2'];
    $txtCalExtraAFDRIV_3= $_POST['txtCalExtraAFDRIV_3'];
    $txtFechaCalExtraAFDRIV_3 = $_POST['txtFechaCalExtraAFDRIV_3'];
    $txtCalExtraAFDRIV_4= $_POST['txtCalExtraAFDRIV_4'];
    $txtFechaCalExtraAFDRIV_4= $_POST['txtFechaCalExtraAFDRIV_4'];

    $txtCalSIAIV_1 = $_POST['txtCalSIAIV_1'];
    $txtCalSIAIV_2 = $_POST['txtCalSIAIV_2'];
    $txtCalSIAIV_3 = $_POST['txtCalSIAIV_3'];
    $txtFaltaSIAIV_1= $_POST['txtFaltaSIAIV_1'];
    $txtFaltaSIAIV_2= $_POST['txtFaltaSIAIV_2'];
    $txtFaltaSIAIV_3= $_POST['txtFaltaSIAIV_3'];
    $txtCalExtraSIAIV_1 = $_POST['txtCalExtraSIAIV_1'];
    $txtFechaCalExtraSIAIV_1 = $_POST['txtFechaCalExtraSIAIV_1'];
    $txtCalExtraSIAIV_2 = $_POST['txtCalExtraSIAIV_2'];
    $txtFechaCalExtraSIAIV_2= $_POST['txtFechaCalExtraSIAIV_2'];
    $txtCalExtraSIAIV_3= $_POST['txtCalExtraSIAIV_3'];
    $txtFechaCalExtraSIAIV_3 = $_POST['txtFechaCalExtraSIAIV_3'];
    $txtCalExtraSIAIV_4 = $_POST['txtCalExtraSIAIV_4'];
    $txtFechaCalExtraSIAIV_4 = $_POST['txtFechaCalExtraSIAIV_4'];
   
    $sentencia=
       "UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaMateVI_1,`falta2do`=$txtFaltaMateVI_2,`falta3ro`=$txtFaltaMateVI_3,
       `calParcial1ro`=$txtCalMateVI_1,`calParcial2do`=$txtCal_2MateVI,`calParcial3ro`=$txtCalMateVI_3,`calExtra1`=$txtCalExtraMateVI_1,
       `fechaCalExtra1`='$txtFechaCalExtraMateVI_1',`calExtra2`=$txtCalExtraMateVI_2,`fechaCalExtra2`='$txtFechaCalExtraMateVI_2',
       `calExtra3`=$txtCalExtraMateVI_3,`fechaCalExtra3`='$txtFechaCalExtraMateVI_3',`calExtra4`=$txtCalExtraMateVI_4,
       `fechaCalExtra4`='$txtFechaCalExtraMateVI_4' WHERE `matricula`='$matricula' AND `idMateria4`=1;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaBiologiaII_1,`falta2do`=$txtFaltaBiologiaII_2,`falta3ro`=$txtFaltaBiologiaII_3,
       `calParcial1ro`=$txtCalBiologiaII_1,`calParcial2do`=$txtCalBiologiaII_2,`calParcial3ro`=$txtCalBiologiaII_3,`calExtra1`=$txtCalExtraBiologiaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraBiologiaII_1',`calExtra2`=$txtCalExtraBiologiaII_2,`fechaCalExtra2`='$txtFechaCalExtraBiologiaII_2',
       `calExtra3`=$txtCalExtraBiologiaII_3,`fechaCalExtra3`='$txtFechaCalExtraBiologiaII_3',`calExtra4`=$txtCalExtraBiologiaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraBiologiaII_4' WHERE `matricula`='$matricula' AND `idMateria4`=2;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaFisicaII_1,`falta2do`=$txtFaltaFisicaII_2,`falta3ro`=$txtFaltaFisicaII_3,
       `calParcial1ro`=$txtCalFisicaII_1,`calParcial2do`=$txtCalFisicaII_2,`calParcial3ro`=$txtCalFisicaII_3,`calExtra1`=$txtCalExtraFisicaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraFisicaII_1',`calExtra2`=$txtCalExtraFisicaII_2,`fechaCalExtra2`='$txtFechaCalExtraFisicaII_2',
       `calExtra3`=$txtCalExtraFisicaII_3,`fechaCalExtra3`='$txtFechaCalExtraFisicaII_3',`calExtra4`=$txtCalExtraFisicaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraFisicaII_4' WHERE `matricula`='$matricula' AND `idMateria4`=3;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaHMII_1,`falta2do`=$txtFaltaHMII_2,`falta3ro`=$txtFaltaHMII_3,
       `calParcial1ro`=$txtCalHMII_1,`calParcial2do`=$txtCalHMII_2,`calParcial3ro`=$txtCalHMII_3,`calExtra1`=$txtCalExtraHMII_1,
       `fechaCalExtra1`='$txtFechaCalExtraHMII_1',`calExtra2`=$txtCalExtraHMII_2,`fechaCalExtra2`='$txtFechaCalExtraHMII_2',
       `calExtra3`=$txtCalExtraHMII_3,`fechaCalExtra3`='$txtFechaCalExtraHMII_3',`calExtra4`=$txtCalExtraHMII_4,
       `fechaCalExtra4`='$txtFechaCalExtraHMII_4' WHERE `matricula`='$matricula' AND `idMateria4`=4;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaInglesIV_1,`falta2do`=$txtFaltaInglesIV_2,`falta3ro`=$txtFaltaInglesIV_3,
       `calParcial1ro`=$txtCalInglesIV_1,`calParcial2do`=$txtCalInglesIV_2,`calParcial3ro`=$txtCalInglesIV_3,`calExtra1`=$txtCalExtraInglesIV_1,
       `fechaCalExtra1`='$txtFechaCalExtraInglesIV_1',`calExtra2`=$txtCalExtraInglesIV_2,`fechaCalExtra2`='$txtFechaCalExtraInglesIV_2',
       `calExtra3`=$txtCalExtraInglesIV_3,`fechaCalExtra3`='$txtFechaCalExtraInglesIV_3',`calExtra4`=$txtCalExtraInglesIV_4,
       `fechaCalExtra4`='$txtFechaCalExtraInglesIV_4' WHERE `matricula`='$matricula' AND `idMateria4`=5;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaLiteraturaII_1,`falta2do`=$txtFaltaLiteraturaII_2,`falta3ro`=$txtFaltaLiteraturaII_3,
       `calParcial1ro`=$txtCalLiteraturaII_1,`calParcial2do`=$txtCalLiteraturaII_2,`calParcial3ro`=$txtCalLiteraturaII_3,`calExtra1`=$txtCalExtraLiteraturaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraLiteraturaII_1',`calExtra2`=$txtCalExtraLiteraturaII_2,`fechaCalExtra2`='$txtFechaCalExtraLiteraturaII_2',
       `calExtra3`=$txtCalExtraLiteraturaII_3,`fechaCalExtra3`='$txtFechaCalExtraLiteraturaII_3',`calExtra4`=$txtCalExtraLiteraturaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraLiteraturaII_4' WHERE `matricula`='$matricula' AND `idMateria4`=6;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaCV_1,`falta2do`=$txtFaltaCV_2,`falta3ro`=$txtFaltaCV_3,
       `calParcial1ro`=$txtCalCV_1,`calParcial2do`=$txtCalCV_2,`calParcial3ro`=$txtCalCV_3,`calExtra1`=$txtCalExtraCV_1,
       `fechaCalExtra1`='$txtFechaCalExtraCV_1',`calExtra2`=$txtCalExtraCV_2,`fechaCalExtra2`='$txtFechaCalExtraCV_2',
       `calExtra3`=$txtCalExtraCV_3,`fechaCalExtra3`='$txtFechaCalExtraCV_3',`calExtra4`=$txtCalExtraCV_4,
       `fechaCalExtra4`='$txtFechaCalExtraCV_4' WHERE `matricula`='$matricula' AND `idMateria4`=7;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaMRC_1,`falta2do`=$txtFaltaMRC_2,`falta3ro`=$txtFaltaMRC_3,
       `calParcial1ro`=$txtCalMRC_1,`calParcial2do`=$txtCalMRC_2,`calParcial3ro`=$txtCalMRC_3,`calExtra1`=$txtCalExtraMRC_1,
       `fechaCalExtra1`='$txtFechaCalExtraMRC_1',`calExtra2`=$txtCalExtraMRC_2,`fechaCalExtra2`='$txtFechaCalExtraMRC_2',
       `calExtra3`=$txtCalExtraMRC_3,`fechaCalExtra3`='$txtFechaCalExtraMRC_3',`calExtra4`=$txtCalExtraMRC_4,
       `fechaCalExtra4`='$txtFechaCalExtraMRC_4' WHERE `matricula`='$matricula' AND `idMateria4`=8;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaAFDRIV_1,`falta2do`=$txtFaltaAFDRIV_2,`falta3ro`=$txtFaltaAFDRIV_3,
       `calParcial1ro`=$txtCalAFDRIV_1,`calParcial2do`=$txtCalAFDRIV_2,`calParcial3ro`=$txtCalAFDRIV_3,`calExtra1`=$txtCalExtraAFDRIV_1,
       `fechaCalExtra1`='$txtFechaCalExtraAFDRIV_1',`calExtra2`=$txtCalExtraAFDRIV_2,`fechaCalExtra2`='$txtFechaCalExtraAFDRIV_2',
       `calExtra3`=$txtCalExtraAFDRIV_3,`fechaCalExtra3`='$txtFechaCalExtraAFDRIV_3',`calExtra4`=$txtCalExtraAFDRIV_4,
       `fechaCalExtra4`='$txtFechaCalExtraAFDRIV_4' WHERE `matricula`='$matricula' AND `idMateria4`=9;
       UPDATE `datosalumno-semestre4` SET `falta1ro`=$txtFaltaSIAIV_1,`falta2do`=$txtFaltaSIAIV_2,`falta3ro`=$txtFaltaSIAIV_3,
       `calParcial1ro`=$txtCalSIAIV_1,`calParcial2do`=$txtCalSIAIV_2,`calParcial3ro`=$txtCalSIAIV_3,`calExtra1`=$txtCalExtraSIAIV_1,
       `fechaCalExtra1`='$txtFechaCalExtraSIAIV_1',`calExtra2`=$txtCalExtraSIAIV_2,`fechaCalExtra2`='$txtFechaCalExtraSIAIV_2',
       `calExtra3`=$txtCalExtraSIAIV_3,`fechaCalExtra3`='$txtFechaCalExtraSIAIV_3',`calExtra4`=$txtCalExtraSIAIV_4,
       `fechaCalExtra4`='$txtFechaCalExtraSIAIV_4' WHERE `matricula`='$matricula' AND `idMateria4`=10;";

   if(mysqli_query($conexion,$sentencia)){
    header("Location: ../verCalificacionesAlumno.php");}
   else{echo "Error";}   
    mysqli_close($conexion);
?>