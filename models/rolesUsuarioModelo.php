<?php  

require_once('conexion.php');

class RolesUsuarioModelo extends Conexion{
	private $tabla = 'usuariosroles';
	function registrarRolModelo($datos){
		$sql = "INSERT INTO $this->tabla(usuarioRolEstado, idUsuario, idRol) VALUES (?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datos['estado'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datos['idUsuario'], PDO::PARAM_INT);
			$stmt->bindParam(3, $datos['idRol'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}

	function listarRolesUsuarioModelo(){
		$sql = "SELECT * FROM $this->tabla INNER JOIN usuarios ON usuariosroles.idUsuario = usuarios.idUsuario INNER JOIN roles ON usuariosroles.idRol = roles.idRol WHERE 1";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}

	function consultarUsuarioModelo($id){
		$sql = "SELECT * FROM $this->tabla INNER JOIN usuarios ON usuariosroles.idUsuario = usuarios.idUsuario INNER JOIN roles ON usuariosroles.idRol = roles.idRol WHERE usuariosroles.idUsuarioRol = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn -> conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
		} catch (Exception $e) {
			
		}
	}
}