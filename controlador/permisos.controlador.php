<?php

class ControladorPermisos{

	/*=============================================
	MOSTRAR CATEGORIAS
	=============================================*/

	static public function ctrMostrarCategorias($item, $valor){

		$tabla = "categorias";

		$respuesta = ModeloPermisos::mdlMostrarCategorias($item, $valor, $tabla);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR SUBCATEGORIAS
	=============================================*/

	static public function ctrMostrarSubCategorias($item, $valor){

		$tabla = "subcategorias";

		$respuesta = ModeloPermisos::mdlMostrarSubCategorias($item, $valor, $tabla);

		return $respuesta;

	}

	/*=============================================
	MOSTRAR ACCIONES
	=============================================*/

	static public function ctrMostrarAcciones($item, $valor){

		$tabla = "acciones";

		$respuesta = ModeloPermisos::mdlMostrarMostrarAcciones($item, $valor, $tabla);

		return $respuesta;

	}


	/*=============================================
	MOSTRAR ROLES
	=============================================*/

	static public function ctrMostrarRoles($item, $valor){

		$tabla = "roles";

		$respuesta = ModeloPermisos::mdlMostrarMostrarRoles($item, $valor, $tabla);

		return $respuesta;

	}


}

 ?>