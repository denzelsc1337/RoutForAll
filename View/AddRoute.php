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
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Testeo</title>

</head>
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
                <dd><input tabindex="2" accesskey="p" name="horaSalida"  type="time" maxlength="20" id="horaSalida" /></dd>
            </dl>
            <dl>
                <dt><label title="text">Hora llegada </label></dt>
                <dd><input tabindex="2" accesskey="p" name="horaLlegada" type="time" maxlength="20" id="horaLlegada" /></dd>
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
                            <td id="container">
                                <!--<a href="https://www.google.com/" onclick="location.href=this.href+'?xyz='+val;return false;">-->
                                <a href="https://www.google.com/maps/dir/?api=1&" onclick="location.href=this.href+'origin='+latitude+'&destination=<?php echo urlencode($listaPedidos["direccionEnvio"]) ?>';return false;"><?php echo $listaPedidos["direccionEnvio"] ?></a>
                                    <!--https://developers.google.com/maps/documentation/javascript/localization-->
                                    <!--
                            <a href="https://www.google.com/maps/search/?api=1&query=<? php // echo urlencode($listaPedidos["direccionEnvio"]) 
                                                                                        ?>"><?php //echo $listaPedidos["direccionEnvio"] 
                                                                                                                                                    ?></a>-->
                                    <script type="text/javascript">
                                        var latitude = "san juan";
                                        var longitude = 0;

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

                                                var latitude = crdL.latitude;
                                                var longitude = _crdL.longitude;

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
                                   <!-- <a href="https://www.google.com/maps/dir/?api=1&origin=angamos&destination=<?//php echo urlencode($listaPedidos["direccionEnvio"]) ?>">testing</a>-->
                                    <!--<input type="button" onclick="getCurrentLocation();">-->
                            </td>
                            <!--<td>
                                <a id="latid" href="">latitud</a>
                                <a id="long" href="">long</a>

                            </td>-->
                            <td>
                                <button type="button" class="btn btn-success editDesp" data-toggle="modal" data-target="#exampleModal">Asignar</button>
                            </td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </fieldset>
    </form>
                <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog" role="document">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Asignar Rutas a:</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="#">
                        <?php
                        require_once('../Controller/controllerList.php');

                        ?>
                        <?php
                        foreach ($listDriver as $listDrivers) {
                        ?>
                        <div class="input-group mb-3">
                          <div class="input-group-prepend">
                            <div class="input-group-text">
                              <input type="checkbox" name="fooby[1][]" value="<?php echo $listDrivers["IDconduct"] ?>">
                            </div>
                          </div>
                          <label title="text"><?php echo $listDrivers["nombres"] ?></label>
                        </div>
                        <?php
                        }
                        ?>
                    </form>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="button" class="btn btn-primary">Confirmar</button>
                  </div>
                </div>
              </div>
            </div>
    <hr>

<script type="text/javascript">
$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});
</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!--<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>