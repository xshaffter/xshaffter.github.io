<?php 
include_once 'conexion.php';
class Validador
{

	private $errores = "";
	function __construct($datos){

		$data = explode(',', implode(',', $datos));

		$ncontrol = $data[2];
		$nombre = $data[3];
		$apellidos = $data[4];
		$password = $data[5];
		$confirm = $data[6];
		Conexion::conectar();
		$res = Conexion::login($ncontrol);

		if($res['nombre']!="" && !is_null($res['nombre'])){
			$this->errores=$this->errores."The username already exists;";
		}

		if(strlen($password) <= 6){
			$this->errores=$this->errores."password is too short;";
		} else {
			if($password!=$confirm) {
				$this->errores=$this->errores."passwords don't match;";
			}
		}
		if(strlen($ncontrol) <= 6) {
			$this->errores=$this->errores."username is too short;";
		}
		if($apellidos=="" || $nombre=="") {
			$this->errores=$this->errores."first and last name must be filled;";
		}
	}
	public function noError(){
		return $this->errores=="";
	}

	public function getErrores(){
		return $this->errores;
	}
}