<script src="js/environtment.js"></script>
<script>
	var rango = document.getElementById('rango');
	var formulario = document.getElementById('signup');
	var escuelas = document.getElementById('escuelas');
	function changeEsc(){
		ajax('getCarreras.php', 'escuela='+escuelas.value)
		.then(response=>response.text())
		.then(responseText=>{
			var carreras = document.getElementById('carreras');
			var datos = (responseText.split(';'));
			var field = datos[0].split(',');
			var ids = datos[1].split(',');
			removeAll(carreras);
			for (var i = field.length - 1; i >= 0; i--) {
				if(field[i]=='') {
					continue;
				}
				var option = document.createElement('option');
				option.setAttribute('value', ids[i]);
				option.innerText = decodeURIComponent(field[i]);
				carreras.appendChild(option)
			}
		})
	}
function sub(){
}
function readTextFile(file, where){
	var r = fetch(window.location['origin']+'/alf/'+file)
  .then(response => response.text())
  .then(text => where.innerHTML = text)
  return r
}
function rangoChange() {
	var modificable = document.getElementById('modificable');
	switch(rango.value){
		case "Alumno":
		readTextFile('/signup-alumno.php', modificable)
		.then(function(){
			ajax('getEscuelas.php', '')
			.then(result=>result.text())
			.then(responseText=>{
				removeAll(escuelas);
					var datos = (responseText.split(';'));
					var field = datos[0].split(',');
					var ids = datos[1].split(',');
					for (var i = 0; i < field.length; i++) {
						if(field[i]=='') {
							continue;
						}
						var option = document.createElement('option');
						option.setAttribute('value', ids[i]);
						option.innerText = decodeURIComponent(field[i]);
						escuelas.appendChild(option)
						console.log(option)
					}
			})
			.then(function(){
				new Promise(function(){
					ajax('getCarreras.php', 'escuela='+escuelas.value)
					.then(response=>response.text())
					.then(responseText=>{
							var carreras = document.getElementById('carreras');
							removeAll(carreras);
							var datos = (responseText.split(';'));
							var field = datos[0].split(',');
							var ids = datos[1].split(',');
							for (var i = field.length - 1; i >= 0; i--) {
								if(field[i]=='') {
									continue;
								}
								var option = document.createElement('option');
								option.setAttribute('value', ids[i]);
								option.innerText = decodeURIComponent(field[i]);
								carreras.appendChild(option)
							}
					})
				})
				.catch(function(){})
			});
		})
		break;
		case "Maestro":
		readTextFile('signup-maestro.php', modificable);
		break;
	}
}
function sendData(file, post){
	var r = fetch(window.location['origin']+'/alf/php/'+file,{
		method: 'POST',
		body: post,
 		headers: {
 			'Content-type': 'application/x-www-form-urlencoded'
 		}
 	});
	return r;
}
</script>
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
				<label class="middle">Escuela: </label>
				<select name='escuela' id='escuelas' onchange='changeEsc()' class="middle">
					<option value="0">otra</option>
				</select>
				<div id="modificable" class="flex-column-item middle"></div>
			</div>
			<div class="flex-column-item">
				<input type='password' id='password' placeholder='Ingresa tu contraseña' />
				<input type='password' id='confirm' placeholder='Confirma tu clave de registro' />
				<input type='button' value='Registrarse' id="submit" onclick="sub()">
			</div>
		</form>
	</section>
	<script>	
		rango = document.getElementById('rango');
		formulario = document.getElementById('signup');
		escuelas = document.getElementById('escuelas');
		function loadEsc(){
			ajax('getEscuelas.php', '')
			.then(response=>response.text())
			.then(responseText=>{
				removeAll(escuelas);
				var datos = (responseText.split(';'));
				var field = datos[0].split(',');
				var ids = datos[1].split(',');
				for (var i = field.length - 1; i >= 0; i--) {
					if(field[i]=='') {
						continue;
					}
					var option = document.createElement('option');
					option.setAttribute('value', ids[i]);
					option.innerText = decodeURIComponent(field[i]);
					escuelas.appendChild(option)
				}
			})
			.then(function(){
					ajax('getCarreras.php', 'escuela='+escuelas.value)
					.then(response=>response.text())
					.then(responseText=>{
							var carreras = document.getElementById('carreras');
							var datos = (responseText.split(';'));
							var field = datos[0].split(',');
							var ids = datos[1].split(',');
							for (var i = field.length - 1; i >= 0; i--) {
								if(field[i]=='') {
									continue;
								}
								var option = document.createElement('option');
								option.setAttribute('value', ids[i]);
								option.innerText = decodeURIComponent(field[i]);
								carreras.appendChild(option)
							}
					})
					.catch(function(){})
			});
		}
		loadEsc();
		function sub(){
			var carrera = document.getElementById('carreras')
			var usuario = document.getElementById('usuario')
			var nombres = document.getElementById('nombres')
			var apellidos = document.getElementById('apellidos')
			var password = document.getElementById('password')
			var confirm = document.getElementById('confirm')
				sendData('registro.php', 
					'rango='+rango.value+
					'&escuela='+escuelas.value+
					'&usuario='+usuario.value+
					'&nombres='+nombres.value+
					'&apellidos='+apellidos.value+
					'&password='+password.value+
					'&confirm='+confirm.value+
					(carrera==null?'':'&carrera='+carrera.value))
				.then(response=>response.text())
				.then(responseText=>{
					errores = responseText.split(';');
					for(var i= 0; i < errores.length; i++){
						if(errores[i]==''){
							continue;
						}
						alert(errores[i]);
					}
					if(errores.length==0){
						usuario.value = "";
						nombres.value = "";
						apellidos.value = "";
					}
					password.value = "";
					confirm.value = "";
				})
				.then(function(){
				})
				.catch(function(){
				})
		}
	</script>