<?php 
include_once 'conexion.php';
try{
Conexion::conectar();
//($aula, $id, $capacidad, $carrera, $horario)
Conexion::addHorario($_POST['aula'],$_POST['materia'], $_SESSION['usuario'], $_POST['cap'], $_POST['carrera'], $_POST['horario']);
Conexion::desconectar();
} catch(Exception $ex) {
	echo $ex;
}