<?php  
	class UsuarioControlador{
		function registrarUsuarioControlador(){
			if (isset($_POST['regUsuario'])) {
				$datosUsuario = array('usuario' => $_POST['usuario'],
									  'password' => $_POST['password'],
									   'estado' => 'Activo',
									   'idPersona' => $_POST['idPersona']);
				#var_dump($datosUsuario);
				$usuarioModelo = new UsuarioModelo();
				$respuesta = $usuarioModelo->registrarUsuarioModelo($datosUsuario);
				if ($respuesta == "success") {
					header('location:usoks');
				}
			}
		}

		function litarUsuarioModelo(){
			$conn = new UsuarioModelo();
			$respuesta = $conn->listarUsuariosModelo();
			return $respuesta;
		}

		function consultarPersonasControlador(){
			$id = $_GET['id'];
		$consulUsuario = new UsuarioModelo();
		$respuesta = $consulUsuario->consultarUsuarioModelo($id);
		return $respuesta;
		}

		function actualizarUsuarioControlador(){
			if (isset($_POST['ActUsuario'])) {
				$datosUsuario = array('id' => $_POST['EditarId'],
									  'nombre' => $_POST['Editarnombre'],
									  'password' => $_POST['EditarPassword'],
									  'estado' => $_POST['Editarestado']);
				$usuarioModelo = new UsuarioModelo();
				$respuesta = $usuarioModelo->actualizarUsuarioModelo($datosUsuario);
				if ($respuesta == 'success') {
					header('location:actoks');
				}
			}
		}

		function eliminarUsuarioControlador(){
			if (isset($_GET['del'])) {
				$dato = $_GET['del'];
				$eliminarUsuario = new UsuarioModelo();
				$respuesta = $eliminarUsuario->eliminarUsuarioModelo($dato);
				if ($respuesta == "success") {
					header('location:delusu');
				}
			}
		}

		function BuscarUsuarioControlador(){
		if(isset($_POST['buscar'])){
			switch($_POST['camBuscar']){
				case 'nombre':
				$campo = "nombre";
				break;
				default:
				$campo = "";
				break;
			}
			if(isset($_POST['campbuscar'])){
				$dato = $_POST['campbuscar'];
			}else{
				$dato = "";
			}
			$BusUsuario = new UsuarioModelo();
			$respuesta=$BusUsuario->BuscarUsuarioModelo($campo, $dato);
			return $respuesta;
		}
	}
	}
?>