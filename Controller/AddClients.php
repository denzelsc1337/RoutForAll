<?php 
$ruc = $_POST['numruc'];
$tipoPersona = $_POST['tipo'];
$razonSocial = $_POST['razon'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];
$contacto = $_POST['contacto'];

require_once('../Model/Cliente.php');

$oClient = new Cliente();
$c = $oClient->agregarClientes($ruc,$razonSocial,$tipoPersona,$direccion,$correo,$telefono,$celular,$contacto);
 ?>