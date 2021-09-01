<?php  
$conPeronas = new PersonasControlador();
$respuesta = $conPeronas->listarPersonasControlador();
$conPeronas->eliminarPersonasControlador();

if (isset($_GET['action'])) {
	// Eliminar Personas
	if ($_GET['action'] == 'deloks') {
		print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Persona Eliminada</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';
	}

	if ($_GET['action'] == 'delfalla') {
		print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Persona no Eliminada</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';
	}
//Actualizar Personas
	if ($_GET['action'] == 'acoks') {
		print '<div class="alert alert-warning alert-dismissible fade show" role="alert">
		<strong>Persona Actualizada</strong><button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
		</div>';
	}
}
?>
<div class="row">
	<div class="col">
		<h1>Consultar Personas</h1>
	</div>	
</div>

<div class="row">
	<div class="col-1">
		
	</div>
	<div class="col-2 mt-5">
		<form method="post" class="form-inline">
			<label class="form-label">Buscar Personas</label>
			<input type="text" name="campbuscar" class="form-control">
			<input type="radio" name="camBuscar" value="nombre"> nombre
			<br>
			<input type="radio" name="camBuscar" value="apellido"> apellido
			<button type="submit" class="btn btn-primary mb-2" name="buscar" value="buscar">Buscar</button>
		</form>
		<?php 
		$consPeronas = new PersonasControlador();
		$busPersona = $consPeronas->BuscarPersonaControlador();
		#print_r($busPersona);
		?>
	</div>
	<div class="col-8 mt-5">
		<?php  

		if ($busPersona) {


			?>
			<h1>Persona Buscada</h1>
			<table class="table table-success table-striped">
				<thead>
					<tr>
						<th>Nombre</th>
						<th>Apellido</th>
						<th>Documento</th>
						<th>Genero</th>
						<th>Opciones</th>
					</tr>
				</thead>
				<tbody>
					<?php  
					foreach ($busPersona as $key => $value) {
						print '
						<tr>
						<td>'.$value['personaNombres'].'</td>
						<td>'.$value['personaApellidos'].'</td>
						<td>'.$value['persDocumento'].'</td>
						<td>'.$value['personaGenero'].'</td>
						<td><a href="index.php?action=frmEditPersonas&id='.$value['idPersona'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
						<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
						<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
						</svg></a>
						<a href="index.php?action=frmConPersonas&del='.$value['idPersona'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
						<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
						<path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
						</svg></a></td>
						</tr>
						';
					}
					?>
				</tbody>
			</table>
			<?php  
		}
		?>
		<table class="table table-striped">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Documento</th>
					<th>Genero</th>
					<th>Opciones</th>
				</tr>
			</thead>
			<tbody>
				<?php  
				foreach ($respuesta as $key => $value) {
					print '
					<tr>
					<td>'.$value['personaNombres'].'</td>
					<td>'.$value['personaApellidos'].'</td>
					<td>'.$value['persDocumento'].'</td>
					<td>'.$value['personaGenero'].'</td>
					<td><a href="index.php?action=frmEditPersonas&id='.$value['idPersona'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
					<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
					<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
					</svg></a>
					<a href="index.php?action=frmConPersonas&del='.$value['idPersona'].'"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-x" viewBox="0 0 16 16">
					<path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
					<path fill-rule="evenodd" d="M12.146 5.146a.5.5 0 0 1 .708 0L14 6.293l1.146-1.147a.5.5 0 0 1 .708.708L14.707 7l1.147 1.146a.5.5 0 0 1-.708.708L14 7.707l-1.146 1.147a.5.5 0 0 1-.708-.708L13.293 7l-1.147-1.146a.5.5 0 0 1 0-.708z"/>
					</svg></a></td>
					</tr>
					';
				}
				?>
			</tbody>
		</table>
	</div>
</div>
