<!DOCTYPE html>
<html lang="es">
<head>
	<title>Escuela donde labora</title>
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
						<i class="zmdi zmdi-card zmdi-hc-fw"></i>Datos del Alumno<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="DatosGenerales.html"><i class="zmdi zmdi-face zmdi-hc-fw"></i>Datos Generales</a>
						</li>
						<li>
							<a href="Procedencia.html"><i class="zmdi zmdi-balance  zmdi-hc-fw"></i>Procedencia</a>
						</li>
						<li>
							<a href="Direccion.html"><i class="zmdi zmdi-pin zmdi-hc-fw"></i>Dirección</a>
						</li>
						<li>
							<a href="Padres.html"><i class="zmdi zmdi-male-female zmdi-hc-fw"></i>Padres</a>
						</li>
						<li>
							<a href="VerInformacionAlumno.html"><i class="zmdi zmdi-eye zmdi-hc-fw"></i>Ver información</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="#!" class="btn-sideBar-SubMenu">
						<i class="zmdi zmdi-account zmdi-hc-fw"></i>Datos del Docente<i class="zmdi zmdi-caret-down pull-right"></i>
					</a>
					<ul class="list-unstyled full-box">
						<li>
							<a href="DatosPersonales.html"><i class="zmdi zmdi-male-alt zmdi-hc-fw"></i>Datos Personales</a>
						</li>
						<li>
							<a href="DatosCentroTrabajo.html"><i class="zmdi zmdi-home zmdi-hc-fw"></i>Datos del Centro de Trabajo</a>
						</li>
						<li>
							<a href="PreparacionProfesional.html"><i class="zmdi zmdi-graduation-cap zmdi-hc-fw"></i>Preparación Profesional</a>
						</li>
						<li>
							<a href="DatosLaborales.html"><i class="zmdi zmdi-case zmdi-hc-fw"></i>Datos Laborales</a>
						</li>
						<li>
							<a href="EscuelaDondeLabora.html"><i class="zmdi zmdi-city zmdi-hc-fw"></i>Escuelas Donde Labora</a>
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
			  <h1 class="text-titles"><i class="zmdi zmdi-city zmdi-hc-fw"></i> Escuela donde labora <small>Docente</small></h1>
			</div>
			<p class="lead">Aquí podrá insertar y actualizar datos de la escuela donde labora</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="" data-toggle="tab">Nuevo</a></li>
					  	<li><a href="" data-toggle="tab"></a></li>
					</ul>

					<div class="position-relative">
  <div class="position-absolute top-50 start-0 translate-middle-x">
  <form action="EscuelaDondeLabora.php" method="POST" class="row row-cols-lg-auto g-3 align-items-center">
    <div class="form-group label-floating">
			<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Numero de Escuelas donde labora</label>
			<input class="form-control" style="color: rgb(0, 0, 0); font-size: 100%;"  type="text" name="txtNumEscuelasLabora">
		 </div>
  <div class="col-12">
  <input type="submit" value="Enviar" class="btn btn-primary" name = "btn1">
  </div>
  </form>
  </div>
  </div>
<br>
<br>
<?php
  if (isset($_POST['btn1']))
  {
    $numEscuelas=$_POST['txtNumEscuelasLabora'];
    crearEcuelas($numEscuelas);
  }
  function crearEcuelas($nE){
    for ($i = 0 ; $i<$nE ; $i++){
      echo "<form action='EscuelaDondeLabora.php' method='POST' class='row row-cols-lg-auto g-3 align-items-center'>";
      echo "<div id='myTabContent'class='tab-content'>";
			echo "<div class='table-responsive'>";
			echo "<table class='table table-hover text-center'>";
			echo "<thead>";
	    echo "<tr>";
			echo "<th class='text-center'>Nombre de la escuela</th>";
			echo "<th class='text-center'>Puesto o Asignatura que atiende</th>";
			echo "<th class='text-center'>No. Horas</th>";
			echo "</tr";
			echo "</thead>";
			echo "<tbody>";
			echo "<tr>";
			echo "<td>";
			echo "<select class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;' name='cmbNombreEscuela'>";
			echo "<option>--Seleccione--</option>";
			echo "<option>A</option>";
			echo "<option>B</option>";
			echo "<option>C</option>";
			echo "<option>D</option>";
			echo "<option>E</option>";
			echo "</select>";
		  echo "</td>";
			echo "<td>";
			echo "<select class='form-control' style='color: rgb(0, 0, 0); font-size: 100%;' name='cmbPuesto'>";
			echo "<option>--Seleccione--</option>";
			echo "<option>A</option>";
			echo "<option>B</option>";
			echo "<option>C</option>";
			echo "<option>D</option>";
			echo "<option>E</option>";
			echo "</select>";
			echo "</td>";
			echo "<td>";
			echo "<input class='form-control'style='color: rgb(0, 0, 0); font-size: 100%;' type='text' name='txtNoHoras'>";
			echo "</td>";
			echo "</tr>";
			echo "</tbody>";
			echo "</table>";
			echo "</div>";
			echo "</div>";
      echo "</form>";
    }
  }
?>
<div class="form-group label-floating">
															<label class="control-label" style="color: rgb(0, 0, 0); font-size: 120%;">Número de Plaza</label>
															<input class="form-control"style="color: rgb(0, 0, 0); font-size: 100%;" type="text" name="txtNoPlaza">
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
										    	<button href="#!" class="btn btn-info btn-raised btn-sm" style="color: rgb(0, 0, 0); font-size: 100%;"><i class="zmdi zmdi-floppy" ></i> GUARDAR CAMBIOS</button>
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