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

    $txtCalCS_1 = $_POST['txtCalCS_1'];
    $txtCalCS_2 = $_POST['txtCalCS_2'];
    $txtCalCS_3 = $_POST['txtCalCS_3'];
    $txtFaltaCS_1 = $_POST['txtFaltaCS_1'];
    $txtFaltaCS_2 = $_POST['txtFaltaCS_2'];
    $txtFaltaCS_3 = $_POST['txtFaltaCS_3'];
    $txtCalExtraCS_1 = $_POST['txtCalExtraCS_1'];
    $txtFechaCalExtraCS_1 = $_POST['txtFechaCalExtraCS_1'];
    $txtCalExtraCS_2 = $_POST['txtCalExtraCS_2'];
    $txtFechaCalExtraCS_2 = $_POST['txtFechaCalExtraCS_2'];
    $txtCalExtraCS_3 = $_POST['txtCalExtraCS_3'];
    $txtFechaCalExtraCS_3 = $_POST['txtFechaCalExtraCS_3'];
    $txtCalExtraCS_4 = $_POST['txtCalExtraCS_4'];
    $txtFechaCalExtraCS_4= $_POST['txtFechaCalExtraCS_4'];

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
   
    $sentencia=
       "UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaMateII_1,`falta2do`=$txtFaltaMateII_2,`falta3ro`=$txtFaltaMateII_3,
       `calParcial1ro`=$txtCalMateII_1,`calParcial2do`=$txtCal_2MateII,`calParcial3ro`=$txtCalMateII_3,`calExtra1`=$txtCalExtraMateII_1,
       `fechaCalExtra1`='$txtFechaCalExtraMateII_1',`calExtra2`=$txtCalExtraMateII_2,`fechaCalExtra2`='$txtFechaCalExtraMateII_2',
       `calExtra3`=$txtCalExtraMateII_3,`fechaCalExtra3`='$txtFechaCalExtraMateII_3',`calExtra4`=$txtCalExtraMateII_4,
       `fechaCalExtra4`='$txtFechaCalExtraMateII_4' WHERE `matricula`='$matricula' AND `idMateria2`=1;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaQuimicaII_1,`falta2do`=$txtFaltaQuimicaII_2,`falta3ro`=$txtFaltaQuimicaII_3,
       `calParcial1ro`=$txtCalQuimicaII_1,`calParcial2do`=$txtCalQuimicaII_2,`calParcial3ro`=$txtCalQuimicaII_3,`calExtra1`=$txtCalExtraQuimicaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraQuimicaII_1',`calExtra2`=$txtCalExtraQuimicaII_2,`fechaCalExtra2`='$txtFechaCalExtraQuimicaII_2',
       `calExtra3`=$txtCalExtraQuimicaII_3,`fechaCalExtra3`='$txtFechaCalExtraQuimicaII_3',`calExtra4`=$txtCalExtraQuimicaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraQuimicaII_4' WHERE `matricula`='$matricula' AND `idMateria2`=2;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaCS_1,`falta2do`=$txtFaltaCS_2,`falta3ro`=$txtFaltaCS_3,
       `calParcial1ro`=$txtCalCS_1,`calParcial2do`=$txtCalCS_2,`calParcial3ro`=$txtCalCS_3,`calExtra1`=$txtCalExtraCS_1,
       `fechaCalExtra1`='$txtFechaCalExtraCS_1',`calExtra2`=$txtCalExtraCS_2,`fechaCalExtra2`='$txtFechaCalExtraCS_2',
       `calExtra3`=$txtCalExtraCS_3,`fechaCalExtra3`='$txtFechaCalExtraCS_3',`calExtra4`=$txtCalExtraCS_4,
       `fechaCalExtra4`='$txtFechaCalExtraCS_4' WHERE `matricula`='$matricula' AND `idMateria2`=3;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaTallerII_1,`falta2do`=$txtFaltaTallerII_2,`falta3ro`=$txtFaltaTallerII_3,
       `calParcial1ro`=$txtCalTallerII_1,`calParcial2do`=$txtCalTallerII_2,`calParcial3ro`=$txtCalTallerII_3,`calExtra1`=$txtCalExtraTallerII_1,
       `fechaCalExtra1`='$txtFechaCalExtraTallerII_1',`calExtra2`=$txtCalExtraTallerII_2,`fechaCalExtra2`='$txtFechaCalExtraTallerII_2',
       `calExtra3`=$txtCalExtraTallerII_3,`fechaCalExtra3`='$txtFechaCalExtraTallerII_3',`calExtra4`=$txtCalExtraTallerII_4,
       `fechaCalExtra4`='$txtFechaCalExtraTallerII_4' WHERE `matricula`='$matricula' AND `idMateria2`=4;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaInglesII_1,`falta2do`=$txtFaltaInglesII_2,`falta3ro`=$txtFaltaInglesII_3,
       `calParcial1ro`=$txtCalInglesII_1,`calParcial2do`=$txtCalInglesII_2,`calParcial3ro`=$txtCalInglesII_3,`calExtra1`=$txtCalExtraInglesII_1,
       `fechaCalExtra1`='$txtFechaCalExtraInglesII_1',`calExtra2`=$txtCalExtraInglesII_2,`fechaCalExtra2`='$txtFechaCalExtraInglesII_2',
       `calExtra3`=$txtCalExtraInglesII_3,`fechaCalExtra3`='$txtFechaCalExtraInglesII_3',`calExtra4`=$txtCalExtraInglesII_4,
       `fechaCalExtra4`='$txtFechaCalExtraInglesII_4' WHERE `matricula`='$matricula' AND `idMateria2`=5;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaInfoII_1,`falta2do`=$txtFaltaInfoII_2,`falta3ro`=$txtFaltaInfoII_3,
       `calParcial1ro`=$txtCalInfoII_1,`calParcial2do`=$txtCalInfoII_2,`calParcial3ro`=$txtCalInfoII_3,`calExtra1`=$txtCalExtraInfoII_1,
       `fechaCalExtra1`='$txtFechaCalExtraInfoII_1',`calExtra2`=$txtCalExtraInfoII_2,`fechaCalExtra2`='$txtFechaCalExtraInfoII_2',
       `calExtra3`=$txtCalExtraInfoII_3,`fechaCalExtra3`='$txtFechaCalExtraInfoII_3',`calExtra4`=$txtCalExtraInfoII_4,
       `fechaCalExtra4`='$txtFechaCalExtraInfoII_4' WHERE `matricula`='$matricula' AND `idMateria2`=6;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaEticaII_1,`falta2do`=$txtFaltaEticaII_2,`falta3ro`=$txtFaltaEticaII_3,
       `calParcial1ro`=$txtCalEticaII_1,`calParcial2do`=$txtCalEticaII_2,`calParcial3ro`=$txtCalEticaII_3,`calExtra1`=$txtCalExtraEticaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraEticaII_1',`calExtra2`=$txtCalExtraEticaII_2,`fechaCalExtra2`='$txtFechaCalExtraEticaII_2',
       `calExtra3`=$txtCalExtraEticaII_3,`fechaCalExtra3`='$txtFechaCalExtraEticaII_3',`calExtra4`=$txtCalExtraEticaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraEticaII_4' WHERE `matricula`='$matricula' AND `idMateria2`=7;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaAFDRII_1,`falta2do`=$txtFaltaAFDRII_2,`falta3ro`=$txtFaltaAFDRII_3,
       `calParcial1ro`=$txtCalAFDRII_1,`calParcial2do`=$txtCalAFDRII_2,`calParcial3ro`=$txtCalAFDRII_3,`calExtra1`=$txtCalExtraAFDRII_1,
       `fechaCalExtra1`='$txtFechaCalExtraAFDRII_1',`calExtra2`=$txtCalExtraAFDRII_2,`fechaCalExtra2`='$txtFechaCalExtraAFDRII_2',
       `calExtra3`=$txtCalExtraAFDRII_3,`fechaCalExtra3`='$txtFechaCalExtraAFDRII_3',`calExtra4`=$txtCalExtraAFDRII_4,
       `fechaCalExtra4`='$txtFechaCalExtraAFDRII_4' WHERE `matricula`='$matricula' AND `idMateria2`=8;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaAACII_1,`falta2do`=$txtFaltaAACII_2,`falta3ro`=$txtFaltaAACII_3,
       `calParcial1ro`=$txtCalAACII_1,`calParcial2do`=$txtCalAACII_2,`calParcial3ro`=$txtCalAACII_3,`calExtra1`=$txtCalExtraAACII_1,
       `fechaCalExtra1`='$txtFechaCalExtraAACII_1',`calExtra2`=$txtCalExtraAACII_2,`fechaCalExtra2`='$txtFechaCalExtraAACII_2',
       `calExtra3`=$txtCalExtraAACII_3,`fechaCalExtra3`='$txtFechaCalExtraAACII_3',`calExtra4`=$txtCalExtraAACII_4,
       `fechaCalExtra4`='$txtFechaCalExtraAACII_4' WHERE `matricula`='$matricula' AND `idMateria2`=9;
       UPDATE `datosalumno-semestre2` SET `falta1ro`=$txtFaltaSaludII_1,`falta2do`=$txtFaltaSaludII_2,`falta3ro`=$txtFaltaSaludII_3,
       `calParcial1ro`=$txtCalSaludII_1,`calParcial2do`=$txtCalSaludII_2,`calParcial3ro`=$txtCalSaludII_3,`calExtra1`=$txtCalExtraSaludII_1,
       `fechaCalExtra1`='$txtFechaCalExtraSaludII_1',`calExtra2`=$txtCalExtraSaludII_2,`fechaCalExtra2`='$txtFechaCalExtraSaludII_2',
       `calExtra3`=$txtCalExtraSaludII_3,`fechaCalExtra3`='$txtFechaCalExtraSaludII_3',`calExtra4`=$txtCalExtraSaludII_4,
       `fechaCalExtra4`='$txtFechaCalExtraSaludII_4' WHERE `matricula`='$matricula' AND `idMateria2`=10;";

   if(mysqli_query($conexion,$sentencia)){
    header("Location: ../verCalificacionesAlumno.php");}
   else{echo "Error";}   
    mysqli_close($conexion);
?>