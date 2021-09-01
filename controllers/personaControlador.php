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

	function listarPersonasControlador(){
		$conPersona = new PersonasModelo();
		$respuesta = $conPersona->listarPersonasModelo();
		return $respuesta;
	}

	function consultarPersonasControlador(){
		$id = $_GET['id'];
		$consulPersonas = new PersonasModelo();
		$respuesta = $consulPersonas->consultarPersonasModelo($id);
		return $respuesta;
	}

	function actualizarPersonasControlador(){
		if (isset($_POST['ActPersona'])) {
			$datos = array( 'id' => $_POST['EditarId'],
				'nombre' => $_POST['Editarnombre'],
				'apellido' => $_POST['Editarapellido'],
				'doc' => $_POST['EditarDoc'],
				'genero' => $_POST['Editargenero']);
			#var_dump($datos);
			$conn = new PersonasModelo();
			$respuesta = $conn->actualizarPersonaModelo($datos);
			if ($respuesta == "success") {
				header('location:acoks');
			}
		}
	}

	function eliminarPersonasControlador(){
		if (isset($_GET['del'])) {
			$dato = $_GET['del'];
			$delPersona = new PersonasModelo();
			$respuesta = $delPersona->eliminarPersonaModelo($dato);
			if ($respuesta = 'success') {
				header('location:deloks');
			}else{
				header('location:delfalla');
			}

		}
	}

	function BuscarPersonaControlador(){
		if(isset($_POST['buscar'])){
			switch($_POST['camBuscar']){
				case 'nombre':
				$campo = "nombre";
				break;
				case 'apellido':
				$campo = "apellido";
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
			$BusPersona = new PersonasModelo();
			$respuesta=$BusPersona->BuscarPersonasModelo($campo, $dato);
			return $respuesta;
		}
	}
}