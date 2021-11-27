<?php
require_once ((dirname(__FILE__) .'../../config/connection.php'));
$listDriver;
class Conductor
{
	private $db;
	private $dbname;

	private $conn;

	public function __construct()
	{
		$this->listDriver = array();
		$conn = new Conexion();
		//$this->dbname = $this->conn->db; //nombre de la bd
		$this->db = $conn->getConexion();
	}

	function listarConductores(){
		try {
		$sql = "SELECT *  FROM conductor";
		$stmt = $this->db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			/*echo "Producto: " .$row->producto ."<br>";
			echo "Cantidad: " .$row->cantidad ."<br>";*/
			$this->listDriver[] = $row;
		}
			return $this->listDriver;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	function agregarConductor($tipoDoc,$numDoc,$nombres,$apellidoP,$apellidoM,$fechaNacimiento,$edad,$celular,$correo,$tipoLic, $estadoLic){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO conductor VALUES (null,:tipoDoc,:numDoc, :nombres, :apellidoP,:apellidoM,:fechaNacimiento, :edad, :celular,:correo,:tipoLic, :estadoLic)";
			$stmt = $this->db->prepare($sql);

			$stmt->bindParam(':tipoDoc', $tipoDoc);
			$stmt->bindParam(':numDoc', $numDoc);
			$stmt->bindParam(':nombres', $nombres);
			$stmt->bindParam(':apellidoP', $apellidoP);
			$stmt->bindParam(':apellidoM', $apellidoM);
			$stmt->bindParam(':fechaNacimiento', $fechaNacimiento);
			$stmt->bindParam(':edad', $edad);
			$stmt->bindParam(':celular', $celular);
			$stmt->bindParam(':correo', $correo);
			$stmt->bindParam(':tipoLic', $tipoLic);
			$stmt->bindParam(':estadoLic', $estadoLic);

			$stmt->execute(array(':tipoDoc' => $tipoDoc,
							':numDoc' => $numDoc,
							':nombres' => $nombres,
							':apellidoP' => $apellidoP,
							':apellidoM' => $apellidoM,
							':fechaNacimiento' => $fechaNacimiento,
							':edad' => $edad,
							':celular' => $celular,
							':correo' => $correo,
							':tipoLic' => $tipoLic,
							':estadoLic' => $estadoLic));
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/Conductor/AddConductor.php">
<?php
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
		//$cnx->cerrarConexion($cn);
	}



	function updateConductor($data,$secuence){
		try {
			$query = "UPDATE `conductor` 
				    SET `numDoc`=:numDoc, `nombres`=:nombres,`apellidoP`=:apellidoP,`apellidoM`=:apellidoM,`correo`=:correo,`tipoLicencia`=:tipoLicencia,`estadoLicencia`=:estadoLicencia
				    WHERE `IDconduct`= :IDconduct";
			$stmt = $this->db->prepare($query);

			$stmt->bindParam(':numDoc', $data[1]);
			$stmt->bindParam(':nombres', $data[2]);
			$stmt->bindParam(':apellidoP', $data[3]);
			$stmt->bindParam(':apellidoM', $data[4]);
			$stmt->bindParam(':correo', $data[5]);
			$stmt->bindParam(':tipoLicencia', $data[6]);
			$stmt->bindParam(':estadoLicencia', $data[7]);
			$stmt->bindParam(':IDconduct', $secuence);

			$stmt->execute(array(':numDoc'=> $data[1],
								':nombres'=> $data[2],
								':apellidoP'=> $data[3],
								':apellidoM'=> $data[4],
								':correo'=> $data[5],
								':tipoLicencia'=> $data[6],
								':estadoLicencia'=> $data[7],
								':IDconduct'=> $secuence)
								);
		echo '<script> alert("Conductor Actualizado");</script>';
?>
	<META http-equiv="Refresh" content = "0.3 ; URL =../View/Conductor/AddConductor.php">
<?php
			
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
	}
}


 ?>