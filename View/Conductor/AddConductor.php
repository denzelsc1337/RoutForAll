<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Agregar Clientes</title>

    <link rel="stylesheet" href="../css/main.css">

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
                    require_once ((dirname(__FILE__) .'../../../Controller/controllerList.php'));
                ?>
                <thead>
                    <tr>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</th>
                        <th>Correo</th>
                        <th>Tipo de Licencia</th>
                        <th>Estado Licencia</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach ($listDriver as $listDrivers) {
                    ?>
                    <tr>
                        <td><?php echo $listDrivers["numDoc"]; ?></td>
                        <td><?php echo $listDrivers["nombres"]; ?></td>
                        <td><?php echo $listDrivers["apellidoP"]; ?></td>
                        <td><?php echo $listDrivers["apellidoM"]; ?></td>
                        <td><?php echo $listDrivers["correo"]; ?></td>
                        <td><?php echo $listDrivers["tipoLicencia"]; ?></td>
                        <td><?php echo $listDrivers["estadoLicencia"]; ?></td>
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
                                            document.getElementById('numdoc').value='';
                                            field.maxLength = 15;
                                        } else if  (option == 'DNI'){
                                            document.getElementById('numdoc').value='';
                                            field.maxLength = 8;
                                        } else if  (option == 'Cedula'){
                                            document.getElementById('numdoc').value='';
                                            field.maxLength = 9;
                                        } else if  (option == 'Licencia'){
                                            document.getElementById('numdoc').value='';
                                            field.maxLength = 11;
                                        } else if  (option == 'Pasaporte'){
                                            document.getElementById('numdoc').value='';
                                            field.maxLength = 15;
                                        } else if  (option == 'Otro'){
                                            document.getElementById('numdoc').value='';
                                            field.maxLength = 20;
                                        }
                                    }
                            </script>
                        <select class="form-control" name="tipo_documento" id="tipo_documento" onchange="changeValue(this);">
                                <option value="" selected="" disabled>Seleccione una opción</option>
                                <option value="DUI">1 - DUI</option>
                                <option value="DNI">2 - DNI</option>
                                <option value="Cedula">3 - Cedula</option>
                                <option value="Licencia">4 - Licencia</option>
                                <option value="Pasaporte">5 - Pasaporte</option>
                                <option value="Otro">6 - Otro</option>
                         </select>
                            <div class="label">
                                <label title="codenvio" for="numruc">Nro Documento</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="1" accesskey="u" name="numdoc" type="text" maxlength="11" id="numdoc" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Nombres</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="nombre" type="text" maxlength="30" id="nombre" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Apellido Paterno</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="apellidoP" type="text" maxlength="30" id="apellidoP" />
                                <label title="razon" for="razon">Apellido Materno</label>
                                <input class="form-control" tabindex="2" accesskey="p" name="apellidoM" type="text" maxlength="30" id="apellidoM" />
                            </div>
                        </div>
                    </section>

                    <section class="sec_">

                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Fecha de Nacimiento</label>
                            </div>
                            <div class="input">
                                <input name="fecha_N" type="date" id="fecha_N" onchange="getAge()" />
                            </div>
                            <div class="label">
                                <label title="text">Edad</label>
                            </div>
                            <script type="text/javascript">
                                function getAge() {
                                    var age = "";
                                    var _bdate = document.getElementById('fecha_N').value;
                                    var _bday = +new Date(_bdate);
                                    age += ~~ ((Date.now() - _bday) / (31557600000));
                                    var edad = document.getElementById('edad');
                                    edad.value = age;
                                }
                            </script>
                            <div class="input">
                                <input name="edad" type="text" id="edad" />
                            </div>
                        </div>
                    </section>

                    </section>

                    <section class="sec_">

                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="direccion">Celular</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="celular" type="text" maxlength="9" id="celular" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="correo">Correo</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="correo" type="text" maxlength="20" id="correo" />
                            </div>
                        </div>

                    </section>


                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="telefono">Tipo Licencia</label>
                            </div>

                            <div class="input">
                        <select class="form-control" name="tipo_licencia" id="tipo_licencia">
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
                        <div class="sec_1">
                            <label title="text" for="celular">Estado licencia</label>
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
                        </div>
                    </section>

                    <button style="float: right;" type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

                </fieldset>
            </form>
            
        </div>

    </div>









    <!--  -->
    <script src="../js/test.js"></script>
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

</body>

</html>