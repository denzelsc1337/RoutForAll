<?php 
$ruc = $_POST['numruc'];
$tipoProd = $_POST['tipoProd'];
$producto = $_POST['prod'];
$cantidad = $_POST['cant'];
$peso = $_POST['peso'];
$unidadMedidad = $_POST['unidadM'];
$direccionEnvio = $_POST['direccionE'];

require_once('../Model/Carga.php');

$oCarga = new Carga();
$c = $oCarga->agregarCargas($ruc,$tipoProd,$producto,$cantidad,$peso,$unidadMedidad,$direccionEnvio);
 ?>