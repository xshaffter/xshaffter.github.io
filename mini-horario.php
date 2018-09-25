<?php 
	include_once "php/conexion.php";
	Conexion::conectar();
	$profesor = Conexion::getProfesor(isset($_GET['profe'])? $_GET['profe']:'');
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
	<script>var horario = "<?php echo $profesor['horario'];?>"</script>
	<script src="js/mini-horario.js"></script>
</body>
</html>