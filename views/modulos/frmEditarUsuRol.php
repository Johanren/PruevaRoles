<?php  
$consultarRolUsu = new RolesUsuarioControlador();
$res = $consultarRolUsu->consultarUsuarioControlador();

$listarRol = new RolControlador();
$listar = $listarRol->consultarRolControlador();
$true = '';
$false = '';
if ($res[0]['usuarioRolEstado'] == 'true') {
	$true = 'checked';
}else{
	$false = 'checked';
}
?>
<div class="row">
	<div class="col-4"></div>
	<div class="col-4">
		<form method="post">
			<h1>Editar Usuarios Roles</h1>
			<label>Nombre</label>
			<input type="text" class="form-control" name="editarNombre" value="<?php print $res[0]['usuarioLogin'];?>">
			<br>
			<label>password</label>
			<input type="text" name="editarEmail" class="form-control" value="<?php print $res[0]['usuarioPassword'];?>">
			<br>
			<label>Roles</label>
			<select name="editarRol" class="form-control">
				<option value="">Opciones Roles</option>
				<?php  
				foreach ($listar as $key => $value) {
					print '<option value="'.$value['idRol'].'" ';
					if ($value['idRol'] == $value['idRol'])
						print 'selected';
					print '>'.$value['rolNombre'].'</option>';
				}
				?>
			</select>
			<label>Estado</label>
			<br>
			<div class="form-check form-switch">
				<input class="form-check-input" name="idRol" type="checkbox" id="flexSwitchCheckChecked" value="true" <?php print $true ?>>
				<label class="form-check-label" for="flexSwitchCheckChecked">true</label>
			</div>
			<div class="form-check form-switch">
				<input class="form-check-input" name="idRol" type="checkbox" id="flexSwitchCheckChecked" value="false" <?php print $false ?>>
				<label class="form-check-label" for="flexSwitchCheckChecked">false</label>
			</div>
		</form> 
	</div>
</div>