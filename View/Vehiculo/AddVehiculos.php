<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Agregar Clientes</title>

    <link rel="stylesheet" href="../css/main.css">

    <!--  -->
    <link rel="stylesheet" href="../css/corona/app.0d92b70a.css">
    <link rel="stylesheet" href="../css/corona/chunk-4ab62850.48f556ca.css">
    <link rel="stylesheet" href="../css/corona/chunk-162ef2da.0e433876.css">
    <link rel="stylesheet" href="../css/corona/chunk-vendors.0dbf83be.css">
    <!--  -->

</head>

<body>
    <div class="header">
        <nav class="navigation">
            <a class="a_cont" href="../../index.php">Home</a>
            <a class="a_cont" href="../AddRoute.php">Asignar Routes</a>
            <?php include("../../View/Header/mainHeader.php"); ?>

        </nav>
    </div>


    <div class="tabs">
        <p data-target="#uno" class="tabs-item active">Mostrar</p>
        <p data-target="#dos" class="tabs-item">Agregar</p>
        <p data-target="#tres" class="tabs-item">Tab 3</p>
    </div>

    <div class="tab-sub-content">
        <div data-content id="uno" class="sub-content-item active">
            <table class="table table_ b-table">
                <?php
                require_once((dirname(__FILE__) . '../../../Controller/controllerList.php'));
                ?>
                <thead>
                    <tr>
                        <th>Tipo de Vehiculo</th>
                        <th>Marca de Vehiculo</th>
                        <th>Placa vehicular</th>
                        <th>Capacidad Carga</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listCar as $listCars) {
                    ?>
                        <tr>
                            <td><?php echo $listCars["tipoVehiculo"]; ?></td>
                            <td><?php echo $listCars["marcaVehiculo"]; ?></td>
                            <td><?php echo $listCars["placaVehicular"]; ?></td>
                            <td><?php echo $listCars["capacidadCarga"]; ?></td>
                            <td><?php echo $listCars["estado"]; ?></td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>

        <div data-content id="dos" class="sub-content-item">

            <form name="login-form" id="login-form" method="post" action="../../Controller/AddVehicles.php">


                <fieldset>

                    <section class="sec_" style="padding-bottom: 0px">
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon">Tipo De Vehiculo</label>
                            </div>
                        </div>
                    </section>

                    <section class="sec_" style="padding-top: 0px">
                        <div id="radios2" role="radiogroup" tabindex="-1"  style="padding-left: 50px">
                            <div class="custom-control custom-control-inline custom-radio">
                                <input type="radio" autocomplete="off" class="custom-control-input" name="tipoVehiculo" value="Vann" id="__BVID__118" required>

                                <!-- <input class="custom-control-input" type="radio" name="tipoVehiculo" value="Vann" checked="checked" required> -->
                                <label class="custom-control-label" for="__BVID__118">Vann</label>

                                <!-- <i class=" far fa-check-circle fa-fw"></i> &nbsp; Vann -->
                            </div>
                            <div class="custom-control custom-control-inline custom-radio">
                                <input class="custom-control-input" type="radio" name="tipoVehiculo" value="camion" id="__BVID__119" required>
                                <!-- <i class=" far fa-times-circle fa-fw"></i> &nbsp; camion -->
                                <label class="custom-control-label" for="__BVID__119">Camion</label>

                            </div>
                        </div>
                    </section>



                    <section class="sec_">
                        <div class="sec_1">

                            <div class="label">
                                <label title="text">Capacidad Carga</label>
                            </div>
                            <div class="input">
                                <input class="form-control" name="capacidadCarga" type="text" maxlength="20" id="capacidadCarga" />
                            </div>
                        </div>

                        <div class="sec_1">

                            <div class="label">
                                <label title="text">Marca Vehiculo</label>
                            </div>
                            <div class="input">
                                <input class="form-control" name="marcaVehiculo" type="text" maxlength="20" id="marcaVehiculo" />

                            </div>
                        </div>

                    </section>
                    <!--
                    <section class="sec_">
                        <label title="razon">Unidad Medida</label>
                        <div class="form-group">
                            <script>
                                function displayRadioValue(tipo) {
                                    //document.getElementById('text').value = tipo; - mandar a un txt
                                    console.log(tipo);
                                }
                            </script>

                            <div class="radio">
                                <label>
                                    <input type="radio" id="unidadMedidaCarga" name="unidadMedidaCarga" value="KG" onclick="displayRadioValue(this.value)" checked="checked" required>
                                    <i class=" far fa-check-circle fa-fw"></i> &nbsp; KG
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="unidadMedidaCarga" name="unidadMedidaCarga" value="TL" onclick="displayRadioValue(this.value)" required>
                                    <i class=" far fa-times-circle fa-fw"></i> &nbsp; Tonelada
                                </label>
                            </div>
                        </div>
                    </section>-->


                    <section class="sec_">


                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Kilometraje</label>
                            </div>
                            <!-- <script>
                                function getkilometraje(val) {
                                    var txt = document.getElementById('KM').value = val;
                                    console.log(txt.value);
                                }

                                function getLargo(val) {
                                    document.getElementById('largo').value = val;
                                }

                                function getAncho(val) {
                                    document.getElementById('ancho').value = val;
                                }

                                function getAlto(val) {
                                    document.getElementById('alto').value = val;
                                }

                                function addGuion(txt) {
                                    let ele = document.getElementById(txt.id);
                                    ele = ele.value.split('-').join('');

                                    let finalVal = ele.match(/.{1,3}/g).join('-');
                                    document.getElementById(txt.id).value = finalVal;
                                }
                            </script> -->
                            <!-- <div class="input"> -->
                            <!-- <input type="range" list="tickmarks" min="0" max="100" onchange="getkilometraje(this.value+' KM');" /> -->
                            <!-- </div> -->
                            <div class="input">
                                <input class="form-control" type="text" name="KM" id="KM">
                            </div>

                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Largo</label>
                            </div>
                            <div class="input">
                                <input type="range" list="tickmarks" min="10" max="100" onchange="getLargo(this.value+' M');" />
                                <input type="text" placeholder="deslice la barra" name="largo" id="largo">
                            </div>
                        </div>
                    </section>
                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Ancho</label>
                            </div>
                            <div class="input">
                                <input type="range" list="tickmarks" min="10" max="100" onchange="getAncho(this.value+' M');" />
                                <br>
                                <input type="text" placeholder="deslice la barra" name="ancho" id="ancho">
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Alto</label>
                            </div>
                            <div class="input">
                                <input type="range" list="tickmarks" min="10" max="100" onchange="getAlto(this.value+' M');" />
                                <br>
                                <input type="text" placeholder="deslice la barra" name="alto" id="alto">
                            </div>
                        </div>
                    </section>
                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Año</label>
                            </div>
                            <div class="input">
                                <input name="anio" type="text" id="anio" />
                            </div>
                        </div>
                    </section>
                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Placa Vehicular</label>
                            </div>
                            <div class="input">
                                <input name="placaVehicular" id="placaVehicular" type="text" maxlength="7" style="text-transform:uppercase;" onkeyup="addGuion(this)" />
                            </div>
                        </div>
                    </section>
                    <section class="sec_">
                        <label title="razon">Estado</label>
                        <div class="form-group">
                            <script>
                                function displayRadioValue(tipo) {
                                    //document.getElementById('text').value = tipo; - mandar a un txt
                                    console.log(tipo);
                                }
                            </script>

                            <div class="radio">
                                <label>
                                    <input type="radio" id="estado" name="estado" value="Activo" onclick="displayRadioValue(this.value)" checked="checked" required>
                                    <i class=" far fa-check-circle fa-fw"></i> &nbsp; Activo
                                </label>
                            </div>
                            <div class="radio">
                                <label>
                                    <input type="radio" id="estado" name="estado" value="No activo" onclick="displayRadioValue(this.value)" required>
                                    <i class=" far fa-times-circle fa-fw"></i> &nbsp; No activo
                                </label>
                            </div>
                        </div>
                    </section>


                    <button style="float: right;" type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

                </fieldset>


            </form>
        </div>



        <!--  -->
        <script src="../js/test.js"></script>
        <!--  -->

</body>

</html>