<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
if($_POST['rango']=='Alumno'){
	$ncontrol = $_POST['usuario'];
	$nombre = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$carrera = $_POST['carrera'];
	$escuela = $_POST['escuela'];
	if($password == $confirm){
		Conexion::conectar();
		try {
			Conexion::registroAlumno($ncontrol,$nombre, $apellidos, $password,$escuela, $carrera);
			redirect('../');
		} catch (Exception $e) {
			echo "error: ".$e->getMessage();
		} finally {
			Conexion::desconectar();
		}
	} else {
		echo $password.' != '. $confirm;
	}
} else {
	$usuario = $_POST['usuario'];
	$nombre = $_POST['nombres'];
	$apellidos = $_POST['apellidos'];
	$password = $_POST['password'];
	$confirm = $_POST['confirm'];
	$escuela = $_POST['escuela'];
	if($password == $confirm){
		Conexion::conectar();
		try {
			Conexion::registroMaestro($usuario,$nombre, $apellidos, $password, $escuela);
			redirect('../');
		} catch (Exception $e) {
			echo "error: ".$e->getMessage();
		} finally {
			Conexion::desconectar();
		}
	} else {
		echo $password.' != '. $confirm;
	}
}