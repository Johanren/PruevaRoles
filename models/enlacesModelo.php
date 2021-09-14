<?php  
class EnlacesModelo{
	
	function CargarEnlacesModelo($enlace)
	{
		if ($enlace == 'inicio' ||
			$enlace == 'frmRegPersonas'||
			$enlace == 'frmConPersonas'||
			$enlace == 'frmEditPersonas'||
			$enlace == 'frmRegUsuario'||
			$enlace == 'frmConUsuario'||
			$enlace == 'frmEditUsuario'||
			$enlace == 'frmRegRol'||
			$enlace == 'frmConRol' ||
			$enlace == 'frmEditRol'||
			$enlace == 'frmRolesUsuario') {
			$modulo = 'views/modulos/'.$enlace.'.php';
		}elseif ($enlace == 'index') {
			$modulo = 'views/template.php';
		}
		//insertar Personas
		elseif ($enlace == 'oks'){
			$modulo = 'views/modulos/frmRegPersonas.php';
		}
		elseif ($enlace == 'falla'){
			$modulo = 'views/modulos/frmRegPersonas.php';
		}
		//EliminarPersonas
		elseif ($enlace == 'deloks'){
			$modulo = 'views/modulos/frmConPersonas.php';
		}
		elseif ($enlace == 'delfalla'){
			$modulo = 'views/modulos/frmConPersonas.php';
		}
		//ActualizarPersonas
		elseif ($enlace == 'acoks'){
			$modulo = 'views/modulos/frmConPersonas.php';
		}
		//InsertarUsuarios
		elseif ($enlace == 'usoks'){
			$modulo = 'views/modulos/frmRegUsuario.php';
		}
		//Actualizar Usuario
		elseif ($enlace == 'actoks'){
			$modulo = 'views/modulos/frmConUsuario.php';
		}
		//Eliminar usuario
		elseif ($enlace == 'delusu'){
			$modulo = 'views/modulos/frmConUsuario.php';
		}
		//Registrar Rol
		elseif ($enlace == 'okRol' || $enlace == 'fallaRol'){
			$modulo = 'views/modulos/frmRegRol.php';
		}

		elseif ($enlace == 'okRolEdit' || $enlace == 'fallaRolEdit'){
			$modulo = 'views/modulos/frmConRol.php';
		}

		elseif ($enlace == 'okRolElim' || $enlace == 'fallaRolElim') {
			$modulo = 'views/modulos/frmConRol.php';
		}

		elseif ($enlace == 'oksRoles' || $enlace == 'fallaRoles') {
			$modulo = 'views/modulos/frmRolesUsuario.php';
		}

		else{
			$modulo = 'views/modulos/inicio.php';
		}
		
		
		return $modulo;
	}
}
?>