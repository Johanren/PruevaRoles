<?php  
//Controlador
require_once('controllers/controladorEnlaces.php');
require_once('controllers/personaControlador.php');
require_once('controllers/usuarioControlador.php');
require_once('controllers/rolControlador.php');
//Models
require_once('models/conexion.php');
require_once('models/enlacesModelo.php');
require_once('models/personasModelo.php');
require_once('models/usuarioModelo.php');
require_once('models/rolModelo.php');
$ctrl = new ControladorEnlaces();
$ctrl->cargarTemplate();