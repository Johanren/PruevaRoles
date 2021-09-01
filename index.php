<?php  
//Controlador
require_once('controllers/controladorEnlaces.php');
require_once('controllers/personaControlador.php');
//Models
require_once('models/conexion.php');
require_once('models/enlacesModelo.php');
require_once('models/personasModelo.php');
$ctrl = new ControladorEnlaces();
$ctrl->cargarTemplate();