<?php

// colocar session_start();
session_start();

/*=============================================
Mantener la ruta fija dle proyecto
=============================================*/

$servidor = Ruta::ctrRutaServidor();

 ?>

<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<title>Tienda</title>
  	<link rel="icon" href="vista/dist/img/favicon.png">

	<!-- Google Font: Source Sans Pro -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">

	<!-- Font Awesome Icons -->
	<link rel="stylesheet" href="vista/plugins/fontawesome-free/css/all.min.css">

	<!-- overlayScrollbars -->
	<link rel="stylesheet" href="vista/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">

	<!-- Theme style -->
	<link rel="stylesheet" href="vista/dist/css/adminlte.min.css">

	<!-- daterange picker -->
	<link rel="stylesheet" href="vista/plugins/daterangepicker/daterangepicker.css">

	<!-- Select2 -->
	<link rel="stylesheet" href="vista/plugins/select2/css/select2.min.css">

<!-- Theme style -->
	<link rel="stylesheet" href="vista/dist/css/adminlte.min.css">

	<!-- sweetalert2 -->
	<link rel="stylesheet" href="vista/plugins/sweetalert2/sweetalert2.min.css">

	 <!-- iCheck for checkboxes and radio inputs -->
	<link rel="stylesheet" href="vista/plugins/icheck-bootstrap/icheck-bootstrap.min.css">

	<!-- Bootstrap4 Duallistbox -->
	<link rel="stylesheet" href="vista/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css">

	<!-- BS Stepper -->
	<link rel="stylesheet" href="vista/plugins/bs-stepper/css/bs-stepper.min.css">

	<link rel="stylesheet" href="//code.jquery.com/ui/1.13.1/themes/base/jquery-ui.css">


</head>

<body class="hold-transition  sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
<!--<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">  -->


	<div class="preloader flex-column justify-content-center align-items-center">

		<img class="animation__shake" src="<?php echo $servidor; ?>/vista/dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">

	</div>

	<?php if (isset($_SESSION["sesionTiendita"]) && $_SESSION["sesionTiendita"] == "ok"){ ?>

		<div class="wrapper">

			<?php

			include "modulos/barra-superior.php";


			 ?>

		</div>


    <?php
	}else{

		if (isset($_GET["ruta"])) {

			if ($_GET["ruta"] == "forgot-password" || $_GET["ruta"] == "reset-password") {

				include "modulos/".$_GET["ruta"].".php";

			}else{

				include "modulos/login.php";

			}


		}else{

			include "modulos/login.php";

		}



	} ?>






	<!--=====================================
	JAVASCRIPT
	======================================-->

	<!-- REQUIRED SCRIPTS -->

	<!-- jQuery -->
	<script src="vista/plugins/jquery/jquery.min.js"></script>
	<!-- jQuery UI 1.11.4 -->
	<script src="vista/plugins/jquery-ui/jquery-ui.min.js"></script>

	<!-- Bootstrap -->
	<script src="vista/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>

	<!-- overlayScrollbars -->
	<script src="vista/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>

	<!-- AdminLTE App -->
	<script src="vista/dist/js/adminlte.js"></script>

	<!-- PAGE PLUGINS -->
	<!-- jQuery Mapael -->
	<script src="vista/plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
	<script src="vista/plugins/raphael/raphael.min.js"></script>
	<script src="vista/plugins/jquery-mapael/jquery.mapael.min.js"></script>
	<script src="vista/plugins/jquery-mapael/maps/usa_states.min.js"></script>

	<!-- InputMask -->
	<script src="vista/plugins/moment/moment.min.js"></script>
	<script src="vista/plugins/inputmask/jquery.inputmask.min.js"></script>

	<!-- date-range-picker -->
	<script src="vista/plugins/daterangepicker/daterangepicker.js"></script>

	<!-- ChartJS -->
	<script src="vista/plugins/chart.js/Chart.min.js"></script>

	<!-- AdminLTE for demo purposes -->
	<script src="vista/dist/js/demo.js"></script>
	<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
	<!-- <script src="vista/dist/js/pages/dashboard2.js"></script>  -->

	<!-- Select2 -->
	<script src="vista/plugins/select2/js/select2.full.min.js"></script>

	<!-- sweetalert2 -->
	<script src="vista/plugins/sweetalert2/sweetalert2.min.js"></script>

	<!--=====================================
	=========================================
	=========================================
	=========================================
	JAVASCRIPT PERSONALIZADOS
	======================================-->

	<script>

	/*=========================================
	Mostrar y ocultar contraseña
	===========================================*/

	const mostrarPass = document.getElementById("mostrarPass");
	let tipoPass     = document.getElementById("passLogin");
	let cajaEyePass = document.getElementById("cajaEyePass");

	cajaEyePass.addEventListener("click", ()=>{

		if (tipoPass.type == "password"){

			tipoPass.type = "text";

			cajaEyePass.style.background = '#E9ECEF';

			mostrarPass.classList.remove("fa-eye");
			mostrarPass.classList.add("fa-eye-slash");

		}else{

			tipoPass.type = "password";

			cajaEyePass.style.background = 'white';

			mostrarPass.classList.remove("fa-eye-slash");
			mostrarPass.classList.add("fa-eye");

		}


	})

	/*=========================================
	select2
	===========================================*/


	$('.select2').select2();

		  //Money Euro
		  $('[data-mask]').inputmask()

		  // jQuery UI sortable for the todo list
		  $('.todo-list').sortable({
		    placeholder: 'sort-highlight',
		    handle: '.handle',
		    forcePlaceholderSize: true,
		    zIndex: 999999
	})


	</script>


</body>
</html>
