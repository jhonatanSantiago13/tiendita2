<?php

require_once "funciones.controlador.php";

class ControladorUsuarios{


	/*=============================================
	LOGIN
	=============================================*/

	static public function ctrLogin($username, $password, $remember){

		$tabla = "usuarios";
		$item  = "username";
		$orden = "nombre";
		$tipo  = "ASC";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($item, $username, $orden, $tipo, $tabla);

		if ($respuesta != null) {

			$cifrar = crypt($password, '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

			foreach ($respuesta as $key => $value) {

				if ($value['password'] == $cifrar) {

					/*CREAR LA COOKIE DE RECUERDAME*/
					if ($remember == "true") {

						$token = bin2hex(random_bytes(18));

						/*obtener la ip*/

						// descomentar cuando se suba a servidor
						// $ip =  ControladorFunciones::getip();

						$ip = "187.190.154.5";

						$numeroUsuario = $value["numeroUsuario"];
						$status = 1;
						$tabla1 = "sesiones";

						$responseSesiones = ModeloUsuarios::ctrInsertarRememberme($numeroUsuario, $token, $ip, $status, $tabla1);

						// echo $responseSesiones;

						/*crear la cookie de rememberme si se inserto correctamente los datos de la sesión */
						if ($responseSesiones == "ok") {

							setcookie("tkn", $token, time() + (60 * 60 * 24 * 365),"/tiendita2/");

						}

					}

					/*Crear la sesion*/

					session_start();

					$_SESSION["sesionTiendita"]    = "ok";
					$_SESSION["nombreTiendita"]    = $value["nombre"];
					$_SESSION["apellidosTiendita"] = $value["apellidos"];
					$_SESSION["rolTiendita"] 	   = $value["rol"];

					echo "ok";

				}else{

					echo "error";

				}

			}

		}else{

			echo "error";

		}

	}

	/*=============================================
	TRAER LA SESION REMEMBER ME
	=============================================*/

	static public function ctrMostrarSesion($item, $valor){

		$tabla     = "sesiones";
		$respuesta = ModeloUsuarios::mdlMostrarSesion($item, $valor, $tabla);

		return $respuesta;

	}


	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function ctrMostrarUsuarios($item, $valor, $orden, $tipo){

		$tabla = "usuarios";

		$respuesta = ModeloUsuarios::mdlMostrarUsuarios($item, $valor,
														$orden, $tipo, $tabla);
		return $respuesta;

	}

	/*=============================================
	CREAR SESION
	=============================================*/

	static public function ctrCrearSesion($valor){

		$item  = "numeroUsuario";
		$orden = "nombre";
		$tipo  = "ASC";

		$usuario = ControladorUsuarios::ctrMostrarUsuarios($item, $valor, $orden, $tipo);

		foreach ($usuario as $key => $value) {

				session_start();

				$_SESSION["sesionTiendita"]    = "ok";
				$_SESSION["nombreTiendita"]    = $value["nombre"];
				$_SESSION["apellidosTiendita"] = $value["apellidos"];
				$_SESSION["rolTiendita"] 	   = $value["rol"];

		}

	}


}

?>