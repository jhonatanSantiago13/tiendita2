<?php

class ModeloPermisos {

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

    static public function mdlMostrarCategorias($item, $valor, $tabla){

    	if ($item != null) {

    		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

    		$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

    		$stmt -> execute();

    		return $stmt -> fetch();

    	}else{

    		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    		$stmt -> execute();

    		return $stmt -> fetchAll();

    	}

   		$stmt -> close();

   		$stmt = null;

    }

    /*=============================================
    MOSTRAR SUBCATEGORIAS
    =============================================*/

	static public function mdlMostrarSubCategorias($item, $valor, $tabla){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetchAll();

    	}else{

    		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    		$stmt -> execute();

    		return $stmt -> fetchAll();

    	}

   		$stmt -> close();

   		$stmt = null;

	}

	/*=============================================
	MOSTRAR ACCIONES
	=============================================*/

	static public function mdlMostrarMostrarAcciones($item, $valor, $tabla){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

    	}else{

    		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    		$stmt -> execute();

    		return $stmt -> fetchAll();

    	}

   		$stmt -> close();

   		$stmt = null;


	}

	/*=============================================
	MOSTRAR ROLES
	=============================================*/

	static public function mdlMostrarMostrarRoles($item, $valor, $tabla){

		if ($item != null) {

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

    	}else{

    		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

    		$stmt -> execute();

    		return $stmt -> fetchAll();

    	}

   		$stmt -> close();

   		$stmt = null;

	}

}

 ?>