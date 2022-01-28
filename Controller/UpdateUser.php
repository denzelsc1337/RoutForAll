<?php 
$data[1] = $_POST["dniac"];
$data[2] = $_POST["nombresac"];
$data[3] = $_POST["apellidosac"];
$data[4] = $_POST["tuserac"];
$data[5] = $_POST["correoac"];
$data[6] = $_POST["userac"];
$secuence_usu = $_POST['codac'];


require_once('../Model/User.php');

$oUser= new User();
$r = $oUser->actualizarUsuarios($data,$secuence_usu);


 ?>