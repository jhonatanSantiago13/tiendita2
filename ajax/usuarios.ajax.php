<?php

require_once "../controlador/usuarios.controlador.php";
require_once "../modelo/usuarios.modelo.php";

class AjaxUsuarios{

	/*=============================================
	LOGIN
	=============================================*/

	public $username;
	public $password;
	public $remember;

	public function loginAjax(){

		$username = $this->username;
		$password = $this->password;
		$remember = $this->remember;

		$respuesta = ControladorUsuarios::ctrLogin($username, $password, $remember);

		session_start();
		// echo json_encode($respuesta);

		echo $respuesta;


	}

} //end class

/*=============================================
LOGIN
=============================================*/

if (isset($_POST["logear"])) {

	$login = new AjaxUsuarios();

	$login->username  = $_POST["username"];
    $login->password  = $_POST["password"];
    $login->remember  = $_POST["remember"];

    $login -> loginAjax();

}

 ?>