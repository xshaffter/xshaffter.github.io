<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
try{
	$ncontrol = $_POST['ncontrol'];
	$pass = $_POST['password'];
	Conexion::conectar();
	$resultado = Conexion::login($ncontrol, $pass);
	Conexion::desconectar();
	$nombre = $resultado['nombre'];
	if(password_verify($pass, $resultado['password'])){
		iniciar_sesion($resultado);
		redirect('../');
	} else {
		echo "la contraseña no coincide";
	}
} catch(Exception $ex) {
	echo $ex->getMessage();
}