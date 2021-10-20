<?php 
require_once('../Model/User.php');

$user = new User();
$listPedido = $user->listarPedidos();

 ?>