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
    <section class="sec_container">
        <form name="login-form" id="login-form" method="post" action="../../Controller/AddClients.php">


            <fieldset>
                <!-- <legend>Guardar</legend> -->
                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="codenvio" for="numruc">RUC</label>
                        </div>
                        <div class="input">
                            <input class="form-control" tabindex="1" accesskey="u" name="numruc" type="text" maxlength="11" id="numruc" />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="razon" for="razon">Razon Social</label>
                        </div>
                        <div class="input">
                            <input class="form-control" tabindex="2" accesskey="p" name="razon" type="text" maxlength="30" id="razon" />
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <!-- <div class="form-group" role="radiogroup" tabindex="-1">
                        <div class="custom-control custom-control-inline custom-radio">
                            <input class="custom-control-input" id="natural_" type="radio" name="tipo" value="natural" checked="checked" required>
                            <i class=" far fa-check-circle fa-fw"></i> &nbsp; natural
                            <label class="custom-control-label" for="natural_"> Natural</label>

                        </div>
                        <div class="custom-control custom-control-inline custom-radio">

                            <input class="custom-control-input" type="radio" name="tipo" value="juridica" required>
                            <i class=" far fa-times-circle fa-fw"></i> &nbsp; juridica
                            <label class="custom-control-label"> Jurídica </label>

                        </div>
                        
                    </div> -->

                    <div id="radios2" role="radiogroup" tabindex="-1" class="">
                        <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" autocomplete="off" class="custom-control-input" name="tipo" value="natural" id="__BVID__118" required>
                            <label class="custom-control-label" for="__BVID__118">Natural</label>
                        </div>
                        <div class="custom-control custom-control-inline custom-radio">
                            <input type="radio" autocomplete="off" class="custom-control-input" name="tipo" value="juridica" id="__BVID__119" required>
                            <label class="custom-control-label" for="__BVID__119">Jurídica</label>
                        </div>
                    </div>

                </section>

                <section class="sec_">
                    <div class="sec_1">

                        <div class="label">
                            <label title="text" for="direccion">Direccion</label>
                        </div>
                        <div class="input">
                            <input class="form-control" tabindex="2" accesskey="p" name="direccion" type="text" maxlength="40" id="direccion" />
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
                            <label title="text" for="telefono">Telefono</label>
                        </div>
                        <div class="input">
                            <input class="form-control" tabindex="2" accesskey="p" name="telefono" type="text" maxlength="7" id="telefono" />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text" for="celular">Celular</label>
                        </div>
                        <div class="input">
                            <input class="form-control" tabindex="2" accesskey="p" name="celular" type="text" maxlength="9" id="celular" />
                        </div>
                    </div>
                </section>

                <button style="float: right;" type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

            </fieldset>
    </section>

    </form>

    <!--  -->
    <script src="../js/test.js"></script>
    <!--  -->

    <script>
        /*$("#numruc").keyup(function() {
            var nroruc = $('#numruc').val().substring(0,2);
            if (nroruc == 20) {
                document.getElementById("__BVID__118").checked = false;
                document.getElementById("__BVID__119").checked = true;
            }else if(nroruc == 10){
                document.getElementById("__BVID__118").checked = true;
                document.getElementById("__BVID__119").checked = false;
            }
        });*/

        if(document.getElementById('__BVID__118').checked) {
            var nroruc = $('#numruc').val(10);
        }else if(document.getElementById('__BVID__119').checked) {
            var nroruc = $('#numruc').val(20);
            console.log("testing");
        }

    </script>

</body>

</html>