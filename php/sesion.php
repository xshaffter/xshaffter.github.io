<?php
function inicializar(){
	if(session_id()=='') {
	session_start();
	}
}
function cerrar_sesion() {
	inicializar();
	remover('nombre');
	remover('id');
	remover('rango');
	remover('ncontrol');
	remover('reprobadas');
	remover('escuela');
}
function remover($field) {
	if (isset($_SESSION[$field])) {
		unset($_SESSION[$field]);
	}
}
function iniciar_sesion($usuario) {

		$_SESSION['id'] = $usuario['id'];
		$_SESSION['escuela'] = $usuario['escuela'];
		$_SESSION['usuario'] = $usuario['usuario'];
		$_SESSION['rango'] = $usuario['rango'];
		$_SESSION['nombre'] = $usuario['nombre'].' '.$usuario['apellidos'];
		$_SESSION['reprobadas'] = $usuario['reprobadas'];
}
function loged() {
	return isset($_SESSION['nombre']);
}
function isTeacher()
{
	return $_SESSION['rango'] == 2;
}