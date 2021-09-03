<?php  
$EditUsuario = new UsuarioControlador();
$repuestaUsuario = $EditUsuario->consultarPersonasControlador();
$EditUsuario->actualizarUsuarioControlador();
$estadoA = '';
$estadoI = '';
if ($repuestaUsuario['usuarioEstado'] == 'Activo') {
	$estadoA = 'checked';
}else{
	$estadoI = 'checked';
}
?>
<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5">
		<h1>Editar Usuario</h1>
	</div>
</div>

<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5" >
		<form method="post">
			<input type="hidden" name="EditarId" value="<?php print $repuestaUsuario['idUsuario']?>">
			<label class="label-control">Nombre</label>
			<input type="text" class="form-control" name="Editarnombre" value="<?php print $repuestaUsuario['usuarioLogin']; ?>">
			<label class="label-control">Contraseña</label>
			<input type="text" class="form-control" name="EditarPassword" value="<?php print $repuestaUsuario['usuarioPassword']; ?>">
			<label>Estado</label>
			<br>
			<input type="radio" name="Editarestado" value="Activo" <?php print $estadoA?>> Activo
			<input type="radio" name="Editarestado" value="Inactivo" <?php print $estadoI?>> Inactivo
			<br>
			<button type="submit" name="ActUsuario" class="btn btn-primary mt-3">Actualizar</button>
		</form>
	</div>
</div>