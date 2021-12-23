<?php 
$tipoVehiculo = $_POST['tipoVehiculo'];
$marcaVehiculo = $_POST['marcaVehiculo'];
$anio = $_POST['anio'];
$placaVehicular = $_POST['placaVehicular'];
$km = $_POST['KM'];
$pesoN = $_POST['p_neto'];
$c_util = $_POST['c_util'];
$p_bruto = $_POST['p_bruto'];
$largo = $_POST['largo'];
$ancho = $_POST['ancho'];
$alto = $_POST['alto'];
$estado = $_POST['estado'];

require_once('../Model/Vehiculo.php');

$oVehiculo = new Vehiculo();
$v = $oVehiculo->agregarCamion($tipoVehiculo,$marcaVehiculo,$anio,$placaVehicular,$km,$pesoN,$c_util,$p_bruto, $largo, $ancho, $alto,$estado);
 ?>