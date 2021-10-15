<?php 
include ('../config/connection.php');
class User
{
	private $db;
	private $dbname;
	
	private $conn;
	
	public function __construct()
	{
		$conn = new Conexion();
		$this->dbname = $this->conn->db;
		$this->db = $conn->getConexion();
	}

	function agregarRutas($distrito,$direccion,$usuario){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO rutas (distrito, direccion, usuario) VALUES (:distrito, :direccion, :usuario);";
			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':distrito', $distrito);
			$stmt->bindParam(':direccion', $direccion);
			$stmt->bindParam(':usuario', $usuario);
			$stmt->execute([':distrito' => $distrito, ':direccion' => $direccion,':usuario' => $usuario ]);
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error";
		}
		//$cnx->cerrarConexion($cn);
	}
}


 ?>