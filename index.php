<?php
include_once 'php/sesion.php';
inicializar();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>ASC</title>
	<link rel="stylesheet" href="css/app.css" />
</head>
<body>
	<header class="main-header">
		
		<nav class="nav-content">
			<ul class="item-list flex-row-item">
				<?php 
					if(!loged()) {
						echo "<li class='item-list-elements'><a href='#login'>Sign-in</a></li>".
						"<li class='item-list-elements'><a href='signup.php'>Sign-up</a></li>";
					} else {
						echo "<li class='item-list-elements'><a href='php/logout.php'>Sign-out</a></li>";
					}

				?>
			</ul>
		</nav>

		<figure class="background-figure">
			<img src="src/team-bg.jpg" alt="" class="background-image" />
		</figure>

		<hgroup>
			<h1 class="main-title">ASC Schedule Assistant</h1>
			<h2 class="sub-title">Design your own Schedule!</h2>
		</hgroup>
			<a href="<?php echo isset($_SESSION['nombre'])? ($_SESSION['rango']==1)? 'horario-alumno.php':'#sched-form':'#login' ?>" class="call-to-action-button">
				Get started!
			</a>
	</header>	

	<?php 
		if($_SESSION['rango']!=1){
			include_once 'plantillas/mid-slide.php';
		}
	 ?>
	
	<footer class="footer grid-row-list" <?php if(isset($_SESSION['rango'])&&$_SESSION['rango']==1){echo "style='position: fixed; bottom: 0;'";} ?>>
		<div class="left">
			<div class="foo-item">
				<div class="foo-title">Oatmeal Cookies</div>
			</div>
		</div>
		<div class="right">
			<div class="foo-item">
				<div class="foo-title">Version</div>
				<div class="foo-mask">
					<div class="foo-info">0.8.0.1</div>
				</div>
			</div>
			<div class="foo-item">
				<div class="foo-title">Repository</div>
				<div class="foo-mask">
					<div class="foo-info"><a href="https://www.github.com/xshaffter/xshaffter.github.io">GO GIT</a></div>
				</div>
			</div>
			<div class="foo-item">
				<div class="foo-title">Architect</div>
				<div class="foo-mask">
					<div class="foo-info">Carlos David Sanchez Moreno</div>
				</div>
			</div>
			<div class="foo-item">
				<div class="foo-title">Developer</div>
				<div class="foo-mask">
					<div class="foo-info">Alfredo Antonio Martinez Armendariz</div>
				</div>
			</div>
		</div>
	</footer>

</body>
</html>

