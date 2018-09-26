function ajax(data, horario) {
	xhr = new XMLHttpRequest();

	xhr.open('post', 'php/subirHorario.php');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		if(xhr.status==200) {
			console.log(xhr.responseText);
		}
		if (xhr.status !== 200) {
		    alert('Request failed.  Returned status of ' + xhr.status);
		}
	};
	xhr.send("horario="+horario+data);
}


class InterpreteHorarios {
	constructor(jsonInterpreter) {
		this.interpreter = jsonInterpreter;
	}
	assignData(celdas) {
		var ids = celdas[0].split(',');
		return ids;
	}

	loadJSON(json) {
		var celdas = this.interpreter.separateCells(json);
		return this.assignData(celdas);
	}
}




class JSON_ObjInterpreter {
	createJSON() {
		var elemCells = document.getElementsByClassName("td");
		var text = "";
		var first = true;
		for (var i = elemCells.length - 1; i >= 0; i--) {
			if(elemCells[i].state=="active") {
				if(first) {
					first = false;
				} else {
					text+=',';
				}

				text+= elemCells[i].id;
			}
		}
		return text;
	}
	downloadJSON(data) {
		 var json = this.createJSON();
		 console.log(data);
		 ajax(data,json);

	}
	createObject (id) {
		var cell = document.getElementById(id);

		var profesor = cell.getElementsByClassName('profesor')[0].innerText;
		var materia = cell.getElementsByClassName('materia')[0].innerText;
		var aula = cell.getElementsByClassName('aula')[0].innerText;
		var object = {'cell':id, 'materia':materia, 'profesor':profesor, 'aula':aula};

		return object;
	}
	transformObject (element) {
		var cell = element.cell;
		var materia = element.materia;
		var profesor = element.profesor;
		var aula = element.aula;
		return "{cell:"+cell+",materia:"+materia+",profesor:"+profesor+",aula:"+ aula+"}"
	}
	separateCells (json) {
		var text = json.replace(/,{/g,'');
		text = json.replace(/'{/g,'');
		text = json.replace(/ '{/g,'');
		text = text.replace(/{/g,'');
		var celdas = text.split('},');
		return celdas;
	}
}