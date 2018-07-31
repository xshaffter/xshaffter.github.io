
var hoverStyle = "0 0 10px red inset";
class Cell {

	constructor(id) {
		this.number = parseInt(id.split('cell')[1]);
		this.id = id;
	}


	toHTML(row) {
		return "<div onclick='onMpress(this.id)' class='r"+row+" td unselectable' id='"+this.id+"' oncontextmenu='event.preventDefault(); return false;'><div class='materia'></div><div class='profesor'></div><div class='aula'></div></div>";
	}
}
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
	cell.style.boxShadow = "";
}
function selectCell(id) {
	var cell = document.getElementById(id);
	if(cell == null) {
		return;
	}
	selectedCells += id+';';
	cell.style.boxShadow = hoverStyle;
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