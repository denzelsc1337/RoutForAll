<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/corona/app.0d92b70a.css">
    <link rel="stylesheet" href="../css/corona/chunk-4ab62850.48f556ca.css">
    <link rel="stylesheet" href="../css/corona/chunk-162ef2da.0e433876.css">
    <link rel="stylesheet" href="../css/corona/chunk-vendors.0dbf83be.css">
    <!--  -->
    <title>Agregar Clientes</title>
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
        <p data-target="#tres" class="tabs-item" hidden>Tab 3</p>

    </div>




    <div class="tab-sub-content">
        <div data-content id="uno" class="sub-content-item active">
            <table class="table table_ b-table">
                <?php
                //require_once('../Controller/controllerList.php');
                require_once((dirname(__FILE__) . '../../../Controller/controllerList.php'));
                ?>
                <thead>
                    <tr>
                        <th hidden>IDCLIENT</th>
                        <th>DNI</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th>Correo</th>
                        <th>Usuario</th>
                        <th>Tipo de Usuario</th>
                        <th>Edit</th>

                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listUser as $listUsers) {
                    ?>
                        <tr>
                            <td hidden><?php echo $listUsers["secuence_usu"]; ?></td>
                            <td><?php echo $listUsers["id_usuario"]; ?></td>
                            <td><?php echo $listUsers["nom_usuario"]; ?></td>
                            <td><?php echo $listUsers["ape_usuario"]; ?></td>
                            <td style="text-transform: none;"><?php echo $listUsers["mail_usuario"]; ?></td>
                            <td><?php echo $listUsers["usuario"]; ?></td>
                            <td><?php echo $listUsers["tipo_user"]; ?></td>
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

            <form name="login-form" id="login-form" method="post" action="../../Controller/AddUsers.php">
                <fieldset>
                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="codenvio" for="numruc">DNI</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="1" accesskey="u" name="dni" type="text" maxlength="11" id="dni" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Nombres</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="nombres" type="text" maxlength="30" id="nombres" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="razon" for="razon">Apellidos</label>
                            </div>
                            <div class="input">
                                <input class="form-control" tabindex="2" accesskey="p" name="apellidos" type="text" maxlength="30" id="apellidos" />
                            </div>
                        </div>
                    </section>

                    <section class="sec_">

                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="direccion">Tipo Usuario</label>
                            </div>
                            <div class="input">
                                <select class="form-control" name="idtipo" id="idtipo" onchange="changeValue(this);">
                                    <option value="" selected="" disabled>Seleccione una opción</option>
                                    <?php
                                    require_once('../../Controller/controllerList.php');

                                    foreach ($selectorUser as $codTipo) {
                                    ?>
                                        <option value="<?php echo $codTipo["id_tipo_usuario"]; ?>"><?php echo $codTipo["detalle_tipo_usuario"]; ?></option>
                                    <?php }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="correo">Correo</label>
                            </div>
                            <div class="input">
                                <input style="width: 500px;" class="form-control" tabindex="2" accesskey="p" name="correo" type="text" id="correo" />
                            </div>
                        </div>

                    </section>


                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="telefono">Usuario</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" tabindex="2" accesskey="p" name="user" type="text" maxlength="20" id="user" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="celular">Contraseña</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" tabindex="2" accesskey="p" name="pass" type="password" maxlength="20" id="pass" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="celular">Telefono</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" tabindex="2" accesskey="p" name="telefono" type="text" maxlength="30" id="telefono" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="codenvio" for="numruc">Género</label>
                            </div>
                            <div class="input">
                                <select class="form-control" name="user_setso" id="user_setso">
                                    <option value="" selected="" disabled>Seleccione una opción</option>
                                    <option value="Masculino">Masculino</option>
                                    <option value="Femenino">Femenino</option>
                                </select>
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
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h2 class="modal-title" id="exampleModalLabel">Editar</h2>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="../../Controller/UpdateCliente.php" method="POST">
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>RUC</label>
                                <input type="text" class="form-control" name="rucUpdt" id="rucUpdt">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Razon Social</label>
                                <input type="text" class="form-control" name="razonS" id="razonS">
                            </div>
                            <div class="form-group col-md-6" hidden>
                                <label>id client</label>
                                <input type="text" class="form-control" name="idclient" id="idclient">
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline1" name="customRadioInline1" value="natural" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline1">Natural</label>
                            </div>
                            <div class="custom-control custom-radio custom-control-inline">
                                <input type="radio" id="customRadioInline2" name="customRadioInline1" value="juridica" class="custom-control-input">
                                <label class="custom-control-label" for="customRadioInline2">Juridica</label>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputAddress">Correo</label>
                            <input style="text-transform: none;" type="text" class="form-control" name="correoUpdt" id="correoUpdt" placeholder="Email">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label>Telefono</label>
                                <input type="text" class="form-control" name="tlfnUpdt" id="tlfnUpdt">
                            </div>
                            <div class="form-group col-md-6">
                                <label>Celular</label>
                                <input type="text" class="form-control" name="celUpdt" id="celUpdt">
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
</body>

</html>