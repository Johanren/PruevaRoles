<?php  

class ControladorEnlaces{
	
	function cargarTemplate(){
		include('views/template.php');
	}

	function enlacesTemplate(){
		if (isset($_GET['action'])) {
			$enlace = $_GET['action'];
		}else{
			$enlace = "frmRegPersonas";
		}

		//print($enlace);
		$enlaces = EnlacesModelo::CargarEnlacesModelo($enlace);
		include $enlaces;
	}
}