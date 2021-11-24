<?php 
$idclient = $_POST['id_cliente'];
$ruc = $_POST['numruc'];
$desc = $_POST['desc'];
$umedida = $_POST['unidadM'];
$peso = $_POST['peso'];
$largo = $_POST['largoC'];
$ancho = $_POST['anchoC'];
$alto = $_POST['altoC'];
$direccionEnv = $_POST['direccionE'];
$direccionEnt = $_POST['direccionEntr'];
//$estado = $_POST['estado'];

require_once('../Model/Carga.php');

$oCarga = new Carga();
$c = $oCarga->agregarCargas($idclient,$ruc,$desc,$umedida,$peso,$largo,$ancho,$alto,$direccionEnv,$direccionEnt);
 ?>