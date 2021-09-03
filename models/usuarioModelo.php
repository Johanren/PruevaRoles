<?php  
class UsuarioModelo extends Conexion{
	private $tabla = 'usuarios';

	function registrarUsuarioModelo($datosUsuario){
		$sql = "INSERT INTO $this->tabla(usuarioLogin, usuarioPassword, usuarioEstado, idPersona) VALUES (?,?,?,?)";
		try {
			$conn = new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->bindParam(1, $datosUsuario['usuario'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datosUsuario['password'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datosUsuario['estado'], PDO::PARAM_STR);
			$stmt->bindParam(4, $datosUsuario['idPersona'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		} catch (Exception $e) {

		}
	}

	function listarUsuariosModelo(){
			$sql = "SELECT * FROM $this->tabla WHERE 1";

			$conn =  new Conexion();
			$stmt = $conn->conectar()->prepare($sql);
			$stmt->execute();
			return $stmt->fetchAll();
			$stmt->close();
	}

	function consultarUsuarioModelo($id){
		$sql = "SELECT * FROM $this->tabla WHERE idUsuario = :id";
		$conn = new Conexion();
		$stmt = $conn->conectar()->prepare($sql);
		$stmt->bindParam(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		return $stmt->fetch();

		$stmt->close();
	}

	function actualizarUsuarioModelo($datosUsuario){
		$sql = "UPDATE $this->tabla SET usuarioLogin=?, usuarioPassword=?, usuarioEstado=? WHERE idUsuario = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn -> conectar()->prepare($sql);
			$stmt->bindParam(1, $datosUsuario['nombre'], PDO::PARAM_STR);
			$stmt->bindParam(2, $datosUsuario['password'], PDO::PARAM_STR);
			$stmt->bindParam(3, $datosUsuario['estado'], PDO::PARAM_STR);
			$stmt->bindParam(4, $datosUsuario['id'], PDO::PARAM_INT);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();

		} catch (\Throwable $th) {
			print_r("ocurrio un error");
		}
	}

	function eliminarUsuarioModelo($id){
		$sql = "DELETE FROM $this->tabla WHERE idUsuario = ?";
		try {
			$conn = new Conexion();
			$stmt = $conn -> conectar()->prepare($sql);
			$stmt->bindParam(1, $id, PDO::PARAM_INT);
			if ($stmt->execute()) {
				return "success";
			}else{
				return "error";
			}
			$stmt->close();
		} catch (PDOException $e) {
			print_r($e->message());
		}
	}

	function BuscarUsuarioModelo($campo, $dato){
		switch ($campo) {
			case 'nombre':
			$cond = "usuarioLogin like ?";
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
?>