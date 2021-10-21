<?php
include_once('../config/connection.php');
$cnx = new Conexion();
$cadena = $cnx->getConexion();
echo "cheking for bd: " . $cnx->db;
?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <title>Testeo</title>
    <script type="text/javascript">
        latitude = 0;
        longitude = 0;
        function getCurrentLocation() {
        var options = {
            enableHighAccuracy: true,
            timeout: 5000,
            maximumAge: 0
        };

        function getPos(pos) {
            crdL = pos.coords;
            _crdL = pos.coords;
            _kcrdL = pos.coords;

            latitude = crdL.latitude;
            longitude = _crdL.longitude;

            console.log('your position is:');
            console.log('Latitude : ' + crdL.latitude);
            document.getElementById("latid").innerHTML = crdL.latitude;

            console.log('Longitude: ' + _crdL.longitude);
            document.getElementById("long").innerHTML = _crdL.longitude;
            console.log('More or less ' + _kcrdL.accuracy + ' meters.');
        };

        function error(err) {
            console.warn('ERROR(' + err.code + '): ' + err.message);
        };

        navigator.geolocation.getCurrentPosition(getPos, error, options);

    }
        getCurrentLocation();

    </script>
</head>
<!-- <body>
    <form method="POST" action="../Controller/AddRoutes.php">
        <label>Distrito</label>
        <input type="text" name="distrito">
        <label>direccion</label>
        <input type="text" name="direccion">
        <label>usuario</label>
        <input type="text" name="usuario">
        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
    </form>
</body>-->

<body bgcolor="#999999">
    <form name="login-form" id="login-form" method="post" action="../Controller/AddRoutes.php">
        <fieldset>
            <legend>Guardar ruta</legend>
            <dl>
                <dt><label title="codenvio">CodEnvio</label></dt>
                <dd><input tabindex="1" accesskey="u" name="codenvio" type="text" maxlength="30" id="codenvio" /></dd>
            </dl>
            <dl>
                <dt><label title="Matricula">Matricula Coche </label></dt>
                <dd><input tabindex="2" accesskey="p" name="idvehiculo" type="text" maxlength="20" id="idvehiculo" /></dd>
            </dl>
            <dl>
                <dt><label title="Conductor">Conductor ID </label></dt>
                <dd><input tabindex="2" accesskey="p" name="idconductor" type="text" maxlength="20" id="idconductor" /></dd>
            </dl>
            <dl>
                <dt><label title="text">Hora Salida </label></dt>
                <dd><input tabindex="2" accesskey="p" name="horaSalida" step="2" type="time" maxlength="20" id="horaSalida" /></dd>
            </dl>
            <dl>
                <dt><label title="text">Hora llegada </label></dt>
                <dd><input tabindex="2" accesskey="p" name="horaLlegada" step="2" type="time" maxlength="20" id="horaLlegada" /></dd>
            </dl>
            <p>
                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
            </p>
            <strong>tabla de envios aqui</strong>
            <table border="1px">
                <?php
                require_once('../Controller/controllerList.php');
                ?>
                <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Asignar</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                        <th>Producto</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listPedido as $listaPedidos) {
                    ?>
                        <tr>
                            <td><?php echo $listaPedidos["tipoProducto"]; ?></td>
                            <td><?php echo $listaPedidos["producto"]; ?></td>
                            <td><?php echo $listaPedidos["cantidad"]; ?></td>
                            <td><?php echo $listaPedidos["peso"]; ?></td>
                            <td><?php echo $listaPedidos["unidadMedida"]; ?></td>
                            <td><?php echo $listaPedidos["nombreCliente"]; ?></td>
                            <td><?php echo $listaPedidos["apellidoCliente"]; ?></td>
                            <td><?php echo $listaPedidos["docCliente"]; ?></td>
                            <td><?php echo $listaPedidos["correoCliente"]; ?></td>
                            <td><?php echo $listaPedidos["telefCliente"]; ?></td>
                            <td><?php echo $listaPedidos["celularCliente"]; ?></td>
                            <a></a>
                            <!--agregar google maps here-->
                            <td>
                                <a href="https://www.google.com/maps/dir/current+location/<?php echo urlencode($listaPedidos["direccionEnvio"]) ?>">test</a>
                                <a href="https://www.google.com/maps/search/?api=1&query=<?php echo urlencode($listaPedidos["direccionEnvio"]) ?>"><?php echo $listaPedidos["direccionEnvio"] ?></a>
                                <a href="https://www.google.com/maps/dir/?api=1&origin=angamos&destination=<?php echo urlencode($listaPedidos["direccionEnvio"]) ?>">testing</a>
                                <input type="button" onclick="getCurrentLocation();">
                            </td>
                            <td>
                                <a id="latid" href="">latitud</a>
                                <a id="long" href="">long</a>
                            </td>

                            <td>
                                <button>Asignar</button>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>

        </fieldset>
    </form>
    <hr>
</body>

</html>
<script type="text/javascript">

</script>