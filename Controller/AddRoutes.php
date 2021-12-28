<?php 

$codenvio = $_POST['codigoEnvio'];
$idvehiculo = $_POST['idvehiculo'];
$idconductor = $_POST['idconductor'];
$fechaSalida = $_POST['fechaSalida'];
$fechaLlegada = $_POST['fechaLlegada'];
$horaSalida = $_POST['horaSalida'];
$horaLlegada = $_POST['horaLlegada'];
$kmInicio = $_POST['kmInicio'];
$kmSalida = $_POST['kmSalida'];
$estimado = $_POST['estimado'];
$direccionEntr = $_POST['direccionEntr'];

//parametros envio de wsp
//$numDriver = $_POST['nroDriver'];
$message = $_POST['urlDir'];

require_once('../Model/User.php');
//include('../Model/WhatsappAPI.php');

$oRuta= new User();
$r = $oRuta->agregarRutas($codenvio,$idvehiculo,$idconductor,$fechaSalida,$fechaLlegada,$horaSalida,$horaLlegada,$kmInicio,$kmSalida,$estimado,$direccionEntr,$message);

/*$obj = new WhatsappAPI; // create an object of the WhatsappAPI class
$status = $obj->send($numDriver, $message);*/

 ?>