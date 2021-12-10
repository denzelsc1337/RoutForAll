

<?php
	require_once('../../config/security.php');
    $hide = "";
    if ($_SESSION['id_rol'] == '2') {
        $hide = "style='display:none;'";
    } 
?>
<a class="a_cont" href="../Cliente/AddClientes.php">Clientes</a>
<a class="a_cont" href="../Carga/AddCargas.php">Cargas</a>
<a class="a_cont" href="../Vehiculo/AddVehiculos.php">Vehiculo</a>
<a class="a_cont" href="../Conductor/AddConductor.php">Conductor</a>
<a  <?php echo $hide; ?> class="a_cont" href="../Usuario/AddUsuario.php">Usuarios</a>
 <a href="../../config/logout.php" class="Blogger">Cerrar Sesión <i class="fa fa-power-off"></i></a>
        