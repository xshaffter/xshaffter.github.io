<?php
include_once 'utilidades.php';
include_once 'conexion.php';

Conexion::conectar();
$user = $_SESSION['ncontrol'];
$resultado = Conexion::login($user);
Conexion::desconectar();
echo $resultado['horario'];