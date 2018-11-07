	<section class="mid-slide flex-column-item" style="height: 100%">

		<h2 class='form-title'>Registrate, es muy facil!</h2>
		<form id='signup' action='#' method='post' enctype='multipart/form-data' class='session-form flex-row-item'>
			<div class="flex-column-item">
				<input type='text' id='usuario' placeholder='nombre de usuario' />
				<select id='rango' class='middle' style="margin-left: 15px" onchange="rangoChange()" >
					<option value='Alumno'>Alumno</option>
					<option value='Maestro' selected="s">Maestro</option>
				</select>
				<input type='text' id='nombres'placeholder='Nombre'/>
				<input type='text' id='apellidos' placeholder='Apellidos'>
			</div>
			<div class="flex-column-item">
				<input type='password' id='password' placeholder='Ingresa tu contraseña' />
				<input type='password' id='confirm' placeholder='Confirma tu clave de registro' />
				<input type='button' value='Registrarse' id="submit" onclick="sub()">
			</div>
			<div class="flex-column-item">
				<label class="middle">Escuela: </label>
				<select name='escuela' id='escuelas' onchange='changeEsc()' class="middle">
					<option value="0">otra</option>
				</select>
				<div id="modificable" class="flex-column-item middle"></div>
			</div>
		</form>
	</section>
<script src='js/signup.js'>
</script>