<?php 
include_once 'conexion.php';
Conexion::conectar();
$carreras = Conexion::getEscuelas();
Conexion::desconectar();
$resultado = '';
$ids = '';
for ($i=0; $i < sizeof($carreras); $i++) { 
	$resultado = $resultado.$carreras[$i]['Abreviacion'].',';
	$ids = $ids.$carreras[$i]['id'].',';
}
echo utf8_encode($resultado.';'.$ids);