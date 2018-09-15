<div id="sign-display">
	<div class="panel">
		<div class="panel-title">
			Registro
		</div>
		<div class="panel-content">
			<form action="php/registro.php" method="post">
				<label>Numero de control</label>
				<input type="text" name="ncontrol" maxlength="10"><br>
				<label>Carrera</label>
				<select name="carrera">
					<option>ISC</option>
					<option>IDI</option>
					<option>LAM</option>
					<option>Arq</option>
					<option>IGE</option>
					<option>I.Ind</option>
					<option>I.Inf</option>
				</select><br>
				<label>Nombre(s)</label>
				<input type="text" name="nombres" maxlength="40"><br>
				<label>Apellidos</label>
				<input type="text" name="apellidos" maxlength="40"><br>
				<label>Contraseña</label>
				<input type="password" name="password" maxlength="50"><br>
				<label>Confirmar contraseña</label>
				<input type="password" name="confirm" maxlength="50"><br>
				<input type="submit" value="Registrarse">
			</form>
		</div>
	</div>
</div>