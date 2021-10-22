<?php
require_once ('../config/connection.php');
$listCar;
class Vehiculo
{
	private $db;
	private $dbname;

	private $conn;

	public function __construct()
	{
		$this->listCar = array();
		$conn = new Conexion();
		//$this->dbname = $this->conn->db; //nombre de la bd
		$this->db = $conn->getConexion();
	}

	function listarCarros(){
		try {
		$sql = "SELECT *  FROM vehiculos";
		$stmt = $this->db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			/*echo "Producto: " .$row->producto ."<br>";
			echo "Cantidad: " .$row->cantidad ."<br>";*/
			$this->listCar[] = $row;
		}
			return $this->listCar;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}


 ?>