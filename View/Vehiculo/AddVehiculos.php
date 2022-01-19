<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Agregar Clientes</title>

    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">

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
            <div>
                <a class="a_cont" href="../principal.php">Home</a>
                <a class="a_cont" href="../AddRoute.php">Rutas</a>
                
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
                        <th hidden>ID Vehiculo</th>
                        <th>Tipo de Vehiculo</th>
                        <th>Marca de Vehiculo</th>
                        <th>Placa vehicular</th>
                        <th>Carga Util</th>
                        <th>Estado</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listCar as $listCars) {
                    ?>
                        <tr>
                            <td hidden><?php echo $listCars["IDvehiculo"]; ?></td>
                            <td><?php echo $listCars["tipoVehiculo"]; ?></td>
                            <td><?php echo $listCars["marcaVehiculo"]; ?></td>
                            <td><?php echo $listCars["placaVehicular"]; ?></td>
                            <td><?php echo $listCars["cargaUtil"]; ?> KG</td>
                            <td><?php echo $listCars["estado"]; ?></td>
                            <td>
                                <button type="button" class="btn btn-success btnAsign" data-bs-toggle="modal" data-bs-target="#asdasdasd">Edit</button>
                                <!-- <button type="button" class="btn btn-success btnAsign" data-toggle="modal" data-target="asdasdasd">Edit</button> -->
                            </td>
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
                                <label title="text">Kilometraje</label>
                            </div>

                            <div class="input">
                                <input style="width: 200px;" class="form-control" type="number" step="0.001" name="KM" id="KM">
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Marca Vehiculo</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="marcaVehiculo" type="text" id="marcaVehiculo" />
                            </div>
                        </div>

                    </section>


                    <section class="sec_">
                        <div class="sec_1">

                            <div class="label">
                                <label title="text">Peso Neto</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="p_neto" type="number" step="0.001" id="p_neto" />
                            </div>
                        </div>
                        <div class="sec_1">

                            <div class="label">
                                <label title="text">Carga Util</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="c_util" type="number" step="0.001" id="c_util" />
                            </div>
                        </div>
                        <div class="sec_1">

                            <div class="label">
                                <label title="text">Peso Bruto</label>
                            </div>
                            <div class="input">
                                <input style="width: 200px;" class="form-control" name="p_bruto" type="number" step="0.001" id="p_bruto" />
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Año</label>
                            </div>
                            <?php $years = range(1900, strftime("%Y", time())); ?>
                            <div class="input">
                                <select name="anio" id="anio">
                                  <option>Selecciona Año</option>
                                  <?php foreach($years as $year) : ?>
                                    <option value="<?php echo $year; ?>"><?php echo $year; ?></option>
                                  <?php endforeach; ?>
                                </select>
                            </div>
                        </div>

                    </section>

                    <section class="sec_">

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Longitud</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" type="number" step="0.001" name="largo" id="largo">
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Ancho</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" type="number" step="0.001" name="ancho" id="ancho">
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Altura</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" type="number" step="0.001" name="alto" id="alto">
                            </div>
                        </div>
                    </section>


                    <section class="sec_" hidden>
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
    </div>



    <!-- Modal -->
    <div class="modal fade" id="asdasdasd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Editar</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../../Controller/UpdateVehiculo.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6" hidden>
                                <label>IDVEHICULO</label>
                                <input class="form-control" autocomplete="off" tabindex="1" accesskey="u" name="idvehicular" type="text" id="idvehicular" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Tipo Vehiculo</label>
                                <input class="form-control" autocomplete="off" tabindex="1" accesskey="u" name="tipoV" type="text" id="tipoV" maxlength="11" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Narca Vehiculo</label>
                                <input type="text" class="form-control" name="marcaV" id="marcaV">
                            </div>
                            <div class="form-group col-md-5">
                                <label>Placa Vehicular</label>
                                <input class="form-control" tabindex="2" accesskey="p" name="placaV" id="placaV" type="text" maxlength="20" />
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label for="inputAddress">Capacidad de Carga</label>
                                <input type="text" class="form-control" name="cargaV" id="cargaV">
                            </div>
                        </div>
                        <div class="form-row">

                            <div class="form-group col-md-4">
                                <label>Estado</label>
                                <input type="text" class="form-control" name="estado" id="estado">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary"><i class="far fa-save"></i>GUARDAR</button>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

                    <!--<button type="button" class="btn btn-primary">Save changes</button>-->
                </div>
            </div>
        </div>
    </div>





    <!--  -->
    <script src="../js/test.js"></script>
    <script src="../js/bootstrap.bundle.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <!--  -->
    <script type="text/javascript">
        $(document).ready(function() {
            $('.btnAsign').on('click', function() {
                $('#asdasdasd').modal('show');

                $tr = $(this).closest('tr');
                var data = $tr.children('td').map(function() {
                    return $(this).text();
                }).get();
                console.log(data);
                $('#idvehicular').val(data[0]);
                $('#tipoV').val(data[1]);
                $('#marcaV').val(data[2]);
                $('#placaV').val(data[3]);
                $('#cargaV').val(data[4]);
                $('#estado').val(data[5]);
            });
        });
    </script>


</body>

</html>