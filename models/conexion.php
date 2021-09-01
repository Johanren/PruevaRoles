<?php  
class Conexion{
	
	function conectar(){
		$pdo = new PDO("mysql:host=localhost;dbname=rolesusuarios","root","");
		return $pdo;
	}
}
?>