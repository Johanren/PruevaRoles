<?php  
require_once('conexion.php');
class PersonasModelo extends Conexion{
	
	public $tabla = 'personas';

	function registrarPersonasModelo($datos){
		$sql = "INSERT INTO $this->tabla (`personaNombres`, `personaApellidos`, `personaGenero`, `persDocumento`) VALUES (?,?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datos['nombre'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datos['apellido'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datos['genero'], PDO::PARAM_STR);
			$stmt->bindParam(4, $datos['doc'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return 'success';
			}else{
				return 'error';
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->getMessage());
		}
	}
	function listarPersonasModelo(){
		$sql = "SELECT * FROM $this->tabla WHERE 1";

		$conn =  new Conexion();
		$stmt = $conn->conectar()->prepare($sql);
		$stmt->execute();
		return $stmt->fetchAll();
		$stmt->close();
	}
	function consultarPersonasModelo($id){
		$sql = "SELECT * FROM $this->tabla WHERE idPersona = :id";
		$conn = new Conexion();
		$stmt = $conn->conectar()->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();
	}

	function actualizarPersonaModelo($datos){
		$sql = "UPDATE $this->tabla SET personaNombres = ?,personaApellidos=?,personaGenero=?,persDocumento=? WHERE idPersona = ?";
		$conn = new Conexion();
		$stmt = $conn->conectar()->prepare($sql);

		$stmt->bindParam(1, $datos['nombre'], PDO::PARAM_STR);
		$stmt->bindParam(2, $datos['apellido'], PDO::PARAM_STR);
		$stmt->bindParam(3, $datos['genero'], PDO::PARAM_STR);
		$stmt->bindParam(4, $datos['doc'], PDO::PARAM_INT);
		$stmt->bindParam(5, $datos['id'], PDO::PARAM_INT);
		if ($stmt->execute()) {
			return "success";
		}else{
			return "error";
		}

		$stmt->close();

	}

	function eliminarPersonaModelo($dato){
		$sql = "DELETE FROM $this->tabla WHERE idPersona = :id";
		$conn = new Conexion();
		$stmt = $conn->conectar()->prepare($sql);
		$stmt->bindParam(':id', $dato, PDO::PARAM_INT);

		if ($stmt->execute()) {
			return "success";
		}
		else{
			return "error";
		}

		$stmt->close();
	}

	function BuscarPersonasModelo($campo, $dato){
		switch ($campo) {
			case 'nombre':
			$cond = "personaNombres like ?";
			$dato .= '%';
			break;
			case 'apellido':
			$cond = "personaApellidos like ?";
			$dato .= '%';
			break;
			default:
			$cond = 1;
			break;
		}
		$sql = "SELECT * FROM $this->tabla WHERE $cond";
		try {
			$stmt = Conexion::conectar()->prepare($sql);
			$stmt -> bindParam(1,$dato, PDO::PARAM_STR);
			if($stmt->execute()){
				return $stmt -> fetchAll();
			}
			else{
				return [];
			}
			$stmt -> close();
		} catch (\Throwable $th) {
			print_r("ocurrio un error");
		}
	}
}