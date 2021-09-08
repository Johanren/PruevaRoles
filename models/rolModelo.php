<?php  
require_once('conexion.php');
class RolModelo extends Conexion{
	private $tabla = 'roles';
	function registrarRolModelo($rolDtos){
		$sql = "INSERT INTO $this->tabla(rolNombre) VALUES (?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $rolDtos, PDO::PARAM_STR);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}
	function consultarRolModelo(){
		$sql = "SELECT * FROM $this->tabla WHERE 1";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}

	function consultarIdRolModelo($id){
		$sql = "SELECT * FROM $this->tabla WHERE idRol = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch();
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}

	function editarRolModelo($editarRol){
		$sql = "UPDATE $this->tabla SET rolNombre=? WHERE idRol=?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $editarRol['nombre'], PDO::PARAM_STR);
			$stmt->bindParam(2, $editarRol['id'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}

	function eliminarRolModelo($id){
		$sql = "DELETE FROM $this->tabla WHERE idRol = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}
}