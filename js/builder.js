var shiftpressed = false;
var ctrlpressed = false;
var sesionIniciada = false;
var filaActual = 1;
var printedCells = 0;
var ultimaSeleccionada = "";
var cookieManager = new CookieManager(new CookieReader(), new CookieWriter());
window.onload = (function(event) {
    function setListeners() {
        var celdas = document.getElementsByClassName('td');
        var body = document.getElementById('body');
        var lista = document.getElementById('btn-maestros');

        for (var i = 0; i < celdas.length; i++) {
            celdas[i].addEventListener('oncontextmenu',function(){
                event.preventDefault();
                return false;
            });
        }
        lista.addEventListener('click',function(event) {
        if(document.getElementById('lista-maestros').style.display=="none") {
            document.getElementById('lista-maestros').style.display="block";
        }
        });
        body.addEventListener('keydown',function(event){
            onkey(event);
        });
        body.addEventListener('keyup',function(event){
            onrelease(event);
        });

    }
    function setIDS() {
        var celdas = document.getElementsByClassName('td');
        for (var i = 0; i < celdas.length; i++) {
            var x = i+1
            celdas[i].id = 'cell'+x;
        }
    }

    setListeners();
    setIDS()
});

function changeGroup() {
    var grupo = prompt("¿A qué grupo perteneces?");
    var cell = document.getElementById('grupo');
    cell.innerText = "Grupo "+capitalize(grupo);
}

function onkey(e) {
var key = (e.keyCode ? e.keyCode : e.which);
    switch(key) {
        case 8:
            remove_selected();
            break;
        case 17:
            ctrlpressed = true;
            break;
        case 45:
            display();
            break;
        case 16:
            shiftpressed = true;
            break;
    }
}
function onrelease(e) {
    var key = (e.keyCode ? e.keyCode : e.which);
    switch(key) {
        case 17:
            ctrlpressed = false;
            break;
        case 16:
            shiftpressed = false;
            break;
        case 27:
        if(document.getElementById('lista-maestros').style.display!="none") {
            document.getElementById('lista-maestros').style.display="none"
        }
        break;
    }
}