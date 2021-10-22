<?php
require_once ('../config/connection.php');
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
}


 ?>