<?php
include_once('../config/connection.php');
require_once('../config/security.php');
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
        <?php
        $hide = "";
        if ($_SESSION['id_rol'] == '2') {
            $hide = "style='display:none;'";
        }
        ?>
        <nav class="navigation">
            <div>
                <a class="a_cont" href="principal.php">Home</a>

                <a class="a_cont" href="AddRoute.php">Rutas</a>
                <a class="a_cont" href="Cliente/AddClientes.php">Clientes</a>
                <a class="a_cont" href="Carga/AddCargas.php">Cargas</a>
                <a class="a_cont" href="Vehiculo/AddVehiculos.php">Vehiculo</a>
                <a class="a_cont" href="Conductor/AddConductor.php">Conductor</a>
                <a <?php echo $hide; ?> class="a_cont" href="Usuario/AddUsuario.php">Usuarios</a>
            </div>
            <div class="logout">
                <a href="../config/logout.php" class="Blogger">Cerrar Sesión <i class="fa fa-power-off"></i></a>

            </div>
        </nav>
    </div>


    <section class="sec_container">
        <!--<strong>tabla de envios aqui</strong>-->
        <br>
        <?php
        //echo 'Versión actual de PHP: ' . phpversion();
        ?>
        <table class="table table_ b-table">
            <?php
            require_once('../Controller/controllerList.php');
            ?>
            <thead>
                <tr>
                    <th hidden>id envio</th>
                    <th>RUC cliente</th>
                    <th>Descripcion</th>
                    <th>Peso Carga</th>
                    <th>Direccion Envio</th>
                    <th>Direccion Entrega</th>
                    <th>Fecha de Registro</th>
                    <th>Estado</th>
                    <!--<th>apellidoCliente</th>
                        <th>docCliente</th>
                        <th>correoCliente</th>
                        <th>telefCliente</th>
                        <th>celularCliente</th>-->
                </tr>
            </thead>
            <tbody>
                <?php
                foreach ($listPedido as $listaPedidos) {
                ?>
                    <tr>
                        <td hidden><?php echo $listaPedidos["IDcargas"]; ?></td>
                        <td><?php echo $listaPedidos["rucClient"]; ?></td>
                        <td><?php echo $listaPedidos["descripcionCarga"]; ?></td>
                        <td><?php echo $listaPedidos["pesoCarga"]; ?> KG</td>
                        <td><?php echo $listaPedidos["direccionEnvio"]; ?></td>
                        <!--<td><?php /*echo $listaPedidos["apellidoCliente"]; ?></td>
                            <td><?php echo $listaPedidos["docCliente"]; ?></td>
                            <td><?php echo $listaPedidos["correoCliente"]; ?></td>
                            <td><?php echo $listaPedidos["telefCliente"]; ?></td>
                            <td><?php echo $listaPedidos["celularCliente"]; */ ?></td>
                            <a></a>-->
                        <!--agregar google maps here-->
                        <td><?php echo $listaPedidos["direccionEntrega"]; ?></td>
                        <td id="container" hidden>
                            <?php echo '<a href = "https://www.google.com/maps/dir/?api=1&destination='.$listaPedidos["direccionEntrega"].'">'.urlencode($listaPedidos["direccionEntrega"]).'</a>';?>
                            <!--<a href="https://www.google.com/" onclick="location.href=this.href+'?xyz='+val;return false;">-->

                            <a id="direccionLink" href="https://www.google.com/maps/dir/?api=1&" onclick="location.href=this.href+'origin='+latitude+'&destination=<?php echo urlencode($listaPedidos["direccionEntrega"]) ?>';return false;"><?php echo $listaPedidos["direccionEntrega"] ?></a>
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
                                        //document.getElementById("long").innerHTML = _crdL.longitude;    
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
                        <td><?php echo $listaPedidos["fechaRegistro"]; ?></td>
                        <td><?php echo $listaPedidos["estado"]; ?></td>
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
<?php
//$pesoCg = $_REQUEST['codigoEnvio'];

/*$num_result = mysqli_query($cadena, "select pesoCarga from cargas where IDcargas = 2");

$tourresult = $num_result->fetch_array()['pesoCarga'] ?? '';*/
?>
<strong><?php //echo $tourresult ?></strong>
    <!-- </fieldset> -->

    <!-- Modal -->
    <div class="modal fade" id="editRoute" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
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
                        <input type="text" name="codigoEnvio" id="codigoEnvio" hidden>
                        <?php 
                        ?>

                        <input name="pesoC" id="pesoC" hidden>

                        <section class="cards_">
                            <?php
                            require_once('../Controller/controllerList.php');
                            ?>
                            <?php
                            foreach ($listDriver as $listDrivers) {
                            ?>
                                <div class="cards_container">
                                    <div class="cards_body">

                                        <h5 class="cards_title"><?php echo $listDrivers["nombres"] . "  " . $listDrivers["apellidoP"] ?></h5>
                                        <p class="cards_text"><span><?php echo $listDrivers["tipoDoc"] ?>: </span> <?php echo $listDrivers["numDoc"] ?></p>

                                        <p class="cards_text"><span>Celular: </span> <?php echo "+51 ".$listDrivers["celular"] ?><!--<input type="radio" class="cards_check" id="numDriver" name="numDriver" value="<?php //echo "+51 ".$listDrivers["celular"] ?>"></input>--></p>
                                         <p class="cards_text"><span>Seleccionar: </span>
                                        <input class="cards_check_1" type="radio" name="idconductor" id="idconductor" value="<?php echo $listDrivers["IDconduct"] ?>">


                                        <script type="text/javascript">
                                            function setText(){
                                                var chk = document.getElementById("idconductor");
                                                var num = document.getElementById("numDriver");

                                                if (chk.checked == true) {
                                                    console.log(num.value);

                                                }else{
                                                    console.log("not check");
                                                }
                                            }
                                            $('.cards_check').click(function(){
                                                $("#nroDriver").val('');
                                                $(".cards_check").each(function(){
                                                    if($(this).prop('checked')){
                                                        //$( ".cards_check_1" ).prop( "checked", true );
                                                        $("#nroDriver").val($("#nroDriver").val()+$(this).val());
                                                    }
                                                });
                                            });



                                            //alert(selectedlist);
                                            /*var checkboxes = document.getElementsByName('employee');
                                            var selected = [];
                                                for (var i=0; i<checkboxes.length; i++) {
                                                    if (checkboxes[i].checked) {
                                                        selected.push(checkboxes[i].value);
                                                    }
                                                }*/
                                        </script>

                                        <!-- <div class="cards_check_box"></div> -->

                                        <!--<a href="#" class="btn btn-primary">Button</a>-->
                                    </div>
                                </div>
                            <?php
                            }
                            ?>
                        </section>
                        <br>
                        <h4>Seleccion de Vehiculo:</h4>
                        <section class="cards_">

                            <?php
                            require_once('../Controller/controllerList.php');
                            ?>
                            <?php
                            if (!empty($listCar)) {
                                foreach ($listCar as $listCars) {
                            ?>
                                <div class="cards_container" id="infoCar" name="infoCar">
                                    <div class="cards_body">
                                        <br>
                                         <p class="cards_text"><span>Tipo De Vehiculo: </span> <?php echo $listCars["tipoVehiculo"] ?>
                                        <p class="cards_text"><span>Marca: </span><?php echo $listCars["marcaVehiculo"] . " - " . $listCars["placaVehicular"] ?></p>
                                        <input hidden type="text" id="pesoNeto" name="pesoNeto" value="<?php echo $listCars["cargaUtil"]; ?>"></input>

                                        <!-- <p class="" id="uMCarga" name="uMCarga"><?php echo $listCars["unidadMedidaCarga"] ?></p> -->
                                        <p class="cards_text"><span>Seleccionar: </span>
                                        <input class="cards_check" type="radio" name="idvehiculo" id="idvehiculo" value="<?php echo $listCars["IDvehiculo"]; ?>">
                                        <!--<a href="#" class="btn btn-primary">Button</a>-->
                                    </div>
                                    <script type="text/javascript">
                                        
                                    </script>
                                </div>
                                <?php
                                $value = $listCars["cargaUtil"];

                                ?>
                            <?php
                            }
                        }else{
                            echo '<script>alert("test")</script>';
                        }
                            ?>
                        </section>
                        <section style="display: flex;">
                            <dl>
                                <dt><label title="text">Fecha Salida </label></dt>
                                <dd><input tabindex="2" accesskey="p" name="fechaSalida" type="date" value="<?php echo date('Y-m-d'); ?>" maxlength="20" id="fechaSalida" onchange="calcularTime()" /></dd>
                            </dl>
                            <dl>
                                <dt><label title="text">Fecha llegada </label></dt>
                                <dd><input tabindex="2" accesskey="p" name="fechaLlegada" type="date" maxlength="20" id="fechaLlegada" /></dd>
                            </dl>
                        </section>
                        <section style="display: flex;">
                            <dl>
                                <dt><label title="text">Hora Salida </label></dt>
                                <dd><input tabindex="2" accesskey="p" name="horaSalida" type="time" maxlength="20" id="horaSalida" onchange="calcularTime()" /></dd>
                            </dl>
                            <dl>
                                <dt><label title="text">Hora llegada </label></dt>
                                <dd><input tabindex="2" accesskey="p" name="horaLlegada" type="time" maxlength="20" id="horaLlegada" /></dd>
                            </dl>
                        </section>
                        <section style="display: flex;">
                            <dl>
                                <dt><label title="text">Kilometraje De Salida</label></dt>
                                <dd><input tabindex="2" accesskey="p" name="kmInicio" type="number" id="kmInicio"/></dd>
                            </dl>
                            <dl>
                                <dt><label title="text">Kilometraje Final</label></dt>
                                <dd><input tabindex="2" accesskey="p" name="kmSalida" type="number" id="kmSalida"/></dd>
                            </dl>
                            <dl>
                                <dt><label title="text">Hora Estimada de LLegada</label></dt>
                                <dd><input tabindex="2" accesskey="p" name="estimado" type="time" id="estimado"/></dd>
                            </dl>
                        </section>
                        <section style="display: flex;">
                            <dl>
                                <dt><label title="text">Direccion Entrega</label></dt>
                                <dd><input tabindex="2" accesskey="p" name="direccionEntr" type="text" id="direccionEntr" readonly /></dd>

                                <!-- test
                                <dt><label title="text">Direccion Entrega</label></dt>
                                <dd><a href="" id="urlDir" name="urlDir">4</a></dd>
                                test -->
                            </dl>
                             <dl hidden>
                                <dt><label title="text">Direccion Entrega</label></dt>
                                <dd><input tabindex="2" accesskey="p" name="urlDir" type="text" id="urlDir"/></dd>
                            </dl>
                            <dl>
                                <dt><label title="text">Numero Conductor</label></dt>
                                <dd><input type="text" id="nroDriver" name="nroDriver" placeholder="+51 987654321"></input></dd>
                            </dl>
                        </section>

                        <!--
                        <p>
                            <button type="submit" class="btn btn-raised btn-info btn-sm right"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                        </p>
                        </form>-->

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Confirmar</button>
                </div>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <script>
        $(document).ready(function() {
             var pesoCarga = document.getElementById("pesoC");
             var pesoNetoC = document.getElementById("pesoNeto");

            $('.btnAsign').click(function() {
                $('#editRoute').modal("show");
                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#codigoEnvio').val(data[0]);
                $('#pesoC').val(data[3]);
                $('#direccionEntr').val(data[5]);



                var dir = encodeURIComponent(String(data[5]));


                //google maps
                var _dir = 'https://www.google.com/maps/dir/?api=1&'+dir;
                //google maps

                /*waze
                var _dir = 'https://waze.com/ul?q='+dir+'&navigate=yes';
                waze*/


                //document.getElementById("urlDir").href=href;

                //$('#urlDir').val(data[5]);
                //google maps
                $('#urlDir').val('https://www.google.com/maps/dir/?api=1&destination='+dir);
                //google maps

                /*waze
                $('#urlDir').val('https://waze.com/ul?q='+dir+'&navigate=yes');
                waze*/
                console.log(_dir);

                var str2 = $('#pesoNeto').val();
                var pesoI= parseFloat(data[3]);
                var peso_= parseFloat(str2);

                
                console.log(pesoI)
                console.log(peso_);

                if (pesoI <= peso_) {
                    console.log("pesos validos");
                    document.getElementById("infoCar").style.display='block';
                    /*var r = confirm("Los pesos son validos.\n\n Desea continuar?");
                    if (r==true) {
                        $('#editRoute').modal('show');
                    }else{
                        $('#editRoute').modal('hide');
                    }*/
                }else{
                    console.log("pesos no validos");
                    //document.getElementById("infoCar").disabled = true;
                    document.getElementById("infoCar").style.display='none';
                    //$('#editRoute').modal('hide');
                    //alert("los pesos no son validos");
                }


            });
              /*$("#editRoute").on('show.bs.modal', function(){
                alert('The modal is about to be shown.');
              });*/
        });

        function calcularTime() {
            var _time = document.getElementById('horaSalida').value;
            console.log(_time)
            //edad.value = age;
        }

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