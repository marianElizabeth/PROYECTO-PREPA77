<!DOCTYPE html>
<html lang="es">
<head>
	<title>Datos personales</title>
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
					<img src="./assets/img/avatar.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
				</figure>
				<ul class="full-box list-unstyled text-center">
					<li>
						<a href="#!">
							<i class="zmdi zmdi-settings"></i>
						</a>
					</li>
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
							<a href="DatosAlumno.php"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Datos Alumno</a>
						</li>
						
						<li>
							<a href="VerInformacionAlumno.html"><i class="zmdi zmdi-eye zmdi-hc-fw"></i>Ver información</a>
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
							<a href="VerInformacionDocente.html"><i class="zmdi zmdi-eye zmdi-hc-fw"></i>Ver información</a>
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
				<li>
					<a href="#!" class="btn-Notifications-area">
						<i class="zmdi zmdi-notifications-none"></i>
						<span class="badge">1</span>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i> Datos personales <small>Docente</small></h1>
			</div>
			<p class="lead">Aquí podrá actualizar e insertar información del docente </p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">				  	
						<li class="active"><a href="Nuevo" data-toggle="tab">Nuevo</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="Nuevo">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="">
											<ul class="nav nav-tabs" style="margin-bottom: 15px;">
												<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-face zmdi-hc-fw"></i>Información Personal</a></li>
										    </ul>
									    	<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre(s)</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNombreDocente">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Paterno</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApePDocente">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Materno</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApeMDocente">
											</div>											
											<div class="form-group">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de nacimiento</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaNacimientoDocente">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">R.F.C</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtRFCDocente">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">CURP</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCURPDocente">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Clave ISSEMYM</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtClaveISSEMYM">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono fijo (incluir lada)</label>
											  <input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtTelefonoFijoDocente">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono celular</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtTelefonoCelularDocente">
											</div>
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Calle</label>
												<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalleDocente">
											  </div>

												<div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNumDocente">
												</div>
												
											  <div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Colonia</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtColoniaDocente">
												</div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Localidad</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtLocalidadDocente">
												  </div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Código Postal</label>
													<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCPDocente">
												</div>												  												 												
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Municipio</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.644); font-size: 100%;" name="cmbMunicipio">
														<option>--Seleccione--</option>
														<option>Jilotepec</option>
														<option>Chapa de Mota</option>
													  </select>
												</div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estado</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbEstado">
														<option>--Seleccione--</option>
														<option>México</option>
														<option>Hidaldo</option>
														<option>Quéretaro</option>
														<option>Michoacan</option>
													  </select>
												  </div>
												  
												  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-home zmdi-hc-fw"></i>Datos del Centro de Trabajo</a></li>
												</ul>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre de la escuela</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNombreEscuelaDocente">
												  </div>
												  <div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">C.C.T</label>
													<input class="form-control"  style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCCTDocente">
												  </div>
												  <div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono(incluir clave lada)</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNumTelEscDocente">
												  </div>
												  <div class="form-group">
														  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Turno(s)</label>
															<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbTurnoEscDocente">
															  <option>--Seleccione--</option>
															  <option>Matutino</option>
															  <option>Vespertino</option>
															  <option>Matutino/Vespertino</option>
															  <option>Nocturno</option>
															</select>
														</div>	
												  <div class="form-group label-floating" >
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Calle</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCalleEscDocente">
													</div>
	  
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNumeroEscDocente">
													  </div>
													  
													<div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Colonia</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtColoniaEscDocente">
													  </div>
													  <div class="form-group label-floating">
														  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Código Postal</label>
														  <input class="form-control"  style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCodPostalEscDocente">
														</div>
														<div class="form-group label-floating">
														  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Localidad</label>
														  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtLocalidadEscDocente">
														</div>
														<div class="form-group">
														  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Municipio</label>
															<select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbMunicipioEscDocente">
															  <option>--Seleccione--</option>
															  <option>Jilotepec</option>
															  <option>Chapa de Mota</option>
															</select>
														</div>											
													  <div class="form-group">
														  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estado</label>
															<select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbEstadoEscDocente">
															  <option>--Seleccione--</option>
															  <option>México</option>
															  <option>Hidaldo</option>
															  <option>Quéretaro</option>
															  <option>Michoacan</option>
															</select>
												<ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Preparación Profesional</a></li>
												</ul>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Licenciatura en:</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtLicDocente">
												  </div>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estatus</label>
													<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbEstatusDocente">
													  <option>--Seleccione--</option>
													  <option>Titulado</option>
													  <option>Pasante</option>
													</select>
												</div>
												<div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">No. Cédula Profesional</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNo.CedulaProfDocente">
												</div>
												<div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Escuela de Egresión:</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtEscEgresion">
												</div>
												<div class="form-group">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="fechaEgresion">
												</div>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Especialización en:</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbEspecializacion">
														<option>--Seleccione--</option>
														<option>.....</option>
														<option>********</option>
														<option>---------</option>
													  </select>
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Egreso</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="fechaEgresoEspecializacion">
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Diplomado en:</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbDiplomado">
														<option>--Seleccione--</option>
														<option>.....</option>
														<option>********</option>
														<option>---------</option>
													  </select>
												  </div>
												<div class="form-group">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Egreso</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="date" name="fechaEgresoDiplomado">
												</div>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Maestria en:</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbMaestria">
														<option>--Seleccione--</option>
														<option>.....</option>
														<option>********</option>
														<option>---------</option>
													  </select>
												  </div>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estatus</label>
													<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbEstatusMaestria">
													  <option>--Seleccione--</option>
													  <option>Titulado</option>
													  <option>Pasante</option>
													</select>
												</div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">No. Cédula Profesional</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNo.CedulaMaestria">
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Doctorado en:</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbDoctorado">
														<option>--Seleccione--</option>
														<option>.....</option>
														<option>********</option>
														<option>---------</option>
													  </select>
												  </div>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estatus</label>
													<select class="form-control" style="color: rgba(0, 0, 0, 0.644); font-size: 100%;" name="cmbEstatusDoctorado">
													  <option>--Seleccione--</option>
													  <option>Titulado</option>
													  <option>Pasante</option>
													</select>
												</div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">No. Cédula Profesional</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtN.CedulaDoctorado">
												  </div>
												<ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-case zmdi-hc-fw"></i>Datos Laborales</a></li>
												</ul>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso al S. Educativo Estatal</label>
													<input class="form-control" type="date" name="fechaIngresoSEducativo">
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso al Nivel</label>
													<input class="form-control" type="date" name="fechaIngresoNivel">
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Base en el Nivel</label>
													<input class="form-control" type="date" name="fechaBaseNivel">
												  </div>
												  <div class="form-group label-floating">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Puesto Funcional</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtPuestoFuncional">
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso al Cargo</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaIngresoCargo">
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso a la Institución</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaIngresoInstitucional">
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso a la Carrera Docente</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaCarreraDocente">
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nivel</label>
														<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbNivel">
														  <option>--Seleccione--</option>
														  <option>A</option>
														  <option>B</option>
														  <option>C</option>
														  <option>D</option>
														  <option>E</option>
														</select>
													</div>
												<ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-city zmdi-hc-fw"></i>Escuela donde Labora</a></li>
												</ul>
												<div class="col-xs-12 col-md-10 col-md-offset-1">
													<form action="">
														<table class="table table-bordered">
															<thead>
																<tr>
																	<th scope="col">Escuela</th>
																	<th scope="col">Puesto o Asignatura que atiende</th>
																	<th scope="col">No. de Horas</th>
																</tr>
															</thead>
															<tbody>
																<tr>
																	<th scope="row">																												
																		  <select class="form-control">
																			<option>--Seleccione--</option>
																			<option>México</option>
																			<option>Hidaldo</option>
																			<option>Quéretaro</option>
																			<option>Michoacan</option>
																		  </select>												  
																	</th>
																	<td>
																		<select class="form-control">
																			<option>--Seleccione--</option>
																			<option>México</option>
																			<option>Hidaldo</option>
																			<option>Quéretaro</option>
																			<option>Michoacan</option>
																		  </select>
																	</td>
																	<td>
																		<input class="table form-control" type="text">
																	</td>
																</tr>
															</tbody>
														  </table>
														  <div class="form-group label-floating">
															<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número de Plaza</label>
															<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNo.Plaza">
														</div>	
														<div class="form-group label-floating">
															<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número de Prelación</label>
															<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNumPrelacion">
														</div>	
														<div class="form-group label-floating">
															<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Escuela de Asignación</label>
															<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtEscuelaAsignacion">
														</div>	
														<div class="form-group label-floating">
															<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número de Horas</label>
															<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNumHoras">
														</div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm" style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy"></i> GUARDAR CAMBIOS</button>
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