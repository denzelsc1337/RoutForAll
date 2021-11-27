<?php 
$data[1]  = $_POST["tipoV"];
$data[2]  = $_POST["marcaV"];
$data[3]  = $_POST["placaV"];
$data[4]  = $_POST["cargaV"];
$data[5] = $_POST["estado"];
$IDvehiculo  = $_POST['idvehicular'];


require_once('../Model/Vehiculo.php');

$oVehiculo= new Vehiculo();
$r = $oVehiculo->updateVehiculo($data,$IDvehiculo);


?>