<?php
session_start();
require_once '../config/conexionLog.php';
if(isset($_POST['username']) && isset($_POST['password'])){
	$user = $_POST['username'];
	$pass = $_POST['password'];

	if($user == "" || $pass == ""){
?>
		<META http-equiv="Refresh" content = " 0.2; URL = index.php">

<?php
	}
	else{
		$sentencia = $conexion->prepare('select * from usuarios where usuario = ? and pass_usuario = ?;');
		$sentencia->execute([$user, $pass]);

		$datos = $sentencia->fetch(PDO::FETCH_OBJ);

		if ($datos === FALSE) {
		?>
			<script>alert("Autenticacion incorrecta. Vuelve e ingresar Datos")</script>;
			<META http-equiv='Refresh' content = '0.2; URL = ../index.php'>;
		<?php
		}
		elseif($sentencia->rowCount() == 1){

			$_SESSION['name'] = $datos->nom_usuario;
			$_SESSION['secuence_usu'] = $datos->secuence_usu;
			$_SESSION['last_name'] = $datos->ape_usuario;
			$_SESSION['sexo'] = $datos->sexo_usuario;
			$_SESSION['user'] = $datos->usuario;
			$_SESSION['id_rol'] = $datos->IDtipoUsu;
			//$_SESSION['tipo_rol'] = $datos->detalle_tipo_usuario;
			$_SESSION['autenticado'] = "si";

		
			//header('Location:Main.php');
			?>

			<META http-equiv="Refresh" content = "0.3 ; URL =../View/principal.php">
			<?php
			if($datos->estado_usuario == 0){
			?>
				<script>alert("User disable. Vuelve e ingresar Datos")</script>;
				<META http-equiv='Refresh' content = '0.2; URL = ../index.php'>;
			<?php
			}
		}



	}
}
?>