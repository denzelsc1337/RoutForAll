<?php 

$codenvio = $_POST['codenvio'];
$idvehiculo = $_POST['idvehiculo'];
$idconductor = $_POST['idconductor'];
$horaSalida = $_POST['horaSalida'];
$horaLlegada = $_POST['horaLlegada'];

require_once('../Model/User.php');

$oRuta= new User();
$r = $oRuta->agregarRutas($codenvio,$idvehiculo,$idconductor,$horaSalida,$horaLlegada);

 ?>