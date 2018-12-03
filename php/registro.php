<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
include_once 'validador.php';
if($_POST['rango']=='Alumno'){
	$res = implode('.', $_POST);
	$validador = new Validador($res);
	if($validador->noError()){
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
		echo $validador->getErrores();
	}
} else {
	$validador = new Validador($_POST);
	if($validador->noError()){
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
		echo $validador->getErrores();
	}
}