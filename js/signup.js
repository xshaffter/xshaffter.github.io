
	var rango = document.getElementById('rango');
	var formulario = document.getElementById('signup');
	var escuelas = document.getElementById('escuelas');
window.onload = function (event) {
	rango = document.getElementById('rango');
	formulario = document.getElementById('signup');
	escuelas = document.getElementById('escuelas');
	escuelas.addEventListener('load', loadEsc());
}
function changeEsc(){
	ajax('getCarreras.php', document.getElementById('carreras'), 'escuela='+escuelas.value);
}
function loadEsc(){
	ajax('getEscuelas.php', escuelas, '')
	.then(function(){
		new Promise(function(){
			ajax('getCarreras.php', document.getElementById('carreras'), 'escuela='+escuelas.value);
		})
		.catch(function(){})
	});
}
function sub(){
	alert('submit')
	var carrera = document.getElementById('carreras')
	var usuario = document.getElementById('usuario')
	var nombres = document.getElementById('nombres')
	var apellidos = document.getElementById('apellidos')
	var password = document.getElementById('password')
	var confirm = document.getElementById('confirm')
		sendData('registro.php', 
			'rango='+rango.value+
			'&carrera='+carrera.value+
			'&escuela='+escuelas.value+
			'&usuario='+usuario.value+
			'&nombres='+nombres.value+
			'&apellidos='+apellidos.value+
			'&password='+password.value+
			'&confirm='+confirm.value)
		.then(function(){
			alert('jala')
		})
}
function readTextFile(file, where){
	var r = fetch(file)
  .then(response => response.text())
  .then(text => where.innerHTML = text)
  return r
}
function rangoLoad(){
		switch(rango.value){
			case "Alumno":
			readTextFile('http://localhost/alf/signup-alumno.php', modificable)
			.then(function(){
				ajax('getEscuelas.php', escuelas, '')
				.then(function(){
					new Promise(function(){
						ajax('getCarreras.php', document.getElementById('carreras'), 'escuela='+escuelas.value);
					})
					.catch(function(){})
				});
			})
			break;
			case "Maestro":
			readTextFile('http://localhost/alf/signup-maestro.php', modificable);
			break;
		}
	}
function rangoChange() {
	var modificable = document.getElementById('modificable');
	switch(rango.value){
		case "Alumno":
		readTextFile('http://localhost/alf/signup-alumno.php', modificable)
		.then(function(){
			ajax('getEscuelas.php', escuelas, '')
			.then(function(){
				new Promise(function(){
					ajax('getCarreras.php', document.getElementById('carreras'), 'escuela='+escuelas.value);
				})
				.catch(function(){})
			});
		})
		break;
		case "Maestro":
		readTextFile('http://localhost/alf/signup-maestro.php', modificable);
		break;
	}
}

function ajax(file, whereToPut, post) {
	var r = fetch('http://localhost/alf/php/'+file,{
		method: 'POST',
		body: post,
 		headers: {
 			'Content-type': 'application/x-www-form-urlencoded'
 		}
 	})
	.then(result=>result.text())
	.then(responseText=>{
			var result = "";
			var datos = (responseText.split(';'));
			var field = datos[0].split(',');
			var ids = datos[1].split(',');
			result+= "<option selected='selected' value='"+ids[0]+"'>"+ decodeURIComponent(field[0]) +"</option>";
			for (var i = field.length - 1; i >= 1; i--) {
				if(field[i]=='') {
					continue;
				}
				result+= "<option value='"+ids[i]+"'>"+ decodeURIComponent(field[i]) +"</option>";
			}
			whereToPut.innerHTML = result;
	})
	return r;
}
function sendData(file, post){
	var r = fetch('http://localhost/alf/php/'+file,{
		method: 'POST',
		body: post,
 		headers: {
 			'Content-type': 'application/x-www-form-urlencoded'
 		}
 	})
	return r;
}