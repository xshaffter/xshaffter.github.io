var materiaF = "";
var maestroF = "";
var aulaF = "";
window.onload = function () {
	function setListeners() {
        var celdas = document.getElementsByClassName('td');
        for (var i = 0; i < celdas.length; i++) {
            celdas[i].addEventListener('click',function(){
                onMpress(this.id);
            });
            celdas[i].addEventListener('oncontextmenu',function(){
                event.preventDefault();
            });
        }
	}

    function setIDS() {
        var celdas = document.getElementsByClassName('td');
        for (var i = 0; i < celdas.length; i++) {
            var x = i+1;
            celdas[i].id = 'cell'+x;
        }
    }
    function setActives() {
		var cells = lectorHorario.loadJSON(horario);
		for (var i = 0; i < cells.length; i++) {
			var celdaId = cells[i];
			var celdaActual = document.getElementById(celdaId);
			celdaActual.state = "active";
			celdaActual.style.background = "green";
		};
    }
    setIDS();
    setListeners();
    setActives();
}
function cleanCell(superCell) {
    var className = superCell.className;
    var cl = className.split(' aula-');
    superCell.className = cl[0];
    superCell.innerHTML = "<div class='materia'></div><div class='profesor'></div><div class='aula'></div>";
}
function onMpress(id) {
    var cell = document.getElementById(id);
    var superCell = parent.document.getElementById(id);
    if(cell.state=="active"){
        putCell(superCell);
        cell.style.background = "red";
        cell.state = "selected";
    } else if(cell.state=="selected") {
        cleanCell(superCell);
        cell.style.background = "green";
        cell.state = "active";
    }
}
function setValues(materia, maestro, aula) {
    materiaF = materia;
    maestroF = maestro;
    aulaF = aula;
}
function putCell(superCell) {
    superCell.getElementsByClassName("materia")[0].innerText = materiaF;
    superCell.getElementsByClassName("profesor")[0].innerText = maestroF;
    superCell.getElementsByClassName("aula")[0].innerText = aulaF;
    superCell.className += " aula-"+aulaF;
}