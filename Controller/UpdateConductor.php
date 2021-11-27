<?php 
$data[1] = $_POST["dniC"];
$data[2] = $_POST["nombresC"];
$data[3] = $_POST["apePaternoC"];
$data[4] = $_POST["apeMaternoC"];
$data[5] = $_POST["correoC"];
$data[6] = $_POST["licenciaC"];
$data[7] = $_POST["estado"];
$IDconduct = $_POST['idC'];


require_once('../Model/Conductor.php');

$oConductor= new Conductor();
$r = $oConductor->updateConductor($data,$IDconduct);


 ?>