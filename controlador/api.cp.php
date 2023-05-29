<?php

class ApiCp{

	static public function getColonias($cp){

			$homepage = file_get_contents("http://apicp.softfortoday.com/api/v1/codigos_postales/$cp");

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

			return $data;

	}

}


 ?>