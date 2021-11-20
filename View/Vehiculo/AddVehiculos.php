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
                            <div id="radios2" role="radiogroup" tabindex="-1" style="padding-left: 50px">
                                <div class="custom-control custom-control-inline custom-radio">
                                    <input class="custom-control-input" type="radio" autocomplete="off" name="tipoVehiculo" value="vann" id="__BVID__118" required>
                                    <!-- <input class="custom-control-input" type="radio" name="tipoVehiculo" value="Vann" checked="checked" required> -->
                                    <label class="custom-control-label" for="__BVID__118">Vann</label>
                                </div>
                                <div class="custom-control custom-control-inline custom-radio">
                                    <input class="custom-control-input" type="radio" name="tipoVehiculo" value="camion" id="__BVID__119" required>
                                    <!-- <i class=" far fa-times-circle fa-fw"></i> &nbsp; camion -->
                                    <label class="custom-control-label" for="__BVID__119">Camion</label>

                                </div>
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Placa Vehicular</label>
                            </div>
                            <script type="text/javascript">
                                function addGuion(txt) {
                                let ele = document.getElementById(txt.id);
                                ele = ele.value.split('-').join('');

                                let finalVal = ele.match(/.{1,3}/g).join('-');
                                document.getElementById(txt.id).value = finalVal;
                            }

                        </script>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="placaVehicular" id="placaVehicular" type="text" maxlength="7" style="text-transform:uppercase;" onkeyup="addGuion(this)" />
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Marca Vehiculo</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="marcaVehiculo" type="text" maxlength="20" id="marcaVehiculo" />
                            </div>
                        </div>

                    </section>


                    <section class="sec_">
                        <div class="sec_1">

                            <div class="label">
                                <label title="text">Capacidad Carga</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="capacidadCarga" type="text" maxlength="20" id="capacidadCarga" />
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Kilometraje</label>
                            </div>

                            <div class="input">
                                <input style="width: 200px;" class="form-control" type="text" name="KM" id="KM">
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Año</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="anio" type="text" id="anio" />
                            </div>
                        </div>

                    </section>

                    <section class="sec_">

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Largo</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" type="text" name="largo" id="largo">
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Ancho</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" type="text" name="ancho" id="ancho">
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Alto</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" type="text" name="alto" id="alto">
                            </div>
                        </div>
                    </section>


                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon">Estado</label>
                            </div>
                            <div class="form-group">
                                <script>
                                    function displayRadioValue(tipo) {
                                        //document.getElementById('text').value = tipo; - mandar a un txt
                                        console.log(tipo);
                                    }
                                </script>

                                <div id="radios3" role="radiogroup" tabindex="-1" style="padding-left: 50px">
                                    <div class="custom-control custom-control-inline custom-radio">
                                        <input type="radio" autocomplete="off" class="custom-control-input" name="estado" value="activo" id="__BVID__120" onclick="displayRadioValue(this.value)" checked="checked" required>
                                        <!-- <i class=" far fa-check-circle fa-fw"></i> &nbsp; Activo -->
                                        <label class="custom-control-label" for="__BVID__120">Activo</label>
                                    </div>

                                    <div class="custom-control custom-control-inline custom-radio">

                                        <input type="radio" autocomplete="off" class="custom-control-input" name="estado" value="no_activo" id="__BVID__121" onclick="displayRadioValue(this.value)" required>
                                        <!-- <i class=" far fa-times-circle fa-fw"></i> &nbsp; No activo -->
                                        <label class="custom-control-label" for="__BVID__121">No Activo</label>

                                    </div>
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