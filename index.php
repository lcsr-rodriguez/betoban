<?php 

	// Include Autoload
	require_once "Config/Autoload.php";
	Config\Autoload::run_autoload();

?>

<!DOCTYPE html>
<html lang="es">
<head>

	<?php Config\Globals::getHead(); ?> <!-- Head -->

</head>

<body>
	
	<?php Config\Globals::getHeader(); ?> <!-- Header -->

	<?php Config\Globals::getCarrousel(); ?> <!-- Carrousel imgs -->

	<?php Config\Globals::getServices(); ?> <!-- Services imgs (Teleplus, etc...) -->

<hr>

	<?php Config\Globals::getPortfolio(); ?> <!-- Company information -->
			
<hr>

	<?php Config\Globals::getFooter(); ?> <!-- Footer (Page information) -->

        <!-- Javascripts -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/bootstrap.min.js"></script>
		
		<!-- Scrolling Nav JavaScript -->
		<script src="js/jquery.easing.min.js"></script>
		<script src="js/scrolling-nav.js"></script>		

    </body>
</html>