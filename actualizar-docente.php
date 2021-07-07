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
				    <img src="./assets/img/usuario.jpg" alt="UserIcon">
					<figcaption class="text-center text-titles">User Name</figcaption>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-refresh zmdi-hc-fw"></i> Datos<small> Docente</small></h1>
			</div>
			<p class="lead">En esta sección puedes actualizar toda tú información</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
				
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">				  	
						<li class="active"><a href="Nuevo" data-toggle="tab">Nuevo</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
                    <div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
                                    <?php
                                        include("funciones/conexion.php");
                                        $CURPDocenteUpdate=$_GET['CurpUpdate']; 

                                        $sentencia = "SELECT
                                        datosdocentes.ape2Docente, 
                                        datosdocentes.ape1Docente, 
                                        datosdocentes.nombreDocente, 
                                        datosdocentes.fechaNacimientoDocente, 
                                        datosdocentes.RFCDocente, 
                                        datosdocentes.CURPDocente, 
                                        datosdocentes.claveISSEMYM, 
                                        datosdocentes.calleDocente, 
                                        datosdocentes.numeroDocente, 
                                        datosdocentes.coloniaDocente, 
                                        localidad.localidad, 
                                        municipio.descripcionMunicipio, 
                                        datosdocentes.CPDocente, 
                                        datosdocentes.telefonoCelular
                                        FROM
                                        datosdocentes
                                        INNER JOIN
                                        localidad
                                        ON 
                                            datosdocentes.idLocalidad = localidad.idLocalidad
                                        INNER JOIN
                                        municipio
                                        ON 
                                            localidad.idMunicipio = municipio.idMunicipio
                                        WHERE datosdocentes.CURPDocente  = '$CURPDocenteUpdate'
										
										";
										
										$sentencia1 = "SELECT
										escuela.nombreEscuela, 
										escuela.CCTEscuela, 
										turno.descripcionTurno, 
										escuela.calleEscuela, 
										escuela.numeroEscuela, 
										escuela.coloniaEscuela, 
										localidad.localidad, 
										municipio.descripcionMunicipio, 
										escuela.CPEscuela, 
										escuela.telefonoEscuela
									    FROM
										datosdocentes
										INNER JOIN
										escuela
										ON 
											datosdocentes.CCTEscuela = escuela.CCTEscuela
										INNER JOIN
										turno
										ON 
											escuela.idTurno = turno.idTurno
										INNER JOIN
										localidad
										ON 
											escuela.idLocalidad = localidad.idLocalidad
										INNER JOIN
										municipio
										ON 
											localidad.idMunicipio = municipio.idMunicipio
                                        WHERE 
                                        datosdocentes.CURPDocente  = '$CURPDocenteUpdate'
									";		
									
									    $sentencia2 = "SELECT
                                            datosdocentes.CURPDocente, 
                                            datosdocentes.fechaDeIngresoSEducativoEstatal,
                                            TIMESTAMPDIFF(YEAR, fechaDeIngresoSEducativoEstatal, CURDATE()) AS 'AÑOSE', 
                                            TIMESTAMPDIFF(MONTH, fechaDeIngresoSEducativoEstatal, CURDATE()) AS 'MESSE', 
                                            datosdocentes.fechaDeIngresoAlNivel, 
                                            TIMESTAMPDIFF(YEAR, fechaDeIngresoAlNivel, CURDATE()) AS 'AÑOSIN', 
                                            TIMESTAMPDIFF(MONTH, fechaDeIngresoAlNivel, CURDATE()) AS 'MESESIN', 
                                            datosdocentes.fechaDeBaseAlNivel, 
                                            TIMESTAMPDIFF(YEAR, fechaDeBaseAlNivel, CURDATE()) AS 'AÑOSBN', 
                                            TIMESTAMPDIFF(MONTH, fechaDeBaseAlNivel, CURDATE()) AS 'MESESBN', 
                                            puestoinstitucional.descripcionInstitucional, 
                                            datosdocentes.fechaDeIngresoAlCargo, 
                                            datosdocentes.fechaDeIngresoInstitucion, 
                                            TIMESTAMPDIFF(YEAR, fechaDeIngresoInstitucion, CURDATE()) AS 'AÑOSII', 
                                            TIMESTAMPDIFF(MONTH, fechaDeIngresoInstitucion, CURDATE()) AS 'MESESII', 
                                            datosdocentes.fechaDeIngresoCarreraDocente, 
                                            nivellaboral.descripcionNivelLaboral, 
                                            datosdocentes.puntajeEscalafonario
                                            FROM
                                            datosdocentes
                                            INNER JOIN
                                            puestoinstitucional
                                            ON 
                                                datosdocentes.idPuestoInstitucional = puestoinstitucional.idPuestoInstitucional
                                            INNER JOIN
                                            nivellaboral
                                            ON 
                                                datosdocentes.idNivelLaboral = nivellaboral.idNivelLaboral
											WHERE 
                                            datosdocentes.CURPDocente  = '$CURPDocenteUpdate'
										";

                                       
										
									    $resultado = mysqli_query($conexion, $sentencia);
									    $resultado1 = mysqli_query($conexion, $sentencia1);
									    $resultado2 = mysqli_query($conexion, $sentencia2);
                                       



                                        $InfoPersonal=mysqli_fetch_assoc($resultado);
                                        $CentroTrabajo=mysqli_fetch_assoc($resultado1);
                                        $DatosLaborales=mysqli_fetch_assoc($resultado2);
										mysqli_close($conexion);

                                    ?>
										<form action="funciones/actualizar-datosDocente.php" method="POST">
										<ul class="nav nav-tabs" style="margin-bottom: 15px;">
												<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-face zmdi-hc-fw"></i>Información Personal</a></li>
										    </ul>
									    	<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre(s)</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNombreDocente" value="<?php echo $InfoPersonal['nombreDocente']?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Paterno</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApePDocente" value="<?php echo $InfoPersonal['ape1Docente']?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Apellido Materno</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtApeMDocente" value="<?php echo $InfoPersonal['ape2Docente']?>">
											</div>											
											<div class="form-group">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de nacimiento</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaNacimientoDocente" value="<?php echo $InfoPersonal['fechaNacimientoDocente']?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">R.F.C</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtRFCDocente" minlength="1" maxlength="10" value="<?php echo $InfoPersonal['RFCDocente']?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">CURP</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="hidden" name="txtCURPDocente" minlength="1" maxlength="18" value="<?php echo $InfoPersonal['CURPDocente']?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Clave ISSEMYM</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtClaveISSEMYM" minlength="1" maxlength="10" value="<?php echo $InfoPersonal['claveISSEMYM']?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Teléfono celular</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtTelefonoCelularDocente" minlength="1" maxlength="15" value="<?php echo $InfoPersonal['telefonoCelular']?>">
											</div>
											<div class="form-group label-floating">
												<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Calle</label>
												<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCalleDocente" minlength="1" maxlength="30" value="<?php echo $InfoPersonal['calleDocente']?>">
											  </div>

												<div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNumDocente" minlength="1" maxlength="10" value="<?php echo $InfoPersonal['numeroDocente']?>">
												</div>
												
											  <div class="form-group label-floating">
												  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Colonia</label>
												  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtColoniaDocente" value="<?php echo $InfoPersonal['coloniaDocente']?>">
												</div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Localidad</label>
													<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtLocalidadDocente">
															<option><?php echo $InfoPersonal['localidad']?></option>
															<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM localidad";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regLocalidad=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regLocalidad['localidad']."'>".$regLocalidad["localidad"]."</option>
																";
																}
																mysqli_close($conexion);
															?>
														  </select>
												  </div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Código Postal</label>
													<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtCPDocente" minlength="1" maxlength="6" value="<?php echo $InfoPersonal['CPDocente']?>">
												</div>												  												 												
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Municipio</label>
													  <select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="cmbMunicipio">
														<option><?php echo $InfoPersonal['descripcionMunicipio']?></option>
														<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM municipio";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regMunicipio=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regMunicipio['descripcionMunicipio']."'>".$regMunicipio["descripcionMunicipio"]."</option>
																";
																}
																mysqli_close($conexion);
															?>
													  </select>
												</div>
												  <div class="form-group"><!--POR QUE ESTA ESTADO
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estado</label>
													  <select class="form-control" style="color: rgba(0, 0, 0, 0.664); font-size: 100%;" name="cmbEstado">
														<option>--Seleccione--</option>
														<option>México</option>
														<option>Hidaldo</option>
														<option>Quéretaro</option>
														<option>Michoacan</option>
													  </select>-->
												  </div>
												  
												  <ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-home zmdi-hc-fw"></i>Datos del Centro de Trabajo</a></li>
												</ul>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nombre de la escuela</label>
													<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNombreEscuelaDocente">
														<option><?php echo $CentroTrabajo['nombreEscuela']?></option>
														<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM escuela";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regEsc=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regEsc['nombreEscuela']."'>".$regEsc["CCTEscuela"].".".$regEsc["nombreEscuela"]."</option>
																";
																}
																mysqli_close($conexion);
															?>
													  </select>
												  </div><!--
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
															</select>-->
                                                            <ul class="nav nav-tabs" style="margin-bottom: 15px;">
													<li class="active"><a href="" data-toggle="tab" ><i class="zmdi zmdi-case zmdi-hc-fw"></i>Datos Laborales</a></li>
												</ul>
												<div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso al S. Educativo Estatal</label>
													<input class="form-control" type="date" name="fechaIngresoSEducativo" value="<?php echo $DatosLaborales['fechaDeIngresoSEducativoEstatal']?>">
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso al Nivel</label>
													<input class="form-control" type="date" name="fechaIngresoNivel" value="<?php echo $DatosLaborales['fechaDeIngresoAlNivel']?>">
												  </div>
												  <div class="form-group">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Base en el Nivel</label>
													<input class="form-control" type="date" name="fechaBaseNivel" value="<?php echo $DatosLaborales['fechaDeBaseAlNivel']?>">
												  </div>
												  <div class="form-group label-floating">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Puesto Funcional</label>
													  <select class="form-control" style="color: rgba(0, 0, 0); font-size: 100%;" name="cmbPuestoFuncional">
														<option><?php echo $DatosLaborales['descripcionInstitucional']?></option>
														<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM puestoInstitucional";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regPuestoInstitucional=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regPuestoInstitucional['descripcionInstitucional']."'>".$regPuestoInstitucional["descripcionInstitucional"]."</option>
																";
																}
																mysqli_close($conexion);
															?>
													  </select>
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso al Cargo</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaIngresoCargo" value="<?php echo $DatosLaborales['fechaDeIngresoAlCargo']?>">
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso a la Institución</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaIngresoInstitucional" value="<?php echo $DatosLaborales['fechaDeIngresoInstitucion']?>">
													</div>
													<div class="form-group">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Fecha de Ingreso a la Carrera Docente</label>
													  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="date" name="fechaCarreraDocente" value="<?php echo $DatosLaborales['fechaDeIngresoCarreraDocente']?>">
													</div>
													<div class="form-group label-floating">
													  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Nivel</label>
														<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbNivel">
														  <option><?php echo $DatosLaborales['descripcionNivelLaboral']?></option>
														  <?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM nivelLaboral";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regNivelLaboral=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regNivelLaboral['descripcionNivelLaboral']."'>".$regNivelLaboral["descripcionNivelLaboral"]."</option>
																";
																}
																mysqli_close($conexion);
															?>
														</select>
													</div>
													<div class="form-group label-floating">
														<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Puntaje Escalafonario</label>
														<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtPuntajeEscalafonario" minlength="1" maxlength="8" value="<?php echo $DatosLaborales['puntajeEscalafonario']?>">
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
</html>