<?php  
$EditPersonas = new PersonasControlador();
$repuestaPersonas = $EditPersonas->consultarPersonasControlador();
$EditPersonas->actualizarPersonasControlador();
#print_r($repuestaPersonas);
$estadoMasculino = '';
$estadoFemenino = '';
if ($repuestaPersonas['personaGenero'] == 'Masculino') {
	$estadoMasculino = 'checked';
}else{
	$estadoFemenino = 'checked';
}
?>
<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5">
		<h1>Editar Personas</h1>
	</div>
</div>

<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5" >
		<form method="post">
			<input type="hidden" name="EditarId" value="<?php print $repuestaPersonas['idPersona']?>">
			<label class="label-control">Nombre</label>
			<input type="text" class="form-control" name="Editarnombre" value="<?php print $repuestaPersonas['personaNombres']; ?>">
			<label class="label-control">Apellido</label>
			<input type="text" class="form-control" name="Editarapellido" value="<?php print $repuestaPersonas['personaApellidos']; ?>">
			<label class="label-control">Documento</label>
			<input type="number" class="form-control" name="EditarDoc" value="<?php print $repuestaPersonas['persDocumento']; ?>">
			<label>Genero</label>
			<br>
			<input type="radio" name="Editargenero" value="Masculino" <?php print $estadoMasculino?>> Masculino
			<input type="radio" name="Editargenero" value="Femenino" <?php print $estadoFemenino?>> Femenino
			<br>
			<button type="submit" name="ActPersona" class="btn btn-primary mt-3">Actualizar</button>
		</form>
	</div>
</div>