<?php  
$persona = new PersonasControlador();
$persona->registrarPersonaControlador();
?>
<div class="row">
	<div class="col-4">
		
	</div>
	<div class="col-4 mt-5 mb-5">
		<h1>Registrar Personas</h1>
		<br>
		<form class="form-control" method="post">
			<div class="row">
				<div class="col">
					<label>Nombres</label>
					<input type="text" class="form-control" name="nombre" placeholder="Nombre" required="">
				</div>
				<div class="col">
					<label>Apellido</label>
					<input type="text" name="apellido" class="form-control" placeholder="Apellido" required="">
				</div>
			</div>
			<div class="row">
				<div class="col mt-2">
					<label>Genero</label>
					<br>
					<input type="radio" name="genero" value="Femenino" class="form-check-input"> Femenino
					<input type="radio" name="genero" value="Masculino" class="form-check-input"> Masculino
				</div>
			</div>
			<div class="row">
				<div class="col mt-2">
					<label>Documento</label>
					<input type="text" class="form-control" name="documento" required="" placeholder="documento" maxlength="10">
				</div>
			</div>
			<div class="row">
				<div class="col">
					<button type="submit" name="enviar" class="btn btn-primary mt-4">Registrar Personas</button>
				</div>
			</div>
			<br>
			<?php  
			if (isset($_GET['action'])) {
				if ($_GET['action'] == 'oks') {
					print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
					<strong>Persona Registrada</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
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
