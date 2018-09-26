 <form id='sched-form' action='horario-profesor.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item'> 
	<input type='text' name='aula' placeholder='aula' required='true' /> 
	<input type='text' name='materia' placeholder='materia' required='true' /> 
	<input type='text' name='capacidad' placeholder='capacidad' required='true' /> 
	<?php 
	$id_carrera = 'carrera_elegida';
	include_once 'carreras.php';
	?>
	<input type='submit' value='Iniciar'/>
</form>