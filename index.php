<?php
include_once 'php/sesion.php';
inicializar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Asistente de horarios</title>
	<link rel="stylesheet" href="css/app.css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto.Slab:700" rel="stylesheet" />
</head>
<body>
	<header class="main-header">
		
		<nav class="nav-content">
			<ul class="item-list flex-row-item">
				<?php 
					if(!loged()) {
						echo "<li class='item-list-elements'><a href='#login'>Iniciar Sesion</a></li>".
						"<li class='item-list-elements'><a href='#signup'>Registrase</a></li>";
					} else {
						echo "<li class='item-list-elements'><a href='php/logout.php'>Cerrar Sesion</a></li>";
					}

				?>
			</ul>
		</nav>

		<figure class="background-figure">
			<img src="src/main-background.jpg" alt="" class="background-image" />
		</figure>

		<hgroup>
			<h1 class="main-title">Asistente de horarios </h1>
			<h2 class="sub-title">Personaliza tus propios horarios!</h2>
		</hgroup>
			<a href="<?php echo isset($_SESSION['nombre'])? '#sched-form':'horario-alumno.php' ?>" class="call-to-action-button">
				Empieza Ahora!
			</a>
	</header>	

	<section class="mid-slide">
		<?php 
			if(!loged()) {
				echo ("<form id='login' action='php/iniciar.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item'>".
						"<h2 class='form-title'>Inicia sesion!</h2>".
						"<input type='text' name='ncontrol' placeholder='numero de control' />".
						"<input type='password' name='password' placeholder='Ingresa tu contraseña' />".
						"<input type='submit' value='Iniciar Sesion'>".
					"</form>".
					"<form id='signup' action='php/registro.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item'>".
						"<h2 class='form-title'>Registrate, es muy facil!</h2>".
						"<input type='text' name='ncontrol' placeholder='numero de control' />".
						"<input type='password' name='password' placeholder='Ingresa tu contraseña' />".
						"<input type='text' name='confirm' placeholder='Confirma tu clave de registro' />".
						"<input type='submit' value='Iniciar Sesion'>".
					"</form>");
			} else {
				echo "<form id='sched-form' action='horario-profesor.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item'>".
		 	"<input type='text' name='aula' placeholder='aula' required='true' />".
		 	"<input type='text' name='materia' placeholder='materia' required='true' />".
		 	"<input type='text' name='capacidad' placeholder='capacidad' required='true' />".
		 	"<input type='text' name='carrera' placeholder='carrera' required='true' />".
		 	"<input type='submit' value='Iniciar'/>".
		 "</form>";
			}
<<<<<<< HEAD
		</script>
		<script src="js/cells.js"></script>
		<script src="js/builder.js"></script>
		<script src="js/filemanage.js"></script>

		<title>Creador de horarios</title>
		<link rel="stylesheet" href="css/estilos.css">
		<link rel="stylesheet" href="css/estilos2.css">
		<link rel="stylesheet" href="css/ids.css">

	</head>
	<body onkeydown="onkey(event)" id="body" onkeyup="onrelease(event)">
		<section id="main-menu"></div>
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
		</section>

		<div class="body">
		<div class="tabla horario" id="horario">
			<div class="th grupo" onclick="changeGroup()" id="grupo">
			Grupo A
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

			<div class="thorario c1 r2">
			08:00 - 09:00
			</div>

			<div class="thorario c1 r3">
			09:00 - 10:00
			</div>

			<div class="thorario c1 r4">
			10:00 - 11:00
			</div>

			<div class="thorario c1 r5">
			11:00 - 12:00
			</div>

			<div class="thorario c1 r6">
			12:00 - 13:00
			</div>

			<div class="thorario c1 r7">
			13:00 - 14:00
			</div>

			<div class="thorario c1 r8">
			14:00 - 15:00
			</div>

			<div class="thorario c1 r9">
			15:00 - 16:00
			</div>

			<div class="thorario c1 r10">
			16:00 - 17:00
			</div>

			<div class="thorario c1 r11">
			17:00 - 18:00
			</div>

			<div class="thorario c1 r12">
			18:00 - 19:00
			</div>

			<div class="thorario c1 r13">
			19:00 - 20:00
			</div>

			<div onclick="onMpress(this.id)" class="r2 td unselectable" id="cell1" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r2 td unselectable" id="cell2" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r2 td unselectable" id="cell3" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r2 td unselectable" id="cell4" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r2 td unselectable" id="cell5" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r2 td unselectable" id="cell6" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r3 td unselectable" id="cell7" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r3 td unselectable" id="cell8" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r3 td unselectable" id="cell9" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r3 td unselectable" id="cell10" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r3 td unselectable" id="cell11" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r3 td unselectable" id="cell12" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r4 td unselectable" id="cell13" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r4 td unselectable" id="cell14" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r4 td unselectable" id="cell15" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r4 td unselectable" id="cell16" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
			</div>
			<div onclick="onMpress(this.id)" class="r4 td unselectable" id="cell17" oncontextmenu="event.preventDefault(); return false;"><div class="materia"></div>
			<div class="profesor"></div>
			<div class="aula"></div>
=======
		 ?>
	</section>
	
	<footer class="footer flex-row-item">
		<div class="foo-item">
			<div class="foo-title">Version</div>
			<div class="foo-mask">
				<div class="foo-info">0.2.3</div>
			</div>
		</div>
		<div class="foo-item">
			<div class="foo-title">Repositorio</div>
			<div class="foo-mask">
				<div class="foo-info"><a href="https://www.github.com/xshaffter/xshaffter.github.io">GO GIT</a></div>
>>>>>>> 6f993e67251214d77eab455041af1f7e51def9b2
			</div>
		</div>
		<div class="foo-item">
			<div class="foo-title">Arquitecto</div>
			<div class="foo-mask">
				<div class="foo-info">Carlos David Sanchez Moreno</div>
			</div>
		</div>
		<div class="foo-item">
			<div class="foo-title">Programador</div>
			<div class="foo-mask">
				<div class="foo-info">Alfredo Antonio Martinez Armendariz</div>
			</div>
		</div>
	</footer>


</body>
</html>

