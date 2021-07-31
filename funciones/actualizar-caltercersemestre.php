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
    $txtCalExtraInglesIII_3= $_POST['txtCalExtraInglesIII_3'];
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
    $txtFaltaHR_1 = $_POST['txtFaltaHR_1'];
    $txtFaltaHR_2 = $_POST['txtFaltaHR_2'];
    $txtFaltaHR_3 = $_POST['txtFaltaHR_3'];
    $txtCalExtraHR_1 = $_POST['txtCalExtraHR_1'];
    $txtFechaCalExtraHR_1 = $_POST['txtFechaCalExtraHR_1'];
    $txtCalExtraHR_2 = $_POST['txtCalExtraHR_2'];
    $txtFechaCalExtraHR_2 = $_POST['txtFechaCalExtraHR_2'];
    $txtCalExtraHR_3 = $_POST['txtCalExtraHR_3'];
    $txtFechaCalExtraHR_3 = $_POST['txtFechaCalExtraHR_3'];
    $txtCalExtraHR_4 = $_POST['txtCalExtraHR_4'];
    $txtFechaCalExtraHR_4= $_POST['txtFechaCalExtraHR_4'];
   
    $sentencia=
       "UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaMateIII_1,`falta2do`=$txtFaltaMateIII_2,`falta3ro`=$txtFaltaMateIII_3,
       `calParcial1ro`=$txtCalMateIII_1,`calParcial2do`=$txtCal_2MateIII,`calParcial3ro`=$txtCalMateIII_3,`calExtra1`=$txtCalExtraMateIII_1,
       `fechaCalExtra1`='$txtFechaCalExtraMateIII_1',`calExtra2`=$txtCalExtraMateIII_2,`fechaCalExtra2`='$txtFechaCalExtraMateIII_2',
       `calExtra3`=$txtCalExtraMateIII_3,`fechaCalExtra3`='$txtFechaCalExtraMateIII_3',`calExtra4`=$txtCalExtraMateIII_4,
       `fechaCalExtra4`='$txtFechaCalExtraMateIII_4' WHERE `matricula`='$matricula' AND `idMateria3`=1;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaBiologiaI_1,`falta2do`=$txtFaltaBiologiaI_2,`falta3ro`=$txtFaltaBiologiaI_3,
       `calParcial1ro`=$txtCalBiologiaI_1,`calParcial2do`=$txtCalBiologiaI_2,`calParcial3ro`=$txtCalBiologiaI_3,`calExtra1`=$txtCalExtraBiologiaI_1,
       `fechaCalExtra1`='$txtFechaCalExtraBiologiaI_1',`calExtra2`=$txtCalExtraBiologiaI_2,`fechaCalExtra2`='$txtFechaCalExtraBiologiaI_2',
       `calExtra3`=$txtCalExtraBiologiaI_3,`fechaCalExtra3`='$txtFechaCalExtraBiologiaI_3',`calExtra4`=$txtCalExtraBiologiaI_4,
       `fechaCalExtra4`='$txtFechaCalExtraBiologiaI_4' WHERE `matricula`='$matricula' AND `idMateria3`=2;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaFisicaI_1,`falta2do`=$txtFaltaFisicaI_2,`falta3ro`=$txtFaltaFisicaI_3,
       `calParcial1ro`=$txtCalFisicaI_1,`calParcial2do`=$txtCalFisicaI_2,`calParcial3ro`=$txtCalFisicaI_3,`calExtra1`=$txtCalExtraFisicaI_1,
       `fechaCalExtra1`='$txtFechaCalExtraFisicaI_1',`calExtra2`=$txtCalExtraFisicaI_2,`fechaCalExtra2`='$txtFechaCalExtraFisicaI_2',
       `calExtra3`=$txtCalExtraFisicaI_3,`fechaCalExtra3`='$txtFechaCalExtraFisicaI_3',`calExtra4`=$txtCalExtraFisicaI_4,
       `fechaCalExtra4`='$txtFechaCalExtraFisicaI_4' WHERE `matricula`='$matricula' AND `idMateria3`=3;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaHMI_1,`falta2do`=$txtFaltaHMI_2,`falta3ro`=$txtFaltaHMI_3,
       `calParcial1ro`=$txtCalHMI_1,`calParcial2do`=$txtCalHMI_2,`calParcial3ro`=$txtCalHMI_3,`calExtra1`=$txtCalExtraHMI_1,
       `fechaCalExtra1`='$txtFechaCalExtraHMI_1',`calExtra2`=$txtCalExtraHMI_2,`fechaCalExtra2`='$txtFechaCalExtraHMI_2',
       `calExtra3`=$txtCalExtraHMI_3,`fechaCalExtra3`='$txtFechaCalExtraHMI_3',`calExtra4`=$txtCalExtraHMI_4,
       `fechaCalExtra4`='$txtFechaCalExtraHMI_4' WHERE `matricula`='$matricula' AND `idMateria3`=4;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaInglesIII_1,`falta2do`=$txtFaltaInglesIII_2,`falta3ro`=$txtFaltaInglesIII_3,
       `calParcial1ro`=$txtCalInglesIII_1,`calParcial2do`=$txtCalInglesIII_2,`calParcial3ro`=$txtCalInglesIII_3,`calExtra1`=$txtCalExtraInglesIII_1,
       `fechaCalExtra1`='$txtFechaCalExtraInglesIII_1',`calExtra2`=$txtCalExtraInglesIII_2,`fechaCalExtra2`='$txtFechaCalExtraInglesIII_2',
       `calExtra3`=$txtCalExtraInglesIII_3,`fechaCalExtra3`='$txtFechaCalExtraInglesIII_3',`calExtra4`=$txtCalExtraInglesIII_4,
       `fechaCalExtra4`='$txtFechaCalExtraInglesIII_4' WHERE `matricula`='$matricula' AND `idMateria3`=5;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaLiteraturaI_1,`falta2do`=$txtFaltaLiteraturaI_2,`falta3ro`=$txtFaltaLiteraturaI_3,
       `calParcial1ro`=$txtCalLiteraturaI_1,`calParcial2do`=$txtCalLiteraturaI_2,`calParcial3ro`=$txtCalLiteraturaI_3,`calExtra1`=$txtCalExtraLiteraturaI_1,
       `fechaCalExtra1`='$txtFechaCalExtraLiteraturaI_1',`calExtra2`=$txtCalExtraLiteraturaI_2,`fechaCalExtra2`='$txtFechaCalExtraLiteraturaI_2',
       `calExtra3`=$txtCalExtraLiteraturaI_3,`fechaCalExtra3`='$txtFechaCalExtraLiteraturaI_3',`calExtra4`=$txtCalExtraLiteraturaI_4,
       `fechaCalExtra4`='$txtFechaCalExtraLiteraturaI_4' WHERE `matricula`='$matricula' AND `idMateria3`=6;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaGAT_1,`falta2do`=$txtFaltaGAT_2,`falta3ro`=$txtFaltaGAT_3,
       `calParcial1ro`=$txtCalGAT_1,`calParcial2do`=$txtCalGAT_2,`calParcial3ro`=$txtCalGAT_3,`calExtra1`=$txtCalExtraGAT_1,
       `fechaCalExtra1`='$txtFechaCalExtraGAT_1',`calExtra2`=$txtCalExtraGAT_2,`fechaCalExtra2`='$txtFechaCalExtraGAT_2',
       `calExtra3`=$txtCalExtraGAT_3,`fechaCalExtra3`='$txtFechaCalExtraGAT_3',`calExtra4`=$txtCalExtraGAT_4,
       `fechaCalExtra4`='$txtFechaCalExtraGAT_4' WHERE `matricula`='$matricula' AND `idMateria3`=7;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaHCA_1,`falta2do`=$txtFaltaHCA_2,`falta3ro`=$txtFaltaHCA_3,
       `calParcial1ro`=$txtCalHCA_1,`calParcial2do`=$txtCalHCA_2,`calParcial3ro`=$txtCalHCA_3,`calExtra1`=$txtCalExtraHCA_1,
       `fechaCalExtra1`='$txtFechaCalExtraHCA_1',`calExtra2`=$txtCalExtraHCA_2,`fechaCalExtra2`='$txtFechaCalExtraHCA_2',
       `calExtra3`=$txtCalExtraHCA_3,`fechaCalExtra3`='$txtFechaCalExtraHCA_3',`calExtra4`=$txtCalExtraHCA_4,
       `fechaCalExtra4`='$txtFechaCalExtraHCA_4' WHERE `matricula`='$matricula' AND `idMateria3`=8;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaAFDRIII_1,`falta2do`=$txtFaltaAFDRIII_2,`falta3ro`=$txtFaltaAFDRIII_3,
       `calParcial1ro`=$txtCalAFDRIII_1,`calParcial2do`=$txtCalAFDRIII_2,`calParcial3ro`=$txtCalAFDRIII_3,`calExtra1`=$txtCalExtraAFDRIII_1,
       `fechaCalExtra1`='$txtFechaCalExtraAFDRIII_1',`calExtra2`=$txtCalExtraAFDRIII_2,`fechaCalExtra2`='$txtFechaCalExtraAFDRIII_2',
       `calExtra3`=$txtCalExtraAFDRIII_3,`fechaCalExtra3`='$txtFechaCalExtraAFDRIII_3',`calExtra4`=$txtCalExtraAFDRIII_4,
       `fechaCalExtra4`='$txtFechaCalExtraAFDRIII_4' WHERE `matricula` = '$matricula' AND `idMateria3`=9;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaSaludIII_1,`falta2do`=$txtFaltaSaludIII_2,`falta3ro`=$txtFaltaSaludIII_3,
       `calParcial1ro`=$txtCalSaludIII_1,`calParcial2do`=$txtCalSaludIII_2,`calParcial3ro`=$txtCalSaludIII_3,`calExtra1`=$txtCalExtraSaludIII_1,
       `fechaCalExtra1`='$txtFechaCalExtraSaludIII_1',`calExtra2`=$txtCalExtraSaludIII_2,`fechaCalExtra2`='$txtFechaCalExtraSaludIII_2',
       `calExtra3`=$txtCalExtraSaludIII_3,`fechaCalExtra3`='$txtFechaCalExtraSaludIII_3',`calExtra4`=$txtCalExtraSaludIII_4,
       `fechaCalExtra4`='$txtFechaCalExtraSaludIII_4' WHERE `matricula` = '$matricula' AND `idMateria3`=10;
       UPDATE `datosalumno-semestre3` SET `falta1ro`=$txtFaltaHR_1,`falta2do`=$txtFaltaHR_2,`falta3ro`=$txtFaltaHR_3,
       `calParcial1ro`=$txtCalHR_1,`calParcial2do`=$txtCalHR_2,`calParcial3ro`=$txtCalHR_3,`calExtra1`=$txtCalExtraHR_1,
       `fechaCalExtra1`='$txtFechaCalExtraHR_1',`calExtra2`=$txtCalExtraHR_2,`fechaCalExtra2`='$txtFechaCalExtraHR_2',
       `calExtra3`=$txtCalExtraHR_3,`fechaCalExtra3`='$txtFechaCalExtraHR_3',`calExtra4`=$txtCalExtraHR_4,
       `fechaCalExtra4`='$txtFechaCalExtraHR_4' WHERE `matricula`='$matricula' AND `idMateria3`=11;";

   if(mysqli_query($conexion,$sentencia)){header("Location: ../verCalificacionesAlumno.php");}
   else{echo "Error";}
    mysqli_close($conexion);
?>