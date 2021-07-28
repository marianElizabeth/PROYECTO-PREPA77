<!DOCTYPE html>
<html lang="es">
<head>
	<title>Calificaciones Primer Semestre</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-assignment-o zmdi-hc-fw"></i>Calificaciones <small>Primer Semestre</small></h1>
			</div>
			<p class="lead">Aquí podrá insertar todas las calificaciones del primer semestre</p>
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
										<form action="funciones/calprimersemestre.php" method="POST">
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
                                                                <th class="text-center">Matemáticas I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMateI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalMateI_1" maxlength="4">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalMateI_2" maxlength="4">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalMateI_3" maxlength="4">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMateI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateI_1" >
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMateI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMateI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMateI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMateI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Química I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaQuimicaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaQuimicaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaQuimicaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalQuimicaI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalQuimicaI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalQuimicaI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraQuimicaI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraQuimicaI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraQuimicaI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraQuimicaI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraQuimicaI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraQuimicaI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraQuimicaI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraQuimicaI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Metodología de la Investigación I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMetodologiaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMetodologiaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaMetodologiaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalMetodologiaI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalMetodologiaI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalMetodologiaI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMetodologiaI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMetodologiaI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMetodologiaI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMetodologiaI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMetodologiaI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMetodologiaI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraMetodologiaI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraMetodologiaI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Taller de Lectura y Redacción I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaTallerI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaTallerI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaTallerI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalTallerI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalTallerI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalTallerI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraTallerI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraTallerI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraTallerI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraTallerI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraTallerI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraTallerI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraTallerI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraTallerI_4" >
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Inglés I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInglesI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalInglesI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalInglesI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalInglesI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInglesI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInglesI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInglesI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInglesI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInglesI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Informática I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInfoI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInfoI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaInfoI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalInfoI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalInfoI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalInfoI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInfoI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInfoI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInfoI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInfoI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInfoI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInfoI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraInfoI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraInfoI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Ética I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaEticaI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaEticaI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaEticaI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalEticaI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalEticaI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalEticaI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraEticaI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEticaI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraEticaI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEticaI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraEticaI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEticaI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraEticaI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraEticaI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Actividades Físicas, Deportivas y Recreativas I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAFDRI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAFDRI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAFDRI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalAFDRI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalAFDRI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalAFDRI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAFDRI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAFDRI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAFDRI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAFDRI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAFDRI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAFDRI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAFDRI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAFDRI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Actividades Artísticas y Culturales I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAACI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAACI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaAACI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalAACI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalAACI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalAACI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAACI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAACI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACI_2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAACI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACI_3">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraAACI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraAACI_4">
                                                                </td>                                           
                                                            </tr>
                                                            <tr class="text-center">    
                                                                <th class="text-center">Salud Integral del Adolecente I</th>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSaludI_1" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSaludI_2" maxlength="2">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="number" name="txtFaltaSaludI_3" maxlength="2">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalSaludI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalSaludI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalSaludI_3" maxlength="5">
                                                                </td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td></td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraSaludI_1" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludI_1">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraSaludI_2" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludI_2" >
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraSaludI_3" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludI_3" >
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalExtraSaludI_4" maxlength="5">
                                                                </td>
                                                                <td>
                                                                    <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="txtFechaCalExtraSaludI_4">
                                                                </td>                                           
                                                            </tr>
                                                            
														</tbody>
													</table>
												</div>
											</div>
											
											<p class="text-center">
											<button href="" class="btn btn-info btn-raised btn-sm" style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy "></i> GUARDAR</button>
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