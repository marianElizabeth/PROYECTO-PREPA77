<?php 
    include("conexion.php");
        //ESCUELAS LABORA
       $CURPDocente= $_POST['txtCURPDocente'];// 1 en la BD(datosDocente)
       $CCTEscuela= $_POST['cmbNombreEscuela'];//25  en la BD(datosAlumono)
       $idPuestoInstitucionalLabora = $_POST['cmbPuesto'];// 2 en la BD(datosAlumono)
       $numeroHoras = $_POST['txtNoHoras'];// 3 en la BD(datosAlumono)

   
       $sentenciaLabora=" UPDATE escuelasLabora SET        
           CCTEscuela=(SELECT CCTEscuela FROM escuela WHERE nombreEscuela = '$CCTEscuela'),
           idPuestoInstitucional= (SELECT idPuestoInstitucional FROM puestoInstitucional WHERE descripcionInstitucional = '$idPuestoInstitucionalLabora'),
           numeroHoras='$numeroHoras'
           WHERE CURPDocente='$CURPDocente';";

   if(mysqli_query($conexion,$sentenciaLabora)){
       echo("Escuela  labora actualizada correctamente");
   }
   else{
       echo "Error";
   }
   
    mysqli_close($conexion);
?>