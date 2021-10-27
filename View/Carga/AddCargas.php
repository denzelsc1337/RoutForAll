<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 	<meta charset="utf-8">
 	<title>Agregar Cargas</title>
 </head>
 <body>
 	    <form name="login-form" id="login-form" method="post" action="../../Controller/AddCarga.php">
        <fieldset>
            <legend>Guardar</legend>
            <dl>
                <dt><label title="codenvio">RUC cliente</label></dt>
                <dd>
                    <input class="ruc" autocomplete="off" tabindex="1"  accesskey="u"  name="numruc" type="text" id="numruc" onkeyup="getDetail(this.value)" maxlength="11" />
                </dd>
            </dl>
            <dl>
                <label title="razon">Razon Social</label>
                <input tabindex="2" accesskey="p" name="razon" disabled="true" type="text" maxlength="20" id="razon" />
            </dl>
        <fieldset style="width:45%">
            <dl>
                    <label title="text">Tipo de producto</label>
                    <input tabindex="2" accesskey="p" name="tipoProd" id="tipoProd" type="text" maxlength="20" /> 
                    <label title="text">Producto</label>
                    <input tabindex="2" accesskey="p" name="prod" type="text" id="prod" maxlength="20"  />
                    <label title="text">Cantidad</label>
                    <input tabindex="2" accesskey="p" name="cant" type="text" id="cant" maxlength="20"/>
            </dl>
        </fieldset>
        <br>
        <fieldset style="width:30%">
            <dl>
                <label title="text">Peso</label>
                <input tabindex="2" accesskey="p" name="peso" id="peso" type="text" maxlength="20" /> 
                <label title="text">Unidad Medida</label>
                <input tabindex="2" accesskey="p" name="unidadM" id="unidadM" type="text" maxlength="20" />
            </dl>
            <dt>
                <label>Direccion de Envio</label>
                    <dd>
                        <input tabindex="2" accesskey="p" name="direccionE" id="direccionE" type="text" maxlength="20"/>
                    </dd>
                </dt>
        </fieldset>
            <p>
                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
            </p>
    </form>
 <script type="text/javascript">
function getDetail(str){
    $(".ruc").keyup("click blur keyup paste",function(){
        if (this.value.length == this.maxLength) {
            var xmlhttp = new XMLHttpRequest();
            xmlhttp.onreadystatechange = function () {
                if (this.readyState == 4 && this.status == 200) {
                    var myObj = JSON.parse(this.response);
                    document.getElementById("razon").value = myObj[0];
                    document.getElementById("numruc").readOnly = true; 
                    //document.getElementById("numruc").value = myObj[1];
                }
            };
            xmlhttp.open("GET", "getData.php?numruc="+str,true);
            xmlhttp.send();

        }
    })
};
 </script>
 </body>
 </html>