<?php 
include_once 'php/sesion.php';
inicializar();
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Creador de horarios</title>
		<link rel="stylesheet" href="css/lista-maestros.css">
		<link rel="stylesheet" href="css/app.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/estilos.css" />
		<link rel="stylesheet" href="css/ids.css" />
	</head>
	<body id="body">
		<div id="lista-maestros">
		</div>
		<div class="body">
			<div class="tabla horario" id="horario">
				<div class="th grupo unselectable" onclick="changeGroup()" id="grupo">
				Schedule
				</div>
				<div class="th unselectable">
				Monday
				</div>
				<div class="th unselectable">
				Tuesday
				</div>
				<div class="th unselectable">
				Wednesday
				</div>
				<div class="th unselectable">
				Thursday
				</div>
				<div class="th unselectable">
				Friday
				</div>
				<div class="th unselectable">
				Saturday
				</div>
				<!--(div.thorario.unselectable{$@7:00 - $@2:00}+div.td.unselectable*6>(.materia)(.profesor)(.aula))*14-->
				<div class="thorario unselectable">7:00 - 8:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">8:00 - 9:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">9:00 - 10:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">10:00 - 11:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">11:00 - 12:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">12:00 - 13:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">13:00 - 14:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">14:00 - 15:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">15:00 - 16:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">16:00 - 17:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">17:00 - 18:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">18:00 - 19:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">19:00 - 20:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="thorario unselectable">20:00 - 21:00</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
				<div class="td unselectable">
					<div class="materia"></div>
					<div class="profesor"></div>
					<div class="aula"></div>
				</div>
			</div>
		</div>

	<footer class="footer grid-row-list">
		<div class="left">
			<div class="foo-item">
				<div class="foo-title">
					<a href="#" id="btn-maestros">materias</a>
				</div>
			</div>
		</div>
		<div class="right flex-row-item" id="foo-bar">
			
		</div>
	</footer>
		<script src="js/environtment.js"></script>
		<script>
			var shiftpressed = false;
			var ctrlpressed = false;
			var sesionIniciada = false;
			var filaActual = 1;
			var printedCells = 0;
			var ultimaSeleccionada = "";
			var cookieManager = new CookieManager(new CookieReader(), new CookieWriter());
		    function setListeners() {
		        var celdas = document.getElementsByClassName('td');
		        var body = document.getElementById('body');
		        var lista = document.getElementById('btn-maestros');

		        for (var i = 0; i < celdas.length; i++) {
		            celdas[i].addEventListener('contextmenu',function(event){
		                event.preventDefault()
		                if(this.getElementsByClassName('materia')[0].innerText!=""){
		                    var className = this.className;
		                    var cl = className.split(' aula-');
		                    this.className = cl[0];
		                    this.innerHTML = "<div class='materia'></div><div class='profesor'></div><div class='aula'></div>";
		                    var parentSons = document.getElementsByTagName("iframe");
		                    for(var i = 0; i < parentSons.length; i++) {
		                        var actualFrame = parentSons[i].contentDocument;
		                        var actualCell = actualFrame.getElementById(this.id);
		                        actualCell.style.background = "green";
		                        actualCell.state="active";
		                    }
		                }
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
		</script>
		<script>
			function realize() {
				var clases = "";
				var lista = document.getElementById('lista-maestros');
				var materiasTotal = lista.getElementsByTagName('label');
				for (var i = 0; i < materiasTotal.length; i++) {
					var materiaActual = materiasTotal[i];
					if(materiaActual.getAttribute('checked')=='true'){
						clases+=materiaActual.getAttribute('value')+',';
					}
				}
				var horarios = clases.split(',');
				var where = document.getElementById('foo-bar');
				while (where.firstChild) {
				    where.removeChild(where.firstChild);
				}
				for(var i = 0; i < horarios.length; i++) {
					if(horarios[i]==""||horarios[i]==null) {
						continue;
					}
					var post = 'horario='+horarios[i];
					var res = ajax('getHorarioClase.php',post);
					res.then(response=> response.text())
					.then(responseText=>{
						var data = responseText.split(';');
						var foo_bar = document.getElementById('foo-bar');
						var item = document.createElement('div');
						var title = document.createElement('div');
						var mask = document.createElement('div');
						var info = document.createElement('div');
						var info_title = document.createElement('div');
						var frame = document.createElement('iframe');
						item.className = "foo-item";
						title.className = "foo-title";
						title.innerText = data[1];
						mask.className = "foo-mask";
						info.className = "foo-info horario-mini";
						info_title.className = "foo-info-title";
						frame.src = "mini-horario.php?horario="+data[0];
						frame.frameborder = "0";

						item.appendChild(title);
						item.appendChild(mask);
						mask.appendChild(info);
						info.appendChild(info_title);
						info_title.appendChild(frame);
						foo_bar.appendChild(item);
					})
				}
			}
			function inicializar(frame, frameID) {
				console.log(frame)
				console.log(frame.contentDocument)
			    var chargeID = frame.contentDocument.getElementById('chargeID');
			    chargeID.innerText = frameID;
			}

			realize();
		    var sons = document.getElementsByTagName("iframe");
		    for(var i = 0; i < sons.length; i++) {
				inicializar(sons[i],i);
		    }
		</script>
	<script>
		function rmSpecified(parameter) {
        	var celdas = document.getElementsByClassName('td');
			for(var i = 0; i < celdas.length; i++){
				var celda = celdas[i];
		        if(celda.getAttribute('horario')==parameter){
		            var className = celda.className;
		            var cl = className.split(' aula-');
		            celda.className = cl[0];
		            celda.innerHTML = "<div class='materia'></div><div class='profesor'></div><div class='aula'></div>";
				    var parentSons = document.getElementsByTagName("iframe");
				    for(var x = 0; x < parentSons.length; x++) {
				        var actualFrame = parentSons[x].contentDocument;
				        var actualCell = actualFrame.getElementById(celda.id);
				        actualCell.style.background = "green";
				        actualCell.state="active";
				        console.log('hola');
			        }
			    }
			}
		}
	function ajax2(file, whereToPut, post) {
		var r = fetch(window.location['origin']+'/alf/php/'+file,{
			method: 'POST',
			body: post,
	 		headers: {
	 			'Content-type': 'application/x-www-form-urlencoded'
	 		}
	 	})
		.then(result=>result.text())
		.then(responseText=>{
				var result = "";
				var datos = (responseText.split(';'));
				var field = datos[0].split(',');
				var ids = datos[1].split(',');
				var semestres = datos[2].split(',');
				var br = document.createElement('br');
				for(var semestreActual = 1; semestreActual < 10; semestreActual++) {
						var label2 = document.createElement('label');
						var ul = document.createElement('ul');
						label2.innerText = 'semester ' + semestreActual;
						label2.className = "semestre-title";
						whereToPut.appendChild(label2);
						whereToPut.innerHTML += "<br/>";
					for (var i = field.length - 1; i >= 0; i--) {
						if(field[i]=='' || semestres[i]!=semestreActual) {
							continue;
						}
						var label = document.createElement('label');
						var li = document.createElement('li');
						label.className = "class-name";
						label.innerText = decodeURIComponent(field[i]);
						label.href="#";
						label.setAttribute('value',ids[i]);
						li.appendChild(label);
						ul.appendChild(li);
					}
					whereToPut.appendChild(ul);
				}
		})
		return r;
	}
	var r = ajax2('getClases.php',document.getElementById('lista-maestros'),'');
	r.then(function(){
		var materias = document.getElementsByClassName('class-name');
		for(var i = 0; i < materias.length; i++){
			materias[i].addEventListener('click',function(event){
				if(this.getAttribute('checked')=='true') {
					this.setAttribute('checked','false');
					rmSpecified(this.getAttribute('value'));
				} else {
					this.setAttribute('checked','true');
				}
				realize();
			});
		}
	});
	</script>
	</body>
</html>