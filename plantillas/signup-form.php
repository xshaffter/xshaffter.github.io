
<script src='js/signup.js'>
</script>
<form id='signup' action='php/registro.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item' style="height: 100%;">
	<h2 class='form-title'>Registrate, es muy facil!</h2>
	<input type='text' name='ncontrol' placeholder='nombre de usuario' />
	<select id='rango' class='middle'>
		<option value='Alumno' selected='selected'>Alumno</option>
		<option value='Maestro'>Maestro</option>
	</select>
	<input type='text' name='nombres'/>
	<input type='text' name='apellidos'>
	<?php include_once 'signup-alumno.php' ?>
</form>