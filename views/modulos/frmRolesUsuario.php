<?php  

$Usuario = new UsuarioControlador();
$listarUsuario = $Usuario->litarUsuarioModelo();

$rol = new RolControlador();
$listarRol = $rol -> consultarRolControlador();

$registarRol = new RolesUsuarioControlador();
$registarRol->registrarRolControlador();

?>
<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
		<h1>Registar Perfil</h1>
		<form method="post" class="form-control mt-5"> 
			<label>Usuario</label>
			<select name="idUsuario" class="form-control">
				<option>Usuario</option>
				<?php  
				foreach ($listarUsuario as $key => $value) {
					print '<option value="'.$value['idUsuario'].'">'.$value['usuarioLogin'].'</option>
					option';
				}
				?>
			</select>
			<br>
			<label>Roles</label>
			<?php  
			foreach ($listarRol as $key => $value) {
				print '<div class="form-check form-switch">
				<input class="form-check-input" name="idRol" type="checkbox" id="flexSwitchCheckChecked" value="'.$value['idRol'].'">
				<label class="form-check-label" for="flexSwitchCheckChecked">'.$value['rolNombre'].'</label>
				</div>';
			}
			?>
			<button type="submit" name="regRol" class="btn btn-primary mt-4">Registrar Perfiles</button>
		</form>	
		<?php 
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'oksRoles') {
					print '<div class="alert alert-warning alert-dismissible fade show mt-5" role="alert">
					<strong>Perfil Registrado</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}
				if ($_GET['action'] == 'fallaRoles') {
					print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Perfil no Registrado</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
					</div>';
				}
			}
		?>	
	</div>
</div>
