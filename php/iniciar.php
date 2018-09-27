<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
$ncontrol = $_POST['ncontrol'];
$pass = $_POST['password'];
Conexion::conectar();
$resultado = Conexion::login($ncontrol, $pass);
Conexion::desconectar();
$nombre = $resultado['nombre'];
if(password_verify($pass, $resultado['password'])){
	$_SESSION['id'] = $resultado['id'];
	$_SESSION['ncontrol'] = $ncontrol;
	$_SESSION['nombre'] = $nombre;
	$_SESSION['reprobadas'] = $resultado['reprobadas'];
	redirect('../');
}