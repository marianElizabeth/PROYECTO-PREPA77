<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calificaciones Tercer Semestre</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Calificaciones <small>Tercer Semestre</small></h1>
			</div>
			<p class="lead">Aquí podrá insertar todas las calificaciones del tercer semestre</p>
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
										<form action="funciones/caltercersemestre.php" method="POST">
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
                                                                <th class="text-center">Matemáticas III</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalMateIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalMateIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalMateIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateIII_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateIII_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateIII_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateIII_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraMateIII_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateIII_3" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Biología I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaBiologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaBiologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaBiologiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalBiologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalBiologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalBiologiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraBiologiaI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraBiologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraBiologiaI_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraBiologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraBiologiaI_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraBiologiaI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraBiologiaI_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraBiologiaI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Física I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaFisicaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaFisicaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaFisicaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalFisicaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalFisicaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalFisicaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraFisicaI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraFisicaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraFisicaI_2" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraFisicaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraFisicaI_3" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraFisicaI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraFisicaI_4" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraFisicaI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Historia de México I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHMI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHMI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHMI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHMI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHMI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHMI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHMI_1" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHMI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHMI_2" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHMI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHMI_3" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHMI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHMI_4" value="0"maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHMI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Inglés III</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalInglesIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalInglesIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalInglesIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesIII_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesIII_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesIII_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesIII_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraInglesIII_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesIII_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Literatura I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaLiteraturaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaLiteraturaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaLiteraturaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalLiteraturaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalLiteraturaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalLiteraturaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraLiteraturaI_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraLiteraturaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraLiteraturaI_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraLiteraturaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraLiteraturaI_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraLiteraturaI_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraLiteraturaI_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraLiteraturaI_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Gestión de Archivos de Texto</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaGAT_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaGAT_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaGAT_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalGAT_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalGAT_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalGAT_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGAT_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGAT_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGAT_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGAT_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGAT_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGAT_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraGAT_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraGAT_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Hoja de Cálculo Aplicada</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHCA_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHCA_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHCA_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHCA_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHCA_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHCA_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHCA_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHCA_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHCA_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHCA_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHCA_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHCA_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHCA_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHCA_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Actividades Físicas, Deportivas y Recreativas III</th>
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
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraAACIII_2"value="0"  maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraAACIII_3" value="0"  maxlength="2">
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
                                                                <th class="text-center">Salud Integral del Adolescente III</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSaludIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSaludIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSaludIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSaludIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSaludIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalSaludIII_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSaludIII_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludIII_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSaludIII_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludIII_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSaludIII_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludIII_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraSaludIII_4" value="0"  maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludIII_4" maxlength="2">
                                                                </td>                                           
                                                            </tr>

                                                            <tr class="text-center">    
                                                                <th class="text-center">Habilidades de Razonamiento</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHR_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHR_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaHR_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHR_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHR_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalHR_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHR_1" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHR_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHR_2" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHR_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHR_3" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHR_3" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtCalExtraHR_4" value="0" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraHR_4" maxlength="2">
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