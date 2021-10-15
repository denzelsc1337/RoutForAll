<?php 

$distrito = $_POST['distrito'];
$direccion = $_POST['direccion'];
$usuario = $_POST['usuario'];

require_once('../Model/User.php');

$oRuta= new User();
$r = $oRuta->agregarRutas($distrito,$direccion,$usuario);

 ?>