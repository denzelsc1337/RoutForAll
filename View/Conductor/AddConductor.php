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

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
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
                        <th hidden>ID</th>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>Tipo de Licencia</th>
                        <th>Estado Licencia</th>
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listDriver as $listDrivers) {
                    ?>
                        <tr>
                            <td hidden><?php echo $listDrivers["IDconduct"]; ?></td>
                            <td><?php echo $listDrivers["numDoc"]; ?></td>
                            <td><?php echo $listDrivers["nombres"]; ?></td>
                            <td><?php echo $listDrivers["apellidoP"]; ?></td>
                            <td><?php echo $listDrivers["apellidoM"]; ?></td>
                            <td style="text-transform: none;"><?php echo $listDrivers["correo"]; ?></td>
                            <td><?php echo $listDrivers["tipoLicencia"]; ?></td>
                            <td><?php echo $listDrivers["estadoLicencia"]; ?></td>
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

            <form name="login-form" id="login-form" method="post" action="../../Controller/AddConductores.php">

                <fieldset>

                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="codenvio" for="numruc">Tipo Documento</label>
                            </div>
                            <script type="text/javascript">
                                function changeValue(dropdown) {
                                    var option = dropdown.options[dropdown.selectedIndex].value,
                                        field = document.getElementById('numdoc');
                                    if (option == 'DUI') {
                                        document.getElementById('numdoc').value = '';
                                        field.maxLength = 15;
                                    } else if (option == 'DNI') {
                                        document.getElementById('numdoc').value = '';
                                        field.maxLength = 8;
                                    } else if (option == 'Cedula') {
                                        document.getElementById('numdoc').value = '';
                                        field.maxLength = 9;
                                    } else if (option == 'Licencia') {
                                        document.getElementById('numdoc').value = '';
                                        field.maxLength = 11;
                                    } else if (option == 'Pasaporte') {
                                        document.getElementById('numdoc').value = '';
                                        field.maxLength = 15;
                                    } else if (option == 'Otro') {
                                        document.getElementById('numdoc').value = '';
                                        field.maxLength = 20;
                                    }
                                }
                            </script>
                            <div class="input">
                                <select class="form-control" name="tipo_documento" id="tipo_documento" onchange="changeValue(this);">
                                    <option value="" selected="" disabled>Seleccione una opción</option>
                                    <option value="DUI">1 - DUI</option>
                                    <option value="DNI">2 - DNI</option>
                                    <option value="Cedula">3 - Cedula</option>
                                    <option value="Licencia">4 - Licencia</option>
                                    <option value="Pasaporte">5 - Pasaporte</option>
                                    <option value="Otro">6 - Otro</option>
                                </select>
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="codenvio" for="numruc">Nro Documento</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 250px;" tabindex="1" accesskey="u" name="numdoc" type="text" maxlength="11" id="numdoc" />
                            </div>
                        </div>


                    </section>

                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Nombres</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 300px;" tabindex="2" accesskey="p" name="nombre" type="text" maxlength="30" id="nombre" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Apellido Paterno</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 300px;" tabindex="2" accesskey="p" name="apellidoP" type="text" maxlength="30" id="apellidoP" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Apellido Materno</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 300px;" tabindex="2" accesskey="p" name="apellidoM" type="text" maxlength="30" id="apellidoM" />
                            </div>
                        </div>
                    </section>


                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Fecha de Nacimiento</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 300px;" name="fecha_N" type="date" id="fecha_N" onchange="getAge()" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Edad</label>
                            </div>
                            <script type="text/javascript">
                                function getAge() {
                                    var age = "";
                                    var _bdate = document.getElementById('fecha_N').value;
                                    var _bday = +new Date(_bdate);
                                    age += ~~((Date.now() - _bday) / (31557600000));
                                    var edad = document.getElementById('edad');
                                    edad.value = age;
                                }
                            </script>
                            <div class="input">
                                <input class="form-control" style="width: 200px;" name="edad" type="text" id="edad" />
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="direccion">Celular</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 200px;" tabindex="2" accesskey="p" name="celular" type="text" maxlength="9" id="celular" />
                            </div>
                        </div>

                    </section>


                    <section class="sec_">


                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="correo">Correo</label>
                            </div>
                            <div class="input">
                                <input class="form-control" style="width: 400px;" tabindex="2" accesskey="p" name="correo" type="text" maxlength="40" id="correo" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="telefono">Tipo Licencia</label>
                            </div>

                            <div class="input">
                                <select class="form-control" style="width: 250px;" name="tipo_licencia" id="tipo_licencia">
                                    <option value="" selected="" disabled>Seleccione una opción</option>
                                    <option value="A-I">A-I</option>
                                    <option value="A-IIa">A-IIa</option>
                                    <option value="A-IIb">A-IIb</option>
                                    <option value="A-IIIa">A-IIIa</option>
                                    <option value="A-IIIb">A-IIIb</option>
                                    <option value="A-IIIc">A-IIIc</option>
                                </select>
                            </div>
                        </div>

                    </section>


                    <section class="sec_">

                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="celular">Estado licencia</label>
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
                                        <input type="radio" autocomplete="off" class="custom-control-input" name="estado" value="activo" id="__BVID__121" onclick="displayRadioValue(this.value)" required>
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
                    <form action="../../Controller/UpdateConductor.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6" hidden>
                                <label>ID</label>
                                <input class="form-control" autocomplete="off" tabindex="1" accesskey="u" name="idC" type="text" id="idC" />
                            </div>
                            <div class="form-group col-md-4">
                                <label>DNI</label>
                                <input class="form-control" autocomplete="off" tabindex="1" accesskey="u" name="dniC" type="text" id="dniC" maxlength="8" />
                            </div>
                            <div class="form-group col-md-8">
                                <label>Nombres</label>
                                <input type="text" class="form-control" name="nombresC" id="nombresC">
                            </div>

                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Apellido Paterno</label>
                                <input class="form-control" tabindex="2" accesskey="p" name="apePaternoC" id="apePaternoC" type="text" />
                            </div>
                            <div class="form-group col-md-6">
                                <label>Apellido Materno</label>
                                <input type="text" class="form-control" name="apeMaternoC" id="apeMaternoC">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <label>Correo</label>
                                <input style="text-transform: none;" type="text" class="form-control" name="correoC" id="correoC">
                            </div>
                            <div class="form-group col-md-4">
                                <label>Tipo Licencia</label>
                                <input type="text" class="form-control" name="licenciaC" id="licenciaC">
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
    <!--  -->

    <script>
        $("#numruc").keyup(function() {
            var nroruc = $('#numruc').val().substring(0, 2);

            if (nroruc == 10 || nroruc == 1) {
                document.getElementById("__BVID__118").checked = true;
                document.getElementById("__BVID__119").checked = false;
            } else {
                document.getElementById("__BVID__118").checked = false;
            }

            if (nroruc == 20 || nroruc == 2) {
                document.getElementById("__BVID__118").checked = false;
                document.getElementById("__BVID__119").checked = true;
            } else {
                document.getElementById("__BVID__119").checked = false;
            }
        });

        /*if(document.getElementById('__BVID__118').checked) {
            var nroruc = $('#numruc').val(10);
        }else if(document.getElementById('__BVID__119').checked) {
            var nroruc = $('#numruc').val(20);
            console.log("testing");
        }*/
    </script>

<script type="text/javascript">

$(document).ready(function() {
    $('.btnAsign').on('click', function() {
        $('#asdasdasd').modal('show');

        $tr = $(this).closest('tr');
        var data = $tr.children('td').map(function() {
            return $(this).text();
        }).get();
        console.log(data);
        $('#idC').val(data[0]);
        $('#dniC').val(data[1]);
        $('#nombresC').val(data[2]);
        $('#apePaternoC').val(data[3]);
        $('#apeMaternoC').val(data[4]);
        $('#correoC').val(data[5]);
        $('#licenciaC').val(data[6]);
        $('#estado').val(data[7]);
    });
});
</script>

</body>

</html>