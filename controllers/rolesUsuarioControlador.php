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

	function listarRolesUsuarioControlador(){
		$listarRolesUsuario = new RolesUsuarioModelo();
		$respuesta = $listarRolesUsuario->listarRolesUsuarioModelo();
		return $respuesta;
	}

	function consultarUsuarioControlador(){
		$id = $_GET['id'];
		$consultar = new RolesUsuarioModelo();
		$respuesta = $consultar->consultarUsuarioModelo($id);
		return $respuesta;
	}
}