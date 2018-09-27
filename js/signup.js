
	var rango = document.getElementById('rango');
	var formulario = document.getElementById('signup');
	var carreras = document.getElementById('carreras');
window.onload = function (event) {
	rango = document.getElementById('rango');
	formulario = document.getElementById('signup');
	carreras = document.getElementById('carreras');
	rango.addEventListener('change', rangoChange())
}
	function rangoChange() {
		rango = document.getElementById('rango');
		formulario.innerHTML= "<h2 class='form-title'>Registrate, es muy facil!</h2>"+
		"<input type='text' name='usuario' placeholder='nombre de usuario' />"+
		"<select name='rango' id='rango' class='middle' onchange = 'rangoChange(event)'>"+
			"<option value='Alumno'"+(rango.value=="Alumno"? " selected='selected'":"")+">Alumno</option>"+
			"<option value='Maestro'"+(rango.value=="Maestro"? " selected='selected'":"")+">Maestro</option>"+
		"</select>"+
		"<input class='flex-column-item' type='text' name='nombres' placeholder='Nombres'/>"+
		"<input class='flex-column-item' type='text' name='apellidos' placeholder='Apellidos'>";
		if (rango.value=="Alumno") {
			formulario.innerHTML+="<label class='flex-column-item middle'>Carrera: </label>"+
			"<select id="+carreras.id+" name='carrera' class='session-form flex-column-item middle'>"+
			carreras.innerHTML+
			"</select>"+
			"<input type='password' name='password' placeholder='Ingresa tu contraseña' />"+
			"<input type='password' name='confirm' placeholder='Confirma tu clave de registro' />"+
			"<input type='submit' value='Iniciar Sesion'>";
		} else {
			formulario.innerHTML+=
			"<input type='password' name='password' placeholder='Ingresa tu contraseña' />"+
			"<input type='password' name='confirm' placeholder='Confirma tu clave de registro' />"+
			"<input type='submit' value='Iniciar Sesion'>";
		}
	}