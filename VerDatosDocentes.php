<!DOCTYPE html>
<html lang="es">
<head>
	<title>Ver Datos Docentes</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-eye zmdi-hc-fw"></i> Datos <small>Docente</small></h1>
			</div>
			<p class="lead">En está sección puedes visualizar toda su información</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li><a href="" data-toggle="tab"></a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
					  	
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">Apellido Paterno</th>
											<th class="text-center">Apellido Materno</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Fecha de Nacimiento</th>
											<th class="text-center">RFC</th>
											<th class="text-center">CURP</th>
											<th class="text-center">Clave ISSEMYM</th>
											<th class="text-center">Calle</th>
											<th class="text-center">Número</th>
											<th class="text-center">Colonia</th>
											<th class="text-center">Localidad</th>
											<th class="text-center">Municipio</th>											
											<th class="text-center">Codigo Postal</th>
                                            <th class="text-center">Telefono Celular</th>

											<th class="text-center">Nombre de la Escuela</th>
											<th class="text-center">C.C.T.</th>
											<th class="text-center">Turno</th>
											<th class="text-center">Calle</th>
											<th class="text-center">Número</th>
											<th class="text-center">Colonia</th>
											<th class="text-center">Localidad</th>
											<th class="text-center">Municipio</th>											
											<th class="text-center">Codigo Postal</th>
                                            <th class="text-center">Telefono</th>

											<th class="text-center">Fecha de Ingreso al S. Educativo Estatal</th>
											<th class="text-center">Años</th>
											<th class="text-center">Meses</th>
											<th class="text-center">Fecha de Ingreso al Nivel</th>
											<th class="text-center">Años</th>
											<th class="text-center">Meses</th>
											<th class="text-center">Puesto Funcional</th>
											<th class="text-center">Fecha de Ingreso al Cargo</th>
											<th class="text-center">Fecha de Ingreso a la Institución</th>
											<th class="text-center">Años</th>
											<th class="text-center">Meses</th>
											<th class="text-center">Fecha de Ingreso a la Carrera Docente</th>											
											<th class="text-center">Nivel</th>
                                            <th class="text-center">Punto Escalafonario</th>
											<th class="text-center">Actualizar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>

										<?php
										include("funciones/conexion.php");
									  
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
										";
										
									$resultado = mysqli_query($conexion, $sentencia);
									$resultado1 = mysqli_query($conexion, $sentencia1);
									$resultado2 = mysqli_query($conexion, $sentencia2);	

									while($registro = mysqli_fetch_assoc($resultado)){
										echo "
										<tr>
										  <td>".$registro["ape2Docente"]."</td>
										  <td>".$registro["ape1Docente"]."</td>
										  <td>".$registro["nombreDocente"]."</td>
										  <td>".$registro["fechaNacimientoDocente"]."</td>
										  <td>".$registro["RFCDocente"]."</td>
										  <td>".$registro["CURPDocente"]."</td>
										  <td>".$registro["claveISSEMYM"]."</td>
										  <td>".$registro["calleDocente"]."</td>
										  <td>".$registro["numeroDocente"]."</td>
										  <td>".$registro["coloniaDocente"]."</td>
										  <td>".$registro["localidad"]."</td>
										  <td>".$registro["descripcionMunicipio"]."</td>
										  <td>".$registro["CPDocente"]."</td>
										  <td>".$registro["telefonoCelular"]."</td>
										  
										 ";
										 if($registro1 = mysqli_fetch_assoc($resultado1)){
											echo "
											  <td>".$registro1["nombreEscuela"]."</td>
											  <td>".$registro1["CCTEscuela"]."</td>
											  <td>".$registro1["descripcionTurno"]."</td>
											  <td>".$registro1["calleEscuela"]."</td>
											  <td>".$registro1["numeroEscuela"]."</td>
											  <td>".$registro1["coloniaEscuela"]."</td>
											  <td>".$registro1["localidad"]."</td>
											  <td>".$registro1["descripcionMunicipio"]."</td>
											  <td>".$registro1["CPEscuela"]."</td>
											  <td>".$registro1["telefonoEscuela"]."</td>
											  
												";
											}
											if($registro2 = mysqli_fetch_assoc($resultado2)){
												echo "
												  <td>".$registro2["fechaDeIngresoSEducativoEstatal"]."</td>
												  <td>".$registro2["AÑOSE"]."</td>
												  <td>".$registro2["MESSE"]."</td>
												  <td>".$registro2["fechaDeIngresoAlNivel"]."</td>
												  <td>".$registro2["AÑOSIN"]."</td>
												  <td>".$registro2["MESESBN"]."</td>
												  <td>".$registro2["descripcionInstitucional"]."</td>
												  <td>".$registro2["fechaDeIngresoAlCargo"]."</td>
												  <td>".$registro2["fechaDeIngresoInstitucion"]."</td>
												  <td>".$registro2["AÑOSII"]."</td>
												  <td>".$registro2["MESESII"]."</td>
												  <td>".$registro2["fechaDeIngresoCarreraDocente"]."</td>
												  <td>".$registro2["descripcionNivelLaboral"]."</td>
												  <td>".$registro2["puntajeEscalafonario"]."</td>
													";
												}
											echo"
											<td><a href='actualizar-docente.php?CurpUpdate=".$registro["CURPDocente"]."' class='btn btn-success btn-raised btn-xs'><i class='zmdi zmdi-refresh'></i></a></td>
											<td><a href='funciones/eliminar-datosDocente.php?CurpDelete=".$registro["CURPDocente"]."'><button class='btn btn-danger btn-raised btn-xs' type='button' onclick='return confirmarEliminar()'><i class='zmdi zmdi-delete'></i></button></a></td>
											</tr>
											";
										  }																										 
										  mysqli_close($conexion);
										?>
										<script type="text/javascript">
											function confirmarEliminar(){
												var respuesta = confirm("Esta seguro de Eliminar");
												if(respuesta==false){
													return false;
												}
												else{
													return true;
												}
											}
										</script>
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