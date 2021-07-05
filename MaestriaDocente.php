<!DOCTYPE html>
<html lang="es">
<head>
	<title>Maestria Docente</title>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-city zmdi-hc-fw"></i> Maestria <small>Docente</small></h1>
			</div>
			<p class="lead">Aquí podrá insertar y actualizar datos de su Maestria</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="" data-toggle="tab"></a></li>
					</ul>
                    <div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="Nuevo">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
										<form action="funciones/guardar-maestriaDocente.php" method="POST">
                                            <div class="form-group label-floating">
											  <label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">CURP</label>
											  <input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtCURPDocente">
											</div>
                                            <div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Maestria en:</label>
													  <select class="form-control" style="color: rgba(0, 0, 0); font-size: 100%;" name="cmbMaestria">
														<option>--Seleccione--</option>
														<?php
																include("funciones/conexion.php");
																$sentencia="SELECT * FROM maestria";
																$resultado=mysqli_query($conexion,$sentencia);
																while($regMaestria=mysqli_fetch_assoc($resultado)){
																echo "
																<option value='".$regMaestria['idMaestria']."'>".$regMaestria["descripcionMaestria"]."</option>
																";
																}
															?>
													  </select>
												  </div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Estatus</label>
													<select class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;" name="cmbEstatusMaestria">
													  <option>--Seleccione--</option>
													  <option>Titulado</option>
													  <option>Pasante</option>
													</select>
												</div>
												<div class="form-group label-floating">
													<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">No. Cédula Profesional</label>
													<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"type="text" name="txtNoCedulaMaestria">
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