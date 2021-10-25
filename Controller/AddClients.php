<?php 
$ruc = $_POST['numruc'];
$tipoPersona = $_POST['tipo'];
$razonSocial = $_POST['razon'];
$direccion = $_POST['direccion'];
$correo = $_POST['correo'];
$telefono = $_POST['telefono'];
$celular = $_POST['celular'];

require_once('../Model/Cliente.php');

$oClient = new Cliente();
$c = $oClient->agregarClientes($ruc,$tipoPersona,$razonSocial,$direccion,$correo,$telefono,$celular);
 ?>