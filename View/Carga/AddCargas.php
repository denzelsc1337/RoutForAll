<?php
?>
<!DOCTYPE html>
<html>

<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <meta charset="utf-8">
    <title>Agregar Cargas</title>

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
        <form name="login-form" id="login-form" method="post" action="../../Controller/AddCarga.php">
            <fieldset>


                <legend>Guardar</legend>

                <section class="sec_">
                    <div class="sec_1">
                        <div class="label">
                            <label title="codenvio">RUC cliente</label>
                        </div>
                        <div class="input">
                            <!--onkeyup="getDetail(this.value)"-->
                            <input class="ruc" autocomplete="off" tabindex="1" accesskey="u" name="numruc" type="text" id="numruc" maxlength="11" />
                        </div>
                    </div>

                    <div class="sec_1">
                        <div class="label">
                            <label title="razon">Razon Social</label>
                        </div>
                        <div class="input">
                            <input tabindex="2" accesskey="p" name="razon" disabled="true" type="text" maxlength="20" id="razon" />
                        </div>
                    </div>
                </section>

                <div style="display: flex; flex-wrap:wrap; width: 100%;">

                    <section class="cont_clnt">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Tipo de producto</label>
                            </div>
                            <div class="input">
                                <input tabindex="2" accesskey="p" name="tipoProd" id="tipoProd" type="text" maxlength="20" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Producto</label>
                            </div>
                            <div class="input">
                                <input tabindex="2" accesskey="p" name="prod" type="text" id="prod" maxlength="20" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Cantidad</label>
                            </div>
                            <div class="input">
                                <input tabindex="2" accesskey="p" name="cant" type="text" id="cant" maxlength="20" />
                            </div>
                        </div>

                    </section>

                    <section class="cont_clnt">
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Peso</label>
                            </div>
                            <div class="input">
                                <input tabindex="2" accesskey="p" name="peso" id="peso" type="text" maxlength="20" />
                            </div>
                        </div>
                        <div class="sec_1">
                            <div class="label">
                                <label title="text">Unidad Medida</label>
                            </div>
                            <div class="input">
                                <input tabindex="2" accesskey="p" name="unidadM" id="unidadM" type="text" maxlength="20" />
                            </div>
                        </div>

                        <div>
                            <div class="label" style="font-weight: 600; margin-bottom: 10px;">
                                <label>Direccion de Envio</label>
                            </div>
                            <div class="sec_1">
                                <div class="label">
                                    <label>Indique su direccion:</label>
                                </div>
                                <div class="input">
                                    <input tabindex="2" accesskey="p" name="direccionE" id="direccionE" type="text" maxlength="20" />
                                </div>
                            </div>
                        </div>

                    </section>
                </div>

                <p>
                    <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
                </p>
            </fieldset>
        </form>
    </section>

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
        $(".ruc").keyup("click blur keyup paste", function() {
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
                        console.log(result);
                        //document.getElementById("razon").value = result;
                        //document.getElementById("numruc").readOnly = true;
                        /*                    if (response==true) {
                                                var result = JSON.parse(response);
                                                console.log(result);
                                                document.getElementById("razon").value = result;
                                                document.getElementById("numruc").readOnly = true;
                                            }*/
                        var r = confirm("La razon social es: '" + result + "'?");
                        if (r == true) {
                            document.getElementById("razon").value = result;
                            document.getElementById("numruc").readOnly = true;
                        } else {
                            document.getElementById("numruc").readOnly = false;
                        }
                        return response;
                    }
                });
            }
        });
    </script>
</body>

</html>