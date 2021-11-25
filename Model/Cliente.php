<?php 
require_once ((dirname(__FILE__) .'../../config/connection.php'));

class Cliente
{
	private $db;
	private $dbname;

	private $conn;
	
	public function __construct()
	{
		$this->listClient = array();
		$conn = new Conexion();
		//$this->dbname = $this->conn->db; //nombre de la bd
		$this->db = $conn->getConexion();
	}

	function listarClientes(){
		try {
		$sql = "SELECT *  FROM clientes";
		$stmt = $this->db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			/*echo "Producto: " .$row->producto ."<br>";
			echo "Cantidad: " .$row->cantidad ."<br>";*/
			$this->listClient[] = $row;
		}
			return $this->listClient;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	function agregarClientes($ruc,$razonSocial,$tipoPersona,$direccion,$correo,$telefono,$celular,$contactoPersona){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO clientes VALUES (null,:ruc,:razonSocial, :tipoPersona, :direccion,:correo,:telefono, :celular, :contactoPersona)";
			$stmt = $this->db->prepare($sql);
			
			$stmt->bindParam(':ruc', $ruc);
			$stmt->bindParam(':razonSocial', $razonSocial);
			$stmt->bindParam(':tipoPersona', $tipoPersona);
			$stmt->bindParam(':direccion', $direccion);
			$stmt->bindParam(':correo', $correo);
			$stmt->bindParam(':telefono', $telefono);
			$stmt->bindParam(':celular', $celular);
			$stmt->bindParam(':contactoPersona', $contactoPersona);

			$stmt->execute(array(':ruc' => $ruc, 
							':razonSocial' => $razonSocial,
							':tipoPersona' => $tipoPersona,
							':direccion' => $direccion,
							':correo' => $correo,
							':telefono' => $telefono,
							':celular' => $celular,
							':contactoPersona' => $contactoPersona)
							);
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/Cliente/AddClientes.php">
<?php 
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
		//$cnx->cerrarConexion($cn);
	}
	function updateCliente($data,$secuence){
		try {
			$query = "UPDATE `clientes` 
				    SET `RUC_cliente`= :ruc,`razonSocial`= :razonSocial,`tipoPersona`=:tipoPersona,
				    `correo`=:correo,`telefono`=:telefono,`celular`=:celular
				    WHERE `IDclient`= :idclient";
			$stmt = $this->db->prepare($query);

			$stmt->bindParam(':ruc', $data[1]);
			$stmt->bindParam(':razonSocial', $data[2]);
			$stmt->bindParam(':tipoPersona', $data[3]);
			$stmt->bindParam(':correo', $data[4]);
			$stmt->bindParam(':telefono', $data[5]);
			$stmt->bindParam(':celular', $data[6]);
			$stmt->bindParam(':idclient', $secuence);

			$stmt->execute(array(':ruc' => $data[1], 
							':razonSocial' => $data[2],
							':tipoPersona' => $data[3],
							':correo' => $data[4],
							':telefono' => $data[5],
							':celular' => $data[6],
							':idclient' => $secuence)
							);
		echo '<script> alert("Cliente Actualizado");</script>';
?>
	<META http-equiv="Refresh" content = "0.3 ; URL =../View/Cliente/AddClientes.php">
<?php
			
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
	}

}


 ?>