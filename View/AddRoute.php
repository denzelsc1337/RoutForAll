<?php
include_once('../config/connection.php');
$cnx = new Conexion();
$cadena = $cnx->getConexion();
echo "cheking for bd: " . $cnx->db;
?>
<!DOCTYPE html>
<html>

<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
  <title>Testeo</title>
</head>
<!-- <body>
    <form method="POST" action="../Controller/AddRoutes.php">
        <label>Distrito</label>
        <input type="text" name="distrito">
        <label>direccion</label>
        <input type="text" name="direccion">
        <label>usuario</label>
        <input type="text" name="usuario">
        <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
    </form>
</body>-->

<body bgcolor="#999999">
  <form name="login-form" id="login-form" method="post" action="../Controller/AddRoutes.php">
    <fieldset>
      <legend>Guardar ruta</legend>
      <dl>
        <dt><label title="codenvio">CodEnvio</label></dt>
        <dd><input tabindex="1" accesskey="u" name="codenvio" type="text" maxlength="30" id="codenvio" /></dd>
    </dl>
    <dl>
        <dt><label title="Matricula">Matricula Coche </label></dt>
        <dd><input tabindex="2" accesskey="p" name="idvehiculo" type="text" maxlength="20" id="idvehiculo" /></dd>
    </dl>
    <dl>
        <dt><label title="Conductor">Conductor ID </label></dt>
        <dd><input tabindex="2" accesskey="p" name="idconductor" type="text" maxlength="20" id="idconductor" /></dd>
    </dl>
    <dl>
        <dt><label title="text">Hora Salida </label></dt>
        <dd><input tabindex="2" accesskey="p" name="horaSalida" step="2" type="time" maxlength="20" id="horaSalida" /></dd>
    </dl>
    <dl>
        <dt><label title="text">Hora llegada </label></dt>
        <dd><input tabindex="2" accesskey="p" name="horaLlegada" step="2" type="time" maxlength="20" id="horaLlegada" /></dd>
    </dl>
    <p>
          <button type="submit" class="btn btn-raised btn-info btn-sm"><i class="far fa-save"></i> &nbsp; GUARDAR</button>
    </p>
    <strong>tabla de envios aqui</strong>
    <table>
        <?php 
        require_once('../Controller/controllerList.php');
         ?>
        <thead>
            <tr>
                <th>Producto</th>
                <th>Cantidad</th>
            </tr>
        </thead>
        <tbody>
            <?php 
            foreach ($listPedido as $listaPedidos) {
             ?>
             <tr>
                 <td><?php echo $listaPedidos["producto"]; ?></td>
                 <td><?php echo $listaPedidos["cantidad"]; ?></td>
             </tr>
        </tbody>
    <?php } ?>
    </table>
    
</fieldset>
</form>
<hr>
</body>

</html>