<?php
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Agregar Cargas</title>

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
            <a class="a_cont" href="../principal.php">Home</a>
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
                        <th>RUC</th>
                        <th>Descripcion</th>
                        <th>Peso de Carga</th>
                        <th>Direccion Envio</th>
                        <th>Fecha Registro</th>
                        <th>Estado</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listCarga as $listCargas) {
                    ?>
                        <tr>
                            <td><?php echo $listCargas["rucClient"]; ?></td>
                            <td><?php echo $listCargas["descripcionCarga"]; ?></td>
                            <td><?php echo $listCargas["pesoCarga"]; ?></td>
                            <td><?php echo $listCargas["direccionEnvio"]; ?></td>
                            <td><?php echo $listCargas["fechaRegistro"]; ?></td>
                            <td><?php echo $listCargas["estado"]; ?></td>
                        </tr>
                </tbody>
            <?php } ?>
            </table>
        </div>
        <div data-content id="dos" class="sub-content-item">

            <form name="login-form" id="login-form" method="post" action="../../Controller/AddCarga.php">
                <fieldset>
                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="codenvio">id_cliente</label>
                            </div>
                            <div class="input">
                                <!--onkeyup="getDetail(this.value)"-->
                                <input class="form-control" autocomplete="off" tabindex="1" disabled="true" accesskey="u" name="id_cliente" type="text" id="id_cliente" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="codenvio">RUC cliente</label>
                            </div>
                            <div class="input">
                                <!--onkeyup="getDetail(this.value)"-->
                                <input class="form-control" autocomplete="off" tabindex="1" accesskey="u" name="numruc" type="text" id="numruc" maxlength="11" />
                            </div>
                        </div>

                        <div class="sec_1">
                            <div class="label">
                                <label title="razon">Razon Social</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="razon" disabled="true" type="text" maxlength="40" id="razon" />
                            </div>
                        </div>
                    </section>

                    <section>
                        <!-- style="display:flex; flex-wrap:wrap; justify-content: center;" -->

                        <fieldset style="flex: 0 0 50%; margin: 15px;">
                            <section class="sec_">
                                <!-- <label title="text">Tipo de producto</label>
                        <input tabindex="2" accesskey="p" name="tipoProd" id="tipoProd" type="text" maxlength="20" />
                        <label title="text">Producto</label>
                        <input tabindex="2" accesskey="p" name="prod" type="text" id="prod" maxlength="20" /> -->
                                <div class="sec_1">
                                    <div class="label">
                                        <label title="text">Descripcion</label>
                                    </div>
                                    <div class="input">
                                        <textarea class="form-control" name="desc" id="desc" rows="7" cols="60"></textarea>  
                                    </div>
                                    <!--
                                    <div class="label">
                                        <label title="text">Estado</label>
                                    </div>
                                    <div class="input">
                                        <select class="form-control" name="estado" id="estado">
                                            <option value="" selected="" disabled>Seleccione una opción</option>
                                            <option value="entregado">Entregado</option>
                                            <option value="por asignar">Por Asignar</option>
                                            <option value="pendiente">Pendiente</option>
                                        </select>
                                    </div>
                                -->
                                </div>
                                <div class="sec_1">
                                    <div class="label">
                                        <label>Direccion de Envio</label>
                                    </div>
                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="direccionE" id="direccionE" type="text" maxlength="20" />
                                    </div>
                                    <div class="label">
                                        <label>Indique su direccion entrega:</label>
                                    </div>
                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="direccionEntr" id="direccionEntr" type="text" maxlength="20" />
                                    </div>
                                </div>
                            </section>
                        </fieldset>

                        <fieldset style="flex: 0 0 50%; margin: 15px;">
                            <section class="sec_" > <!-- style="display:block;" -->
                                <div class="sec_1">
                                    <div class="label">
                                        <label title="text">Peso</label>
                                    </div>
                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="peso" id="peso" type="text" maxlength="20" />
                                    </div>
                                    <!-- </div> -->

                                    <!-- <div class="sec_1"> -->
                                    <div class="label">
                                        <label title="text">Unidad Medida</label>
                                    </div>

                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="unidadM" id="unidadM" type="text" maxlength="20" />
                                    </div>
                                </div>
                                <div class="sec_1">
                                    <div class="label">
                                        <label>largo</label>
                                    </div>
                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="largoC" id="largoC" type="text" maxlength="20" />
                                    </div>


                                    <div class="label">
                                        <label>Ancho</label>
                                    </div>

                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="anchoC" id="anchoC" type="text" maxlength="20" />
                                    </div>
                                    <!-- </div>
                                <div class="sec_1"> -->
                                    <div class="label">
                                        <label>Alto</label>
                                    </div>

                                    <div class="input">
                                        <input class="form-control" tabindex="2" accesskey="p" name="altoC" id="altoC" type="text" maxlength="20" />
                                    </div>
                                </div>

                            </section>

                        </fieldset>
                    </section>

                    <button style="float: right;" type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

            </form>

        </div>
    </div>
    <!-- </section> -->
    <!-- </div> -->

    <script type="text/javascript">
        function getDetail(str) {
            $(".ruc").keyup("click blur keyup paste", function() {
                if (this.value.length == this.maxLength) {
                    var xmlhttp = new XMLHttpRequest();
                    xmlhttp.onreadystatechange = function() {
                        if (this.readyState == 4 && this.status == 200) {
                            var myObj = JSON.parse(this.response);
                            document.getElementById("razon").value = myObj[0];
                            document.getElementById("numruc").readOnly = true;
                            //document.getElementById("numruc").value = myObj[1];
                        }
                    };
                    xmlhttp.open("GET", "getData.php?numruc=" + str, true);
                    xmlhttp.send();

                }
            })
        };
    </script>

    <script type="text/javascript">
        $("#numruc").keyup("click blur keyup paste", function() {
            var numruc = $("#numruc").val();
            if (this.value.length == this.maxLength) {
                $.ajax({
                    type: "GET",
                    url: "getData.php",
                    cache: false,
                    data: {
                        numruc: numruc
                    },
                    success: function(response) {
                        var result = JSON.parse(response);
                        console.log(result.razon);
                        console.log(result.id_client);

                        //document.getElementById("razon").value = result;
                        //document.getElementById("numruc").readOnly = true;
                        /*                    if (response==true) {
                                                var result = JSON.parse(response);
                                                console.log(result);
                                                document.getElementById("razon").value = result;
                                                document.getElementById("numruc").readOnly = true;
                                            }*/
                        var r = confirm("La razon social es: '" + result.razon + "'?");
                        if (r == true) {
                            document.getElementById("razon").value = result.razon;
                            document.getElementById("id_cliente").value = result.id_client;
                            document.getElementById("numruc").readOnly = true;
                            document.getElementById("id_cliente").readOnly = true;
                        } else {
                            document.getElementById("numruc").readOnly = false;
                            document.getElementById("id_cliente").readOnly = false;
                        }
                        return response;
                    }
                });
            }
        });
    </script>
    <!--  -->
    <script src="../js/test.js"></script>
    <!--  -->
</body>

</html>