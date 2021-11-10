<?php 
require_once ((dirname(__FILE__) .'../../config/connection.php'));
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
			$sql = "INSERT INTO clientes VALUES (:ruc,:razonSocial, :tipoPersona, :direccion,:correo,:telefono, :celular, :contactoPersona)";
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
}


 ?>