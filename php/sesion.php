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
	remover('ncontrol');
	remover('reprobadas');
}
function remover($field) {
	if (isset($_SESSION[$field])) {
		unset($_SESSION[$field]);
	}
}
function loged() {
	return isset($_SESSION['nombre']);
}