<?php  
//Controlador
require_once('controllers/controladorEnlaces.php');
require_once('controllers/personaControlador.php');
require_once('controllers/usuarioControlador.php');
//Models
require_once('models/conexion.php');
require_once('models/enlacesModelo.php');
require_once('models/personasModelo.php');
require_once('models/usuarioModelo.php');
$ctrl = new ControladorEnlaces();
$ctrl->cargarTemplate();