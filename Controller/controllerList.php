<?php 

require_once ((dirname(__FILE__) .'../../Model/User.php'));
//require_once('../Model/User.php');
$user = new User();
$listPedido = $user->listarPedidos();



require_once ((dirname(__FILE__) .'../../Model/Conductor.php'));
//require_once('../Model/Conductor.php');
$driver = new Conductor();
$listDriver = $driver->listarConductores();



require_once ((dirname(__FILE__) .'../../Model/Vehiculo.php'));
//require_once('../Model/Vehiculo.php');
$car = new Vehiculo();
$listCar = $car->listarCarros();



require_once ((dirname(__FILE__) .'../../Model/Cliente.php'));
//require_once('../Model/Cliente.php');
$cliente = new Cliente();
$listClient = $cliente->listarClientes();


require_once ((dirname(__FILE__) .'../../Model/Carga.php'));
$carga = new Carga();
$listCarga = $carga->listarCarga();

 ?>