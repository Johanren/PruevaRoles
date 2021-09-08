<?php  
$editRol = new RolControlador();
$editorRol = $editRol->consultarIdRolControlador();
$editRol->editarRolControlador()
?>
<div class="row">	
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5">
		<h1>Editar Rol</h1>
		<form method="post" class="form-control mt-5">
			<input type="hidden" name="id" value="<?php print $editorRol['idRol']?>">
			<label>Nombre Rol</label>
			<input type="text" name="editarNombre" class="form-control" value="<?php print $editorRol['rolNombre']?>">
			<button type="submit" class="btn btn-primary mt-4" name="Editar">Editar</button>
		</form>		
	</div>
</div>
