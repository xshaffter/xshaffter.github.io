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
						"<li class='item-list-elements'><a href='signup.php'>Registrase</a></li>";
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
			<a href="<?php echo isset($_SESSION['nombre'])? ($_SESSION['rango']==1)? 'horario-alumno.php':'#sched-form':'#login' ?>" class="call-to-action-button">
				Empieza Ahora!
			</a>
	</header>	

	<section class="mid-slide">
		<?php 
			if(!loged()) {
				include_once 'plantillas/login-form.php';
				include_once 'signup.php';
			} else {
				if(isTeacher()){
					include_once 'plantillas/new-horario-form.php';
				} else {
					
				}
			}
		 ?>
	</section>
	
	<footer class="footer flex-row-item">
		<div class="foo-item">
			<div class="foo-title">Version</div>
			<div class="foo-mask">
				<div class="foo-info">0.4.0</div>
			</div>
		</div>
		<div class="foo-item">
			<div class="foo-title">Repositorio</div>
			<div class="foo-mask">
				<div class="foo-info"><a href="https://www.github.com/xshaffter/xshaffter.github.io">GO GIT</a></div>
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

