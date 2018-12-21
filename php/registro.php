<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
include_once 'validador.php';
if($_POST['rango']=='Alumno'){
		$ncontrol = $_POST['usuario'];
		$nombre = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$escuela = $_POST['escuela'];
		$carrera = $_POST['carrera'];
		$password = $_POST['password'];
	$res = implode('.', $_POST);
	$validador = new Validador($res);
	if($validador->noError()){
		Conexion::conectar();
		try {
			Conexion::registroAlumno($ncontrol,$nombre, $apellidos, $password,$escuela, $carrera);
		} catch (Exception $e) {
			echo "error: ".$e->getMessage();
		} finally {
			Conexion::desconectar();
		}
	} else {
		echo $validador->getErrores();
	}
} else {
		$usuario = $_POST['usuario'];
		$nombre = $_POST['nombres'];
		$apellidos = $_POST['apellidos'];
		$escuela = $_POST['escuela'];
		$password = $_POST['password'];
	$validador = new Validador($_POST);
	if($validador->noError()){
		Conexion::conectar();
		try {
			Conexion::registroMaestro($usuario,$nombre, $apellidos, $password, $escuela);
		} catch (Exception $e) {
			echo "error: ".$e->getMessage();
		} finally {
			Conexion::desconectar();
		}
	} else {
		echo $validador->getErrores();
	}
}