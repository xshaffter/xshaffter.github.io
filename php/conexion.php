<?php 
include_once 'sesion.php';
inicializar();

class Conexion{
	private static $conexion;

	public static function conectar(){
		if (!isset($conexion)) {
			try {
				self::$conexion = new PDO('mysql:host=localhost;dbname=horarios', 'root', '');
				self::$conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			} catch (Exception $e) {
				echo $e->getMessage();
				die();
			}
		}
	}
	public static function desconectar() {
		if(isset(self::$conexion)) {
			$conexion = null;
		}
	}

	public static function login($ncontrol, $password = ""){
		$sql = 'select * from alumnos where numero_control = :ncontrol';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia->bindParam(':ncontrol', $ncontrol, PDO::PARAM_STR);

		$sentencia -> execute();
		$resultado = $sentencia -> fetch();
		return $resultado;
	}
	public static function registro($ncontrol,$nombre, $apellidos, $password, $carrera = 'ISC') {
		$sql = 'insert into alumnos values(:ncontrol, :nombre, :apellidos, 0, :password, :carrera)';
		$sentencia = self::$conexion->prepare($sql);
		$newPass = password_hash($password, PASSWORD_DEFAULT);
		$sentencia ->bindParam(':ncontrol',$ncontrol,PDO::PARAM_STR);
		$sentencia ->bindParam(':nombre',$nombre,PDO::PARAM_STR);
		$sentencia ->bindParam(':apellidos',$apellidos,PDO::PARAM_STR);
		$sentencia ->bindParam(':password',$newPass,PDO::PARAM_STR);
		$sentencia ->bindParam(':carrera',$carrera,PDO::PARAM_STR);

		$sentencia -> execute();
	}
	public static function getProfesor($id){
		$sql = 'select * from maestros where id = :id';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia->bindParam(':id', $id, PDO::PARAM_STR);

		$sentencia -> execute();
		$resultado = $sentencia -> fetch();
		return $resultado;
	}
	public static function getHorario($id){
		$sql = 'select * from horarios where id = :id';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia->bindParam(':id', $id, PDO::PARAM_STR);

		$sentencia -> execute();
		$resultado = $sentencia -> fetch();
		return $resultado;
	}

	public static function addHorario($aula,$materia, $id, $capacidad, $carrera, $horario) {
		$sql = 'insert into horarios(aula,materia,maestro,capacidad,carrera, horario) values(:aula,:materia, :id, :capacidad, :carrera, :horario)';
		$sentencia = self::$conexion->prepare($sql);
		$sentencia ->bindParam(':aula',$aula,PDO::PARAM_STR);
		$sentencia ->bindParam(':materia',$materia,PDO::PARAM_STR);
		$sentencia ->bindParam(':id',$id,PDO::PARAM_STR);
		$sentencia ->bindParam(':capacidad',$capacidad,PDO::PARAM_STR);
		$sentencia ->bindParam(':carrera',$carrera,PDO::PARAM_STR);
		$sentencia ->bindParam(':horario',$horario,PDO::PARAM_STR);

		$sentencia -> execute();
	}
}