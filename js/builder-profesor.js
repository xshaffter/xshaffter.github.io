window.onload = function (event) {
	
	function setListeners() {
        var celdas = document.getElementsByClassName('td');
        var body = document.getElementById('body');
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
            var x = i+1
            celdas[i].id = 'cell'+x;
        }
    }

    setIDS();
    setListeners();
}
function onMpress(id) {
	var cell = document.getElementById(id);
	if(cell.state == "active") {
		cell.style.background = "white";
		cell.state = "inactive";
	} else {
		cell.style.background = "green";
		cell.state = "active";
	}
}

function onkey(e) {
var key = (e.keyCode ? e.keyCode : e.which);
    switch(key) {
    }
}
function onrelease(e,data) {
    var key = (e.keyCode ? e.keyCode : e.which);
    switch(key) {
        case 27:
        new JSON_ObjInterpreter().downloadJSON(data);
    }
}