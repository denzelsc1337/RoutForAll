<?php 
$data[1] = $_POST["rucUpdt"];
$data[2] = $_POST["razonS"];
$data[3] = $_POST["customRadioInline1"];
$data[4] = $_POST["correoUpdt"];
$data[5] = $_POST["tlfnUpdt"];
$data[6] = $_POST["celUpdt"];
$idclient = $_POST['idclient'];


require_once('../Model/Cliente.php');

$oCliente= new Cliente();
$r = $oCliente->updateCliente($data,$idclient);


 ?>