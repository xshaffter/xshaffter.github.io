<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
$ncontrol = $_POST['ncontrol'];
$nombre = $_POST['nombres'];
$apellidos = $_POST['apellidos'];
$password = $_POST['password'];
$confirm = $_POST['confirm'];
$carrera = $_POST['carrera'];
if($password == $confirm){
	Conexion::conectar();
	try {
		Conexion::registro($ncontrol,$nombre, $apellidos, $password, $carrera);
		redirect('../');
	} catch (Exception $e) {
		echo "error: ".$e->getMessage();
	} finally {
		Conexion::desconectar();
	}
} else {
	echo $password.' != '. $confirm;
}