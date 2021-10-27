<?php 
require_once ('../config/connection.php');
class Carga
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

	function agregarCargas($ruc,$tipoProd,$producto,$cantidad,$peso,$unidadMedida,$direccionEnvio){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO cargas VALUES (null,:ruc,:tipoProd, :producto, :cantidad,:peso,:unidadMedida, :direccionEnvio);";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':ruc', $ruc);
			$stmt->bindParam(':tipoProd', $tipoProd);
			$stmt->bindParam(':producto', $producto);
			$stmt->bindParam(':cantidad', $cantidad);
			$stmt->bindParam(':peso', $peso);
			$stmt->bindParam(':unidadMedida', $unidadMedida);
			$stmt->bindParam(':direccionEnvio', $direccionEnvio);

			$stmt->execute([':ruc' => $ruc, 
							':tipoProd' => $tipoProd,
							':producto' => $producto,
							':cantidad' => $cantidad,
							':peso' => $peso,
							':unidadMedida' => $unidadMedida,
							':direccionEnvio' => $direccionEnvio
							 ]);
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/Carga/AddCargas.php">
<?php 
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
		//$cnx->cerrarConexion($cn);
	}
}


 ?>