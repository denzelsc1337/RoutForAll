<?php 
//include ('../config/connection.php');
$listPedidos;
class User
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

	function agregarRutas($idenvio,$idvehiculo,$idconductor,$horaSalida,$horaLlegada){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO rutas (IDruta,idenvio, idvehiculo, idconductor, horaSalida,horaLlegada) VALUES (null,:idenvio,:idvehiculo, :idconductor, :horaSalida,:horaLlegada);";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':idenvio', $idenvio);
			$stmt->bindParam(':idvehiculo', $idvehiculo);
			$stmt->bindParam(':idconductor', $idconductor);
			$stmt->bindParam(':horaSalida', $horaSalida);
			$stmt->bindParam(':horaLlegada', $horaLlegada);

			$stmt->execute([':idenvio' => $idenvio, 
							':idvehiculo' => $idvehiculo,
							':idconductor' => $idconductor,
							':horaSalida' => $horaSalida,
							':horaLlegada' => $horaLlegada,
							 ]);
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/AddRoute.php">
<?php 
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
		//$cnx->cerrarConexion($cn);
	}

	function listarPedidos(){
		try {
		$sql = "SELECT *  FROM envios";
		$stmt = $this->db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			/*echo "Producto: " .$row->producto ."<br>";
			echo "Cantidad: " .$row->cantidad ."<br>";*/
			$this->listPedidos[] = $row;
		}
			return $this->listPedidos;	
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}


 ?>