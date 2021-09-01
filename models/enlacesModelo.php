<?php  
class EnlacesModelo{
	
	function CargarEnlacesModelo($enlace)
	{
		if ($enlace == 'inicio' ||
			$enlace == 'frmRegPersonas') {
			$modulo = 'views/modulos/'.$enlace.'.php';
		}elseif ($enlace == 'index') {
			$modulo = 'views/template.php';
		}
		elseif ($enlace == 'oks'){
			$modulo = 'views/modulos/frmRegPersonas.php';
		}
		elseif ($enlace == 'falla'){
			$modulo = 'views/modulos/frmRegPersonas.php';
		}
		else{
			$modulo = 'views/modulos/inicio.php';
		}
		
		return $modulo;
	}
}
?>