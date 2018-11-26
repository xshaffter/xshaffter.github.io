<?php 
include_once 'sesion.php';
include_once 'conexion.php';

inicializar();
try{
Conexion::conectar();
$clases = Conexion::getHorariosByCareer($_SESSION['carrera']);
$resultado = '';
$ids = '';
$semestres = '';
for ($i=0; $i < sizeof($clases); $i++) { 
	$profesor = Conexion::getProfesor($clases[$i]['maestro']);
	$resultado = $resultado.$clases[$i]['materiaNombre'].'-'.$profesor['apellidos'].' '.$profesor['nombre'].',';
	$ids = $ids.$clases[$i]['id'].',';
	$semestres = $semestres.$clases[$i]['semestre'].',';
}
echo utf8_encode($resultado.';'.$ids.';'.$semestres);
} catch( Exception $ex) {
	echo $ex->getMessage();
}
Conexion::desconectar();