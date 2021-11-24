<?php
//include_once('config/Connection.php');
include_once ((dirname(__FILE__) . '../../config/connection.php'));
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

    <link rel="stylesheet" href="css/main.css">

    <!--  -->
    <!-- <link rel="stylesheet" href="css/corona/app.0d92b70a.css">
    <link rel="stylesheet" href="css/corona/chunk-4ab62850.48f556ca.css">
    <link rel="stylesheet" href="css/corona/chunk-162ef2da.0e433876.css">
    <link rel="stylesheet" href="css/corona/chunk-vendors.0dbf83be.css"> -->
    <!--  -->

</head>

<body>

    <div class="header">
        <nav class="navigation">
            <a class="a_cont" href="principal.php">Home</a>
            <a class="a_cont" href="AddRoute.php">Asignar Rutas</a>
            <a class="a_cont" href="Cliente/AddClientes.php">Agregar Clientes</a>
            <a class="a_cont" href="Carga/AddCargas.php">Agregar Cargas</a>
            <a class="a_cont" href="Vehiculo/AddVehiculos.php">Agregar Vehiculo</a>
            <a class="a_cont" href="Conductor/AddConductor.php">Agregar Conductor</a>
        </nav>
    </div>

    <section class="sec_container">
        <div id="googleMap" style="width:100%;height:750px;"></div>
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

<!--  -->
<script src="View/js/test.js"></script>
<!--  -->