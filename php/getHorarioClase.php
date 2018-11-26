<?php 
include_once 'sesion.php'; 
include_once 'conexion.php';
Conexion::conectar();
$horario = Conexion::getHorario($_POST['horario']);
$profesor = Conexion::getProfesor($horario['maestro']);
$resultado = $horario['id'].';'.$profesor['nombre'].' '.$profesor['apellidos'];
Conexion::desconectar();
echo ($resultado);