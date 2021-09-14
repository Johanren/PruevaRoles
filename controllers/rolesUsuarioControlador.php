<?php  

class RolesUsuarioControlador{
	function registrarRolControlador(){
		if (isset($_POST['regRol'])) {
			$datosRol = array('estado' => 'true',
							  'idUsuario' => $_POST['idUsuario'],
							   'idRol' => $_POST['idRol']);
			$regisModelo = new RolesUsuarioModelo();
			$respuesta = $regisModelo->registrarRolModelo($datosRol);
			if ($respuesta == "success") {
				header('location:oksRoles');
			}else{
				header('location:fallaRoles');
			}
		}
	}
}