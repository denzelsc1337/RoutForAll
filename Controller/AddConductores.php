<?php
$tipoDoc = $_POST['tipo_documento'];
$numDoc = $_POST['numdoc'];
$nombres = $_POST['nombre'];
$apellidoP = $_POST['apellidoP'];
$apellidoM = $_POST['apellidoM'];
$fechaNacimiento = $_POST['fecha_N'];
$edad = $_POST['edad'];
$celular = $_POST['celular'];
$correo = $_POST['correo'];
$tipoLic = $_POST['tipo_licencia'];
$estadoLic = $_POST['estado'];

require_once('../Model/Conductor.php');

$oConduct = new Conductor();
$c = $oConduct->agregarConductor($tipoDoc,$numDoc,$nombres,$apellidoP,$apellidoM,$fechaNacimiento,$edad,$celular,$correo,$tipoLic, $estadoLic);
 ?>