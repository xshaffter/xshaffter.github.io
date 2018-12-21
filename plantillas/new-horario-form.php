 <section id='sched-form' class='session-form flex-column-item'> 
	<input type='text' id='aula' placeholder='aula' required='true' /> 
	<label class='middle' style="margin-left: 15px">Career: </label>
	<select id="carreras" name='carrera' class='middle' style="margin-left: 15px">
	</select>
		<div class="flex-row-item middle">
			<div class="flex-column-item middle">
				<label>Semester</label>
				<select id="semestre" class="sp">
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
				<label>Subject</label>
				<select name="materia" id="materia" class="sp">
				</select>
			</div>
		</div>
	<input type='text' id='capacidad' placeholder='Capacity' required='true' /> 
	<input type='button' value='Start' id="submit" onclick="sub()" />
</section>
<form action="horario-profesor.php" method="post" id="hidden-form" style="display: none;"></form>
<script src="js/environtment.js"></script>
	<script>
		var semestre = document.getElementById('semestre');
		var carrera = document.getElementById('carreras');
		var materias = document.getElementById('materia');

		semestre.addEventListener('change', function(){
			ajax('getMaterias.php',materias, 'semestre='+semestre.value+'&carrera='+carrera.value)
		})
		function lCarrera() {
			ajax('getCarreras.php',carrera, 'escuela=<?php echo $_SESSION['escuela'] ?>')
			.then(function(){
				ajax('getMaterias.php',materias, 'semestre='+semestre.value+'&carrera='+carrera.value)
			})
		}
		function sub(){
			var capacidad = document.getElementById('capacidad')
			var aula = document.getElementById('aula')
			var data=[
				['materia', materias.value],
				['aula', aula.value],
				['capacidad', capacidad.value],
				['carrera', carrera.value]
			]
			sendData(data)
		}

		function ajax(file, whereToPut, post) {
			var r = fetch('http://localhost/alf/php/'+file,{
				method: 'POST',
				body: post,
		 		headers: {
		 			'Content-type': 'application/x-www-form-urlencoded'
		 		}
		 	})
			.then(result=>result.text())
			.then(responseText=>{
					removeAll(whereToPut);
					var datos = (responseText.split(';'));
					var field = datos[0].split(',');
					var ids = datos[1].split(',');
					for (var i = 0; i < field.length; i++) {
						if(field[i]=='') {
							continue;
						}
						var option = document.createElement('option');
						option.value = ids[i];
						option.innerText = decodeURIComponent(field[i]);
						whereToPut.appendChild(option)
					}
			})
			return r;
		}
		function sendData(data){
			var form = document.getElementById('hidden-form')
			for(var i = 0; i < data.length; i++){
				var input = document.createElement('input')
				input.type = 'text'
				input.name = data[i][0]
				input.value = data[i][1]
				form.appendChild(input)
			}
			form.submit()
		}
		lCarrera()
	</script>