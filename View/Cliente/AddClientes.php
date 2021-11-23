<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/main.css">
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
                //require_once('../Controller/controllerList.php');
                require_once((dirname(__FILE__) . '../../../Controller/controllerList.php'));
                ?>
                <thead>
                    <tr>
                        <th>RUC</th>
                        <th>Razon Social</th>
                        <th>Tipo de Persona</th>
                        <th>Correo</th>
                        <th>Telefono</th>
                        <th>Celular</th>
                        <th>Edit</th>
                        
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($listClient as $listClients) {
                    ?>
                        <tr>
                            <td><?php echo $listClients["RUC_cliente"]; ?></td>
                            <td><?php echo $listClients["razonSocial"]; ?></td>
                            <td><?php echo $listClients["tipoPersona"]; ?></td>
                            <td><?php echo $listClients["correo"]; ?></td>
                            <td><?php echo $listClients["telefono"]; ?></td>
                            <td><?php echo $listClients["celular"]; ?></td>
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

            <form name="login-form" id="login-form" method="post" action="../../Controller/AddClients.php">
                <fieldset>
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

                        <div id="radios2" role="radiogroup" tabindex="-1" style="padding-left: 50px">
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
                                <input  style="width: 500px;" class="form-control" tabindex="2" accesskey="p" name="direccion" type="text" id="direccion" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="correo">Correo</label>
                            </div>
                            <div class="input">
                                <input  style="width: 500px;" class="form-control" tabindex="2" accesskey="p" name="correo" type="text" id="correo" />
                            </div>
                        </div>

                    </section>


                    <section class="sec_">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="telefono">Telefono</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" tabindex="2" accesskey="p" name="telefono" type="text" maxlength="7" id="telefono" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="celular">Celular</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" tabindex="2" accesskey="p" name="celular" type="text" maxlength="9" id="celular" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text" for="celular">Contacto</label>
                            </div>
                            <div class="input">
                                <input style="width: 250px;" class="form-control" tabindex="2" accesskey="p" name="contacto" type="text" maxlength="30" id="contacto" />
                            </div>
                        </div>
                    </section>

                    <button style="float: right;" type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

                </fieldset>
            </form>

        </div>

    </div>


    <!-- <div class="modal fade" id="asdasdasd" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
              </div>
            </div>
          </div>
        </div> -->

<!-- Modal -->
<div class="modal fade" id="asdasdasd" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
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






</body>

</html>