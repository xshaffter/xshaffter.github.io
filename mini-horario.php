<?php 
	include_once "php/conexion.php";
	Conexion::conectar();
	$horario = Conexion::getHorario($_GET['horario']);
	$profesor = Conexion::getProfesor($horario['maestro']);
	Conexion::desconectar();
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="css/estilos.css" />
	<link rel="stylesheet" href="css/mini-sched.css" />
	<link rel="stylesheet" href="css/dibujos.css" />
	<title>Document</title>
</head>
<body>
	<div class="star">
		<label>&#9733;</label>
		<p><?php echo number_format($profesor['calificacion'], 1); ?></p>
	</div>
	<div class="panel-horario mini-horario">
		<div class="th"></div>
		<div class="th"></div>
		<div class="th"></div>
		<div class="th"></div>
		<div class="th"></div>
		<div class="th"></div>
		<div class="th"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div class="thorario unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
		<div state="inactive" class="td unselectable"></div>
	</div>
	<section id="chargeID" style="display: none;"><?php echo $horario['horario']; ?></section>
	<script src="js/environtment.js"></script>
	<script>
		var horario = "<?php echo $horario['horario'];?>";
		var horarioID = "<?php echo $horario['id'];?>";
		var materia = "<?php echo $horario['materiaNombre'] ?>";
		var maestro = "<?php echo $profesor['nombre'].' '. $profesor['apellidos'] ?>";
		var aula = "<?php echo $horario['aula'] ?>";
	</script>
	<script>
		var lectorHorario = new InterpreteHorarios(new JSON_ObjInterpreter());
		var materiaF = "";
		var maestroF = "";
		var aulaF = "";
		var horarioF = "";
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
		function cleanCell(id) {
		    var cell = document.getElementById(id);
		    var superCell = parent.document.getElementById(id);
		    var className = superCell.className;
		    var cl = className.split(' aula-');
		    superCell.className = cl[0];
		    superCell.innerHTML = "<div class='materia'></div><div class='profesor'></div><div class='aula'></div>";
		    cell.style.background = "green";
		    cell.state = "active";
		    var parentSons = parent.document.getElementsByTagName("iframe");
		    for(var i = 0; i < parentSons.length; i++) {
		        var actualFrame = parentSons[i].contentDocument;
		        var actualID = actualFrame.getElementById('chargeID').innerText;
		        var thisID = document.getElementById('chargeID').innerText;
		        if(actualID==thisID) {
		            continue;
		        }
		        var actualCell = actualFrame.getElementById(id);
		        actualCell.style.background = "green";
		        actualCell.state="active"
		    }
		}
		function onMpress(id) {
		    var cell = document.getElementById(id);
		    if(cell.state=="active"){
		        putCell(id);
		    } else if(cell.state=="selected") {
		        cleanCell(id);
		    } else if(cell.state=="inactive") {
		        return;
		    }
		}
		function setValues(horarioID, materia, maestro, aula) {
		    materiaF = materia;
		    maestroF = maestro;
		    aulaF = aula;
		    horarioF = horarioID;
		}
		function putCell(id) {
		    var cell = document.getElementById(id);
		    var superCell = parent.document.getElementById(id);
		    superCell.getElementsByClassName("materia")[0].innerText = materiaF;
		    superCell.getElementsByClassName("profesor")[0].innerText = maestroF;
		    superCell.getElementsByClassName("aula")[0].innerText = aulaF;
		    superCell.setAttribute('horario', horarioF)
		    superCell.className += " aula-"+aulaF;
		    cell.style.background = "red";
		    cell.state = "selected";
		    var parentSons = parent.document.getElementsByTagName("iframe");
		    for(var i = 0; i < parentSons.length; i++) {
		        var actualFrame = parentSons[i].contentDocument;
		        var actualID = actualFrame.getElementById('chargeID').innerText;
		        var thisID = document.getElementById('chargeID').innerText;
		        if(actualID==thisID) {
		            continue;
		        }
		        var actualCell = actualFrame.getElementById(id);
		        actualCell.style.background = "#666";
		        actualCell.state="inactive"
		    }
		}
	</script>
	<script>
		setValues(horarioID,materia,maestro,aula);
	</script>
</body>
</html>