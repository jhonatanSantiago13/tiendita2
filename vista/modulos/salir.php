<?php

/*Eliminar la cookie*/
// setcookie("tkn","",time() - 60,"/tiendita2/");

/*=============================================
CAMBIAR EL ESTATUS DEL REMBERME
=============================================*/

if (isset($_COOKIE["tkn"])) {

	$respuesta = ControladorUsuarios::ctrUpdateStatusSesion($_COOKIE["tkn"]);
}


session_destroy();


echo "<script>

	document.cookie = 'tkn=; max-age=0; path=/tiendita2/';

  window.location= 'login';

</script>";

 ?>