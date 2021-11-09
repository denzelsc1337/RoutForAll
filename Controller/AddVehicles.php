<?php 
$tipoVehiculo = $_POST['tipoVehiculo'];
$marcaVehiculo = $_POST['marcaVehiculo'];
$anio = $_POST['anio'];
$placaVehicular = $_POST['placaVehicular'];
$capacidadCarga = $_POST['capacidadCarga'];
$largo = $_POST['largo'];
$ancho = $_POST['ancho'];
$alto = $_POST['alto'];
$estado = $_POST['estado'];

require_once('../Model/Vehiculo.php');

$oVehiculo = new Vehiculo();
$v = $oVehiculo->agregarCamion($tipoVehiculo,$marcaVehiculo,$anio,$placaVehicular,$capacidadCarga, $largo, $ancho, $alto,$estado);
 ?>