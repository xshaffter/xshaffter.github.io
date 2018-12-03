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
function cajax(file, post) {
	var r = fetch(window.location['origin']+'/alf/php/'+file,{
		method: 'POST',
		body: post,
 		headers: {
 			'Content-type': 'application/x-www-form-urlencoded'
 		}
 	})
	return r;
}
	function removeAll(element) {
		var myNode = element;
		while (myNode.firstChild) {
		    myNode.removeChild(myNode.firstChild);
		}
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
	
var hoverStyle = "1px solid orange";
	function onMpress(id) {
	    if(ctrlpressed) {
	        if(selected(id)) {
	            diselect(id);
	        } else {
	            selectCell(id);
	        }
	    } else {
	    	if(shiftpressed) {
		    	if(ultimaSeleccionada == "") {
		            selectCell(id);
		    	} else {
		    		var desdeCell = new Cell(ultimaSeleccionada);
		    		var hastaCell = new Cell(id);
		    		var min = Math.min(desdeCell.number, hastaCell.number);
		    		var max = Math.max(desdeCell.number, hastaCell.number);;
		    		for (var i = min; i <= max; i++) {
		    			selectCell('cell'+i);
		    		}
		    	}
		    } else {
		        if(selected(id)) {
		            var temp = selectedCells.split(id+";");
		            if(temp.length >1) {
		                selected_clean();
		                selectCell(id);
		            } else {
		                selected_clean();
		            }
		        } else {
		            selected_clean();
		            selectCell(id);
		        }
		    }
	    }

	}
function diselect (id) {
	var temp = selectedCells.split(id+";");
	selectedCells = temp[0] + temp[1];
	var cell = document.getElementById(id);
	if(cell == null) {
		return;
	}
	cell.style.border = "";
}
function selectCell(id) {
	var cell = document.getElementById(id);
	if(cell == null) {
		return;
	}
	selectedCells += id+';';
	cell.style.border = hoverStyle;
	ultimaSeleccionada = id;
}

function selected_clean() {
    if(selectedCells != ""){
        var ids = selectedCells.split(';');
        for (var i = ids.length - 1; i >= 0; i--) {
            if(ids[i] == '') {
                continue;
            }
            diselect(ids[i]);
        }
        selectedCells="";
    }
}


function remove_selected() {
    var celdas = selectedCells.split(';');
    for (var i = celdas.length - 1; i >= 0; i--) {
    	if(celdas[i]=="") {
    		continue;
    	}
        var cell = document.getElementById(celdas[i]);
        var className = cell.className;
        var cl = className.split('aula-');
        cell.className = cl[0];
        cell.innerHTML = "<div class='materia'></div><div class='profesor'></div><div class='aula'></div><div class='mask'></div>";
        diselect(celdas[i]);
    }
}