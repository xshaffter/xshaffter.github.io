
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