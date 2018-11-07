<?php 
include_once 'conexion.php';
try{
Conexion::conectar();
$carreras = Conexion::getCarreras($_POST['escuela']);
Conexion::desconectar();
$resultado = '';
$ids = '';
for ($i=0; $i < sizeof($carreras); $i++) { 
	$resultado = $resultado.$carreras[$i]['Abreviacion'].',';
	$ids = $ids.$carreras[$i]['id'].',';
}
echo utf8_encode($resultado.';'.$ids);
} catch( Exception $ex) {
	echo $ex->getMessage();
}