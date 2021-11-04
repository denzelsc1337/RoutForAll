<?php 
$tipoVehiculo = $_POST['tipoVehiculo'];
$marcaVehiculo = $_POST['marcaVehiculo'];
$anio = $_POST['anio'];
$placaVehicular = $_POST['placaVehicular'];
$kilometraje = $_POST['KM'];
$capacidadCarga = $_POST['capacidadCarga'];
$unidadMedida = $_POST['unidadMedidaCarga'];
$largo = $_POST['largo'];
$ancho = $_POST['ancho'];
$alto = $_POST['alto'];

require_once('../Model/Vehiculo.php');

$oVehiculo = new Vehiculo();
$v = $oVehiculo->agregarCamion($tipoVehiculo,$marcaVehiculo,$anio,$placaVehicular,$kilometraje,$capacidadCarga,$unidadMedida, $largo, $ancho, $alto);
 ?>