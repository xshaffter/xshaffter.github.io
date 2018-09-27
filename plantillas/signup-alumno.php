
	<label class='session-form flex-column-item middle'>Carrera: </label>
	<?php 
	$id_carrera = 'carreras';
		include_once 'carreras.php';
	?>
	<input type='password' name='password' placeholder='Ingresa tu contraseña' />
	<input type='text' name='confirm' placeholder='Confirma tu clave de registro' />
	<input type='submit' value='Iniciar Sesion'>