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
							<a href="DatosAlumno.php"><i class="zmdi zmdi-assignment zmdi-hc-fw"></i>Registro Alumno</a>
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
							<a href="calificacionSegundoSemestre.php"><i class="zmdi zmdi-n-2-square zmdi-hc-fw"></i>Segundo Semestre</a>
						</li>
						<li>
							<a href="calificacionTercerSemestre.php"><i class="zmdi zmdi-n-3-square zmdi-hc-fw"></i>Tercer Semestre</a>
						</li>
						<li>
							<a href="calificacionCuartoSemestre.php"><i class="zmdi zmdi-n-4-square zmdi-hc-fw"></i>Cuarto Semestre</a>
						</li>
						<li>
							<a href="calificacionQuintoSemestre.php"><i class="zmdi zmdi-n-5-square zmdi-hc-fw"></i>Quinto Semestre</a>
						</li>
                        <li>
							<a href="calificacionSextoSemestre.php"><i class="zmdi zmdi-n-6-square zmdi-hc-fw"></i>Sexto Semestre</a>
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
                                        $sentencia1 = "SELECT
                                            datosalumno_semestre1.idMateria1, 
                                            datosalumno_semestre1.matricula, 
                                            datosalumno_semestre1.falta1ro, 
                                            datosalumno_semestre1.falta2do, 
                                            datosalumno_semestre1.falta3ero, 
                                            datosalumno_semestre1.calParcial1ro, 
                                            datosalumno_semestre1.calParcial2do, 
                                            datosalumno_semestre1.calParcial3ero, 
                                            datosalumno_semestre1.calFinal, 
                                            datosalumno_semestre1.calExtra1, 
                                            datosalumno_semestre1.fechaCalExtra1, 
                                            datosalumno_semestre1.calExtra2, 
                                            datosalumno_semestre1.fechaCalExtra2, 
                                            datosalumno_semestre1.calExtra3, 
                                            datosalumno_semestre1.fechaCalExtra3, 
                                            datosalumno_semestre1.calExtra4, 
                                            datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                            datosalumno_semestre1
                                            INNER JOIN
                                            semestre1
                                            ON 
                                                datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                            datosalumno_semestre1.idMateria1 = 1
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia2 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 2
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia3 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 3
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia4 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 4
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";
                                        
                                        $sentencia5 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 5
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";
                                        
                                        $sentencia6 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 6
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia7 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 7
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia8 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 8
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia9 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 9
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                        $sentencia10 = "SELECT
                                        datosalumno_semestre1.idMateria1, 
                                        datosalumno_semestre1.matricula, 
                                        datosalumno_semestre1.falta1ro, 
                                        datosalumno_semestre1.falta2do, 
                                        datosalumno_semestre1.falta3ero, 
                                        datosalumno_semestre1.calParcial1ro, 
                                        datosalumno_semestre1.calParcial2do, 
                                        datosalumno_semestre1.calParcial3ero, 
                                        datosalumno_semestre1.calFinal, 
                                        datosalumno_semestre1.calExtra1, 
                                        datosalumno_semestre1.fechaCalExtra1, 
                                        datosalumno_semestre1.calExtra2, 
                                        datosalumno_semestre1.fechaCalExtra2, 
                                        datosalumno_semestre1.calExtra3, 
                                        datosalumno_semestre1.fechaCalExtra3, 
                                        datosalumno_semestre1.calExtra4, 
                                        datosalumno_semestre1.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre1
                                        INNER JOIN
                                        semestre1
                                        ON 
                                            datosalumno_semestre1.idMateria1 = semestre1.idMateria1
                                        WHERE
                                        datosalumno_semestre1.idMateria1 = 10
                                            AND
                                            datosalumno_semestre1.matricula ='20182308432' ";

                                            


                                        $resultado1 = mysqli_query($conexion, $sentencia1);
                                        $resultado2 = mysqli_query($conexion, $sentencia2);
                                        $resultado3 = mysqli_query($conexion, $sentencia3);
                                        $resultado4 = mysqli_query($conexion, $sentencia4);
                                        $resultado5 = mysqli_query($conexion, $sentencia5);
                                        $resultado6 = mysqli_query($conexion, $sentencia6);
                                        $resultado7 = mysqli_query($conexion, $sentencia7);
                                        $resultado8 = mysqli_query($conexion, $sentencia8);
                                        $resultado9 = mysqli_query($conexion, $sentencia9);
                                        $resultado10 = mysqli_query($conexion, $sentencia10);


                                        while($registro1 = mysqli_fetch_assoc($resultado1)){
                                            echo "
                                            <tr>
                                            <td>Matematicas I</td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateI_1' value =".$registro1["falta1ro"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateI_2' value =".$registro1["falta2do"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateI_3' value =".$registro1["falta3ero"]."></td>
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateI_1' value =".$registro1["calParcial1ro"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateI_2' value =".$registro1["calParcial2do"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateI_3' value =".$registro1["calParcial3ero"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro1["calFinal"]."></td>
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateI_1' value =".$registro1["calExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateI_1' value =".$registro1["fechaCalExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateI_2' value =".$registro1["calExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateI_2' value =".$registro1["fechaCalExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateI_3' value =".$registro1["calExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateI_3' value =".$registro1["fechaCalExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateI_4' value =".$registro1["calExtra4"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateI_4' value =".$registro1["fechaCalExtra4"]."></td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro1["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro1["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr> ";
                                            if($registro2 = mysqli_fetch_assoc($resultado2)){
                                                echo "
                                                <tr>
                                                <td>Quimica I</td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaQuimicaI_1' value =".$registro2["falta1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaQuimicaI_2' value =".$registro2["falta2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaQuimicaI_3' value =".$registro2["falta3ero"]."></td>

                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalQuimicaI_1' value =".$registro2["calParcial1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalQuimicaI_2' value =".$registro2["calParcial2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalQuimicaI_3' value =".$registro2["calParcial3ero"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro2["calFinal"]."></td>
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaI_1' value =".$registro2["calExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaI_1' value =".$registro2["fechaCalExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaI_2' value =".$registro2["calExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaI_2' value =".$registro2["fechaCalExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaI_3' value =".$registro2["calExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaI_3' value =".$registro2["fechaCalExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaI_4' value =".$registro2["calExtra4"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaI_4' value =".$registro2["fechaCalExtra4"]."></td>
                                                <td></td>
                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro2["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro2["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                </tr> ";
                                                }

                                                if($registro3 = mysqli_fetch_assoc($resultado3)){
                                                    echo "
                                                    <tr>
                                                    <td>Metodologia de la investigación I</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMetodologiaI_1' value =".$registro3["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMetodologiaI_2' value =".$registro3["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMetodologiaI_3' value =".$registro3["falta3ero"]."></td>

                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMetodologiaI_1' value =".$registro3["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMetodologiaI_2' value =".$registro3["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMetodologiaI_3' value =".$registro3["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro3["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMetodologiaI_1' value =".$registro3["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMetodologiaI_1' value =".$registro3["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMetodologiaI_2' value =".$registro3["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMetodologiaI_2' value =".$registro3["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMetodologiaI_3' value =".$registro3["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMetodologiaI_3' value =".$registro3["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMetodologiaI_4' value =".$registro3["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMetodologiaI_4' value =".$registro3["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro3["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro3["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>";
                                                    }
                                                
                                                if($registro4 = mysqli_fetch_assoc($resultado4)){
                                                    echo "
                                                    <tr>
                                                    <td>Taller de lectura y redacción I</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaTallerI_1' value =".$registro4["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaTallerI_2' value =".$registro4["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaTallerI_3' value =".$registro4["falta3ero"]."></td>

                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalTallerI_1' value =".$registro4["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalTallerI_2' value =".$registro4["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalTallerI_3' value =".$registro4["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro4["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerI_1' value =".$registro4["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerI_1' value =".$registro4["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerI_2' value =".$registro4["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerI_2' value =".$registro4["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerI_3' value =".$registro4["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerI_3' value =".$registro4["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerI_4' value =".$registro4["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerI_4' value =".$registro4["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro4["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro4["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>
                                                    ";
                                                    }
                                                    if($registro5 = mysqli_fetch_assoc($resultado5)){
                                                        echo "
                                                        <tr>
                                                        <td>Ingles I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesI_1' value =".$registro5["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesI_2' value =".$registro5["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesI_3' value =".$registro5["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesI_1' value =".$registro5["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesI_2' value =".$registro5["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesI_3' value =".$registro5["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro5["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesI_1' value =".$registro5["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesI_1' value =".$registro5["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesI_2' value =".$registro5["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesI_2' value =".$registro5["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesI_3' value =".$registro5["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesI_3' value =".$registro5["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesI_4' value =".$registro5["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesI_4' value =".$registro5["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro5["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro5["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro6 = mysqli_fetch_assoc($resultado6)){
                                                        echo "
                                                        <tr>
                                                        <td>Informatica I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInfoI_1' value =".$registro6["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInfoI_2' value =".$registro6["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInfoI_3' value =".$registro6["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoI_1' value =".$registro6["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoI_2' value =".$registro6["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoI_3' value =".$registro6["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro6["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInfoI_1' value =".$registro6["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInfoI_1' value =".$registro6["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInfoI_2' value =".$registro6["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInfoI_2' value =".$registro6["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInfoI_3' value =".$registro6["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInfoI_3' value =".$registro6["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInfoI_4' value =".$registro6["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInfoI_4' value =".$registro6["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro6["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro6["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro7 = mysqli_fetch_assoc($resultado7)){
                                                        echo "
                                                        <tr>
                                                        <td>Etica I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEticaI_1' value =".$registro7["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEticaI_2' value =".$registro7["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEticaI_3' value =".$registro7["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEticaI_1' value =".$registro7["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEticaI_2' value =".$registro7["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEticaI_3' value =".$registro7["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro7["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaI_1' value =".$registro7["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaI_1' value =".$registro7["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaI_2' value =".$registro7["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaI_2' value =".$registro7["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaI_3' value =".$registro7["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaI_3' value =".$registro7["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaI_4' value =".$registro7["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaI_4' value =".$registro7["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro7["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro7["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                            ";
                                                    }
                                                    if($registro8 = mysqli_fetch_assoc($resultado8)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Fisicas, Deportivas y Recreativas I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRI_1' value =".$registro8["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRI_2' value =".$registro8["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRI_3' value =".$registro8["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRI_1' value =".$registro8["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRI_2' value =".$registro8["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRI_3' value =".$registro8["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro8["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRI_1' value =".$registro8["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRI_1' value =".$registro8["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRI_2' value =".$registro8["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRI_2' value =".$registro8["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRI_3' value =".$registro8["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRI_3' value =".$registro8["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRI_4' value =".$registro8["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRI_4' value =".$registro8["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro8["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro8["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro9 = mysqli_fetch_assoc($resultado9)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Artisticas y Culturales I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACI_1' value =".$registro9["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACI_2' value =".$registro9["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACI_3' value =".$registro9["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACI_1' value =".$registro9["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACI_2' value =".$registro9["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACI_3' value =".$registro9["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro9["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACI_1' value =".$registro9["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACI_1' value =".$registro9["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACI_2' value =".$registro9["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACI_2' value =".$registro9["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACI_3' value =".$registro9["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACI_3' value =".$registro9["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACI_4' value =".$registro9["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACI_4' value =".$registro9["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro9["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro9["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro10 = mysqli_fetch_assoc($resultado10)){
                                                        echo "
                                                        <tr>
                                                        <td>Salud Integral del Adolecente I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludI_1' value =".$registro10["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludI_2' value =".$registro10["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludI_3' value =".$registro10["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludI_1' value =".$registro10["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludI_2' value =".$registro10["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludI_3' value =".$registro10["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro10["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaudI_1' value =".$registro10["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludI_1' value =".$registro10["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludI_2' value =".$registro10["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludI_2' value =".$registro10["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludI_3' value =".$registro10["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludI_3' value =".$registro10["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludI_4' value =".$registro10["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludI_4' value =".$registro10["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro10["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro10["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                   
                                            }
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
                                <?php
                                       include("funciones/conexion.php");
                                       $sentencia21 = "SELECT
                                       datosalumno_semestre2.idMateria2, 
                                       datosalumno_semestre2.matricula, 
                                       datosalumno_semestre2.falta1ro, 
                                       datosalumno_semestre2.falta2do, 
                                       datosalumno_semestre2.falta3ero, 
                                       datosalumno_semestre2.calParcial1ro, 
                                       datosalumno_semestre2.calParcial2do, 
                                       datosalumno_semestre2.calParcial3ero, 
                                       datosalumno_semestre2.calFinal, 
                                       datosalumno_semestre2.calExtra1, 
                                       datosalumno_semestre2.fechaCalExtra1, 
                                       datosalumno_semestre2.calExtra2, 
                                       datosalumno_semestre2.fechaCalExtra2, 
                                       datosalumno_semestre2.calExtra3, 
                                       datosalumno_semestre2.fechaCalExtra3, 
                                       datosalumno_semestre2.calExtra4, 
                                       datosalumno_semestre2.fechaCalExtra4
                                       FROM
                                       datosalumno_semestre2
                                       INNER JOIN
                                       semestre2
                                       ON 
                                           datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                       WHERE
                                       datosalumno_semestre2.idMateria2 = 1
                                           AND
                                           datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia22 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 2
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia23 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 3
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia24 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 4
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";
                                                                                    
                                        $sentencia25 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 5
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia26 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 6
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia27 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 7
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";
                                                                
                                        $sentencia28 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 8
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia29 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 9
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";

                                        $sentencia210 = "SELECT
                                        datosalumno_semestre2.idMateria2, 
                                        datosalumno_semestre2.matricula, 
                                        datosalumno_semestre2.falta1ro, 
                                        datosalumno_semestre2.falta2do, 
                                        datosalumno_semestre2.falta3ero, 
                                        datosalumno_semestre2.calParcial1ro, 
                                        datosalumno_semestre2.calParcial2do, 
                                        datosalumno_semestre2.calParcial3ero, 
                                        datosalumno_semestre2.calFinal, 
                                        datosalumno_semestre2.calExtra1, 
                                        datosalumno_semestre2.fechaCalExtra1, 
                                        datosalumno_semestre2.calExtra2, 
                                        datosalumno_semestre2.fechaCalExtra2, 
                                        datosalumno_semestre2.calExtra3, 
                                        datosalumno_semestre2.fechaCalExtra3, 
                                        datosalumno_semestre2.calExtra4, 
                                        datosalumno_semestre2.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre2
                                        INNER JOIN
                                        semestre2
                                        ON 
                                            datosalumno_semestre2.idMateria2 = semestre2.idMateria2
                                        WHERE
                                        datosalumno_semestre2.idMateria2 = 10
                                            AND
                                            datosalumno_semestre2.matricula ='20182308432' ";


                                        $resultado21 = mysqli_query($conexion, $sentencia21);
                                        $resultado22 = mysqli_query($conexion, $sentencia22);
                                        $resultado23 = mysqli_query($conexion, $sentencia23);
                                        $resultado24 = mysqli_query($conexion, $sentencia24);
                                        $resultado25 = mysqli_query($conexion, $sentencia25);
                                        $resultado26 = mysqli_query($conexion, $sentencia26);
                                        $resultado27 = mysqli_query($conexion, $sentencia27);
                                        $resultado28 = mysqli_query($conexion, $sentencia28);
                                        $resultado29 = mysqli_query($conexion, $sentencia29);
                                        $resultado210 = mysqli_query($conexion, $sentencia210);


                                        while($registro21 = mysqli_fetch_assoc($resultado21)){
                                            echo "
                                            <tr>
                                            <td>Matematicas II</td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateII_1' value =".$registro21["falta1ro"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateII_2' value =".$registro21["falta2do"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateII_3' value =".$registro21["falta3ero"]."></td>
                                            
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateII_1' value =".$registro21["calParcial1ro"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateII_2' value =".$registro21["calParcial2do"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateII_3' value =".$registro21["calParcial3ero"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro21["calFinal"]."></td>
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateII_1' value =".$registro21["calExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateII_1' value =".$registro21["fechaCalExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateII_2' value =".$registro21["calExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateII_2' value =".$registro21["fechaCalExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateII_3' value =".$registro21["calExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateII_3' value =".$registro21["fechaCalExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateII_4' value =".$registro21["calExtra4"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateII_4' value =".$registro21["fechaCalExtra4"]."></td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro21["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro21["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr> ";
                                            if($registro22 = mysqli_fetch_assoc($resultado22)){
                                                echo "
                                                <tr>
                                                <td>Quimica II</td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaQuimicaII_1' value =".$registro22["falta1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaQuimicaII_2' value =".$registro22["falta2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaQuimicaII_3' value =".$registro22["falta3ero"]."></td>
                                                
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalQuimicaII_1' value =".$registro22["calParcial1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalQuimicaII_2' value =".$registro22["calParcial2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalQuimicaII_3' value =".$registro22["calParcial3ero"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro22["calFinal"]."></td>
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaII_1' value =".$registro22["calExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaII_1' value =".$registro22["fechaCalExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaII_2' value =".$registro22["calExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaII_2' value =".$registro22["fechaCalExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaII_3' value =".$registro22["calExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaII_3' value =".$registro22["fechaCalExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraQuimicaII_4' value =".$registro22["calExtra4"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraQuimicaII_4' value =".$registro22["fechaCalExtra4"]."></td>
                                                <td></td>
                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro22["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro22["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                </tr> ";
                                                }

                                                if($registro23 = mysqli_fetch_assoc($resultado23)){
                                                    echo "
                                                    <tr>
                                                    <td>Introducción a las Ciencias Sociales</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaICS_1' value =".$registro23["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaICS_2' value =".$registro23["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaICS_3' value =".$registro23["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalICS_1' value =".$registro23["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalICS_2' value =".$registro23["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalICS_3' value =".$registro23["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro23["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraICS_1' value =".$registro23["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraICS_1' value =".$registro23["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraICS_2' value =".$registro23["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraICS_2' value =".$registro23["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraICS_3' value =".$registro23["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraICS_3' value =".$registro23["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraICS_4' value =".$registro23["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraICS_4' value =".$registro23["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro23["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro23["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>";
                                                    }
                                                
                                                if($registro24 = mysqli_fetch_assoc($resultado24)){
                                                    echo "
                                                    <tr>
                                                    <td>aller de Lectura y Redacción II</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaTallerII_1' value =".$registro24["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaTallerII_2' value =".$registro24["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaTallerII_3' value =".$registro24["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalTallerII_1' value =".$registro24["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalTallerII_2' value =".$registro24["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalTallerII_3' value =".$registro24["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro24["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerII_1' value =".$registro24["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerII_1' value =".$registro24["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerII_2' value =".$registro24["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerII_2' value =".$registro24["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerII_3' value =".$registro24["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerII_3' value =".$registro24["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraTallerII_4' value =".$registro24["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraTallerII_4' value =".$registro24["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro24["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro24["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>
                                                    ";
                                                    }
                                                    if($registro25 = mysqli_fetch_assoc($resultado25)){
                                                        echo "
                                                        <tr>
                                                        <td>Ingles II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesII_1' value =".$registro25["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesII_2' value =".$registro25["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesII_3' value =".$registro25["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesII_1' value =".$registro25["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesII_2' value =".$registro25["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesII_3' value =".$registro25["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro25["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesII_1' value =".$registro25["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesII_1' value =".$registro25["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesII_2' value =".$registro25["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesII_2' value =".$registro25["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesII_3' value =".$registro25["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesII_3' value =".$registro25["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesII_4' value =".$registro25["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesII_4' value =".$registro25["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro25["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro25["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro26 = mysqli_fetch_assoc($resultado26)){
                                                        echo "
                                                        <tr>
                                                        <td>Informatica II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInfoII_1' value =".$registro26["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInfoII_2' value =".$registro26["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInfoII_3' value =".$registro26["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_1' value =".$registro26["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_2' value =".$registro26["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_3' value =".$registro26["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro26["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_1' value =".$registro26["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalInfoII_1' value =".$registro26["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_2' value =".$registro26["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalInfoII_2' value =".$registro26["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_3' value =".$registro26["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalInfoII_3' value =".$registro26["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInfoII_4' value =".$registro26["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalInfoII_4' value =".$registro26["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro26["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro26["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro27 = mysqli_fetch_assoc($resultado27)){
                                                        echo "
                                                        <tr>
                                                        <td>Etica II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEticaII_1' value =".$registro27["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEticaII_2' value =".$registro27["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEticaII_3' value =".$registro27["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEticaII_1' value =".$registro27["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEticaII_2' value =".$registro27["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEticaII_3' value =".$registro27["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro27["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaII_1' value =".$registro27["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaII_1' value =".$registro27["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaII_2' value =".$registro27["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaII_2' value =".$registro27["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaII_3' value =".$registro27["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaII_3' value =".$registro27["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEticaII_4' value =".$registro27["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEticaII_4' value =".$registro27["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro27["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro27["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                            ";
                                                    }
                                                    if($registro28 = mysqli_fetch_assoc($resultado28)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Fisicas y Recreativas II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRII_1' value =".$registro28["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRII_2' value =".$registro28["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRII_3' value =".$registro28["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRII_1' value =".$registro28["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRII_2' value =".$registro28["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRII_3' value =".$registro28["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro28["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRII_1' value =".$registro28["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRII_1' value =".$registro28["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRII_2' value =".$registro28["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRII_2' value =".$registro28["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRII_3' value =".$registro28["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRII_3' value =".$registro28["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRII_4' value =".$registro28["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRII_4' value =".$registro28["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro28["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro28["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro29 = mysqli_fetch_assoc($resultado29)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Artisticas y Culturales II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACII_1' value =".$registro29["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACII_2' value =".$registro29["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACII_3' value =".$registro29["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACII_1' value =".$registro29["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACII_2' value =".$registro29["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACII_3' value =".$registro29["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro29["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACII_1' value =".$registro29["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACII_1' value =".$registro29["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACII_2' value =".$registro29["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACII_2' value =".$registro29["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACII_3 value =".$registro29["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACII_3' value =".$registro29["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACII_4' value =".$registro29["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACII_4' value =".$registro29["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro29["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro29["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro210 = mysqli_fetch_assoc($resultado210)){
                                                        echo "
                                                        <tr>
                                                        <td>Salud Integral del Adolescente II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludII_1' value =".$registro210["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludII_2' value =".$registro210["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludII_3' value =".$registro210["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludII_1' value =".$registro210["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludII_2' value =".$registro210["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludII_3' value =".$registro210["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro210["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludII_1' value =".$registro210["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludII_1' value =".$registro210["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludII_2' value =".$registro210["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludII_2' value =".$registro210["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludII_3' value =".$registro210["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludII_3' value =".$registro210["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludII_4' value =".$registro210["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludII_4' value =".$registro210["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro210["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro210["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                   
                                            }
                                    ?>      
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
                                <?php
                                       include("funciones/conexion.php");
                                       $sentencia31 = "SELECT
                                       datosalumno_semestre3.idMateria3, 
                                       datosalumno_semestre3.matricula, 
                                       datosalumno_semestre3.falta1ro, 
                                       datosalumno_semestre3.falta2do, 
                                       datosalumno_semestre3.falta3ero, 
                                       datosalumno_semestre3.calParcial1ro, 
                                       datosalumno_semestre3.calParcial2do, 
                                       datosalumno_semestre3.calParcial3ero, 
                                       datosalumno_semestre3.calFinal, 
                                       datosalumno_semestre3.calExtra1, 
                                       datosalumno_semestre3.fechaCalExtra1, 
                                       datosalumno_semestre3.calExtra2, 
                                       datosalumno_semestre3.fechaCalExtra2, 
                                       datosalumno_semestre3.calExtra3, 
                                       datosalumno_semestre3.fechaCalExtra3, 
                                       datosalumno_semestre3.calExtra4, 
                                       datosalumno_semestre3.fechaCalExtra4
                                       FROM
                                       datosalumno_semestre3
                                       INNER JOIN
                                       semestre3
                                       ON 
                                           datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                       WHERE
                                       datosalumno_semestre3.idMateria3 = 1
                                           AND
                                           datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia32 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 2
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia33 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 3
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia34 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 4
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia35 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 5
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia36 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 6
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia37 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 7
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia38 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 8
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia39 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 9
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia310 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 10
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";

                                        $sentencia311 = "SELECT
                                        datosalumno_semestre3.idMateria3, 
                                        datosalumno_semestre3.matricula, 
                                        datosalumno_semestre3.falta1ro, 
                                        datosalumno_semestre3.falta2do, 
                                        datosalumno_semestre3.falta3ero, 
                                        datosalumno_semestre3.calParcial1ro, 
                                        datosalumno_semestre3.calParcial2do, 
                                        datosalumno_semestre3.calParcial3ero, 
                                        datosalumno_semestre3.calFinal, 
                                        datosalumno_semestre3.calExtra1, 
                                        datosalumno_semestre3.fechaCalExtra1, 
                                        datosalumno_semestre3.calExtra2, 
                                        datosalumno_semestre3.fechaCalExtra2, 
                                        datosalumno_semestre3.calExtra3, 
                                        datosalumno_semestre3.fechaCalExtra3, 
                                        datosalumno_semestre3.calExtra4, 
                                        datosalumno_semestre3.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre3
                                        INNER JOIN
                                        semestre3
                                        ON 
                                            datosalumno_semestre3.idMateria3 = semestre3.idMateria3
                                        WHERE
                                        datosalumno_semestre3.idMateria3 = 11
                                            AND
                                            datosalumno_semestre3.matricula ='20182308432' ";


                                        $resultado31 = mysqli_query($conexion, $sentencia31);
                                        $resultado32 = mysqli_query($conexion, $sentencia32);
                                        $resultado33 = mysqli_query($conexion, $sentencia33);
                                        $resultado34 = mysqli_query($conexion, $sentencia34);
                                        $resultado35 = mysqli_query($conexion, $sentencia35);
                                        $resultado36 = mysqli_query($conexion, $sentencia36);
                                        $resultado37 = mysqli_query($conexion, $sentencia37);
                                        $resultado38 = mysqli_query($conexion, $sentencia38);
                                        $resultado39 = mysqli_query($conexion, $sentencia39);
                                        $resultado310 = mysqli_query($conexion, $sentencia310);
                                        $resultado311 = mysqli_query($conexion, $sentencia311);


                                        while($registro31 = mysqli_fetch_assoc($resultado31)){
                                            echo "
                                            <tr>
                                            <td>Matematicas III</td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateIII_1' value =".$registro31["falta1ro"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateIII_2' value =".$registro31["falta2do"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateIII_3' value =".$registro31["falta3ero"]."></td>
                                            
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateIII_1' value =".$registro31["calParcial1ro"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateIII_2' value =".$registro31["calParcial2do"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateIII_3' value =".$registro31["calParcial3ero"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro31["calFinal"]."></td>
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIII_1' value =".$registro31["calExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIII_1' value =".$registro31["fechaCalExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIII_2' value =".$registro31["calExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIII_2' value =".$registro31["fechaCalExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIII_3' value =".$registro31["calExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIII_3' value =".$registro31["fechaCalExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIII_4' value =".$registro31["calExtra4"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIII_4' value =".$registro31["fechaCalExtra4"]."></td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro31["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro31["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr> ";
                                            if($registro32 = mysqli_fetch_assoc($resultado32)){
                                                echo "
                                                <tr>
                                                <td>Biologia I</td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaBiologiaI_1' value =".$registro32["falta1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaBiologiaI_2' value =".$registro32["falta2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaBiologiaI_3' value =".$registro32["falta3ero"]."></td>
                                                
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalBiologiaI_1' value =".$registro32["calParcial1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalBiologiaI_2' value =".$registro32["calParcial2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalBiologiaI_3' value =".$registro32["calParcial3ero"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro32["calFinal"]."></td>
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaI_1' value =".$registro32["calExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaI_1' value =".$registro32["fechaCalExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaI_2' value =".$registro32["calExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaI_2' value =".$registro32["fechaCalExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaI_3' value =".$registro32["calExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaI_3' value =".$registro32["fechaCalExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaI_4' value =".$registro32["calExtra4"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaI_4' value =".$registro32["fechaCalExtra4"]."></td>
                                                <td></td>
                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro32["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro32["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                </tr> ";
                                                }

                                                if($registro33 = mysqli_fetch_assoc($resultado33)){
                                                    echo "
                                                    <tr>
                                                    <td>Fisica I</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFisicaI_1' value =".$registro33["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFisicaI_2' value =".$registro33["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFisicaI_3' value =".$registro33["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFisicaI_1' value =".$registro33["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFisicaI_2' value =".$registro33["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFisicaI_3' value =".$registro33["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro33["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaI_1' value =".$registro33["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaI_1' value =".$registro33["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaI_2' value =".$registro33["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaI_2' value =".$registro33["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaI_3' value =".$registro33["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaI_3' value =".$registro33["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaI_4' value =".$registro33["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaI_4' value =".$registro33["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro33["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro33["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>";
                                                    }
                                                
                                                if($registro34 = mysqli_fetch_assoc($resultado34)){
                                                    echo "
                                                    <tr>
                                                    <td>Historia de México I</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHMI_1' value =".$registro34["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHMI_2' value =".$registro34["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHMI_3' value =".$registro34["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHMI_1' value =".$registro34["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHMI_2' value =".$registro34["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHMI_3' value =".$registro34["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro34["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMI_1' value =".$registro34["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMI_1' value =".$registro34["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMI_2' value =".$registro34["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMI_2' value =".$registro34["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMI_3' value =".$registro34["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMI_3' value =".$registro34["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMI_4' value =".$registro34["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMI_4' value =".$registro34["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro34["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro34["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>
                                                    ";
                                                    }
                                                    if($registro35 = mysqli_fetch_assoc($resultado35)){
                                                        echo "
                                                        <tr>
                                                        <td>Ingles III</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesIII_1' value =".$registro35["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesIII_2' value =".$registro35["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesIII_3' value =".$registro35["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesIII_1' value =".$registro35["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesIII_2' value =".$registro35["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesIII_2' value =".$registro35["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro35["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIII_1' value =".$registro35["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIII_1' value =".$registro35["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIII_2' value =".$registro35["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIII_2' value =".$registro35["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIII_3' value =".$registro35["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIII_3' value =".$registro35["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIII_4' value =".$registro35["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIII_4' value =".$registro35["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro35["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro35["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro36 = mysqli_fetch_assoc($resultado36)){
                                                        echo "
                                                        <tr>
                                                        <td>Literatura I</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaLiteraturaI_1' value =".$registro36["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaLiteraturaI_2' value =".$registro36["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaLiteraturaI_3' value =".$registro36["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalLiteraturaI_1' value =".$registro36["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalLiteraturaI_2' value =".$registro36["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalLiteraturaI_3' value =".$registro36["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro36["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaI_1' value =".$registro36["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaI_1' value =".$registro36["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaI_2' value =".$registro36["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaI_2' value =".$registro36["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaI_3' value =".$registro36["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaI_3' value =".$registro36["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaI_4' value =".$registro36["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaI_4' value =".$registro36["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro36["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro36["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro37 = mysqli_fetch_assoc($resultado37)){
                                                        echo "
                                                        <tr>
                                                        <td>Gestión de Archivos de Texto</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaGAT_1' value =".$registro37["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaGAT_2' value =".$registro37["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaGAT_3' value =".$registro37["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalGAT_1' value =".$registro37["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalGAT_2' value =".$registro37["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalGAT_3' value =".$registro37["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro37["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGAT_1' value =".$registro37["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGAT_1' value =".$registro37["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGAT_2' value =".$registro37["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGAT_2' value =".$registro37["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGAT_3' value =".$registro37["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGAT_3' value =".$registro37["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGAT_4' value =".$registro37["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGAT_4' value =".$registro37["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro37["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro37["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                            ";
                                                    }
                                                    if($registro38 = mysqli_fetch_assoc($resultado38)){
                                                        echo "
                                                        <tr>
                                                        <td>Hoja de Calculo Aplicada</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHCA_1' value =".$registro38["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHCA_2' value =".$registro38["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHCA_3' value =".$registro38["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHCA_1' value =".$registro38["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHCA_2' value =".$registro38["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHCA_3' value =".$registro38["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro38["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHCA_1' value =".$registro38["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHCA_1' value =".$registro38["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHCA_2' value =".$registro38["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHCA_2' value =".$registro38["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHCA_3' value =".$registro38["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHCA_3' value =".$registro38["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHCA_4' value =".$registro38["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHCA_4' value =".$registro38["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro38["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro38["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro39 = mysqli_fetch_assoc($resultado39)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Fisicas, Deportivas y Recreativas III</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIII_1' value =".$registro39["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIII_2' value =".$registro39["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIII_3' value =".$registro39["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIII_1' value =".$registro39["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIII_2' value =".$registro39["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIII_3' value =".$registro39["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro39["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_1' value =".$registro39["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_1' value =".$registro39["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_2' value =".$registro39["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_2' value =".$registro39["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_3' value =".$registro39["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_3' value =".$registro39["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_4' value =".$registro39["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_4' value =".$registro39["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro39["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro39["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro310 = mysqli_fetch_assoc($resultado310)){
                                                        echo "
                                                        <tr>
                                                        <td>Salud Integral del Adolecente III</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludIII_1' value =".$registro310["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludIII_2' value =".$registro310["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSaludIII_3' value =".$registro310["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludIII_1' value =".$registro310["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludIII_2' value =".$registro310["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSaludIII_3' value =".$registro310["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro310["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludIII_1' value =".$registro310["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludIII_1' value =".$registro310["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludIII_2' value =".$registro310["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludIII_2' value =".$registro310["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludIII_3' value =".$registro310["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludIII_3' value =".$registro310["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSaludIII_4' value =".$registro310["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSaludIII_4' value =".$registro310["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro310["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro310["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro311 = mysqli_fetch_assoc($resultado311)){
                                                        echo "
                                                        <tr>
                                                        <td>Habilidades de Razonamiento</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHR_1' value =".$registro311["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHR_2' value =".$registro311["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHR_3' value =".$registro311["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHR_1' value =".$registro311["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHR_2' value =".$registro311["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHR_3' value =".$registro311["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro311["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHR_1' value =".$registro311["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHR_1' value =".$registro311["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHR_2' value =".$registro311["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHR_2' value =".$registro311["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHR_3' value =".$registro311["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHR_3' value =".$registro311["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHR_4' value =".$registro311["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHR_4' value =".$registro31["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro311["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro311["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                
                                            }
                                        ?>    
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
                                <?php
                                       include("funciones/conexion.php");
                                       $sentencia41 = "SELECT
                                       datosalumno_semestre4.idMateria4, 
                                       datosalumno_semestre4.matricula, 
                                       datosalumno_semestre4.falta1ro, 
                                       datosalumno_semestre4.falta2do, 
                                       datosalumno_semestre4.falta3ero, 
                                       datosalumno_semestre4.calParcial1ro, 
                                       datosalumno_semestre4.calParcial2do, 
                                       datosalumno_semestre4.calParcial3ero, 
                                       datosalumno_semestre4.calFinal, 
                                       datosalumno_semestre4.calExtra1, 
                                       datosalumno_semestre4.fechaCalExtra1, 
                                       datosalumno_semestre4.calExtra2, 
                                       datosalumno_semestre4.fechaCalExtra2, 
                                       datosalumno_semestre4.calExtra3, 
                                       datosalumno_semestre4.fechaCalExtra3, 
                                       datosalumno_semestre4.calExtra4, 
                                       datosalumno_semestre4.fechaCalExtra4
                                       FROM
                                       datosalumno_semestre4
                                       INNER JOIN
                                       semestre4
                                       ON 
                                           datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                       WHERE
                                       datosalumno_semestre4.idMateria4 = 1
                                           AND
                                           datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia42 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 2
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia43 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 3
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia44 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 4
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia45 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 5
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia46 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 6
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia47 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 7
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia48 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 8
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia49 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 9
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                        $sentencia410 = "SELECT
                                        datosalumno_semestre4.idMateria4, 
                                        datosalumno_semestre4.matricula, 
                                        datosalumno_semestre4.falta1ro, 
                                        datosalumno_semestre4.falta2do, 
                                        datosalumno_semestre4.falta3ero, 
                                        datosalumno_semestre4.calParcial1ro, 
                                        datosalumno_semestre4.calParcial2do, 
                                        datosalumno_semestre4.calParcial3ero, 
                                        datosalumno_semestre4.calFinal, 
                                        datosalumno_semestre4.calExtra1, 
                                        datosalumno_semestre4.fechaCalExtra1, 
                                        datosalumno_semestre4.calExtra2, 
                                        datosalumno_semestre4.fechaCalExtra2, 
                                        datosalumno_semestre4.calExtra3, 
                                        datosalumno_semestre4.fechaCalExtra3, 
                                        datosalumno_semestre4.calExtra4, 
                                        datosalumno_semestre4.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre4
                                        INNER JOIN
                                        semestre4
                                        ON 
                                            datosalumno_semestre4.idMateria4 = semestre4.idMateria4
                                        WHERE
                                        datosalumno_semestre4.idMateria4 = 10
                                            AND
                                            datosalumno_semestre4.matricula ='20182308432' ";

                                            
                                        $resultado41 = mysqli_query($conexion, $sentencia41);
                                        $resultado42 = mysqli_query($conexion, $sentencia42);
                                        $resultado43 = mysqli_query($conexion, $sentencia43);
                                        $resultado44 = mysqli_query($conexion, $sentencia44);
                                        $resultado45 = mysqli_query($conexion, $sentencia45);
                                        $resultado46 = mysqli_query($conexion, $sentencia46);
                                        $resultado47 = mysqli_query($conexion, $sentencia47);
                                        $resultado48 = mysqli_query($conexion, $sentencia48);
                                        $resultado49 = mysqli_query($conexion, $sentencia49);
                                        $resultado410 = mysqli_query($conexion, $sentencia410);


                                        while($registro41 = mysqli_fetch_assoc($resultado41)){
                                            echo "
                                            <tr>
                                            <td>Matematicas IV</td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateIV_1' value =".$registro41["falta1ro"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateIV_2' value =".$registro41["falta2do"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateIV_3' value =".$registro41["falta3ero"]."></td>
                                            
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateIV_1' value =".$registro41["calParcial1ro"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateIV_2' value =".$registro41["calParcial2do"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateIV_3' value =".$registro41["calParcial3ero"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro41["calFinal"]."></td>
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIV_1' value =".$registro41["calExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIV_1' value =".$registro41["fechaCalExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIV_2' value =".$registro41["calExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIV_2' value =".$registro41["fechaCalExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIV_3' value =".$registro41["calExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIV_3' value =".$registro41["fechaCalExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateIV_4' value =".$registro41["calExtra4"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateIV_4' value =".$registro41["fechaCalExtra4"]."></td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro41["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro41["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr> ";
                                            if($registro42 = mysqli_fetch_assoc($resultado42)){
                                                echo "
                                                <tr>
                                                <td>Biologia II</td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaBiologiaII_1' value =".$registro42["falta1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaBiologiaII_2' value =".$registro42["falta2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaBiologiaII_3' value =".$registro42["falta3ero"]."></td>
                                                
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalBiologiaII_1' value =".$registro42["calParcial1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalBiologiaII_2' value =".$registro42["calParcial2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalBiologiaII_3' value =".$registro42["calParcial3ero"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro42["calFinal"]."></td>
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaII_1' value =".$registro42["calExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaII_1' value =".$registro42["fechaCalExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaII_2' value =".$registro42["calExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaII_2' value =".$registro42["fechaCalExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaII_3' value =".$registro42["calExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaII_3' value =".$registro42["fechaCalExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraBiologiaII_4' value =".$registro42["calExtra4"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraBiologiaII_4' value =".$registro42["fechaCalExtra4"]."></td>
                                                <td></td>
                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro42["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro42["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                </tr> ";
                                                }

                                                if($registro43 = mysqli_fetch_assoc($resultado43)){
                                                    echo "
                                                    <tr>
                                                    <td>Fisica II</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFisicaII_1' value =".$registro43["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFisicaII_2' value =".$registro43["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFisicaII_3' value =".$registro43["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFisicaII_1' value =".$registro43["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFisicaII_2' value =".$registro43["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFisicaII_3' value =".$registro43["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro43["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaII_1' value =".$registro43["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaII_1' value =".$registro43["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaII_2' value =".$registro43["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaII_2' value =".$registro43["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaII_3' value =".$registro43["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaII_3' value =".$registro43["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFisicaII_4' value =".$registro43["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFisicaII_4' value =".$registro43["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro43["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro43["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>";
                                                    }
                                                
                                                if($registro44 = mysqli_fetch_assoc($resultado44)){
                                                    echo "
                                                    <tr>
                                                    <td>Historia de México II</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHMII_1' value =".$registro44["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHMII_2' value =".$registro44["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHMII_3' value =".$registro44["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHMII_1' value =".$registro44["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHMII_2' value =".$registro44["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHMII_3' value =".$registro44["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro44["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMII_1' value =".$registro44["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMII_1' value =".$registro44["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMII_2' value =".$registro44["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMII_2' value =".$registro44["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMII_3' value =".$registro44["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMII_3' value =".$registro44["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHMII_4' value =".$registro44["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHMII_4' value =".$registro44["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro44["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro44["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>
                                                    ";
                                                    }
                                                    if($registro45 = mysqli_fetch_assoc($resultado45)){
                                                        echo "
                                                        <tr>
                                                        <td>Ingles IV</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesIV_1' value =".$registro45["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesIV_2' value =".$registro45["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesIV_3' value =".$registro45["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesIV_1' value =".$registro45["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesIV_2' value =".$registro45["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesIV_3' value =".$registro45["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro45["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIV_1' value =".$registro45["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIV_1' value =".$registro45["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIV_2' value =".$registro45["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIV_2' value =".$registro45["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIV_3' value =".$registro45["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIV_3' value =".$registro45["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesIV_4' value =".$registro45["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesIV_4' value =".$registro45["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro45["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro45["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro46 = mysqli_fetch_assoc($resultado46)){
                                                        echo "
                                                        <tr>
                                                        <td>Literatura II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaLiteraturaII_1' value =".$registro46["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaLiteraturaII_2' value =".$registro46["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaLiteraturaII_3' value =".$registro46["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalLiteraturaII_1' value =".$registro46["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalLiteraturaII_2' value =".$registro46["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalLiteraturaII_3' value =".$registro46["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro46["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaII_1' value =".$registro46["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaII_1' value =".$registro46["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaII_2' value =".$registro46["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaII_2' value =".$registro46["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaII_3' value =".$registro46["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaII_3' value =".$registro46["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraLiteraturaII_4' value =".$registro46["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraLiteraturaII_4' value =".$registro46["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro46["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro46["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro47 = mysqli_fetch_assoc($resultado47)){
                                                        echo "
                                                        <tr>
                                                        <td>Comunidades Virtules</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaCV_1' value =".$registro47["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaCV_2' value =".$registro47["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaCV_3' value =".$registro47["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalCV_1' value =".$registro47["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalCV_2' value =".$registro47["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalCV_3' value =".$registro47["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro47["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraCV_1' value =".$registro47["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraCV_1' value =".$registro47["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraCV_2' value =".$registro47["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraCV_2' value =".$registro47["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraCV_3' value =".$registro47["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraCV_3' value =".$registro47["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraCV_4' value =".$registro47["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraCV_4' value =".$registro47["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro47["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro47["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                            ";
                                                    }
                                                    if($registro48 = mysqli_fetch_assoc($resultado48)){
                                                        echo "
                                                        <tr>
                                                        <td>Mantenimiento y Redes de Computo</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMRC_1' value =".$registro48["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMRC_2' value =".$registro48["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMRC_3' value =".$registro48["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMRC_1' value =".$registro48["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMRC_2' value =".$registro48["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMRC_3' value =".$registro48["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro48["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMRC_1' value =".$registro48["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMRC_1' value =".$registro48["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMRC_2' value =".$registro48["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMRC_2' value =".$registro48["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMRC_3' value =".$registro48["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMRC_3' value =".$registro48["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMRC_4' value =".$registro48["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMRC_' value =".$registro48["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro48["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro48["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro49 = mysqli_fetch_assoc($resultado49)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Fisicas, Deportivas y Recreativas IV</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRIV_1' value =".$registro49["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRIV_2' value =".$registro49["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAFDRIV_3' value =".$registro49["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRIV_1' value =".$registro49["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRIV_2' value =".$registro49["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAFDRIV_3' value =".$registro49["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro49["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRIV_1' value =".$registro49["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRIV_1' value =".$registro49["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRIV_2' value =".$registro49["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRIV_2' value =".$registro49["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRIV_3' value =".$registro49["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRIV_3' value =".$registro49["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAFDRIV_4' value =".$registro49["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAFDRIV_4' value =".$registro49["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro49["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro49["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro410 = mysqli_fetch_assoc($resultado410)){
                                                        echo "
                                                        <tr>
                                                        <td>Salud Integral del Adolecente IV</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAIV_1' value =".$registro410["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAIV_2' value =".$registro410["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAIV_3' value =".$registro410["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAIV_1' value =".$registro410["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAIV_2' value =".$registro410["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAIV_3' value =".$registro410["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro410["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAIV_1' value =".$registro410["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAIV_1' value =".$registro410["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAIV_2' value =".$registro410["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAIV_2' value =".$registro410["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAIV_3' value =".$registro410["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAIV_3' value =".$registro410["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAIV_4' value =".$registro410["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAIV_4' value =".$registro410["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registr410["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro410["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                
                                            }
                                        ?>      
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
                                <?php
                                       include("funciones/conexion.php");
                                       $sentencia51 = "SELECT
                                                 datosalumno_semestre5.idMateria5, 
                                                 datosalumno_semestre5.matricula, 
                                                 datosalumno_semestre5.falta1ro, 
                                                 datosalumno_semestre5.falta2do, 
                                                 datosalumno_semestre5.falta3ero, 
                                                 datosalumno_semestre5.calParcial1ro, 
                                                 datosalumno_semestre5.calParcial2do, 
                                                 datosalumno_semestre5.calParcial3ero, 
                                                 datosalumno_semestre5.calFinal, 
                                                 datosalumno_semestre5.calExtra1, 
                                                 datosalumno_semestre5.fechaCalExtra1, 
                                                 datosalumno_semestre5.calExtra2, 
                                                 datosalumno_semestre5.fechaCalExtra2, 
                                                 datosalumno_semestre5.calExtra3, 
                                                 datosalumno_semestre5.fechaCalExtra3, 
                                                 datosalumno_semestre5.calExtra4, 
                                                 datosalumno_semestre5.fechaCalExtra4
                                                 FROM
                                                 datosalumno_semestre5
                                                 INNER JOIN
                                                 semestre5
                                                 ON 
                                                     datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                 WHERE
                                                 datosalumno_semestre5.idMateria5 = 1
                                                     AND
                                                     datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia52 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 2
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia53 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 3
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia54 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 4
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia55 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 5
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia56 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 6
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia57 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 7
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia58 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 8
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia59 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 9
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia510 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 10
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia511 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 11
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $sentencia512 = "SELECT
                                                datosalumno_semestre5.idMateria5, 
                                                datosalumno_semestre5.matricula, 
                                                datosalumno_semestre5.falta1ro, 
                                                datosalumno_semestre5.falta2do, 
                                                datosalumno_semestre5.falta3ero, 
                                                datosalumno_semestre5.calParcial1ro, 
                                                datosalumno_semestre5.calParcial2do, 
                                                datosalumno_semestre5.calParcial3ero, 
                                                datosalumno_semestre5.calFinal, 
                                                datosalumno_semestre5.calExtra1, 
                                                datosalumno_semestre5.fechaCalExtra1, 
                                                datosalumno_semestre5.calExtra2, 
                                                datosalumno_semestre5.fechaCalExtra2, 
                                                datosalumno_semestre5.calExtra3, 
                                                datosalumno_semestre5.fechaCalExtra3, 
                                                datosalumno_semestre5.calExtra4, 
                                                datosalumno_semestre5.fechaCalExtra4
                                                FROM
                                                datosalumno_semestre5
                                                INNER JOIN
                                                semestre5
                                                ON 
                                                    datosalumno_semestre5.idMateria5 = semestre5.idMateria5
                                                WHERE
                                                datosalumno_semestre5.idMateria5 = 12
                                                    AND
                                                    datosalumno_semestre5.matricula ='20182308432' ";

                                                $resultado51 = mysqli_query($conexion, $sentencia51);
                                                $resultado52 = mysqli_query($conexion, $sentencia52);
                                                $resultado53 = mysqli_query($conexion, $sentencia53);
                                                $resultado54 = mysqli_query($conexion, $sentencia54);
                                                $resultado55 = mysqli_query($conexion, $sentencia55);
                                                $resultado56 = mysqli_query($conexion, $sentencia56);
                                                $resultado57 = mysqli_query($conexion, $sentencia57);
                                                $resultado58 = mysqli_query($conexion, $sentencia58);
                                                $resultado59 = mysqli_query($conexion, $sentencia59);
                                                $resultado510 = mysqli_query($conexion, $sentencia510);
                                                $resultado511 = mysqli_query($conexion, $sentencia511);
                                                $resultado512 = mysqli_query($conexion, $sentencia512);


                                                while($registro51 = mysqli_fetch_assoc($resultado51)){
                                                    echo "
                                                    <tr>
                                                    <td>Matematicas V</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateV_1' value =".$registro51["falta1ro"]."> </td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateV_2' value =".$registro51["falta2do"]."> </td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateV_3' value =".$registro51["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateV_1' value =".$registro51["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateV_2' value =".$registro51["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateV_3' value =".$registro51["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro51["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateV_1' value =".$registro51["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateV_1' value =".$registro51["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateV_2' value =".$registro51["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateV_2' value =".$registro51["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateV_3' value =".$registro51["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateV_3' value =".$registro51["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateV_4' value =".$registro51["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateV_4' value =".$registro51["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro51["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro51["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr> ";
                                                    if($registro52 = mysqli_fetch_assoc($resultado52)){
                                                        echo "
                                                        <tr>
                                                        <td>Geografía</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaGeografia_1' value =".$registro52["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaGeografia_2' value =".$registro52["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaGeografia_3' value =".$registro52["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalGeografia_1' value =".$registro52["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalGeografia_2' value =".$registro52["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalGeografia_3' value =".$registro52["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro52["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGeografia_1' value =".$registro52["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGeografia_1' value =".$registro52["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGeografia_2' value =".$registro52["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGeografia_2' value =".$registro52["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGeografia_3' value =".$registro52["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGeografia_3' value =".$registro52["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraGeografia_4' value =".$registro52["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraGeografia_4' value =".$registro52["fechaCalExtra4"]."></td>
                                                        <td></t
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro52["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro52["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr> ";
                                                        }

                                                        if($registro53 = mysqli_fetch_assoc($resultado53)){
                                                            echo "
                                                            <tr>
                                                            <td>Estructura Socioeconómica de México</td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaESM_1' value =".$registro53["falta1ro"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaESM_2' value =".$registro53["falta2do"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaESM_3' value =".$registro53["falta3ero"]."></td>
                                                            
                                                            <td></td>
                                                            <td></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalESM_1' value =".$registro53["calParcial1ro"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalESM_2' value =".$registro53["calParcial2do"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalESM_3' value =".$registro53["calParcial3ero"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro53["calFinal"]."></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraESM_1' value =".$registro53["calExtra1"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraESM_1' value =".$registro53["fechaCalExtra1"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraESM_2' value =".$registro53["calExtra2"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraESM_2' value =".$registro53["fechaCalExtra2"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraESM_3' value =".$registro53["calExtra3"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraESM_3' value =".$registro53["fechaCalExtra3"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraESM_4' value =".$registro53["calExtra4"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraESM_4' value =".$registro53["fechaCalExtra4"]."></td>
                                                            <td></td>
                                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro53["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro53["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                            </tr>";
                                                            }
                                                        
                                                        if($registro54 = mysqli_fetch_assoc($resultado54)){
                                                            echo "
                                                            <tr>
                                                            <td>Economía I</td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEconomiaI_1' value =".$registro54["falta1ro"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEconomiaI_2' value =".$registro54["falta2do"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEconomiaI_3' value =".$registro54["falta3ero"]."></td>
                                                            
                                                            <td></td>
                                                            <td></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEconomiaI_1' value =".$registro54["calParcial1ro"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEconomiaI_2' value =".$registro54["calParcial2do"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEconomiaI_3' value =".$registro54["calParcial3ero"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro54["calFinal"]."></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaI_1' value =".$registro54["calExtra1"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaI_1' value =".$registro54["fechaCalExtra1"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaI_2' value =".$registro54["calExtra2"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaI_2' value =".$registro54["fechaCalExtra2"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaI_3' value =".$registro54["calExtra3"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaI_3' value =".$registro54["fechaCalExtra3"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaI_4' value =".$registro54["calExtra4"]."></td>
                                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaI_4' value =".$registro54["fechaCalExtra4"]."></td>
                                                            <td></td>
                                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro54["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro54["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                            </tr>
                                                            ";
                                                            }
                                                            if($registro55 = mysqli_fetch_assoc($resultado55)){
                                                                echo "
                                                                <tr>
                                                                <td>Psicología I</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaPsicologiaI_1' value =".$registro55["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaPsicologiaI_2' value =".$registro55["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaPsicologiaI_3' value =".$registro55["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalPsicologiaI_1' value =".$registro55["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalPsicologiaI_2' value =".$registro55["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalPsicologiaI_3' value =".$registro55["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro55["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaI_1' value =".$registro55["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaI_1' value =".$registro55["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaI_2' value =".$registro55["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaI_2' value =".$registro55["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaI_3' value =".$registro55["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaI_3' value =".$registro55["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaI_4' value =".$registro55["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaI_4' value =".$registro55["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro55["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro55["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                            if($registro56 = mysqli_fetch_assoc($resultado56)){
                                                                echo "
                                                                <tr>
                                                                <td>Derecho I</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDerechoI_1' value =".$registro56["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDerechoI_2' value =".$registro56["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDerechoI_3' value =".$registro56["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDerechoI_1' value =".$registro56["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDerechoI_2' value =".$registro56["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDerechoI_3' value =".$registro56["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro56["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoI_1' value =".$registro56["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoI_1' value =".$registro56["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoI_2' value =".$registro56["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoI_2' value =".$registro56["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoI_3' value =".$registro56["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoI_3' value =".$registro56["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoI_4' value =".$registro56["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoI_4' value =".$registro56["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro56["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro56["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                            if($registro57 = mysqli_fetch_assoc($resultado57)){
                                                                echo "
                                                                <tr>
                                                                <td>Inglés V</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesV_1' value =".$registro57["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesV_2' value =".$registro57["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesV_3' value =".$registro57["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesV_1' value =".$registro57["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesV_2' value =".$registro57["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesV_3' value =".$registro57["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro57["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesV_1' value =".$registro57["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesV_1' value =".$registro57["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesV_2' value =".$registro57["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesV_2' value =".$registro57["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesV_3' value =".$registro57["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesV_3' value =".$registro57["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesV_4' value =".$registro57["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesV_4' value =".$registro57["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro57["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro57["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                    ";
                                                            }
                                                            if($registro58 = mysqli_fetch_assoc($resultado58)){
                                                                echo "
                                                                <tr>
                                                                <td>Introducción a la Filosofía</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaIF_1' value =".$registro58["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaIF_2' value =".$registro58["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaIF_3' value =".$registro58["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalIF_1' value =".$registro58["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalIF_2' value =".$registro58["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalIF_3' value =".$registro58["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro58["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraIF_1' value =".$registro58["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraIF_1' value =".$registro58["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraIF_2' value =".$registro58["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraIF_2' value =".$registro58["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraIF_3' value =".$registro58["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraIF_3' value =".$registro58["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraIF_4' value =".$registro58["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraIF_4' value =".$registro58["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro58["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro58["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                            if($registro59 = mysqli_fetch_assoc($resultado59)){
                                                                echo "
                                                                <tr>
                                                                <td>Sistemas de Información</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSI_1' value =".$registro59["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSI_2' value =".$registro59["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSI_3' value =".$registro59["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSI_1' value =".$registro59["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSI_2' value =".$registro59["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSI_3' value =".$registro59["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro59["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSI_1' value =".$registro59["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSI_1' value =".$registro59["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSI_2' value =".$registro59["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSI_2' value =".$registro59["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSI_3' value =".$registro59["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSI_3' value =".$registro59["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSI_4' value =".$registro59["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSI_4' value =".$registro59["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro59["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro59["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                            if($registro510 = mysqli_fetch_assoc($resultado510)){
                                                                echo "
                                                                <tr>
                                                                <td>Programación</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaProgramacion_1' value =".$registro510["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaProgramacion_2' value =".$registro510["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaProgramacion_3' value =".$registro510["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalProgramacion_1' value =".$registro510["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalProgramacion_2' value =".$registro510["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalProgramacion_3' value =".$registro510["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro510["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraProgramacion_1' value =".$registro510["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraProgramacion_1' value =".$registro510["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraProgramacion_2' value =".$registro510["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraProgramacion_2' value =".$registro510["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraProgramacion_3' value =".$registro510["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraProgramacion_3' value =".$registro510["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraProgramacion_4' value =".$registro510["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraProgramacion_4' value =".$registro510["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro510["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro510["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                            if($registro511 = mysqli_fetch_assoc($resultado511)){
                                                                echo "
                                                                <tr>
                                                                <td>Actividades Artistico Culturales III</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIII_1' value =".$registro511["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIII_2' value =".$registro511["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIII_3' value =".$registro511["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIII_1' value =".$registro511["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIII_2' value =".$registro511["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIII_3' value =".$registro511["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro511["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_1' value =".$registro511["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_1' value =".$registro511["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_2' value =".$registro511["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_2' value =".$registro511["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_3' value =".$registro511["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_3' value =".$registro511["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIII_4' value =".$registro511["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIII_4' value =".$registro511["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro51["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro511["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                            if($registro512 = mysqli_fetch_assoc($resultado512)){
                                                                echo "
                                                                <tr>
                                                                <td>Salud Integral del Adolecente V</td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAV_1' value =".$registro512["falta1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAV_2' value =".$registro512["falta2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAV_3' value =".$registro512["falta3ero"]."></td>
                                                                
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAV_1' value =".$registro512["calParcial1ro"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAV_2' value =".$registro512["calParcial2do"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAV_3' value =".$registro512["calParcial3ero"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro512["calFinal"]."></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAV_1' value =".$registro512["calExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAV_1' value =".$registro512["fechaCalExtra1"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAV_2' value =".$registro512["calExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAV_2' value =".$registro512["fechaCalExtra2"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAV_3' value =".$registro512["calExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAV_3' value =".$registro512["fechaCalExtra3"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAV_4' value =".$registro512["calExtra4"]."></td>
                                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAV_4' value =".$registro512["fechaCalExtra4"]."></td>
                                                                <td></td>
                                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro512["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro512["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                                </tr>
                                                                ";
                                                            }
                                                    }
                                                ?>      
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
                                <?php
                                       include("funciones/conexion.php");
                                       $sentencia61 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 1
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia62 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 2
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia63 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 3
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia64 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 4
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia65 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 5
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia66 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 6
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia67 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 7
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia68 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 8
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia69 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 9
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia610 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 10
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia611 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 11
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";

                                        $sentencia612 = "SELECT
                                        datosalumno_semestre6.idMateria6, 
                                        datosalumno_semestre6.matricula, 
                                        datosalumno_semestre6.falta1ro, 
                                        datosalumno_semestre6.falta2do, 
                                        datosalumno_semestre6.falta3ero, 
                                        datosalumno_semestre6.calParcial1ro, 
                                        datosalumno_semestre6.calParcial2do, 
                                        datosalumno_semestre6.calParcial3ero, 
                                        datosalumno_semestre6.calFinal, 
                                        datosalumno_semestre6.calExtra1, 
                                        datosalumno_semestre6.fechaCalExtra1, 
                                        datosalumno_semestre6.calExtra2, 
                                        datosalumno_semestre6.fechaCalExtra2, 
                                        datosalumno_semestre6.calExtra3, 
                                        datosalumno_semestre6.fechaCalExtra3, 
                                        datosalumno_semestre6.calExtra4, 
                                        datosalumno_semestre6.fechaCalExtra4
                                        FROM
                                        datosalumno_semestre6
                                        INNER JOIN
                                        semestre6
                                        ON 
                                            datosalumno_semestre6.idMateria6 = semestre6.idMateria6
                                        WHERE
                                        datosalumno_semestre6.idMateria6 = 12
                                            AND
                                            datosalumno_semestre6.matricula ='20182308432' ";


                                        $resultado61 = mysqli_query($conexion, $sentencia61);
                                        $resultado62 = mysqli_query($conexion, $sentencia62);
                                        $resultado63 = mysqli_query($conexion, $sentencia63);
                                        $resultado64 = mysqli_query($conexion, $sentencia64);
                                        $resultado65 = mysqli_query($conexion, $sentencia65);
                                        $resultado66 = mysqli_query($conexion, $sentencia66);
                                        $resultado67 = mysqli_query($conexion, $sentencia67);
                                        $resultado68 = mysqli_query($conexion, $sentencia68);
                                        $resultado69 = mysqli_query($conexion, $sentencia69);
                                        $resultado610 = mysqli_query($conexion, $sentencia610);
                                        $resultado611 = mysqli_query($conexion, $sentencia611);
                                        $resultado612 = mysqli_query($conexion, $sentencia612);


                                        while($registro61 = mysqli_fetch_assoc($resultado61)){
                                            echo "
                                            <tr>
                                            <td>Matematicas VI</td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateVI_1' value =".$registro61["falta1ro"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateVI_2' value =".$registro61["falta2do"]."> </td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaMateVI_3' value =".$registro61["falta3ero"]."></td>
                                            
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateVI_1' value =".$registro61["calParcial1ro"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateVI_2' value =".$registro61["calParcial2do"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalMateVI_3' value =".$registro61["calParcial3ero"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro61["calFinal"]."></td>
                                            <td></td>
                                            <td></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateVI_1' value =".$registro61["calExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateVI_1' value =".$registro61["fechaCalExtra1"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateVI_2' value =".$registro61["calExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateVI_2' value =".$registro61["fechaCalExtra2"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateVI_3' value =".$registro61["calExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateVI_3' value =".$registro61["fechaCalExtra3"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraMateVI_4' value =".$registro61["calExtra4"]."></td>
                                            <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraMateVI_4' value =".$registro61["fechaCalExtra4"]."></td>
                                            <td></td>
                                            <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro61["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                            <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro61["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                            </tr> ";
                                            if($registro62 = mysqli_fetch_assoc($resultado62)){
                                                echo "
                                                <tr>
                                                <td>Ecología y Medio Ambiente</td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEMA_1' value =".$registro62["falta1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEMA_2' value =".$registro62["falta2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEMA_3' value =".$registro62["falta3ero"]."></td>
                                                
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEMA_1' value =".$registro62["calParcial1ro"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEMA_2' value =".$registro62["calParcial2do"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEMA_3' value =".$registro62["calParcial3ero"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro62["calFinal"]."></td>
                                                <td></td>
                                                <td></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEMA_1' value =".$registro62["calExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEMA_1' value =".$registro62["fechaCalExtra1"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEMA_2' value =".$registro62["calExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEMA_2' value =".$registro62["fechaCalExtra2"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEMA_3' value =".$registro62["calExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEMA_3' value =".$registro62["fechaCalExtra3"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEMA_4' value =".$registro62["calExtra4"]."></td>
                                                <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEMA_4' value =".$registro62["fechaCalExtra4"]."></td>
                                                <td></t
                                                <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro62["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro62["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                </tr> ";
                                                }

                                                if($registro63 = mysqli_fetch_assoc($resultado63)){
                                                    echo "
                                                    <tr>
                                                    <td>Historia Universal Contemporánea</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHUC_1' value =".$registro63["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHUC_2' value =".$registro63["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaHUC_3' value =".$registro63["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHUC_1' value =".$registro63["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHUC_2' value =".$registro63["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalHUC_3' value =".$registro63["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro63["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHUC_1' value =".$registro63["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHUC_1' value =".$registro63["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHUC_2' value =".$registro63["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHUC_2' value =".$registro63["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHUC_3' value =".$registro63["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHUC_3' value =".$registro63["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraHUC_4' value =".$registro63["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraHUC_4' value =".$registro63["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro63["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro63["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>";
                                                    }
                                                
                                                if($registro64 = mysqli_fetch_assoc($resultado64)){
                                                    echo "
                                                    <tr>
                                                    <td>Economía II</td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEconomiaII_1' value =".$registro64["falta1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEconomiaII_2' value =".$registro64["falta2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaEconomiaII_3' value =".$registro64["falta3ero"]."></td>
                                                    
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEconomiaII_1' value =".$registro64["calParcial1ro"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEconomiaII_2' value =".$registro64["calParcial2do"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalEconomiaII_3' value =".$registro64["calParcial3ero"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro64["calFinal"]."></td>
                                                    <td></td>
                                                    <td></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaII_1' value =".$registro64["calExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaII_1' value =".$registro64["fechaCalExtra1"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaII_2' value =".$registro64["calExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaII_2' value =".$registro64["fechaCalExtra2"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaII_3' value =".$registro64["calExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaII_3' value =".$registro64["fechaCalExtra3"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraEconomiaII_4' value =".$registro64["calExtra4"]."></td>
                                                    <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraEconomiaII_4' value =".$registro64["fechaCalExtra4"]."></td>
                                                    <td></td>
                                                    <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro64["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                    <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro64["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                    </tr>
                                                    ";
                                                    }
                                                    if($registro65 = mysqli_fetch_assoc($resultado65)){
                                                        echo "
                                                        <tr>
                                                        <td>Psicología II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaPsicologiaII_1' value =".$registro65["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaPsicologiaII_2' value =".$registro65["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaPsicologiaII_3' value =".$registro65["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalPsicologiaII_1' value =".$registro65["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalPsicologiaII_2' value =".$registro65["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalPsicologiaII_3' value =".$registro65["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro65["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaII_1' value =".$registro65["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaII_1' value =".$registro65["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaII_2' value =".$registro65["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaII_2' value =".$registro65["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaII_3' value =".$registro65["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaII_3' value =".$registro65["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraPsicologiaII_4' value =".$registro65["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraPsicologiaII_4' value =".$registro65["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro65["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro65["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro66 = mysqli_fetch_assoc($resultado66)){
                                                        echo "
                                                        <tr>
                                                        <td>Derecho II</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDerechoII_1' value =".$registro6["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDerechoII_2' value =".$registro66["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDerechoII_3' value =".$registro66["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDerechoII_1' value =".$registro66["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDerechoII_2' value =".$registro66["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDerechoII_3' value =".$registro66["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro66["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoII_1' value =".$registro66["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoII_1' value =".$registro66["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoII_2' value =".$registro66["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoII_2' value =".$registro66["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoII_3' value =".$registro66["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoII_3' value =".$registro66["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDerechoII_4' value =".$registro66["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDerechoII_4' value =".$registro66["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro66["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro66["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro67 = mysqli_fetch_assoc($resultado67)){
                                                        echo "
                                                        <tr>
                                                        <td>Inglés VI</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesVI_1' value =".$registro67["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesVI_2' value =".$registro67["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaInglesVI_3' value =".$registro67["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesVI_1' value =".$registro67["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesVI_2' value =".$registro67["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalInglesVI_3' value =".$registro67["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro67["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesVI_1' value =".$registro67["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesVI_1' value =".$registro67["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesVI_2' value =".$registro67["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesVI_2' value =".$registro67["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesVI_3' value =".$registro67["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesVI_3' value =".$registro67["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraInglesVI_4' value =".$registro67["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraInglesVI_4' value =".$registro67["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro67["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro67["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                            ";
                                                    }
                                                    if($registro68 = mysqli_fetch_assoc($resultado68)){
                                                        echo "
                                                        <tr>
                                                        <td>Filosofía</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFilosofia_1' value =".$registro68["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFilosofia_2' value =".$registro68["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaFilosofia_3' value =".$registro68["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFilosofia_1' value =".$registro68["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFilosofia_2' value =".$registro68["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalFilosofia_3' value =".$registro68["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro68["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFilosofia_1' value =".$registro68["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFilosofia_1' value =".$registro68["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFilosofia_2' value =".$registro68["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFilosofia_2' value =".$registro68["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFilosofia_3' value =".$registro68["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFilosofia_3' value =".$registro68["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraFilosofia_4' value =".$registro68["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraFilosofia_4' value =".$registro68["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro68["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro68["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro69 = mysqli_fetch_assoc($resultado69)){
                                                        echo "
                                                        <tr>
                                                        <td>Diseño Digital</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDD_1' value =".$registro69["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDD_2' value =".$registro69["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaDD_3' value =".$registro69["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDD_1' value =".$registro69["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDD_2' value =".$registro69["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalDD_3' value =".$registro69["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro69["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDD_1' value =".$registro69["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDD_1' value =".$registro69["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDD_2' value =".$registro69["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDD_2' value =".$registro69["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDD_3' value =".$registro69["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDD_3' value =".$registro69["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraDD_4' value =".$registro69["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraDD_4' value =".$registro69["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro69["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro69["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro610 = mysqli_fetch_assoc($resultado6610)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Artistico Culturales IV</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIV_1' value =".$registro610["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIV_2' value =".$registro610["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaAACIV_3' value =".$registro610["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIV_1' value =".$registro610["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIV_2' value =".$registro610["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalAACIV_3' value =".$registro610["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro610["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIV_1' value =".$registro610["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIV_1' value =".$registro610["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIV_2' value =".$registro610["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIV_2' value =".$registro610["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIV_3' value =".$registro610["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIV_3' value =".$registro610["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraAACIV_4' value =".$registro610["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraAACIV_4' value =".$registro610["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro610["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro610["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro611 = mysqli_fetch_assoc($resultado611)){
                                                        echo "
                                                        <tr>
                                                        <td>Actividades Artistico Culturales III</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["falta3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =3></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro611["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro611["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro611["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                                    if($registro612 = mysqli_fetch_assoc($resultado612)){
                                                        echo "
                                                        <tr>
                                                        <td>Salud Integral del Adolecente VI</td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAVI_1' value =".$registro612["falta1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAVI_2' value =".$registro612["falta2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFaltaSIAVI_3' value =".$registro612["falta3ero"]."></td>
                                                        
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAVI_1' value =".$registro612["calParcial1ro"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAVI_2' value =".$registro612["calParcial2do"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalSIAVI_3' value =".$registro612["calParcial3ero"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='' maxlength='2' value =".$registro612["calFinal"]."></td>
                                                        <td></td>
                                                        <td></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAVI_1' value =".$registro612["calExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAVI_1' value =".$registro612["fechaCalExtra1"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAVI_2' value =".$registro612["calExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAVI_2' value =".$registro612["fechaCalExtra2"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAVI_3' value =".$registro612["calExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAVI_3' value =".$registro612["fechaCalExtra3"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtCalExtraSIAVI_4' value =".$registro5612["calExtra4"]."></td>
                                                        <td> <input class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;'type='text' name='txtFechaCalExtraSIAVI_4' value =".$registro612["fechaCalExtra4"]."></td>
                                                        <td></td>
                                                        <td><a href='actualizar-alumno.php?MatriculaUpdate=".$registro612["matricula"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
                                                        <td><a href='funciones/eliminar-madre.php?MatriculaDelete=".$registro612["matricula"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
                                                        </tr>
                                                        ";
                                                    }
                                            }
                                        ?>      
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