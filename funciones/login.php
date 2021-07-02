<?php
   include("funciones/conexion.php");

   $matricula=$_POST['txtMatricula'];
   $password=$_POST['txtPassword'];

   $query = mysqli_query($conexion, "SELECT * FROM datosAlumno WHERE matricula = '".$matricula."' and CURPAlumno = '".$password."'");
   $nr = mysqli_num_rows($query);

   if ($nr == 1){
      header("Location: PaginaPrincipal.php");
    
   }
   else if ($nr == 0){
         header("Location: InicioDeSesion.html");

   }

?>