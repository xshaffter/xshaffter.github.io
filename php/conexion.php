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
		$sql = 'select * from usuarios where usuario = :ncontrol';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia->bindParam(':ncontrol', $ncontrol, PDO::PARAM_STR);

		$sentencia -> execute();
		$resultado = $sentencia -> fetch();
		return $resultado;
	}
	public static function registroAlumno($ncontrol,$nombre, $apellidos, $password, $carrera = 'ISC') {
		$sql = 'insert into usuarios(nombre, apellidos, carrera, usuario, password, rango) values(:nombre, :apellidos, :carrera, :ncontrol, :password, 1)';
		$sentencia = self::$conexion->prepare($sql);
		$newPass = password_hash($password, PASSWORD_DEFAULT);
		$sentencia ->bindParam(':ncontrol',$ncontrol,PDO::PARAM_STR);
		$sentencia ->bindParam(':nombre',$nombre,PDO::PARAM_STR);
		$sentencia ->bindParam(':apellidos',$apellidos,PDO::PARAM_STR);
		$sentencia ->bindParam(':password',$newPass,PDO::PARAM_STR);
		$sentencia ->bindParam(':carrera',$carrera,PDO::PARAM_STR);

		$sentencia -> execute();
	}
	public static function registroMaestro($ncontrol,$nombre, $apellidos, $password) {
		$sql = 'insert into usuarios(nombre, apellidos, usuario, password, rango) values(:nombre, :apellidos, :ncontrol, :password, 2)';
		$sentencia = self::$conexion->prepare($sql);
		$newPass = password_hash($password, PASSWORD_DEFAULT);
		$sentencia ->bindParam(':ncontrol',$ncontrol,PDO::PARAM_STR);
		$sentencia ->bindParam(':nombre',$nombre,PDO::PARAM_STR);
		$sentencia ->bindParam(':apellidos',$apellidos,PDO::PARAM_STR);
		$sentencia ->bindParam(':password',$newPass,PDO::PARAM_STR);

		$sentencia -> execute();
	}
	public static function getProfesor($id){
		$sql = 'select * from usuarios where usuario = :id and rango = 2';
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

	public static function getMaterias($semestre, $carrera){
		$sql = 'select * from materias where semestre = :semestre and carrera = :carrera';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia->bindParam(':semestre', $semestre, PDO::PARAM_STR);
		$sentencia->bindParam(':carrera', $carrera, PDO::PARAM_STR);

		$sentencia -> execute();
		$resultado = $sentencia -> fetchAll();
		return $resultado;
	}
	public static function getCarreras($escuela){
		$sql = 'select * from carreras where Escuela = :escuela';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia->bindParam(':escuela', $escuela, PDO::PARAM_STR);

		$sentencia -> execute();
		$resultado = $sentencia -> fetchAll();
		return $resultado;
	}
	public static function getEscuelas(){
		$sql = 'select * from escuelas';
		$sentencia = self::$conexion->prepare($sql);

		$sentencia -> execute();
		$resultado = $sentencia -> fetchAll();
		return $resultado;
	}
}