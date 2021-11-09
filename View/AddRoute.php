<?php
include_once('../config/connection.php');
// $cnx = new Conexion();
// $cadena = $cnx->getConexion();
// echo "cheking for bd: " . $cnx->db;

?>
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/corona/app.0d92b70a.css">
    <link rel="stylesheet" href="css/corona/chunk-4ab62850.48f556ca.css">
    <link rel="stylesheet" href="css/corona/chunk-162ef2da.0e433876.css">
    <link rel="stylesheet" href="css/corona/chunk-vendors.0dbf83be.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <title>Testeo</title>

</head>

<body>
    <!--<form name="login-form" id="login-form" method="post" action="../Controller/AddRoutes.php">
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
    </form>-->

    <div class="header">
        <nav class="navigation">
            <a class="a_cont" href="../index.php">Home</a>

            <a class="a_cont" href="AddRoute.php">Asignar Routes</a>
            <a class="a_cont" href="Cliente/AddClientes.php">Agregar Clientes</a>
            <a class="a_cont" href="Carga/AddCargas.php">Agregar Cargas</a>
            <a class="a_cont" href="Vehiculo/AddVehiculos.php">Agregar Vehiculo</a>
            <a class="a_cont" href="Conductor/AddConductor.php">Agregar Conductor</a>
            <a></a>
        </nav>
    </div>


    <section class="sec_container">
        <strong>tabla de envios aqui</strong>
        <br>
        <?php
        echo 'Versión actual de PHP: ' . phpversion();
        ?>
        <table class="table table_ b-table">
            <?php
            require_once('../Controller/controllerList.php');
            ?>
            <thead>
                <tr>
                    <th>id envio</th>
                    <th>tipoProducto</th>
                    <th>producto</th>
                    <th>cantidad</th>
                    <th>peso</th>
                    <th>unidadMedida</th>
                    <th>RUC</th>
                    <!--<th>apellidoCliente</th>
                        <th>docCliente</th>
                        <th>correoCliente</th>
                        <th>telefCliente</th>
                        <th>celularCliente</th>-->
                    <th>direccionEnvio</th>
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listPedido as $listaPedidos) {
                ?>
                    <tr>
                        <td><?php echo $listaPedidos["IDcargas"]; ?></td>
                        <td><?php echo $listaPedidos["tipoProducto"]; ?></td>
                        <td><?php echo $listaPedidos["producto"]; ?></td>
                        <td><?php echo $listaPedidos["cantidad"]; ?></td>
                        <td><?php echo $listaPedidos["peso"]; ?></td>
                        <td><?php echo $listaPedidos["unidadMedida"]; ?></td>
                        <td><?php echo $listaPedidos["rucCliente"]; ?></td>
                        <!--<td><?php /*echo $listaPedidos["apellidoCliente"]; ?></td>
                            <td><?php echo $listaPedidos["docCliente"]; ?></td>
                            <td><?php echo $listaPedidos["correoCliente"]; ?></td>
                            <td><?php echo $listaPedidos["telefCliente"]; ?></td>
                            <td><?php echo $listaPedidos["celularCliente"]; */ ?></td>
                            <a></a>-->
                        <!--agregar google maps here-->
                        <td id="container">
                            <!--<a href="https://www.google.com/" onclick="location.href=this.href+'?xyz='+val;return false;">-->
                            <a href="https://www.google.com/maps/dir/?api=1&" onclick="location.href=this.href+'origin='+latitude+'&destination=<?php echo urlencode($listaPedidos["direccionEnvio"]) ?>';return false;"><?php echo $listaPedidos["direccionEnvio"] ?></a>
                            <!--https://developers.google.com/maps/documentation/javascript/localization-->
                            <!--
                            <a href="https://www.google.com/maps/search/?api=1&query=<?php // echo urlencode($listaPedidos["direccionEnvio"]) 
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
                                        //document.getElementById("latid").innerHTML = crdL.latitude;

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
                            <!-- <a href="https://www.google.com/maps/dir/?api=1&origin=angamos&destination=<? //php echo urlencode($listaPedidos["direccionEnvio"]) 
                                                                                                            ?>">testing</a>-->
                            <!--<input type="button" onclick="getCurrentLocation();">-->
                        </td>
                        <!--<td>
                                <a id="latid" href="">latitud</a>
                                <a id="long" href="">long</a>

                            </td>-->
                        <td>
                            <button type="button" class="btn btn-success btnAsign" data-toggle="modal" data-target="exampleModal">Asignar</button>

                        </td>
                    </tr>
            </tbody>
        <?php } ?>
        </table>
    </section>

    <!-- </fieldset> -->

    <!-- Modal -->
    <div class="modal fade" id="editRoute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Asignar Rutas a:</h5>

                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <h4>Seleccion de conductor:</h4>
                    <form method="post" action="../Controller/AddRoutes.php">
                        <input type="text" name="codigoEnvio" id="codigoEnvio" hidden="">
                        <input name="peso" id="peso">
                        <input name="medida" id="medida">

                        <section class="cards_">
                            <?php
                            require_once('../Controller/controllerList.php');
                            ?>
                            <?php
                            foreach ($listDriver as $listDrivers) {
                            ?>
                                <div class="cards_container">
                                    <div class="cards_body">

                                        <h5 class="cards_title"><?php echo $listDrivers["nombres"] . "  " . $listDrivers["apellidos"] ?></h5>
                                        <p class="cards_text"><span><?php echo $listDrivers["tipoDoc"] ?>: </span> <?php echo $listDrivers["numDoc"] ?></p>


                                        <input class="cards_check" type="checkbox" name="idconductor" id="idconductor" value="<?php echo $listDrivers["IDconduct"] ?>">

                                        <!-- <div class="cards_check_box"></div> -->

                                        <!--<a href="#" class="btn btn-primary">Button</a>-->
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </section>
                        <h4>Seleccion de Vehiculo:</h4>
                        <section class="cards_">

                            <?php
                            require_once('../Controller/controllerList.php');
                            ?>
                            <?php
                            foreach ($listCar as $listCars) {
                            ?>
                                <div class="cards_container">
                                    <div class="cards_body">
                                        <h5 class="cards_title"><?php echo $listCars["tipoVehiculo"] ?></h5>
                                        <p class="cards_text"><?php echo $listCars["marcaVehiculo"] . " - " . $listCars["placaVehicular"] ?></p>
                                        <input type="text" id="pesoNeto" name="pesoNeto" value="<?php echo $listCars["capacidadCarga"]; ?>"></input>

                                        <!-- <p class="" id="uMCarga" name="uMCarga"><?php echo $listCars["unidadMedidaCarga"] ?></p> -->
                                        <input class="cards_check" type="checkbox" name="idvehiculo" id="idvehiculo" value="<?php echo $listCars["IDvehiculo"]; ?>">
                                        <!--<a href="#" class="btn btn-primary">Button</a>-->
                                    </div>
                                </div>
                                <?php
                                $value = $listCars["capacidadCarga"];

                                ?>
                            <?php
                            }
                            ?>
                        </section>
                        <section style="display: flex;">
                            <dl>
                                <dt><label title="text">Hora Salida </label></dt>
                                <dd><input tabindex="2" accesskey="p" name="horaSalida" type="time" maxlength="20" id="horaSalida" /></dd>
                            </dl>
                            <dl>
                                <dt><label title="text">Hora llegada </label></dt>
                                <dd><input tabindex="2" accesskey="p" name="horaLlegada" type="time" maxlength="20" id="horaLlegada" /></dd>
                            </dl>
                        </section>

                        <p>
                            <button type="submit" class="btn btn-raised btn-info btn-sm right"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                        </p>
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
    <script>
        $(document).ready(function() {
            $('.btnAsign').on('click', function() {
                $('#editRoute').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#codigoEnvio').val(data[0]);
                $('#peso').val(data[4]);


                var str1 = $("#peso");
                console.log(str1.val());


                if (str1.val() <= 1000) {
                    console.log("peso aceptado");
                } else {
                    console.log("peso demasiado alto para este vehiculo");
                }

                $('#medida').val(data[5]);

                var str2 = $('#pesoNeto').val();
                console.log(str2);


            });
        });
    </script>



    <script type="text/javascript">
        /*$("input:checkbox").on('click', function() {
  var $box = $(this);
  if ($box.is(":checked")) {
    var group = "input:checkbox[name='" + $box.attr("name") + "']";
    $(group).prop("checked", false);
    $box.prop("checked", true);
  } else {
    $box.prop("checked", false);
  }
});*/
    </script>
    <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>-->

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

    <!--  -->
    <script src="js/test.js"></script>
    <!--  -->

</body>

</html>