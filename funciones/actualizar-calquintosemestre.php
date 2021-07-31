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
    $txtCalExtraPsicologiaI_3= $_POST['txtCalExtraPsicologiaI_3'];
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
    $txtFaltaAACIII_1 = $_POST['txtFaltaAACIII_1'];
    $txtFaltaAACIII_2 = $_POST['txtFaltaAACIII_2'];
    $txtFaltaAACIII_3 = $_POST['txtFaltaAACIII_3'];
    $txtCalExtraAACIII_1 = $_POST['txtCalExtraAACIII_1'];
    $txtFechaCalExtraAACIII_1 = $_POST['txtFechaCalExtraAACIII_1'];
    $txtCalExtraAACIII_2 = $_POST['txtCalExtraAACIII_2'];
    $txtFechaCalExtraAACIII_2 = $_POST['txtFechaCalExtraAACIII_2'];
    $txtCalExtraAACIII_3 = $_POST['txtCalExtraAACIII_3'];
    $txtFechaCalExtraAACIII_3 = $_POST['txtFechaCalExtraAACIII_3'];
    $txtCalExtraAACIII_4 = $_POST['txtCalExtraAACIII_4'];
    $txtFechaCalExtraAACIII_4= $_POST['txtFechaCalExtraAACIII_4'];

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
   
    $sentencia=
       "UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaMateV_1,`falta2do`=$txtFaltaMateV_2,`falta3ro`=$txtFaltaMateV_3,
       `calParcial1ro`=$txtCalMateV_1,`calParcial2do`=$txtCal_2MateV,`calParcial3ro`=$txtCalMateV_3,`calExtra1`=$txtCalExtraMateV_1,
       `fechaCalExtra1`='$txtFechaCalExtraMateV_1',`calExtra2`=$txtCalExtraMateV_2,`fechaCalExtra2`='$txtFechaCalExtraMateV_2',
       `calExtra3`=$txtCalExtraMateV_3,`fechaCalExtra3`='$txtFechaCalExtraMateV_3',`calExtra4`=$txtCalExtraMateV_4,
       `fechaCalExtra4`='$txtFechaCalExtraMateV_4' WHERE `matricula`='$matricula' AND `idMateria5`=1;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaGeografia_1,`falta2do`=$txtFaltaGeografia_2,`falta3ro`=$txtFaltaGeografia_3,
       `calParcial1ro`=$txtCalGeografia_1,`calParcial2do`=$txtCalGeografia_2,`calParcial3ro`=$txtCalGeografia_3,`calExtra1`=$txtCalExtraGeografia_1,
       `fechaCalExtra1`='$txtFechaCalExtraGeografia_1',`calExtra2`=$txtCalExtraGeografia_2,`fechaCalExtra2`='$txtFechaCalExtraGeografia_2',
       `calExtra3`=$txtCalExtraGeografia_3,`fechaCalExtra3`='$txtFechaCalExtraGeografia_3',`calExtra4`=$txtCalExtraGeografia_4,
       `fechaCalExtra4`='$txtFechaCalExtraGeografia_4' WHERE `matricula`='$matricula' AND `idMateria5`=2;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaESM_1,`falta2do`=$txtFaltaESM_2,`falta3ro`=$txtFaltaESM_3,
       `calParcial1ro`=$txtCalESM_1,`calParcial2do`=$txtCalESM_2,`calParcial3ro`=$txtCalESM_3,`calExtra1`=$txtCalExtraESM_1,
       `fechaCalExtra1`='$txtFechaCalExtraESM_1',`calExtra2`=$txtCalExtraESM_2,`fechaCalExtra2`='$txtFechaCalExtraESM_2',
       `calExtra3`=$txtCalExtraESM_3,`fechaCalExtra3`='$txtFechaCalExtraESM_3',`calExtra4`=$txtCalExtraESM_4,
       `fechaCalExtra4`='$txtFechaCalExtraESM_4' WHERE `matricula`='$matricula' AND `idMateria5`=3;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaEconomiaI_1,`falta2do`=$txtFaltaEconomiaI_2,`falta3ro`=$txtFaltaEconomiaI_3,
       `calParcial1ro`=$txtCalEconomiaI_1,`calParcial2do`=$txtCalEconomiaI_2,`calParcial3ro`=$txtCalEconomiaI_3,`calExtra1`=$txtCalExtraEconomiaI_1,
       `fechaCalExtra1`='$txtFechaCalExtraEconomiaI_1',`calExtra2`=$txtCalExtraEconomiaI_2,`fechaCalExtra2`='$txtFechaCalExtraEconomiaI_2',
       `calExtra3`=$txtCalExtraEconomiaI_3,`fechaCalExtra3`='$txtFechaCalExtraEconomiaI_3',`calExtra4`=$txtCalExtraEconomiaI_4,
       `fechaCalExtra4`='$txtFechaCalExtraEconomiaI_4' WHERE `matricula`='$matricula' AND `idMateria5`=4;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaPsicologiaI_1,`falta2do`=$txtFaltaPsicologiaI_2,`falta3ro`=$txtFaltaPsicologiaI_3,
       `calParcial1ro`=$txtCalPsicologiaI_1,`calParcial2do`=$txtCalPsicologiaI_2,`calParcial3ro`=$txtCalPsicologiaI_3,`calExtra1`=$txtCalExtraPsicologiaI_1,
       `fechaCalExtra1`='$txtFechaCalExtraPsicologiaI_1',`calExtra2`=$txtCalExtraPsicologiaI_2,`fechaCalExtra2`='$txtFechaCalExtraPsicologiaI_2',
       `calExtra3`=$txtCalExtraPsicologiaI_3,`fechaCalExtra3`='$txtFechaCalExtraPsicologiaI_3',`calExtra4`=$txtCalExtraPsicologiaI_4,
       `fechaCalExtra4`='$txtFechaCalExtraPsicologiaI_4' WHERE `matricula`='$matricula' AND `idMateria5`=5;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaDerechoI_1,`falta2do`=$txtFaltaDerechoI_2,`falta3ro`=$txtFaltaDerechoI_3,
       `calParcial1ro`=$txtCalDerechoI_1,`calParcial2do`=$txtCalDerechoI_2,`calParcial3ro`=$txtCalDerechoI_3,`calExtra1`=$txtCalExtraDerechoI_1,
       `fechaCalExtra1`='$txtFechaCalExtraDerechoI_1',`calExtra2`=$txtCalExtraDerechoI_2,`fechaCalExtra2`='$txtFechaCalExtraDerechoI_2',
       `calExtra3`=$txtCalExtraDerechoI_3,`fechaCalExtra3`='$txtFechaCalExtraDerechoI_3',`calExtra4`=$txtCalExtraDerechoI_4,
       `fechaCalExtra4`='$txtFechaCalExtraDerechoI_4' WHERE `matricula`='$matricula' AND `idMateria5`=6;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaInglesV_1,`falta2do`=$txtFaltaInglesV_2,`falta3ro`=$txtFaltaInglesV_3,
       `calParcial1ro`=$txtCalInglesV_1,`calParcial2do`=$txtCalInglesV_2,`calParcial3ro`=$txtCalInglesV_3,`calExtra1`=$txtCalExtraInglesV_1,
       `fechaCalExtra1`='$txtFechaCalExtraInglesV_1',`calExtra2`=$txtCalExtraInglesV_2,`fechaCalExtra2`='$txtFechaCalExtraInglesV_2',
       `calExtra3`=$txtCalExtraInglesV_3,`fechaCalExtra3`='$txtFechaCalExtraInglesV_3',`calExtra4`=$txtCalExtraInglesV_4,
       `fechaCalExtra4`='$txtFechaCalExtraInglesV_4' WHERE `matricula`='$matricula' AND `idMateria5`=7;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaIF_1,`falta2do`=$txtFaltaIF_2,`falta3ro`=$txtFaltaIF_3,
       `calParcial1ro`=$txtCalIF_1,`calParcial2do`=$txtCalIF_2,`calParcial3ro`=$txtCalIF_3,`calExtra1`=$txtCalExtraIF_1,
       `fechaCalExtra1`='$txtFechaCalExtraIF_1',`calExtra2`=$txtCalExtraIF_2,`fechaCalExtra2`='$txtFechaCalExtraIF_2',
       `calExtra3`=$txtCalExtraIF_3,`fechaCalExtra3`='$txtFechaCalExtraIF_3',`calExtra4`=$txtCalExtraIF_4,
       `fechaCalExtra4`='$txtFechaCalExtraIF_4' WHERE `matricula`='$matricula' AND `idMateria5`=8;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaSI_1,`falta2do`=$txtFaltaSI_2,`falta3ro`=$txtFaltaSI_3,
       `calParcial1ro`=$txtCalSI_1,`calParcial2do`=$txtCalSI_2,`calParcial3ro`=$txtCalSI_3,`calExtra1`=$txtCalExtraSI_1,
       `fechaCalExtra1`='$txtFechaCalExtraSI_1',`calExtra2`=$txtCalExtraSI_2,`fechaCalExtra2`='$txtFechaCalExtraSI_2',
       `calExtra3`=$txtCalExtraSI_3,`fechaCalExtra3`='$txtFechaCalExtraSI_3',`calExtra4`=$txtCalExtraSI_4,
       `fechaCalExtra4`='$txtFechaCalExtraSI_4' WHERE `matricula`='$matricula' AND `idMateria5`=9;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaProgramacion_1,`falta2do`=$txtFaltaProgramacion_2,`falta3ro`=$txtFaltaProgramacion_3,
       `calParcial1ro`=$txtCalProgramacion_1,`calParcial2do`=$txtCalProgramacion_2,`calParcial3ro`=$txtCalProgramacion_3,`calExtra1`=$txtCalExtraProgramacion_1,
       `fechaCalExtra1`='$txtFechaCalExtraProgramacion_1',`calExtra2`=$txtCalExtraProgramacion_2,`fechaCalExtra2`='$txtFechaCalExtraProgramacion_2',
       `calExtra3`=$txtCalExtraProgramacion_3,`fechaCalExtra3`='$txtFechaCalExtraProgramacion_3',`calExtra4`=$txtCalExtraProgramacion_4,
       `fechaCalExtra4`='$txtFechaCalExtraProgramacion_4' WHERE `matricula`='$matricula' AND `idMateria5`=10;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaAACIII_1,`falta2do`=$txtFaltaAACIII_2,`falta3ro`=$txtFaltaAACIII_3,
       `calParcial1ro`=$txtCalAACIII_1,`calParcial2do`=$txtCalAACIII_2,`calParcial3ro`=$txtCalAACIII_3,`calExtra1`=$txtCalExtraAACIII_1,
       `fechaCalExtra1`='$txtFechaCalExtraAACIII_1',`calExtra2`=$txtCalExtraAACIII_2,`fechaCalExtra2`='$txtFechaCalExtraAACIII_2',
       `calExtra3`=$txtCalExtraAACIII_3,`fechaCalExtra3`='$txtFechaCalExtraAACIII_3',`calExtra4`=$txtCalExtraAACIII_4,
       `fechaCalExtra4`='$txtFechaCalExtraAACIII_4' WHERE `matricula`='$matricula' AND `idMateria5`=11;
       UPDATE `datosalumno-semestre5` SET `falta1ro`=$txtFaltaSIAV_1,`falta2do`=$txtFaltaSIAV_2,`falta3ro`=$txtFaltaSIAV_3,
       `calParcial1ro`=$txtCalSIAV_1,`calParcial2do`=$txtCalSIAV_2,`calParcial3ro`=$txtCalSIAV_3,`calExtra1`=$txtCalExtraSIAV_1,
       `fechaCalExtra1`='$txtFechaCalExtraSIAV_1',`calExtra2`=$txtCalExtraSIAV_2,`fechaCalExtra2`='$txtFechaCalExtraSIAV_2',
       `calExtra3`=$txtCalExtraSIAV_3,`fechaCalExtra3`='$txtFechaCalExtraSIAV_3',`calExtra4`=$txtCalExtraSIAV_4,
       `fechaCalExtra4`='$txtFechaCalExtraSIAV_4' WHERE `matricula`='$matricula' AND `idMateria5`=12;";

   if(mysqli_query($conexion,$sentencia)){header("Location: ../verCalificacionesAlumno.php");}
   else{echo "Error";}
    mysqli_close($conexion);
?>