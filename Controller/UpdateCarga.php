<?php 
$data[1]  = $_POST["rucclnt"];
$data[2]  = $_POST["desc"];
$data[3]  = $_POST["pesoC"];
$data[4]  = $_POST["direcenv"];
$data[5] = $_POST["fecharegistro"];
$data[6] = $_POST["estado"];
$idcarga  = $_POST['idcargas'];


require_once('../Model/Carga.php');

$oCarga= new Carga();
$r = $oCarga->updateCarga($data,$idcarga);


?>