<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Formulario de registro</title>
	<link rel="stylesheet" href="css/app.css" />
</head>
<body>
	<section class="mid-slide flex-column-item" style="height: 100%">

		<h2 class='form-title'>Registrate, es muy facil!</h2>
		<form id='signup' action='../php/registro.php' method='post' enctype='multipart/form-data' class='session-form flex-row-item' style="height: 100%; width: 100%">
			<div class="flex-column-item middle">
				<input type='text' name='ncontrol' placeholder='nombre de usuario' />
				<select id='rango' class='middle' style="margin-left: 15px" onchange="rangoChange()" >
					<option value='Alumno'>Alumno</option>
					<option value='Maestro' selected="s">Maestro</option>
				</select>
				<input type='text' name='nombres'placeholder='Nombre'/>
				<input type='text' name='apellidos' placeholder='Apellidos'>
				<input type='password' name='password' placeholder='Ingresa tu contraseña' />
				<input type='text' name='confirm' placeholder='Confirma tu clave de registro' />
				<input type='submit' value='Registrarse'>
			</div>

			<div class="flex-column-item middle">
				<label>Escuela: </label>
				<select name='escuela' id='escuelas' onchange="ajaxCarreras(this.value)"></select>
				<div id="modificable" class="flex-column-item"></div>
			</div>
		</form>
	</section>
<script src='js/signup.js'>
</script>
</body>
</html>