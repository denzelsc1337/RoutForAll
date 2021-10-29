<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Agregar Clientes</title>

    <link rel="stylesheet" href="../css/main.css">
    
</head>

<body>
    <div class="header">
        <nav class="navigation">
            <a class="inner-shadow active" href="../../index.php">Home</a>
            <a class="outer-shadow hover-in-shadow" href="../AddRoute.php">Asignar Routes</a>
            <?php include("../../View/Header/mainHeader.php"); ?>

        </nav>
    </div>
    <section class="sec_container">
        <form name="login-form" id="login-form" method="post" action="../../Controller/AddClients.php">


            <fieldset>
                <legend>Guardar</legend>
                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="codenvio">RUC</label>
                        </div>
                        <div class="input">
                            <input tabindex="1" accesskey="u" name="numruc" type="text" maxlength="30" id="numruc" />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="razon">Razon Social</label>
                        </div>
                        <div class="input">
                            <input tabindex="2" accesskey="p" name="razon" type="text" maxlength="20" id="razon" />
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipo" value="natural" checked="checked" required>
                                <i class=" far fa-check-circle fa-fw"></i> &nbsp; natural
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipo" value="juridica" required>
                                <i class=" far fa-times-circle fa-fw"></i> &nbsp; juridica
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipo" value="natural-negocio" required>
                                <i class=" far fa-times-circle fa-fw"></i> &nbsp; natural-negocio
                            </label>
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <div class="sec_1">

                        <div class="label">
                            <label title="text">Direccion</label>
                        </div>
                        <div class="input">
                            <input tabindex="2" accesskey="p" name="direccion" type="text" maxlength="20" id="direccion" />
                        </div>

                    </div>
                    <div class="sec_1">

                        <div class="label">
                            <label title="text">Correo</label>
                        </div>
                        <div class="input">
                            <input tabindex="2" accesskey="p" name="correo" type="text" maxlength="20" id="correo" />
                        </div>

                    </div>
                </section>


                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Telefono</label>
                        </div>
                        <div class="input">
                            <input tabindex="2" accesskey="p" name="telefono" type="text" maxlength="20" id="telefono" />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Celular</label>
                        </div>
                        <div class="input">
                            <input tabindex="2" accesskey="p" name="celular" type="text" maxlength="20" id="celular" />
                        </div>
                    </div>
                </section>

                <button type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

            </fieldset>
    </section>

    </form>

</body>

</html>