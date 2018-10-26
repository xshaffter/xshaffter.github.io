
	var rango = document.getElementById('rango');
	var formulario = document.getElementById('signup');
	var escuelas = document.getElementById('escuelas');
window.onload = function (event) {
	rango = document.getElementById('rango');
	formulario = document.getElementById('signup');
	escuelas = document.getElementById('escuelas');
	escuelas.addEventListener('load', ajaxEscuelas());
}
function readTextFile(file, where){
	fetch(file)
  .then(response => response.text())
  .then(text => where.innerHTML = text)
}
function rangoLoad(){
		switch(rango.value){
			case "Alumno":
			readTextFile('http://localhost/alf/signup-alumno.php', modificable);
			ajaxEscuelas();
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
		readTextFile('http://localhost/alf/signup-alumno.php', modificable);
		ajaxEscuelas();
		break;
		case "Maestro":
		readTextFile('http://localhost/alf/signup-maestro.php', modificable);
		break;
	}
}

function ajaxCarreras(escuela) {
	fetch('http://localhost/alf/php/getCarreras.php',{
		method: 'POST',
		body: 'escuela='+escuela,
 		headers: {
 			'Content-type': 'application/x-www-form-urlencoded'
 		}
	})

	.catch(error => console.error('Error:', error))
	.then(response=>response.text())
	.then(responseText=>{
			var result = "";
			var datos = (responseText.split(';'));
			var carreras = datos[0].split(',');
			var ids = datos[1].split(',');
			result+= "<option selected='selected' value='"+ids[0]+"'>"+ decodeURIComponent(carreras[0]) +"</option>";
			for (var i = carreras.length - 1; i >= 1; i--) {
				if(carreras[i]=='') {
					continue;
				}
				result+= "<option value='"+ids[i]+"'>"+ decodeURIComponent(carreras[i]) +"</option>";
			}
			try{
			document.getElementById("carreras").innerHTML = result;
			} catch(ex){}
		})
}
function ajaxEscuelas() {
	fetch('http://localhost/alf/php/getEscuelas.php')
	.then(result=>result.text())
	.then(responseText=>{
			var result = "";
			var datos = (responseText.split(';'));
			var escuelasd = datos[0].split(',');
			var ids = datos[1].split(',');
			result+= "<option selected='selected' value='"+ids[0]+"'>"+ decodeURIComponent(escuelasd[0]) +"</option>";
			for (var i = escuelasd.length - 1; i >= 1; i--) {
				if(escuelasd[i]=='') {
					continue;
				}
				result+= "<option value='"+ids[i]+"'>"+ decodeURIComponent(escuelasd[i]) +"</option>";
			}
			escuelas.innerHTML = result;
	})
	.then(function(){
		new Promise(function(){
			ajaxCarreras(escuelas.value);
		})
		.catch(function(){})
	});
}