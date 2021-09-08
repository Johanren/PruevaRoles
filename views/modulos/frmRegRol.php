<?php  
$registrarRol = new RolControlador();
$registrarRol->registrarRolControlador();
?>
<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5">
		<form method="post">
			<label>Registrar Rol</label>
			<input type="text" class="form-control mt-2" name="rolNombre" placeholder="Rol">
			<button type="submit" class="btn btn-primary mt-4" name="Enviar">Registrar</button>
		</form>	
		<br>
		<?php  
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'okRol') {
					print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Rol Registrado</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}
				if ($_GET['action'] == 'fallaRol') {
					print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Rol no Registrado</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}
			}
		?>
	</div>
</div>