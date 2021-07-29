<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calificaciones Alumno</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link rel="stylesheet" href="./css/main.css">
</head>
<body>
	<!-- SideBar -->
	<section class="full-box cover dashboard-sideBar">
		<div class="full-box dashboard-sideBar-bg btn-menu-dashboard"></div>
		<div class="full-box dashboard-sideBar-ct">
			<!--SideBar Title -->
			<div class="full-box text-uppercase text-center text-titles dashboard-sideBar-title">
				Preparatoria Oficial No.77 <i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
			</div>
			<!-- SideBar User info -->
			<div class="full-box dashboard-sideBar-UserInfo">
				<figure class="full-box">
					<img src="./assets/img/usuario.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">Administrador</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!" class="btn-exit-system">
							<i class="zmdi zmdi-power"></i>
						</a>
					</li>
				</ul>
			</div>
			<!-- SideBar Menu -->
			<ul class="list-unstyled full-box dashboard-sideBar-Menu">
				<li>
					<a href="PaginaPrincipal.html">
						<i class="zmdi zmdi-view-dashboard zmdi-hc-fw"></i> Menú principal
					</a>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<i class="zmdi zmdi-card zmdi-hc-fw"></i>Alumno<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="DatosAlumno.php"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>se$semestre1 Alumno</a>
						</li>
						
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<i class="zmdi zmdi-eye zmdi-hc-fw"></i>Ver Información del Alumno<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="verInfoPersonalAlumno.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Información Personal</a>
						</li>
						
						<li>
							<a href="verProcedenciaAlumno.php"><i class="zmdi zmdi-balance zmdi-hc-fw"></i>Procedencia</a>
						</li>
						<li>
							<a href="verDireccionAlumno.php"><i class="zmdi zmdi-pin zmdi-hc-fw"></i>Dirección</a>
						</li>
						<li>
							<a href="verPadre.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>Padre</a>
						</li>
						<li>
							<a href="verMadre.php"><i class="zmdi zmdi-female zmdi-hc-fw"></i>Madre</a>
						</li>
                        <li>
							<a href="verCalificacionesAlumno.php"><i class="zmdi zmdi-assignment-check zmdi-hc-fw"></i>Calificaciones</a>
						</li>
					</ul>
				</li>
                <li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="nav-icon fas fa-tachometer-alt"></i>
						<i class="zmdi zmdi-plus-circle-o zmdi-hc-fw"></i>Calificaciones<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="calificacionPrimerSemestre.php"><i class="zmdi zmdi-n-1-square zmdi-hc-fw"></i>Primer Semestre</a>
						</li>
						
						<li>
							<a href=""><i class="zmdi zmdi-n-2-square zmdi-hc-fw"></i>Segundo Semestre</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-n-3-square zmdi-hc-fw"></i>Tercer Semestre</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-n-4-square zmdi-hc-fw"></i>Cuarto Semestre</a>
						</li>
						<li>
							<a href=""><i class="zmdi zmdi-n-5-square zmdi-hc-fw"></i>Quinto Semestre</a>
						</li>
                        <li>
							<a href=""><i class="zmdi zmdi-n-6-square zmdi-hc-fw"></i>Sexto Semestre</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account zmdi-hc-fw"></i>Docente<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="DatosDocente.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>Datos Docente</a>
						</li>
						<li>
							<a href="LicenciaturaDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Licenciatura</a>
						</li>
						<li>
							<a href="EspecializacionDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Especialización</a>
						</li>
						<li>
							<a href="DiplomadoDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Diplomado</a>
						</li>
						<li>
							<a href="MaestriaDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Maestria</a>
						</li>
						<li>
							<a href="DoctoradoDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Doctorado</a>
						</li>
						<li>
							<a href="EscuelaDondeLabora.php"><i class="zmdi zmdi-city zmdi-hc-fw"></i>Escuelas Donde Labora</a>
						</li>
						<li>
							<a href="EscuelaAsignacionDocente.php"><i class="zmdi zmdi-city zmdi-hc-fw"></i>Escuela de Asignacion</a>
						</li>					
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-eye zmdi-hc-fw"></i>Ver Información del Docente<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="VerDatosDocentes.php"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>Datos Docente</a>
						</li>
						<li>
							<a href="VerLicenciatura.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Licenciatura</a>
						</li>
						<li>
							<a href="VerEspecializacionDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Especialización</a>
						</li>
						<li>
							<a href="VerDiplomadoDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Diplomado</a>
						</li>
						<li>
							<a href="VerMaestriaDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Maestria</a>
						</li>
						<li>
							<a href="VerDoctoradoDocente.php"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Doctorado</a>
						</li>
						<li>
							<a href="VerEscuelasLaboraDocente.php"><i class="zmdi zmdi-city zmdi-hc-fw"></i>Escuelas Donde Labora</a>
						</li>
						<li>
							<a href="VerEscuelaAsignacionDocente.php"><i class="zmdi zmdi-city zmdi-hc-fw"></i>Escuela de Asignacion</a>
						</li>					
					</ul>
				</li>
			</ul>
		</div>
	</section>

	<!-- Content page-->
	<section class="full-box dashboard-contentPage">
		<!-- NavBar -->
		<nav class="full-box dashboard-Navbar">
			<ul class="full-box list-unstyled text-right">
				<li class="pull-left">
					
					<a href="#!" class="btn-menu-dashboard"><i class="zmdi zmdi-more-vert"></i></a>
				</li>
				<li class="pull-left">
					<a href="PaginaPrincipal.html" class="btn-menu-dashboard">Principal</a>
				</li>
				<li class="pull-left">     </li>
				<li class="pull-left">
					<a href="DatosAlumno.php" class="btn-menu-dashboard">Alumno</a>
				</li>
				<li class="pull-left">     </li>
				<li class="pull-left">
					<a href="DatosDocente.php" class="btn-menu-dashboard">Docente</a>
				</li>
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">7</span>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-search">
						<i class="zmdi zmdi-search"></i>
					</a>
				</li>
				<li>
					<a href="#!" class="btn-modal-help">
						<i class="zmdi zmdi-help-outline"></i>
					</a>
				</li>
			</ul>
		</nav>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-eye zmdi-hc-fw"></i>Calificaciones <small>Alumno</small></h1>
			</div>
			<p class="lead">En esta sección puedes visualizar las calificaciones</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#" data-toggle="tab"></a></li>
					  	<li><a href="#" data-toggle="tab"></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
					<div class="table-responsive">
                        <table class="table table-hover text-center">
                                    <tr>
								        <th  class="text-center" bgcolor="yellow">Ciclo Escolar: 2021-2022</th>
                                        <th  class="text-center" bgcolor="yellow">Primer Semestre</th>
                                        <th  class="text-center" bgcolor="yellow">Promedio Semestral: 9.0</th>
                                        <th  class="text-center" bgcolor="yellow">Promedio General: 9.0</th>
							        </tr>
                        </table>
							<table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Asignaturas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Faltas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Parciales</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Extraordinarias</th>
                                        
                                        
                                    </tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ro</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ro</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Actualizar</th>
										<th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                    <?php
                                        include("funciones/conexion.php");									  
										$sentencia = "
                                        SELECT
                                        datosalumno.matricula, 
                                        `datosalumno-semestre1`.idMateria1, 
                                        semestre1.materia1, 
                                        `datosalumno-semestre1`.falta1ro, 
                                        `datosalumno-semestre1`.falta2do, 
                                        `datosalumno-semestre1`.falta3ro, 
                                        `datosalumno-semestre1`.calParcial1ro, 
                                        `datosalumno-semestre1`.calParcial2do, 
                                        `datosalumno-semestre1`.calParcial3ro, 
                                        `datosalumno-semestre1`.calExtra1, 
                                        `datosalumno-semestre1`.fechaCalExtra1, 
                                        `datosalumno-semestre1`.calExtra2, 
                                        `datosalumno-semestre1`.fechaCalExtra2, 
                                        `datosalumno-semestre1`.calExtra3, 
                                        `datosalumno-semestre1`.fechaCalExtra3, 
                                        `datosalumno-semestre1`.calExtra4, 
                                        `datosalumno-semestre1`.fechaCalExtra4, 
                                        `datosalumno-semestre1`.calFinal
                                         FROM
                                        datosalumno
                                        INNER JOIN
                                        `datosalumno-semestre1`
                                        ON 
                                            datosalumno.matricula = `datosalumno-semestre1`.matricula
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            `datosalumno-semestre1`.idMateria1 = semestre1.idMateria1
                                          WHERE
                                        datosalumno.matricula = '11111111111'
                                        ";	
                                        $resultado = mysqli_query($conexion, $sentencia);
                                        $semestre1=mysqli_fetch_assoc($resultado);	
                                        $semestre11=mysqli_fetch_assoc($resultado);	
                                        $semestre12=mysqli_fetch_assoc($resultado);
                                        $semestre13=mysqli_fetch_assoc($resultado);
                                        $semestre14=mysqli_fetch_assoc($resultado);
                                        $semestre15=mysqli_fetch_assoc($resultado);
                                        $semestre16=mysqli_fetch_assoc($resultado);
                                        $semestre17=mysqli_fetch_assoc($resultado);
                                        $semestre18=mysqli_fetch_assoc($resultado);
                                        $semestre19=mysqli_fetch_assoc($resultado);
                                        mysqli_close($conexion);

                                        while ($registro = mysqli_fetch_assoc($resultado) ){
                                            for ($z=1; $z <11 ; $z++) { 
                                            
                                                if($semestre1['idMateria1']==$z){
                                                    echo "
                                                    <tr>
                                                    <td>".$semestre1["materia1"]."+" .$z."</td>
                                                    <td>".$semestre1["falta1ro"]."</td>
                                                    <td>".$semestre1["falta2do"]."</td>
                                                    <td>".$semestre1["falta3ro"]."</td>
                                                    <td>3</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>".$semestre1["calParcial1ro"]."</td>
                                                    <td>".$semestre1["calParcial2do"]."</td>
                                                    <td>".$semestre1["calParcial3ro"]."</td>
                                                    <td>".$semestre1["calFinal"]."</td>
                                                    <td></td>
                                                    <td></td>
                                                    <td>".$semestre1["calExtra1"]."</td>
                                                    <td>".$semestre1["fechaCalExtra1"]."</td>
                                                    <td>".$semestre1["calExtra2"]."</td>
                                                    <td>".$semestre1["fechaCalExtra2"]."</td>
                                                    <td>".$semestre1["calExtra3"]."</td>
                                                    <td>".$semestre1["fechaCalExtra3"]."</td>
                                                    <td>".$semestre1["calExtra4"]."</td>
                                                    <td>".$semestre1["fechaCalExtra4"]."</td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                      <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                      </tr>
                                                    
                                                    ";}                                                
                                            }                                                                        
                                        }
                                        
                                        if($semestre1['idMateria1']==1){
                                        echo "
                                        <tr>
                                        <td>Matematicas I</td>
                                        <td>".$semestre1["falta1ro"]."</td>
                                        <td>".$semestre1["falta2do"]."</td>
                                        <td>".$semestre1["falta3ro"]."</td>
                                        <td>3</td>
                                        <td></td>
                                        <td></td>
                                        <td>".$semestre1["calParcial1ro"]."</td>
                                        <td>".$semestre1["calParcial2do"]."</td>
                                        <td>".$semestre1["calParcial3ro"]."</td>
                                        <td>".$semestre1["calFinal"]."</td>
                                        <td></td>
                                        <td></td>
                                        <td>".$semestre1["calExtra1"]."</td>
                                        <td>".$semestre1["fechaCalExtra1"]."</td>
                                        <td>".$semestre1["calExtra2"]."</td>
                                        <td>".$semestre1["fechaCalExtra2"]."</td>
                                        <td>".$semestre1["calExtra3"]."</td>
                                        <td>".$semestre1["fechaCalExtra3"]."</td>
                                        <td>".$semestre1["calExtra4"]."</td>
                                        <td>".$semestre1["fechaCalExtra4"]."</td>
                                        <td></td>
                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
										  <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                          </tr>
                                        ";}
                                    ?>
                                        <?php
                                        if($semestre11['idMateria1']==2){
                                            echo "
                                            <tr>
                                            <td>Quimica I</td>
                                            <td>".$semestre11["falta1ro"]."</td>
                                            <td>".$semestre11["falta2do"]."</td>
                                            <td>".$semestre11["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre11["calParcial1ro"]."</td>
                                            <td>".$semestre11["calParcial2do"]."</td>
                                            <td>".$semestre11["calParcial3ro"]."</td>
                                            <td>".$semestre11["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre11["calExtra1"]."</td>
                                            <td>".$semestre11["fechaCalExtra1"]."</td>
                                            <td>".$semestre11["calExtra2"]."</td>
                                            <td>".$semestre11["fechaCalExtra2"]."</td>
                                            <td>".$semestre11["calExtra3"]."</td>
                                            <td>".$semestre11["fechaCalExtra3"]."</td>
                                            <td>".$semestre11["calExtra4"]."</td>
                                            <td>".$semestre11["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                        if($semestre12['idMateria1']==3){
                                            echo "
                                            <tr>
                                            <td>Metodologia de la investigación I</td>
                                            <td>".$semestre12["falta1ro"]."</td>
                                            <td>".$semestre12["falta2do"]."</td>
                                            <td>".$semestre12["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre12["calParcial1ro"]."</td>
                                            <td>".$semestre12["calParcial2do"]."</td>
                                            <td>".$semestre12["calParcial3ro"]."</td>
                                            <td>".$semestre12["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre12["calExtra1"]."</td>
                                            <td>".$semestre12["fechaCalExtra1"]."</td>
                                            <td>".$semestre12["calExtra2"]."</td>
                                            <td>".$semestre12["fechaCalExtra2"]."</td>
                                            <td>".$semestre12["calExtra3"]."</td>
                                            <td>".$semestre12["fechaCalExtra3"]."</td>
                                            <td>".$semestre12["calExtra4"]."</td>
                                            <td>".$semestre12["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                        if($semestre13['idMateria1']==4){
                                            echo "
                                            <tr>
                                            <td>Taller de lectura y redacción I</td>
                                            <td>".$semestre13["falta1ro"]."</td>
                                            <td>".$semestre13["falta2do"]."</td>
                                            <td>".$semestre13["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre13["calParcial1ro"]."</td>
                                            <td>".$semestre13["calParcial2do"]."</td>
                                            <td>".$semestre13["calParcial3ro"]."</td>
                                            <td>".$semestre13["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre13["calExtra1"]."</td>
                                            <td>".$semestre13["fechaCalExtra1"]."</td>
                                            <td>".$semestre13["calExtra2"]."</td>
                                            <td>".$semestre13["fechaCalExtra2"]."</td>
                                            <td>".$semestre13["calExtra3"]."</td>
                                            <td>".$semestre13["fechaCalExtra3"]."</td>
                                            <td>".$semestre13["calExtra4"]."</td>
                                            <td>".$semestre13["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                        if($semestre14['idMateria1']==5){
                                            echo "
                                            <tr>
                                            <td>Ingles I</td>
                                            <td>".$semestre14["falta1ro"]."</td>
                                            <td>".$semestre14["falta2do"]."</td>
                                            <td>".$semestre14["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre14["calParcial1ro"]."</td>
                                            <td>".$semestre14["calParcial2do"]."</td>
                                            <td>".$semestre14["calParcial3ro"]."</td>
                                            <td>".$semestre14["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre14["calExtra1"]."</td>
                                            <td>".$semestre14["fechaCalExtra1"]."</td>
                                            <td>".$semestre14["calExtra2"]."</td>
                                            <td>".$semestre14["fechaCalExtra2"]."</td>
                                            <td>".$semestre14["calExtra3"]."</td>
                                            <td>".$semestre14["fechaCalExtra3"]."</td>
                                            <td>".$semestre14["calExtra4"]."</td>
                                            <td>".$semestre14["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                        if($semestre15['idMateria1']==6){
                                            echo "
                                            <tr>
                                            <td>Informatica I</td>
                                            <td>".$semestre15["falta1ro"]."</td>
                                            <td>".$semestre15["falta2do"]."</td>
                                            <td>".$semestre15["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre15["calParcial1ro"]."</td>
                                            <td>".$semestre15["calParcial2do"]."</td>
                                            <td>".$semestre15["calParcial3ro"]."</td>
                                            <td>".$semestre15["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre15["calExtra1"]."</td>
                                            <td>".$semestre15["fechaCalExtra1"]."</td>
                                            <td>".$semestre15["calExtra2"]."</td>
                                            <td>".$semestre15["fechaCalExtra2"]."</td>
                                            <td>".$semestre15["calExtra3"]."</td>
                                            <td>".$semestre15["fechaCalExtra3"]."</td>
                                            <td>".$semestre15["calExtra4"]."</td>
                                            <td>".$semestre15["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                        if($semestre16['idMateria1']==7){
                                            echo "
                                            <tr>
                                            <td>Etica I</td>
                                            <td>".$semestre16["falta1ro"]."</td>
                                            <td>".$semestre16["falta2do"]."</td>
                                            <td>".$semestre16["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre16["calParcial1ro"]."</td>
                                            <td>".$semestre16["calParcial2do"]."</td>
                                            <td>".$semestre16["calParcial3ro"]."</td>
                                            <td>".$semestre16["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre16["calExtra1"]."</td>
                                            <td>".$semestre16["fechaCalExtra1"]."</td>
                                            <td>".$semestre16["calExtra2"]."</td>
                                            <td>".$semestre16["fechaCalExtra2"]."</td>
                                            <td>".$semestre16["calExtra3"]."</td>
                                            <td>".$semestre16["fechaCalExtra3"]."</td>
                                            <td>".$semestre16["calExtra4"]."</td>
                                            <td>".$semestre16["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";} ?>
                                            <?php    
                                        if($semestre17['idMateria1']==8){
                                            echo "
                                            <tr>
                                            <td>Actividades Fisicas y Recreativas I</td>
                                            <td>".$semestre17["falta1ro"]."</td>
                                            <td>".$semestre17["falta2do"]."</td>
                                            <td>".$semestre17["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre17["calParcial1ro"]."</td>
                                            <td>".$semestre17["calParcial2do"]."</td>
                                            <td>".$semestre17["calParcial3ro"]."</td>
                                            <td>".$semestre17["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre17["calExtra1"]."</td>
                                            <td>".$semestre17["fechaCalExtra1"]."</td>
                                            <td>".$semestre17["calExtra2"]."</td>
                                            <td>".$semestre17["fechaCalExtra2"]."</td>
                                            <td>".$semestre17["calExtra3"]."</td>
                                            <td>".$semestre17["fechaCalExtra3"]."</td>
                                            <td>".$semestre17["calExtra4"]."</td>
                                            <td>".$semestre17["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                        if($semestre18['idMateria1']==9){
                                            echo "
                                            <tr>
                                            <td>Actividades Artisticas y Culturales I</td>
                                            <td>".$semestre18["falta1ro"]."</td>
                                            <td>".$semestre18["falta2do"]."</td>
                                            <td>".$semestre18["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre18["calParcial1ro"]."</td>
                                            <td>".$semestre18["calParcial2do"]."</td>
                                            <td>".$semestre18["calParcial3ro"]."</td>
                                            <td>".$semestre18["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre18["calExtra1"]."</td>
                                            <td>".$semestre18["fechaCalExtra1"]."</td>
                                            <td>".$semestre18["calExtra2"]."</td>
                                            <td>".$semestre18["fechaCalExtra2"]."</td>
                                            <td>".$semestre18["calExtra3"]."</td>
                                            <td>".$semestre18["fechaCalExtra3"]."</td>
                                            <td>".$semestre18["calExtra4"]."</td>
                                            <td>".$semestre18["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}?>
                                            <?php
                                            if($semestre19['idMateria1']==10){
                                            echo "
                                            <tr>
                                            <td>Salud Integral del Adolecente I</td>
                                            <td>".$semestre19["falta1ro"]."</td>
                                            <td>".$semestre19["falta2do"]."</td>
                                            <td>".$semestre19["falta3ro"]."</td>
                                            <td>3</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre19["calParcial1ro"]."</td>
                                            <td>".$semestre19["calParcial2do"]."</td>
                                            <td>".$semestre19["calParcial3ro"]."</td>
                                            <td>".$semestre19["calFinal"]."</td>
                                            <td></td>
                                            <td></td>
                                            <td>".$semestre19["calExtra1"]."</td>
                                            <td>".$semestre19["fechaCalExtra1"]."</td>
                                            <td>".$semestre19["calExtra2"]."</td>
                                            <td>".$semestre19["fechaCalExtra2"]."</td>
                                            <td>".$semestre19["calExtra3"]."</td>
                                            <td>".$semestre19["fechaCalExtra3"]."</td>
                                            <td>".$semestre19["calExtra4"]."</td>
                                            <td>".$semestre19["fechaCalExtra4"]."</td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$semestre1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$semestre1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr>
                                            ";}                                      
                                          ?>                                                                             
                                </tbody>
						    </table>
                            <table class="table table-hover text-center">
                                <tr>
                                    <th  class="text-center" bgcolor="yellow">Ciclo Escolar: 2021-2022</th>
                                    <th  class="text-center" bgcolor="yellow">Segundo Semestre</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio Semestral: 9.0</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio General: 9.0</th>
                                </tr>
                            </table>
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Asignaturas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Faltas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Parciales</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Extraordinarias</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Actualizar</th>
										<th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matematicas II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Quimica II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Introducción a las Ciencias Sociales</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Taller de Lectura y Redacción II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ingles II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td> 
                                    </tr>
                                    <tr>
                                        <td>Informatica II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Etica II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td> 
                                    </tr>
                                    <tr>
                                        <td>Actividades Fisicas y Recreativas II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Actividades Artisticas y Culturales II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Salud Integral del Adolecente II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                </tbody>
						    </table>
                            <table class="table table-hover text-center">
                                <tr>
                                    <th  class="text-center" bgcolor="yellow">Ciclo Escolar: 2021-2022</th>
                                    <th  class="text-center" bgcolor="yellow">Tercer Semestre</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio Semestral: 9.0</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio General: 9.0</th>
                                </tr>
                            </table>
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Asignaturas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Faltas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Parciales</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Extraordinarias</th>
                                      
                                    </tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Actualizar</th>
										<th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matematicas III</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Biologia I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Fisica I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia de México I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ingles III</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lectura I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Gestión de Archivos de Texto</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Hoja de Calculo Aplicada</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Actividades Fisicas, Deportivas y Recreativas III</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Salud Integral del Adolecente III</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Habilidades de Razonamiento</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                </tbody>
						    </table>
                            <table class="table table-hover text-center">
                                <tr>
                                    <th  class="text-center" bgcolor="yellow">Ciclo Escolar: 2021-2022</th>
                                    <th  class="text-center" bgcolor="yellow">Cuarto Semestre</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio Semestral: 9.0</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio General: 9.0</th>
                                </tr>
                            </table>
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Asignaturas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Faltas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Parciales</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Extraordinarias</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Actualizar</th>
										<th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matematicas IV</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Biologia II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Fisica II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Historia de México II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Ingles IV</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Lectura II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Comunidades Virtules</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Mantenimiento y Redes de Computo</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Actividades Fisicas, Deportivas y Recreativas IV</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Salud Integral del Adolecente IV</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                </tbody>
						    </table>
                            <table class="table table-hover text-center">
                                <tr>
                                    <th  class="text-center" bgcolor="yellow">Ciclo Escolar: 2021-2022</th>
                                    <th  class="text-center" bgcolor="yellow">Quinto Semestre</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio Semestral: 9.0</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio General: 9.0</th>
                                </tr>
                            </table>
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Asignaturas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Faltas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Parciales</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Extraordinarias</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Actualizar</th>
										<th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matematicas V</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Geografía</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Estructura Socioeconómica de México</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Economía I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Psicología I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Derecho I</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Inglés V</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Introducción a la Filosofía</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Sistemas de Información</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td> 
                                    </tr>
                                    <tr>
                                        <td>Programación</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Actividades Artistico Culturales III</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Salud Integral del Adolecente V</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                </tbody>
						    </table>
                            <table class="table table-hover text-center">
                                <tr>
                                    <th  class="text-center" bgcolor="yellow">Ciclo Escolar: 2021-2022</th>
                                    <th  class="text-center" bgcolor="yellow">Sexto Semestre</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio Semestral: 9.0</th>
                                    <th  class="text-center" bgcolor="yellow">Promedio General: 9.0</th>
                                </tr>
                            </table>
                            <table class="table table-hover text-center">
                                <thead>
                                    <tr>
                                        <th class="text-center">Asignaturas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Faltas</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Parciales</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificaciones Extraordinarias</th>
                                    </tr>
                                    <tr>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Total</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">1ero</th>
                                        <th class="text-center">2do</th>
                                        <th class="text-center">3ro</th>
                                        <th class="text-center">Final</th>
                                        <th class="text-center"></th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center">Calificación</th>
                                        <th class="text-center">Fecha</th>
                                        <th class="text-center"></th>
                                        <th class="text-center">Actualizar</th>
										<th class="text-center">Eliminar</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Matematicas VI</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Ecología y Medio Ambiente</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>

                                    </tr>
                                    <tr>
                                        <td>Historia Universal Contemporánea</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Economía II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Psicología II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Derecho II</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Inglés VI</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Filosofía</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Diseño Digital</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Actividades Artistico Culturales IV</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                    <tr>
                                        <td>Salud Integral del Adolecente VI</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td></td>
                                        <td></td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td>
                                        <td>0</td> 
                                        <td></td>
                                        <td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
										<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
                                    </tr>
                                </tbody>
						    </table>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>