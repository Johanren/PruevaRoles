<?php  

class PersonasControlador{
	
	function registrarPersonaControlador(){
		if (isset($_POST['enviar'])) {
			$datos = array('nombre' => $_POST['nombre'],
							'apellido' => $_POST['apellido'],
							'genero' => $_POST['genero'],
							'doc' => $_POST['documento']);
			//var_dump($datos);
			$persona = new PersonasModelo();
			$respuesta = $persona->registrarPersonasModelo($datos);
			if ($respuesta == 'success') {
				header('location:oks');
			}else{
				header('location:falla');
			}
		}
	}
}