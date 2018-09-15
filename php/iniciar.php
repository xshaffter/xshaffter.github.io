<?php 
include_once 'conexion.php';
include_once 'utilidades.php';
$ncontrol = $_POST['ncontrol'];
$pass = $_POST['password'];
Conexion::conectar();
$resultado = Conexion::login($ncontrol, $pass);
Conexion::desconectar();
echo $resultado['password'];
if(password_verify($pass, $resultado['password'])){
	$_SESSION['ncontrol'] = $ncontrol;
	$_SESSION['reprobadas'] = $resultado['reprobadas'];
	redirect('../');
}