<?php 
$data[1] = $_POST['dni'];
$data[2] = $_POST['nombres'];
$data[3] = $_POST['apellidos'];
$data[4] = $_POST['idtipo'];
$data[5] = $_POST['user'];
$data[6] = $_POST['pass'];
$data[7] = $_POST['correo'];
$data[8] = $_POST['telefono'];
$data[10] = $_POST['user_setso'];

require_once('../Model/User.php');

$oUser = new User();
$u = $oUser->agregarUsuarios($data);
 ?>