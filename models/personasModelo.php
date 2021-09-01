<?php  
require_once('conexion.php');
class PersonasModelo extends Conexion{
	
	function registrarPersonasModelo($datos){
		$sql = "INSERT INTO `personas`(`personaNombres`, `personaApellidos`, `personaGenero`, `persDocumento`) VALUES (?,?,?,?)";
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
}