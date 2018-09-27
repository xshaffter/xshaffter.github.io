<form id='signup' action='php/registro.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item'>
		<h2 class='form-title'>Registrate, es muy facil!</h2>
		<input type='text' name='ncontrol' placeholder='numero de control' />
		<label class='session-form flex-column-item middle'>Carrera: </label>
		<?php 
		include_once 'carreras.php';
		?>
	<input type='password' name='password' placeholder='Ingresa tu contraseña' />
	<input type='text' name='confirm' placeholder='Confirma tu clave de registro' />
	<input type='submit' value='Iniciar Sesion'>
</form>