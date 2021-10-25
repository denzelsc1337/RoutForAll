<?php 
require_once ('../config/connection.php');
class Cliente
{
	private $db;
	private $dbname;

	private $conn;
	
	public function __construct()
	{
		$this->listPedidos = array();
		$conn = new Conexion();
		//$this->dbname = $this->conn->db; //nombre de la bd
		$this->db = $conn->getConexion();
	}

	function agregarClientes($ruc,$tipoPersona,$razonSocial,$direccion,$correo,$telefono,$celular){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO clientes VALUES (:ruc,:tipoPersona, :razonSocial, :direccion,:correo,:telefono, :celular);";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':ruc', $ruc);
			$stmt->bindParam(':tipoPersona', $tipoPersona);
			$stmt->bindParam(':razonSocial', $razonSocial);
			$stmt->bindParam(':direccion', $direccion);
			$stmt->bindParam(':correo', $correo);
			$stmt->bindParam(':telefono', $telefono);
			$stmt->bindParam(':celular', $celular);

			$stmt->execute([':ruc' => $ruc, 
							':tipoPersona' => $tipoPersona,
							':razonSocial' => $razonSocial,
							':direccion' => $direccion,
							':correo' => $correo,
							':telefono' => $telefono,
							':celular' => $celular
							 ]);
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/Cliente/AddClientes.php">
<?php 
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
		//$cnx->cerrarConexion($cn);
	}
}


 ?>