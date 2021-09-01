<?php  
class EnlacesModelo{
	
	function CargarEnlacesModelo($enlace)
	{
		if ($enlace == 'inicio' ||
			$enlace == 'frmRegPersonas'||
			$enlace == 'frmConPersonas'||
			$enlace == 'frmEditPersonas') {
			$modulo = 'views/modulos/'.$enlace.'.php';
		}elseif ($enlace == 'index') {
			$modulo = 'views/template.php';
		}
		//insertar Personas
		elseif ($enlace == 'oks'){
			$modulo = 'views/modulos/frmRegPersonas.php';
		}
		elseif ($enlace == 'falla'){
			$modulo = 'views/modulos/frmRegPersonas.php';
		}
		//EliminarPersonas
		elseif ($enlace == 'deloks'){
			$modulo = 'views/modulos/frmConPersonas.php';
		}
		elseif ($enlace == 'delfalla'){
			$modulo = 'views/modulos/frmConPersonas.php';
		}
		//ActualizarPersonas
		elseif ($enlace == 'acoks'){
			$modulo = 'views/modulos/frmConPersonas.php';
		}
		else{
			$modulo = 'views/modulos/inicio.php';
		}
		
		return $modulo;
	}
}
?>