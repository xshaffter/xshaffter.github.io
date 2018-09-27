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
	<script src="js/schedule-reader.js">
	</script>
	<script src="js/mini-sched.js">
	</script>
	<script>
		var horario = "<?php echo $horario['horario'];?>";
		var lectorHorario = new InterpreteHorarios(new JSON_ObjInterpreter());
		var materia = "<?php echo $horario['materia'] ?>";
		var maestro = "<?php echo $profesor['nombre'].$profesor['apellidos'] ?>";
		var aula = "<?php echo $horario['aula'] ?>";
		setValues(materia,maestro,aula);
	</script>
</body>
</html>