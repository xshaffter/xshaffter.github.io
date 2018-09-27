<?php 
include_once 'conexion.php';
Conexion::conectar();
$materias = Conexion::getMaterias($_POST['semestre'],$_POST['carrera']);
Conexion::desconectar();
$resultado = '';
for ($i=0; $i < sizeof($materias); $i++) { 
	$resultado = $resultado.$materias[$i]['materia'].',';
}
echo utf8_encode($resultado);