<?php
   $servidor= "localhost";
   $usuario="root";
   $password="";
   $bD="bdPrepaOficial77";
   $conexion= mysqli_connect($servidor, $usuario, $password, $bD)
   OR DIE("No se pudo conectar la Base de Datos". mysqli_connect_error());

   $matricula=$_POST['txtMatricula'];
   $password=$_POST['txtPassword'];

   $query = mysqli_query($conexion, "SELECT * FROM datosAlumno WHERE matricula = '".$matricula."' and CURPAlumno = '".$password."'");
   $nr = mysqli_num_rows($query);

   if ($nr == 1){
      header("Location: PaginaPrincipal.html");
    
   }
   else if ($nr == 0){
         echo "No se puede ingresar";

   }

?>