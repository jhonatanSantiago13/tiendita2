<?php

// No mostrar los errores de PHP
error_reporting(0);

class ApiCp{

	static public function getColonias($cp){

			$homepage = file_get_contents("http://apicp.softfortoday.com/api/v1/codigos_postales/$cp");

			if ($homepage) {

				$datos = json_decode($homepage, true);

				$estado = $datos["respuesta"]["codigos_postales"][0]["estado"];
				$municipio = $datos["respuesta"]["codigos_postales"][0]["municipio"];

				$colonias = [];

				// echo sizeof($datos["respuesta"]["codigos_postales"]);

				for ($i=0; $i < sizeof($datos["respuesta"]["codigos_postales"]); $i++) {

					array_push($colonias, $datos["respuesta"]["codigos_postales"][$i]["asentamiento"]);

				}

				$data = array("estado"    => $estado,
		              "municipio" => $municipio,
		              "colonias"  => $colonias);


				// echo json_encode($data);

				// return $data;


			}else{

				$colonias = array( "No se encontraron resultados");

				$data = array("estado"    => "Sin Resultados",
	              			  "municipio" => "Sin Resultados",
	              			  "colonias"  => $colonias);

			}

			return $data;

	}

}


 ?>