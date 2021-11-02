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
<<<<<<< HEAD
    <section class="sec_container">
        <form name="login-form" id="login-form" method="post" action="../../Controller/AddVehicles.php">


            <fieldset>
                <legend>Guardar</legend>
                <section class="sec_">
                <label title="razon">Tipo De Vehiculo</label>
                    <div class="form-group">
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipoVehiculo" value="Vann" checked="checked" required>
                                <i class=" far fa-check-circle fa-fw"></i> &nbsp; Vann
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" name="tipoVehiculo" value="camion" required>
                                <i class=" far fa-times-circle fa-fw"></i> &nbsp; camion
                            </label>
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <div class="sec_1">

                        <div class="label">
                            <label title="text">Marca Vehiculo</label>
                        </div>
                        <div class="input">
                            <input  name="marcaVehiculo" type="text" maxlength="20" id="marcaVehiculo" />
                            
                        </div>
                    </div>

                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Kilometraje</label>
                        </div>
                        <script>
                            function updateTextInput(val) {
                                document.getElementById('textInput').value=val; 
                            }
                        </script>
                        <div class="input">
                            <input  name="Kilometraje" id="Kilometraje" type="range" list="tickmarks" min="0" max="100"  onchange="updateTextInput(this.value+' KM');" />
                            <input type="text" id="textInput" value="">
                        </div>
                    </div>

                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Capacidad de carga</label>
                        </div>
                        <div class="input">
                            <input  name="capacidadCarga" id="capacidadCarga" type="range"  />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Largo</label>
                        </div>
                        <div class="input">
                            <input  name="capacidadCarga" id="largo" type="range"  />
                        </div>
                    </div>
                </section>
                <section  class="sec_">
                <div class="sec_1">
                        <div class="label">
                            <label title="text">Ancho</label>
                        </div>
                        <div class="input">
                            <input  name="capacidadCarga" id="ancho" type="range"  />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Alto</label>
                        </div>
                        <div class="input">
                            <input  name="capacidadCarga" id="alto" type="range"  />
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Año</label>
                        </div>
                        <div class="input">
                            <input name="año" type="date" id="año" />
                        </div>
                        <div class="label">
                            <label title="text">Placa Vehicular</label>
                        </div>
                        <div class="input">
                            <input name="placaVehicular" id="placaVehicular" type="text"  />
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Kilometraje</label>
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
    <section class="sec_container">
    </section>
</body>
