function createJSON() {
	var text = "";
	for (var i = 1; i < 72; i++) {
		text+=transformObject(createObject('cell'+i))+',';
	};

	text+=transformObject(createObject('cell72'));
	var data = "text/json;charset=utf-8," + encodeURIComponent(JSON.stringify(text));
	return data
}
function createObject (id) {
	var cell = document.getElementById(id);

	var profesor = cell.getElementsByClassName('profesor')[0].innerText;
	var materia = cell.getElementsByClassName('materia')[0].innerText;
	var aula = cell.getElementsByClassName('aula')[0].innerText;
	var object = {'cell':id, 'materia':materia, 'profesor':profesor, 'aula':aula};

	return object;
}
function transformObject (element) {
	var cell = element.cell;
	var materia = element.materia;
	var profesor = element.profesor;
	var aula = element.aula;
	return "{cell:"+cell+",materia:"+materia+",profesor:"+profesor+",aula:"+ aula+"}"
}
function loadJSON (json) {
	var celdas = separateCells(json);
	assignData(celdas);
}
function separateCells (json) {
	var text = json.replace(/,{/g,'');
	text = json.replace(/'{/g,'');
	text = json.replace(/ '{/g,'');
	text = text.replace(/{/g,'');
	var celdas = text.split('},');
	return celdas;
}
function assignData(celdas) {
	for (var i = 0; i < celdas.length; i++) {
		var celdaActual = celdas[i];
		var listaDatos = celdaActual.split(',');
		var celdaActual = null;
		for (var x = 0; x < listaDatos.length; x++) {
			if(listaDatos[x]=="" || listaDatos[x]==null) {
				continue;
			}
			var datos = listaDatos[x].split(':');
			var name = datos[0];
			var value = datos[1];
			if(name=='}' || value=="}") {
				continue;
			}
			if(name=="cell") {
				celdaActual = document.getElementById(value);
			} else {
				celdaActual.getElementsByClassName(name)[0].innerText = value;
			}
			console.log(name);
			if(name==" aula" || name == "aula") {
				console.log(name);
				celdaActual.className+= ' aula-'+value;
			}
		};
	};
}
function downloadJSON(filename) {
  var dwnldr = document.getElementById('downloader');
  var element = dwnldr.createElement('a');
  element.setAttribute('href', 'data:text/plain;charset=utf-8,' + encodeURIComponent(createJSON()));
  element.setAttribute('download', filename);
  element.style.display = 'none';
  document.body.appendChild(element);

  element.click();

  document.body.removeChild(element);
}