<!DOCTYPE html>
<html lang="es">
<head>
	<title>Datos Generales</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Datos<small> Alumno</small></h1>
			</div>
			<p class="lead">En esta sección puedes ingresar toda tú información</p>
		</div>
		<div class="container-fluid" >
			<div class="row" >
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="Nuevo" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="" data-toggle="tab"></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="Nuevo" >
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1" >
									    <form action="">
											<ul class="nav nav-tabs" style="margin-bottom: 15px;">
												<li><a href="" data-toggle="tab" ><i class="zmdi zmdi-face zmdi-hc-fw"></i>Información Personal</a></li>
										    </ul>
							
									    	<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Matrícula</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtMatriculaAlum">
											</div>
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número de Expediente</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNumExpedienteAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Folio de Alumno</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtFolioAlum">
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Inscrito</label>
												  <select class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbInscritoAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM inscritoAlumno";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regInscrito=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regInscrito['idInscrito']."'>".$regInscrito["descripcionInscrito"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Grado</label>
												  <select class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbGradoAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM grado";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regGrado=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regGrado['idGrado']."'>".$regGrado["grado"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Grupo</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbGrupoAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM grupo";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regGrupo=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regGrupo['idGrupo']."'>".$regGrupo["grupo"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">CURP</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCurpAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Folio CURP</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtFolioCurpAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">RFC</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtRFCAlum">
											  </div>
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre(s)</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNombreAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Paterno</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"  type="text" name="txtApePAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Materno</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtApeMAlum">
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Sexo</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbSexoAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM sexo";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regSexo=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regSexo['idSexo']."'>".$regSexo["descripcionSexo"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Edad</label>
												<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbEdadAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM edad";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regEdad=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regEdad['idEdad']."'>".$regEdad["edad"]."</option>
														";
														}
													?>
												  </select>
											  </div>

											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Nacimiento</label>
												<input class="form-control" type="date" name="dateNacimiento" name="fechaNacimientoAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Municipio de Nacimiento</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtMunicipioNacimientoAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Etidad Federativa</label>
												<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbEntidadFederativaAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM entidadfederativa";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regEntidadFederativa=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regEntidadFederativa['idEntidadFederativa']."'>".$regEntidadFederativa["descripcionEntidad"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono Celular(10 digitos)</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtTelefonoCelAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono Fijo(10 digitos)</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtTelefonoFijoAlum">
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre Completo del Tutor</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNombreTutorAlum">
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Parentesco del Tutor</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbParentescoTutorAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM parentesco";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regParentesco=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regParentesco['idParentesco']."'>".$regParentesco["descripcionParentesco"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Tipo de Seguro Social</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbTipoSocialAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM tipoSeguroSocial";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regSeguroSocial=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regSeguroSocial['idSeguroSocial']."'>".$regSeguroSocial["tipoSeguroSocial"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número de Seguro Social</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNumSeguroSocialAlum">
											  </div>

											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Correo Electrónico Personal</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="email" name="txtCorreoPersonalAlum">
											</div>
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Correo Electrónico Institucional</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="email" name="txtCorreoInstitucionalAlum">
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">¿Trabaja?</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbTrabajaAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM alumnoTrabaja";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regAlumnoTrabaja=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regAlumnoTrabaja['idAlumnoTrabaja']."'>".$regAlumnoTrabaja["descripcionTrabaja"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Beca</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbBecaAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM beca";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regBeca=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regBeca['idBeca']."'>".$regBeca["tipoBeca"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Folio Beca</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtFolioBecaAlum">
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">De quien depende Economicamente</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbDependeEconomicamenteAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM parentesco";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regDepende=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regDepende['idParentesco']."'>".$regDepende["descripcionParentesco"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Ocupación de quien depende Economicamente</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbOcupacionDependeEconomicamenteAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM ocupacion";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regOcupacionDepende=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regOcupacionDepende['idOcupacion']."'>".$regOcupacionDepende["descripcionOcupacion"]."</option>
														";
														}
													?>
												  </select>
											  </div>
											  <div class="form-group">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Baja</label>
												<input class="form-control" type="date" style="color: rgba(0, 0, 0, 0.671); font-size: 100%;" name="fechaBajaAlum">
											  </div>
										    

											<ul class="nav nav-tabs" style="margin-bottom: 15px;">
												<li class= "disable"><a href="#Procedencia" data-toggle="tab" ><i class="zmdi zmdi-balance  zmdi-hc-fw"></i>Procedencia</a></li>
										    </ul>
										    
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Aciertos de Examen de Ingreso</label>
												<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtAciertosExamenIngresoAlum">
											  </div>

												<div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Secundaria de Procendecia</label>
												  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbSecundariaProcedenciaAlum">
													<option>--Seleccione--</option>
													<?php
														include("funciones/conexion.php");
														$sentencia="SELECT * FROM escuela";
														$resultado=mysqli_query($conexion,$sentencia);
														while($regEscuela=mysqli_fetch_assoc($resultado)){
														echo "
														<option value='".$regEscuela['CCTEscuela']."'>".$regEscuela["nombreEscuela"]."</option>
														";
														}
													?>
												  </select>
												</div>
												
											  <div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Promedio Egreso(Secundaria)</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtPromedioEgresoSecundariaAlum">
												</div>
										 
												<ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab"> <i class="zmdi zmdi-pin zmdi-hc-fw"></i>Dirección</a></li>
												</ul>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Calle</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCalleAlum">
												  </div>
	
													<div class="form-group label-floating">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNumeroAlum">
													</div>
													
												  <div class="form-group label-floating">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Colonia</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtColoniaAlum">
													</div>
													<div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Código Postal</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCodiopostalAlum">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Localidad</label>
														<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="cmbLocalidadAlum">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM localidad";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regLocalidad=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regLocalidad['idLocalidad']."'>".$regLocalidad["localidad"]."</option>
																";
																}
															?>
														  </select>
													  
													<div class="form-group"><!--POR QUE ESTA ESTADO
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estado</label>
														  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbEstado">
															<option>--Seleccione--</option>
															<option>México</option>
															<option>Hidaldo</option>
															<option>Quéretaro</option>
															<option>Michoacan</option>
														  </select>-->
													  </div>
													  <div class="form-group">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Municipio</label>
														  <select class="form-control" style="color: rgba(0, 0, 0, 0.74); font-size: 100%;" name="cmbMunicipio">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM municipio";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regMunicipio=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regMunicipio['idMunicipio']."'>".$regMunicipio["descripcionMunicipio"]."</option>
																";
																}
															?>
														  </select>
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Referencia</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtReferenciaAlum">
													  </div>
													  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
														<li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>Padre</a></li>
													</ul>
													<div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNombrePadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Paterno</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApePPadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Materno</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApeMPadre">
													  </div>
													  <div class="form-group">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Parentesco</label>
														  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbParentesco">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM parentesco";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regParentesco=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regParentesco['idParentesco']."'>".$regParentesco["descripcionParentesco"]."</option>
																";
																}
															?>
														  </select>
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Ocupacion</label>
														<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbOcupacionPadre">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM ocupacion";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regOcupacion=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regOcupacion['idOcupacion']."'>".$regOcupacion["descripcionOcupacion"]."</option>
																";
																}
															?>
															</select>
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono Celular(10 digítos)</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtTelefonoCelPadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Clave de Credencial de Elector</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtClaveElectorPadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">CURP</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtxCurpPadre">
													  </div>
													  <div class="form-group">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Ultimo Grado de Estudios</label>
														  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbUltimoGrado">
														  <option>--Seleccione--</option>
														  <?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM nivelEscolar";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regNivelEscolar=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regNivelEscolar['idNivelEscolar']."'>".$regNivelEscolar["descripcionNivelEscolar"]."</option>
																";
																}
															?>
														  </select>
													  </div>
													  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
														<li class="active"><a href="" data-toggle="tab"><i class="zmdi zmdi-female zmdi-hc-fw"></i>Madre</a></li>
													</ul>
													<div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNombreMadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Paterno</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApePMadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Materno</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApeMMadre">
													  </div>
													  <div class="form-group">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Parentesco</label>
														  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbParentesco">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM parentesco";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regParentesco=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regParentesco['idParentesco']."'>".$regParentesco["descripcionParentesco"]."</option>
																";
																}
															?>
														  </select>
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Ocupacion</label>
														<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbOcupacionMadre">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM ocupacion";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regOcupacion=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regOcupacion['idOcupacion']."'>".$regOcupacion["descripcionOcupacion"]."</option>
																";
																}
															?>
															</select>
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono Celular(10 digítos)</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtTelefonoCelMadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Clave de Credencial de Elector</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtClaveElectorMadre">
													  </div>
													  <div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">CURP</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtxCurpMadre">
													  </div>
													  <div class="form-group">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Ultimo Grado de Estudios</label>
														  <select class="form-control" style="color: rgba(0, 0, 0, 0); font-size: 100%;" name="cmbUltimoGrado">
															<option>--Seleccione--</option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM nivelEscolar";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regNivelEscolar=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regNivelEscolar['idNivelEscolar']."'>".$regNivelEscolar["descripcionNivelEscolar"]."</option>
																";
																}
															?>
														  </select>
													  </div>
													  
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm" style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy zmdi-hc-fw"></i>GUARDAR CAMBIOS</button>
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