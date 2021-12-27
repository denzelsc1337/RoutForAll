<?php
include('WhatsappAPI.php'); // include given API class and update API credentials in it

//parametros envio de wsp
$numDriver = $_POST['numDriver'];
$message = $_POST['numruc'];

//parametros envio de wsp

//parametros guardado en BD

//parametros guardado en BD

$obj = new WhatsappAPI; // create an object of the WhatsappAPI class
$status = $obj->send($numDriver, $message);
//$status = $obj->send("+51942394243", "Ruta_1"); // NOTE: Phone Number should be with country code

$status = json_decode($status);

print_r($status);

if ($status) {
	echo "Mensaje enviado";
}else{
	echo "error al enviar wsp";
}
?>