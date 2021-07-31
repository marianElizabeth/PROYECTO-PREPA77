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

    $txtCalPsicologiaII_1= $_POST['txtCalPsicologiaII_1'];
    $txtCalPsicologiaII_2= $_POST['txtCalPsicologiaII_2'];
    $txtCalPsicologiaII_3= $_POST['txtCalPsicologiaII_3'];
    $txtFaltaPsicologiaII_1= $_POST['txtFaltaPsicologiaII_1'];
    $txtFaltaPsicologiaII_2= $_POST['txtFaltaPsicologiaII_2'];
    $txtFaltaPsicologiaII_3= $_POST['txtFaltaPsicologiaII_3'];
    $txtCalExtraPsicologiaII_1 = $_POST['txtCalExtraPsicologiaII_1'];
    $txtFechaCalExtraPsicologiaII_1 = $_POST['txtFechaCalExtraPsicologiaII_1'];
    $txtCalExtraPsicologiaII_2= $_POST['txtCalExtraPsicologiaII_2'];
    $txtFechaCalExtraPsicologiaII_2= $_POST['txtFechaCalExtraPsicologiaII_2'];
    $txtCalExtraPsicologiaII_3= $_POST['txtCalExtraPsicologiaII_3'];
    $txtFechaCalExtraPsicologiaII_3 = $_POST['txtFechaCalExtraPsicologiaII_3'];
    $txtCalExtraPsicologiaII_4= $_POST['txtCalExtraPsicologiaII_4'];
    $txtFechaCalExtraPsicologiaII_4= $_POST['txtFechaCalExtraPsicologiaII_4'];

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

    $txtCalPW_1 = $_POST['txtCalPW_1'];
    $txtCalPW_2 = $_POST['txtCalPW_2'];
    $txtCalPW_3 = $_POST['txtCalPW_3'];
    $txtFaltaPW_1= $_POST['txtFaltaPW_1'];
    $txtFaltaPW_2= $_POST['txtFaltaPW_2'];
    $txtFaltaPW_3= $_POST['txtFaltaPW_3'];
    $txtCalExtraPW_1 = $_POST['txtCalExtraPW_1'];
    $txtFechaCalExtraPW_1= $_POST['txtFechaCalExtraPW_1'];
    $txtCalExtraPW_2= $_POST['txtCalExtraPW_2'];
    $txtFechaCalExtraPW_2= $_POST['txtFechaCalExtraPW_2'];
    $txtCalExtraPW_3= $_POST['txtCalExtraPW_3'];
    $txtFechaCalExtraPW_3 = $_POST['txtFechaCalExtraPW_3'];
    $txtCalExtraPW_4= $_POST['txtCalExtraPW_4'];
    $txtFechaCalExtraPW_4= $_POST['txtFechaCalExtraPW_4'];

    $txtCalDD_1 = $_POST['txtCalDD_1'];
    $txtCalDD_2 = $_POST['txtCalDD_2'];
    $txtCalDD_3 = $_POST['txtCalDD_3'];
    $txtFaltaDD_1= $_POST['txtFaltaDD_1'];
    $txtFaltaDD_2= $_POST['txtFaltaDD_2'];
    $txtFaltaDD_3= $_POST['txtFaltaDD_3'];
    $txtCalExtraDD_1 = $_POST['txtCalExtraDD_1'];
    $txtFechaCalExtraDD_1 = $_POST['txtFechaCalExtraDD_1'];
    $txtCalExtraDD_2 = $_POST['txtCalExtraDD_2'];
    $txtFechaCalExtraDD_2= $_POST['txtFechaCalExtraDD_2'];
    $txtCalExtraDD_3= $_POST['txtCalExtraDD_3'];
    $txtFechaCalExtraDD_3 = $_POST['txtFechaCalExtraDD_3'];
    $txtCalExtraDD_4 = $_POST['txtCalExtraDD_4'];
    $txtFechaCalExtraDD_4 = $_POST['txtFechaCalExtraDD_4'];

    $txtCalAACIV_1 = $_POST['txtCalAACIV_1'];
    $txtCalAACIV_2 = $_POST['txtCalAACIV_2'];
    $txtCalAACIV_3 = $_POST['txtCalAACIV_3'];
    $txtFaltaAACIV_1 = $_POST['txtFaltaAACIV_1'];
    $txtFaltaAACIV_2 = $_POST['txtFaltaAACIV_2'];
    $txtFaltaAACIV_3 = $_POST['txtFaltaAACIV_3'];
    $txtCalExtraAACIV_1 = $_POST['txtCalExtraAACIV_1'];
    $txtFechaCalExtraAACIV_1 = $_POST['txtFechaCalExtraAACIV_1'];
    $txtCalExtraAACIV_2 = $_POST['txtCalExtraAACIV_2'];
    $txtFechaCalExtraAACIV_2 = $_POST['txtFechaCalExtraAACIV_2'];
    $txtCalExtraAACIV_3 = $_POST['txtCalExtraAACIV_3'];
    $txtFechaCalExtraAACIV_3 = $_POST['txtFechaCalExtraAACIV_3'];
    $txtCalExtraAACIV_4 = $_POST['txtCalExtraAACIV_4'];
    $txtFechaCalExtraAACIV_4= $_POST['txtFechaCalExtraAACIV_4'];

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
   
    $sentencia=
       "UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaMateVI_1,`falta2do`=$txtFaltaMateVI_2,`falta3ro`=$txtFaltaMateVI_3,
       `calParcial1ro`=$txtCalMateVI_1,`calParcial2do`=$txtCal_2MateVI,`calParcial3ro`=$txtCalMateVI_3,`calExtra1`=$txtCalExtraMateVI_1,
       `fechaCalExtra1`='$txtFechaCalExtraMateVI_1',`calExtra2`=$txtCalExtraMateVI_2,`fechaCalExtra2`='$txtFechaCalExtraMateVI_2',
       `calExtra3`=$txtCalExtraMateVI_3,`fechaCalExtra3`='$txtFechaCalExtraMateVI_3',`calExtra4`=$txtCalExtraMateVI_4,
       `fechaCalExtra4`='$txtFechaCalExtraMateVI_4' WHERE `matricula`='$matricula' AND `idMateria6`=1;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaEMA_1,`falta2do`=$txtFaltaEMA_2,`falta3ro`=$txtFaltaEMA_3,
       `calParcial1ro`=$txtCalEMA_1,`calParcial2do`=$txtCalEMA_2,`calParcial3ro`=$txtCalEMA_3,`calExtra1`=$txtCalExtraEMA_1,
       `fechaCalExtra1`='$txtFechaCalExtraEMA_1',`calExtra2`=$txtCalExtraEMA_2,`fechaCalExtra2`='$txtFechaCalExtraEMA_2',
       `calExtra3`=$txtCalExtraEMA_3,`fechaCalExtra3`='$txtFechaCalExtraEMA_3',`calExtra4`=$txtCalExtraEMA_4,
       `fechaCalExtra4`='$txtFechaCalExtraEMA_4' WHERE `matricula`='$matricula' AND `idMateria6`=2;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaHUC_1,`falta2do`=$txtFaltaHUC_2,`falta3ro`=$txtFaltaHUC_3,
       `calParcial1ro`=$txtCalHUC_1,`calParcial2do`=$txtCalHUC_2,`calParcial3ro`=$txtCalHUC_3,`calExtra1`=$txtCalExtraHUC_1,
       `fechaCalExtra1`='$txtFechaCalExtraHUC_1',`calExtra2`=$txtCalExtraHUC_2,`fechaCalExtra2`='$txtFechaCalExtraHUC_2',
       `calExtra3`=$txtCalExtraHUC_3,`fechaCalExtra3`='$txtFechaCalExtraHUC_3',`calExtra4`=$txtCalExtraHUC_4,
       `fechaCalExtra4`='$txtFechaCalExtraHUC_4' WHERE `matricula`='$matricula' AND `idMateria6`=3;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaEconomiaII_1,`falta2do`=$txtFaltaEconomiaII_2,`falta3ro`=$txtFaltaEconomiaII_3,
       `calParcial1ro`=$txtCalEconomiaII_1,`calParcial2do`=$txtCalEconomiaII_2,`calParcial3ro`=$txtCalEconomiaII_3,`calExtra1`=$txtCalExtraEconomiaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraEconomiaII_1',`calExtra2`=$txtCalExtraEconomiaII_2,`fechaCalExtra2`='$txtFechaCalExtraEconomiaII_2',
       `calExtra3`=$txtCalExtraEconomiaII_3,`fechaCalExtra3`='$txtFechaCalExtraEconomiaII_3',`calExtra4`=$txtCalExtraEconomiaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraEconomiaII_4' WHERE `matricula`='$matricula' AND `idMateria6`=4;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaPsicologiaII_1,`falta2do`=$txtFaltaPsicologiaII_2,`falta3ro`=$txtFaltaPsicologiaII_3,
       `calParcial1ro`=$txtCalPsicologiaII_1,`calParcial2do`=$txtCalPsicologiaII_2,`calParcial3ro`=$txtCalPsicologiaII_3,`calExtra1`=$txtCalExtraPsicologiaII_1,
       `fechaCalExtra1`='$txtFechaCalExtraPsicologiaII_1',`calExtra2`=$txtCalExtraPsicologiaII_2,`fechaCalExtra2`='$txtFechaCalExtraPsicologiaII_2',
       `calExtra3`=$txtCalExtraPsicologiaII_3,`fechaCalExtra3`='$txtFechaCalExtraPsicologiaII_3',`calExtra4`=$txtCalExtraPsicologiaII_4,
       `fechaCalExtra4`='$txtFechaCalExtraPsicologiaII_4' WHERE `matricula`='$matricula' AND `idMateria6`=5;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaDerechoII_1,`falta2do`=$txtFaltaDerechoII_2,`falta3ro`=$txtFaltaDerechoII_3,
       `calParcial1ro`=$txtCalDerechoII_1,`calParcial2do`=$txtCalDerechoII_2,`calParcial3ro`=$txtCalDerechoII_3,`calExtra1`=$txtCalExtraDerechoII_1,
       `fechaCalExtra1`='$txtFechaCalExtraDerechoII_1',`calExtra2`=$txtCalExtraDerechoII_2,`fechaCalExtra2`='$txtFechaCalExtraDerechoII_2',
       `calExtra3`=$txtCalExtraDerechoII_3,`fechaCalExtra3`='$txtFechaCalExtraDerechoII_3',`calExtra4`=$txtCalExtraDerechoII_4,
       `fechaCalExtra4`='$txtFechaCalExtraDerechoII_4' WHERE `matricula`='$matricula' AND `idMateria6`=6;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaInglesVI_1,`falta2do`=$txtFaltaInglesVI_2,`falta3ro`=$txtFaltaInglesVI_3,
       `calParcial1ro`=$txtCalInglesVI_1,`calParcial2do`=$txtCalInglesVI_2,`calParcial3ro`=$txtCalInglesVI_3,`calExtra1`=$txtCalExtraInglesVI_1,
       `fechaCalExtra1`='$txtFechaCalExtraInglesVI_1',`calExtra2`=$txtCalExtraInglesVI_2,`fechaCalExtra2`='$txtFechaCalExtraInglesVI_2',
       `calExtra3`=$txtCalExtraInglesVI_3,`fechaCalExtra3`='$txtFechaCalExtraInglesVI_3',`calExtra4`=$txtCalExtraInglesVI_4,
       `fechaCalExtra4`='$txtFechaCalExtraInglesVI_4' WHERE `matricula`='$matricula' AND `idMateria6`=7;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaFilosofia_1,`falta2do`=$txtFaltaFilosofia_2,`falta3ro`=$txtFaltaFilosofia_3,
       `calParcial1ro`=$txtCalFilosofia_1,`calParcial2do`=$txtCalFilosofia_2,`calParcial3ro`=$txtCalFilosofia_3,`calExtra1`=$txtCalExtraFilosofia_1,
       `fechaCalExtra1`='$txtFechaCalExtraFilosofia_1',`calExtra2`=$txtCalExtraFilosofia_2,`fechaCalExtra2`='$txtFechaCalExtraFilosofia_2',
       `calExtra3`=$txtCalExtraFilosofia_3,`fechaCalExtra3`='$txtFechaCalExtraFilosofia_3',`calExtra4`=$txtCalExtraFilosofia_4,
       `fechaCalExtra4`='$txtFechaCalExtraFilosofia_4' WHERE `matricula`='$matricula' AND `idMateria6`=8;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaPW_1,`falta2do`=$txtFaltaPW_2,`falta3ro`=$txtFaltaPW_3,
       `calParcial1ro`=$txtCalPW_1,`calParcial2do`=$txtCalPW_2,`calParcial3ro`=$txtCalPW_3,`calExtra1`=$txtCalExtraPW_1,
       `fechaCalExtra1`='$txtFechaCalExtraPW_1',`calExtra2`=$txtCalExtraPW_2,`fechaCalExtra2`='$txtFechaCalExtraPW_2',
       `calExtra3`=$txtCalExtraPW_3,`fechaCalExtra3`='$txtFechaCalExtraPW_3',`calExtra4`=$txtCalExtraPW_4,
       `fechaCalExtra4`='$txtFechaCalExtraPW_4' WHERE `matricula` ='$matricula' AND `idMateria6`=9;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaDD_1,`falta2do`=$txtFaltaDD_2,`falta3ro`=$txtFaltaDD_3,
       `calParcial1ro`=$txtCalDD_1,`calParcial2do`=$txtCalDD_2,`calParcial3ro`=$txtCalDD_3,`calExtra1`=$txtCalExtraDD_1,
       `fechaCalExtra1`='$txtFechaCalExtraDD_1',`calExtra2`=$txtCalExtraDD_2,`fechaCalExtra2`='$txtFechaCalExtraDD_2',
       `calExtra3`=$txtCalExtraDD_3,`fechaCalExtra3`='$txtFechaCalExtraDD_3',`calExtra4`=$txtCalExtraDD_4,
       `fechaCalExtra4`='$txtFechaCalExtraDD_4' WHERE `matricula` ='$matricula' AND `idMateria6`=10;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaAACIV_1,`falta2do`=$txtFaltaAACIV_2,`falta3ro`=$txtFaltaAACIV_3,
       `calParcial1ro`=$txtCalAACIV_1,`calParcial2do`=$txtCalAACIV_2,`calParcial3ro`=$txtCalAACIV_3,`calExtra1`=$txtCalExtraAACIV_1,
       `fechaCalExtra1`='$txtFechaCalExtraAACIV_1',`calExtra2`=$txtCalExtraAACIV_2,`fechaCalExtra2`='$txtFechaCalExtraAACIV_2',
       `calExtra3`=$txtCalExtraAACIV_3,`fechaCalExtra3`='$txtFechaCalExtraAACIV_3',`calExtra4`=$txtCalExtraAACIV_4,
       `fechaCalExtra4`='$txtFechaCalExtraAACIV_4' WHERE `matricula`='$matricula' AND `idMateria6`=11;
       UPDATE `datosalumno-semestre6` SET `falta1ro`=$txtFaltaSIAVI_1,`falta2do`=$txtFaltaSIAVI_2,`falta3ro`=$txtFaltaSIAVI_3,
       `calParcial1ro`=$txtCalSIAVI_1,`calParcial2do`=$txtCalSIAVI_2,`calParcial3ro`=$txtCalSIAVI_3,`calExtra1`=$txtCalExtraSIAVI_1,
       `fechaCalExtra1`='$txtFechaCalExtraSIAVI_1',`calExtra2`=$txtCalExtraSIAVI_2,`fechaCalExtra2`='$txtFechaCalExtraSIAVI_2',
       `calExtra3`=$txtCalExtraSIAVI_3,`fechaCalExtra3`='$txtFechaCalExtraSIAVI_3',`calExtra4`=$txtCalExtraSIAVI_4,
       `fechaCalExtra4`='$txtFechaCalExtraSIAVI_4' WHERE `matricula`='$matricula' AND `idMateria6`=12;";

   if(mysqli_query($conexion,$sentencia)){header("Location: ../verCalificacionesAlumno.php");}
   else{echo "Error";}
    mysqli_close($conexion);
?>