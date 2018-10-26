<?php 
include_once 'php/sesion.php'; 
include_once 'php/conexion.php';
Conexion::conectar();
$horario = Conexion::getHorario('04');
$profesor = Conexion::getProfesor($horario['maestro']);
$horario2 = Conexion::getHorario('06');
$profesor2 = Conexion::getProfesor($horario2['maestro']);
$horario3 = Conexion::getHorario('07');
$profesor3 = Conexion::getProfesor($horario3['maestro']);
Conexion::desconectar();
?><!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">

		<title>Creador de horarios</title>
		<link rel="stylesheet" href="css/app.css" />
		<link rel="stylesheet" href="css/fonts.css" />
		<link rel="stylesheet" href="css/estilos.css" />
		<link rel="stylesheet" href="css/ids.css" />
	</head>
	<body id="body">
		<div id="overlay" onkeypress="onkey(event)">
			<div id='changer'>
				<div class="panel">
					<div class="panel-title unselectable">
						Ingresa los datos
					</div>

					<div class="panel-content">
						<form action="#">
							<input type="text" id="materia" class="input-text" placeholder="Materia" /><br><br>
							<input type="text" id="profesor" class="input-text" placeholder="Profesor" /><br><br>
							<label style="width:3em;">Edificio</label> <select id="edificio" class="selector"></select>
							<label style="width:3em;">Aula</label> <select id="aula" class="selector"></select>
							<br>
							<input type="submit" onclick='charge()' value="aceptar" class="input-button">
						</form>
					</div>
				</div>
			</div>


			<div id="class-list">
				<div class="panel" style="height: 100%; width: 100%;">
					<div class="panel-title unselectable">
						Materias Ingresadas
					</div>
					<div class="panel-content" style="height: 100%">
						<div class="lista" id="lista">
							<div class="th-list c1 unselectable">Materia</div>
							<div class="th-list c2 unselectable">Profesor</div>
							<div class="th-list c3 unselectable">Aula</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="body">
			<div class="tabla horario" id="horario">
				<div class="th grupo unselectable" onclick="changeGroup()" id="grupo">
				Grupo A
				</div>
				<div class="th unselectable">
				Lunes
				</div>
				<div class="th unselectable">
				Martes
				</div>
				<div class="th unselectable">
				Miercoles
				</div>
				<div class="th unselectable">
				Jueves
				</div>
				<div class="th unselectable">
				Viernes
				</div>
				<div class="th unselectable">
				Sabado
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

	<footer class="footer flex-row-item">
		<div class="foo-item">
			<div class="foo-title"><?php echo $profesor['nombre'] .' '. $profesor['apellidos']?></div>
			<div class="foo-mask">
				<div class="foo-info horario-mini">
					<div class="foo-info-title">					
						<iframe src="mini-horario.php?horario=<?php echo $horario['id'] ?>" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="foo-item">
			<div class="foo-title"><?php echo $profesor2['nombre'] .' '. $profesor2['apellidos']?></div>
			<div class="foo-mask">
				<div class="foo-info horario-mini">
					<div class="foo-info-title">					
						<iframe src="mini-horario.php?horario=<?php echo $horario2['id'] ?>" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
		<div class="foo-item">
			<div class="foo-title"><?php echo $profesor3['nombre'] .' '. $profesor3['apellidos']?></div>
			<div class="foo-mask">
				<div class="foo-info horario-mini">
					<div class="foo-info-title">					
						<iframe src="mini-horario.php?horario=<?php echo $horario3['id'] ?>" frameborder="0"></iframe>
					</div>
				</div>
			</div>
		</div>
	</footer>
		<script src="js/cookies.js"></script>
		<script src="js/cells.js"></script>
		<script src="js/builder.js"></script>
	</body>
</html>