<?php 
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<title>Agregar Clientes</title>
 </head>
 <body>
 	    <form name="login-form" id="login-form" method="post" action="../../Controller/AddClients.php">
        <fieldset>
            <legend>Guardar</legend>
            <dl>
                <dt><label title="codenvio">RUC</label></dt>
                <dd><input tabindex="1" accesskey="u" name="numruc" type="text" maxlength="30" id="numruc" /></dd>
            </dl>
            <dl>
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
            </dl>
            <dl>
                <dt><label title="razon">Razon Social</label></dt>
                <dd><input tabindex="2" accesskey="p" name="razon" type="text" maxlength="20" id="razon" /></dd>
            </dl>
            <dl>
                <dt><label title="text">Direccion</label></dt>
                <dd><input tabindex="2" accesskey="p" name="direccion"  type="text" maxlength="20" id="direccion" /></dd>
            </dl>
            <dl>
                <dt><label title="text">Correo</label></dt>
                <dd><input tabindex="2" accesskey="p" name="correo" type="text" maxlength="20" id="correo"/></dd>
            </dl>
            <dl>
                <dt><label title="text">Telefono</label></dt>
                <dd><input tabindex="2" accesskey="p" name="telefono" type="text" maxlength="20" id="telefono" /></dd>
            </dl>
            <dl>
                <dt><label title="text">Celular</label></dt>
                <dd><input tabindex="2" accesskey="p" name="celular" type="text" maxlength="20" id="celular" /></dd>
            </dl>
            <p>
                <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
            </p>
    </form>
 
 </body>
 </html>