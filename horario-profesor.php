<?php include_once 'php/sesion.php';
inicializar();
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<script src="js/environtment.js"></script>
		<script>
		    var celdas = document.getElementsByClassName('td');
			function setListeners() {
		        var guardar = document.getElementById('btn-guardar');
		        guardar.addEventListener('click',function(){
		        	data = '<?php echo '&id='.$_SESSION['usuario'].'&aula='. $_POST['aula'].'&cap='. $_POST['capacidad'].'&materia='.$_POST['materia'].'&carrera='. $_POST['carrera']; ?>';
		        	var usados = 0;
			        for (var i = 0; i < celdas.length; i++) {
			            if(celdas[i].state=='active') {
			            	usados++;
			            }
			        }
			        if(usados>=5){
				        new JSON_ObjInterpreter().downloadJSON(data);
				        alert("Horario guardado");
				        redirectToRoot();
			        } else {
			        	alert("Debe tener almenos 5 horas para que se pueda guardar");
			        }
		        });
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
		        for (var i = 0; i < celdas.length; i++) {
		            var x = i+1
		            celdas[i].id = 'cell'+x;
		        }
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
		</script>

		<title>Creador de horarios</title>
		<link rel="stylesheet" href="css/app.css">
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/sched-teacher.css">
		<link rel="stylesheet" href="css/ids.css">

	</head>
	<body id="body">
		<div class='body'>
		<div class="tabla horario" id="horario">
			<div class="th grupo" id="grupo">
			<?php echo $_POST['aula']; ?>
			</div>

			<div class="th">
			Lunes
			</div>

			<div class="th">
			Martes
			</div>

			<div class="th">
			Miercoles
			</div>

			<div class="th">
			Jueves
			</div>

			<div class="th">
			Viernes
			</div>

			<div class="th">
			Sabado
			</div>
			
			<!--(div.thorario.unselectable{$@7:00 - $@2:00}+div.td.unselectable[state="inactive"]*6>(.materia)(.profesor)(.aula))*14-->
			<div class="thorario unselectable">7:00 - 8:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">8:00 - 9:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">9:00 - 10:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">10:00 - 11:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">11:00 - 12:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">12:00 - 13:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">13:00 - 14:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">14:00 - 15:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">15:00 - 16:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">16:00 - 17:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">17:00 - 18:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">18:00 - 19:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">19:00 - 20:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="thorario unselectable">20:00 - 21:00</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>
			<div class="td unselectable" state="inactive">
				<div class="materia"></div>
				<div class="profesor"></div>
				<div class="aula"></div>
			</div>

		<div id="load-structure" style="display: none;">
			<input type="file" id="archivo" onchange="readJSON()" />
			<div id="downloader"></div>
		</div>
		<footer class="footer grid-row-list">
			<div class="left">
				<div class="foo-item">
					<div class="foo-title">
						<a href="#" id="btn-guardar">Guardar</a>
					</div>
				</div>
			</div>
			<div class="right flex-row-item" id="foo-bar">
				
			</div>
		</footer>
		<script type="text/javascript">
			    setIDS();
			    setListeners();
		</script>
	</body>
</html>