<?php  

class RolControlador{
	function registrarRolControlador(){
		if (isset($_POST['Enviar'])) {
			$rolDatos = $_POST['rolNombre'];
			$rolModelo = new RolModelo();
			$respuesta = $rolModelo->registrarRolModelo($rolDatos);
			if ($respuesta == "success") {
				header('location:okRol');
			}else{
				header('location:fallaRol');
			}
		}	
	}

	function consultarRolControlador(){
		$consultarRol = new RolModelo();
		$respuesta = $consultarRol->consultarRolModelo();

		return $respuesta;
	}

	function consultarIdRolControlador(){
		$id = $_GET['id'];
		$editRol = new RolModelo();
		$respuesta = $editRol->consultarIdRolModelo($id);
		return $respuesta;
	}

	function editarRolControlador(){
		if (isset($_POST['Editar'])) {
			$editarRol = array('id' => $_POST['id'],
				'nombre' => $_POST['editarNombre']);
			$editarModelo = $conn = new RolModelo();
			$respuesta = $editarModelo->editarRolModelo($editarRol);
			if ($respuesta == "success") {
				header('location:okRolEdit');
			}else{
				header('location:fallaRolEdit');
			}
		}
	}

	function eliminarRolControlador(){
		if (isset($_GET['del'])) {
			$id = $_GET['del'];
			$eliRol = new RolModelo();
			$eliminarRol = $eliRol->eliminarRolModelo($id);
			if ($eliminarRol == "success") {
				header('location:okRolElim');
			}else{
				header('location:fallaRolElim');
			}
		}
		
	}
	
}