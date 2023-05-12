<?php

require_once "conexion.php";

class ModeloUsuarios{

	/*=============================================
	MOSTRAR USUARIOS
	=============================================*/

	static public function mdlMostrarUsuarios($item, $valor, $orden, $tipo, $tabla){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item ORDER BY $orden $tipo ");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ORDER BY $orden $tipo ");

			$stmt -> execute();

		}

		return $stmt -> fetchAll();

    	$stmt -> close();

    	$stmt = null;


	}

	static public function ctrInsertarRememberme($numeroUsuario, $token, $ip, $status, $tabla){

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (user, token, ip, status) VALUES(:user, :token, :ip, :status)");

		$stmt -> bindParam(":user", $numeroUsuario, PDO::PARAM_STR);
		$stmt -> bindParam(":token", $token, PDO::PARAM_STR);
		$stmt -> bindParam(":ip", $ip, PDO::PARAM_STR);
		$stmt -> bindParam(":status", $status, PDO::PARAM_INT);

		if($stmt->execute()){

			return "ok";

		}else{

			return "error";

		}

		$stmt -> close();
		$stmt = null;

	}

	/*=============================================
	TRAER LA SESION REMEMBER ME
	=============================================*/

    static public function mdlMostrarSesion($item, $valor, $tabla){

    	$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

    	$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

    	$stmt -> execute();

    	return $stmt -> fetch();

    	$stmt -> close();

    	$stmt = null;

    }

}

 ?>