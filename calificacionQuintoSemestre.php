<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calificaciones Quinto Semestre</title>
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
				Preparatoria Oficial No.77<i class="zmdi zmdi-close btn-menu-dashboard visible-xs"></i>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Calificaciones <small>Quinto Semestre</small></h1>
			</div>
			<p class="lead">Aquí podrá insertar todas las calificaciones del quinto semestre</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="" data-toggle="tab"></a></li>
					  	<li><a href="" data-toggle="tab"></a></li>
					</ul>
                    <div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="Nuevo">
							<div class="container-fluid">
								<div class="row">
										<form action="funciones/calquintosemestre.php" method="POST">
											<div id="myTabContent"class="tab-content">
												<div class="table-responsive">
                                                    <div class="form-group label-floating">
                                                        <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Matricula :</label>
                                                        <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtMatriculaAlum" maxlength="11">
                                                    </div> 
                                                    <table class="table table-hover text-center">
                                                        <tbody>
                                                        <tr>
                                                            <th class="text-lefth">Asignaturas</th>
                                                            <th class="text-center">Faltas</th>
                                                            <th class="text-center"></th>
                                                            <th class="text-center"></th>
                                                            <th class="text-lefth">Calificaciones Parciales</th>                                                            
                                                            <th class="text-lefth">Calificaciones Extraordinarias</th>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    
													<table class="table table-hover text-center">
                                                        <thead>
                                                            <tr>
                                                                <td>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center">1er Parcial</th>
                                                                    <th class="text-center">2do Parcial</th>
                                                                    <th class="text-center">3er Parcial</th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center">1r Parcial</th>
                                                                    <th class="text-center">2do Parcial</th>
                                                                    <th class="text-center">3er Parcial</th>
                                                                    <th class="text-center"></th>
                                                                    <th class="text-center"></th>
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
                                                                </td>
                                                            </tr>
                                                        </thead>
                                                        <tbody>          
                                                            <tr class="text-center">    
                                                                <th class="text-center">Matemáticas V</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateV_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalMateV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalMateV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalMateV_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateV_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateV_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateV_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateV_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateV_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateV_3" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Geografía</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaGeografia_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaGeografia_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaGeografia_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalGeografia_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalGeografia_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalGeografia_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGeografia_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGeografia_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGeografia_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGeografia_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGeografia_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGeografia_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGeografia_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGeografia_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Estructura Socioeconómica de México</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaESM_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaESM_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaESM_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalESM_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalESM_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalESM_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraESM_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaExtraCalESM_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraESM_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraESM_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraESM_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraESM_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraESM_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraESM_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Economía I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaEconomiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaEconomiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaEconomiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalEconomiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalEconomiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalEconomiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraEconomiaI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEconomiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraEconomiaI_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEconomiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraEconomiaI_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEconomiaI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraEconomiaI_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEconomiaI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Psicología I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaPsicologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaPsicologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaPsicologiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalPsicologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalPsicologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalPsicologiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraPsicologiaI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraPsicologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraPsicologiaI_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraPsicologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraPsicologiaI_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraPsicologiaI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraPsicologiaI_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraPsicologiaI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Derecho I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaDerechoI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaDerechoI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaDerechoI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalDerechoI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalDerechoI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalDerechoI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraDerechoI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraDerechoI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraDerechoI_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraDerechoI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraDerechoI_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraDerechoI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraDerechoI_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraDerechoI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Inglés V</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesV_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalInglesV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalInglesV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalInglesV_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesV_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesV_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesV_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesV_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesV_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesV_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Introducción a la Filosofía</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaIF_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaIF_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaIF_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalIF_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalIF_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalIF_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraIF_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraIF_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraIF_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraIF_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraIF_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraIF_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraIF_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraIF_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Sistemas de Información</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSI_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSI_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSI_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Programación</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaProgramacion_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaProgramacion_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaProgramacion_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalProgramacion_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalProgramacion_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalProgramacion_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraProgramacion_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraProgramacion_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraProgramacion_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraProgramacion_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraProgramacion_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraProgramacion_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraProgramacion_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraProgramacion_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>

                                                            <tr class="text-center">    
                                                                <th class="text-center">Actividades Artistico Culturales III</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAACIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAACIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAACIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalAACIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalAACIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalAACIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraAACIII_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraAACIII_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraAACIII_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACIII_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraAACIII_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACIII_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Salud Integral del Adolescente V</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSIAV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSIAV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSIAV_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSIAV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSIAV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSIAV_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSIAV_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSIAV_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSIAV_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSIAV_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSIAV_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSIAV_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSIAV_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSIAV_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>

                                                           
														</tbody>
													</table>
												</div>
											</div>
											
											<p class="text-center">
											<button href="" class="btn btn-info btn-raised btn-sm" style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy "></i> GUARDAR CAMBIOS</button>
											</p>
										</form>
									</div>
								</div>
							</div>
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