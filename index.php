<?php

require_once "controlador/plantilla.controlador.php";
require_once "controlador/usuarios.controlador.php";
require_once "controlador/permisos.controlador.php";
require_once "controlador/rutas.php";

require_once "modelo/usuarios.modelo.php";
require_once "modelo/permisos.modelo.php";

$plantilla = new ControladorPlantilla();

$plantilla -> plantilla();

 ?>