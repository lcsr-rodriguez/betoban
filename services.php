<?php 

    // Include Autoload
	require_once "Config/Autoload.php";
	Config\Autoload::run_autoload();

?>

<!DOCTYPE html>
<html lang="es">
<head>

	<?php Config\Globals::getHead(); ?> <!-- Head -->
	<!-- Custom styles for this template -->
	<link rel="stylesheet" href="../css/services.css">

</head>

<body>
	
    <?php Config\Globals::getHeader(); ?> <!-- Header -->

<!-- Page Content -->
<div class="container box" style="">

	<div class="row">

		<div class="col-lg-3">

			<h1 class="my-4">Categorias</h1>
			<div class="list-group">
				<a data-filter="all" class="list-group-item button active">Todos</a>
				<a data-filter="one" class="list-group-item button">Programas Administrativos</a>
				<a data-filter="two" class="list-group-item button">Programas Acceso remoto</a>
				<a data-filter="three" class="list-group-item button">Herramienta</a>
			</div>

		</div>
		<!-- Categories 1 -->
		<div class="col-lg-9 cat" id="categories-1">
			<!-- img1 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter one">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/s4g.png" alt="S4G"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">S4G</a>
						</h4>
						<h5><a href="http://www.betobansoftware.info/download/s4gapp.apk">Descargar APK</a></h5>
						<h5><a href="http://www.betobansoftware.info/download/s4g.exe">Descarga (Windows)</a></h5>
						<!--<h5><a href="http://"></a></h5>-->
						<p class="card-text">Solución Integral para el manejo de operaciones en agentes comerciales Movistar, Cuarta Generación.</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
			<!-- img2 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter one">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/trueke.png" alt="trueke"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Trueke</a>
						</h4>
						<h5><a href="http://www.betobansoftware.info/download/trueke.exe">Descargar versión normal</a></h5>
						<h5><a href="http://www.betobansoftware.info/download/trueke_full.exe">Descargar versión full</a></h5>
						<p class="card-text">Manejo y control administrativo de bienes y servicios</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
			<!-- img3 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter one">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/impreguias.jpg" alt="impreguias"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Impreguias</a>
						</h4>
						<h5><a href="http://www.betobansoftware.info/download/impreguias.exe">Descargar versión normal</a></h5>
						<h5><a href="http://www.betobansoftware.info/download/impreguias_full.exe">Descargar versión full</a></h5>
						<p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Amet numquam aspernatur!</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
		</div>
		<!-- Categories 2 -->
		<div class="col-lg-3"></div><!--separator-->
		<div class="col-lg-9 cat" id="categories-2">
			<!-- img1 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter two">
				<div class="card h-100">
					<a href=""><img class="card-img-top" src="img/downloads/firebird.png" alt="firebird"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Firebird</a>
						</h4>
						<h5><a href="https://firebirdsql.org/en/server-packages/">Haz click para descargar</a></h5>
						<p class="card-text">Sistema de administración de base de datos relacional</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
			<!-- img2 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter two">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/filezilla.png" alt="filezilla"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Filezilla</a>
						</h4>
						<h5><a href="https://filezilla-project.org/download.php?type=client">Haz click para descargar</a></h5>
						<p class="card-text">Cliente FTP multiplataforma de código abierto </p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
			<!-- img3 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter two">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/anydesk.png" alt="anydesk"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Anydesk</a>
						</h4>
						<h5><a href="https://anydesk.com/es/downloads">Haz click para descargar</a></h5>
						<p class="card-text">Aplicación para el manejo de escritorio remoto</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
		</div>
		<!-- Categories 3 -->
		<div class="col-lg-3"></div><!--separator-->
		<div class="col-lg-9 cat" id="categories-3">
			<!-- img1 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter three">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/vbox.png" alt="VirtualBox"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">VirtualBox</a>
						</h4>
						<h5><a href="https://download.virtualbox.org/virtualbox/6.1.12/VirtualBox-6.1.12-139181-Win.exe">Haz click para descargar</a></h5>
						<p class="card-text">Complemento para emular maquinas virtuales</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
			<!-- img2 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2 filter three">
				<div class="card h-100 text-center">
					<a href=""><img class="card-img-top" src="img/downloads/tomcat.png" alt="tomcat"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Apache Tomcat</a>
						</h4>
						<h5><a href="https://tomcat.apache.org/download-70.cgi">Haz click para descargar</a></h5>
						<p class="card-text">Servidor web con soporte de servlets y JSPs. Como usuarios, disponen de libre acceso a su código fuente y a su forma binaria en los términos establecidos en la Apache Software Licence</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
			<!-- img3 -->
			<div class="col-lg-4 col-md-6 mb-4 offset-md-2">
				<div class="card h-100 filter three text-center">
					<a href=""><img class="card-img-top" src="img/downloads/java.jpg" alt="java"></a>
					<div class="card-body">
						<h4 class="card-title">
						<a href="">Java</a>
						</h4>
						<h5><a href="https://www.java.com/inc/BrowserRedirect1.jsp?locale=es">Haz click para descargar</a></h5>
						<p class="card-text">Es esencial para las aplicaciones de intranet y otras soluciones de comercio electrónico que constituyen la base informática de las empresas</p>
					</div>
					<div class="card-footer">
						<!--<small class="text-muted">&#9733; &#9733; &#9733; &#9733; &#9734;</small>-->
					</div>
				</div>
			</div>
		</div>

	</div><!-- end row-->
</div>

	<?php Config\Globals::getFooter(); ?> <!-- Footer (Page information) -->

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>
		<!-- Js Services -->
		<script src="../js/services.js"></script>


</body>

</html>

