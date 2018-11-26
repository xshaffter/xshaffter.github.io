function ajax(file, post) {
	var r = fetch(window.location['origin']+'/alf/php/'+file,{
		method: 'POST',
		body: post,
 		headers: {
 			'Content-type': 'application/x-www-form-urlencoded'
 		}
 	})
	return r;
}
function capitalize(text) {
    var newText = text[0].toUpperCase() + text.substring(1).toLowerCase();
    return newText;
}

class Searcher {
	run(func) {
    	var parentSons = parent.document.getElementsByTagName("iframe");
	    for(var i = 0; i < parentSons.length; i++) {
	        if(parentSons[i].contentWindow.document.getElementById('chargeID').innerText==0) {
	            continue;
	        }
	        func();
	    }
	}
}
function subirHorario(data, horario) {
	xhr = new XMLHttpRequest();

	xhr.open('post', 'php/subirHorario.php');
	xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
	xhr.onload = function() {
		if(xhr.status==200) {
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
		 subirHorario(data,json);

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
	class CookieManager{
		constructor(cookieReader, cookieWriter) {
			this.cookieWriter = cookieWriter;
			this.cookieReader = cookieReader;
		}
		read(cname) {
			return this.cookieReader.read(cname);
		}
		write(cname, value) {
			this.cookieWriter.write();
		}
	}
	class CookieReader {
		constructor() {

		}
		read(cname) {
		    var name = cname + "=";
		    var decodedCookie = decodeURIComponent(unescape(document.cookie));
		    var ca = decodedCookie.split(';');
		    for(var i = 0; i <ca.length; i++) {
		        var c = ca[i];
		        while (c.charAt(0) == ' ') {
		            c = c.substring(1);
		        }
		        if (c.indexOf(name) == 0) {
		            return c.substring(name.length, c.length);
		        }
		    }
		    return "";
		}
	}
	class CookieWriter {
		constructor() {

		}
		write(name, value) {
	    	document.cookie = (escape(name) + "=" + escape(value) +"; path=/");
		}
	}