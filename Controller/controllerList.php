<?php 
require_once('../Model/User.php');

$user = new User();
$listPedido = $user->listarPedidos();


require_once('../Model/Conductor.php');

$driver = new Conductor();
$listDriver = $driver->listarConductores();

require_once('../Model/Conductor.php');

$driver = new Conductor();
$listDriver = $driver->listarConductores();
 ?>