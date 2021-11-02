<?php
//include_once('config/Connection.php');
include_once 'config/connection.php';
// echo "<br>";
// echo $_SERVER['HTTP_USER_AGENT'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// echo "testing";

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Test</title>

    <link rel="stylesheet" href="View/css/main.css">
    
</head>

<body>

    <div class="header">
        <nav class="navigation">
            <a class="inner-shadow active" href="#">Home</a>
            <a class="outer-shadow hover-in-shadow" href="View/AddRoute.php">Asignar Rutas</a>
            <a class="outer-shadow hover-in-shadow" href="View/Cliente/AddClientes.php">Agregar Clientes</a>
            <a class="outer-shadow hover-in-shadow" href="View/Carga/AddCargas.php">Agregar Cargas</a>
            <a class="outer-shadow hover-in-shadow" href="View/Vehiculo/AddVehiculos.php">Agregar Vehiculo</a>
        </nav>
    </div>
    <section class="sec_container">
        <div id="googleMap" style="width:100%;height:900px;"></div>
    </section>
</body>

</html>
<script>
    function theMap() {
        var mapProp = {
            center: new google.maps.LatLng(-12.1457436, -76.9870691),
            zoom: 15,
        };
        var map = new google.maps.Map(document.getElementById("googleMap"), mapProp);
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbFjupaAAf9ne0JlXq-B48RHwppD7LDDA&callback=theMap"></script>