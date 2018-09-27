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
function onMpress(id) {
	var cell = document.getElementById(id);
        var superCell = parent.document.getElementById(id);
	if(cell.state=="active") {
        superCell.style.background = "green";
		cell.style.background = "red";
		cell.state = "selected";
	} else if(cell.state=="selected") {
        superCell.style.background = "white";
		cell.style.background = "green";
		cell.state = "active";
	}
}