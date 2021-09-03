<?php  
	$usuarioControlador = new UsuarioControlador();
	$usuarioControlador->registrarUsuarioControlador();

	$listaPersonasControlador = new PersonasControlador();
	$listarPersonas = $listaPersonasControlador->listarPersonasControlador();
	#var_dump($listarPersonas);
?>
<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5">
		<form method="post">
			<h1>Registrar Usuarios</h1>
			<label>Nombre Usuario</label>
			<input type="text" name="usuario" class="form-control" placeholder="Nombre Usuairo">
			<br>
			<label>Password</label>
			<input type="password" name="password" class="form-control" placeholder="Contraseña">
			<br>
			<select name="idPersona" class="form-control">
				<option>Personas</option>
				<?php  
					foreach ($listarPersonas as $key => $value) {
						print '
							<option value="'.$value['idPersona'].'">'.$value['persDocumento'].' '.$value['personaNombres'].'</option>}
							option
						';	
					}
				?>
			</select>
			<button type="submit" name="regUsuario" class="btn btn-primary mt-4">Registrar Usuario</button>
			<br>
			<?php  
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'usoks') {
					print '<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
					<strong>Usuario Registrado</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}
				if ($_GET['action'] == 'falla') {
					print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Persona no Registrada</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}
			}
			?>
		</form>		
	</div>
</div>
