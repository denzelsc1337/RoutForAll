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
                <label title="razon">capacidad de carga</label>
                    <div class="form-group">
                        <script>
                            function displayRadioValue(tipo) {
                                //document.getElementById('text').value = tipo; - mandar a un txt
                                console.log(tipo);
                            }
                        </script>

                        <div class="radio">
                            <label>
                                <input type="radio" id="capacidadCarga" name="capacidadCarga" value="500kg - 2,5T" onclick="displayRadioValue(this.value)" checked="checked" required>
                                <i class=" far fa-check-circle fa-fw"></i> &nbsp; Ligeros
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="capacidadCarga" name="capacidadCarga" value="2,5T - 3,5T"  onclick="displayRadioValue(this.value)" required>
                                <i class=" far fa-times-circle fa-fw"></i> &nbsp;  Livianos
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="capacidadCarga" name="capacidadCarga" value="3,5T - 4,5T"  onclick="displayRadioValue(this.value)" require>
                                <i class="far fa-times-cicle fa-fw" ></i>&nbsp; Semilivianos
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="capacidadCarga" name="capacidadCarga" value="4,5T - 5,5T"  onclick="displayRadioValue(this.value)" require>
                                <i class="far fa-times-cicle fa-fw" ></i>&nbsp; Medianos
                            </label>
                        </div>
                        <div class="radio">
                            <label>
                                <input type="radio" id="capacidadCarga" name="capacidadCarga" value="7,5T - 9T"  onclick="displayRadioValue(this.value)" require>
                                <i class="far fa-times-cicle fa-fw" ></i>&nbsp; Pesados
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
                            function getkilometraje(val) {
                                var txt = document.getElementById('KM').value=val; 
                                console.log(txt.value);
                            }
                            function getLargo(val) {
                                document.getElementById('largo').value=val; 
                            }
                            function getAncho(val) {
                                document.getElementById('ancho').value=val; 
                            }
                            function getAlto(val) {
                                document.getElementById('alto').value=val; 
                            }
                            function addGuion(txt) {
                                let ele = document.getElementById(txt.id);
                                ele = ele.value.split('-').join('');

                                let finalVal = ele.match(/.{1,3}/g).join('-');
                                document.getElementById(txt.id).value = finalVal;
                            }

                        </script>
                        <div class="input">
                            <input  type="range" list="tickmarks" min="0" max="100"  onchange="getkilometraje(this.value+' KM');" />
                            <input type="text" placeholder="deslice la barra" name="KM" id="KM">
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Largo</label>
                        </div>
                        <div class="input">
                            <input type="range" list="tickmarks" min="10" max="100"  onchange="getLargo(this.value+' M');"  />
                            <input type="text" placeholder="deslice la barra" name="largo" id="largo">
                        </div>
                    </div>
                </section>
                <section  class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Ancho</label>
                        </div>
                        <div class="input">
                            <input type="range" list="tickmarks" min="10" max="100"  onchange="getAncho(this.value+' M');"  />
                            <br>
                            <input type="text" placeholder="deslice la barra" name="ancho" id="ancho">
                        </div>
                    </div>
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Alto</label>
                        </div>
                        <div class="input">
                            <input type="range" list="tickmarks" min="10" max="100"  onchange="getAlto(this.value+' M');"  />
                            <br>
                            <input type="text" placeholder="deslice la barra" name="alto" id="alto">
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="text">Año</label>
                        </div>
                        <div class="input">
                            <input name="anio" type="date" id="anio" />
                        </div>
                    </div>
                </section>
                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                                <label title="text">Placa Vehicular</label>
                        </div>
                        <div class="input">
                            <input name="placaVehicular" id="placaVehicular" type="text" maxlength="7" style="text-transform:uppercase;"  onkeyup="addGuion(this)"  />
                        </div>
                    </div>
                </section>
             

                <button type="submit" class="btn btn-success"><i class="far fa-save"></i>GUARDAR</button>

            </fieldset>
    </section>

    </form>

</body>

</html>