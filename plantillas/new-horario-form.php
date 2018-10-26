 <form id='sched-form' action='horario-profesor.php' method='post' enctype='multipart/form-data' class='session-form flex-column-item'> 
	<input type='text' name='aula' placeholder='aula' required='true' /> 
		<div class="flex-row-item middle">
			<div class="flex-column-item middle">
				<label>Semestre</label>
				<select id="semestre" class="session-form sp">
					<option value="1">1</option>
					<option value="2">2</option>
					<option value="3">3</option>
					<option value="4">4</option>
					<option value="5">5</option>
					<option value="6">6</option>
					<option value="7">7</option>
					<option value="8">8</option>
					<option value="9">9</option>
				</select>
			</div>
			<div class="flex-column-item middle">
				<label>Materia</label>
				<select name="materia" id="materia" class="sp">
				</select>
			</div>
		</div>
	<input type='text' name='capacidad' placeholder='capacidad' required='true' /> 
	<?php 
	$id_carrera = 'carrera_elegida';
	include_once 'carreras.php';
	?>
	<input type='submit' value='Iniciar'/>
</form>
	<script>
		var semestre = document.getElementById('semestre');
		var carrera = document.getElementById('carrera_elegida');
		function ajax() {
			xhr = new XMLHttpRequest();
			xhr.open('post', 'php/getMaterias.php');
			xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
			xhr.onload = function() {
				if(xhr.status==200) {
					var result = "";
					var clases = (xhr.responseText.split(','));

						result+= "<option selected='selected'>"+ decodeURIComponent(clases[0]) +"</option>";
					for (var i = clases.length - 1; i >= 1; i--) {
						if(clases[i]=='') {
							continue;
						}
						result+= "<option>"+ decodeURIComponent(clases[i]) +"</option>";
					}
					document.getElementById('materia').innerHTML = result;
				}
				if (xhr.status !== 200) {
				    alert('Request failed.  Returned status of ' + xhr.status);
				}
			};
			xhr.send("semestre="+semestre.value+"&carrera="+carrera.value);
		}
		semestre.addEventListener('change',function(event) {
			ajax();
		});
		ajax();
	</script>