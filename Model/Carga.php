<?php 
//require_once ('../config/connection.php');
require_once ((dirname(__FILE__) .'../../config/connection.php'));
class Carga
{
	private $db;
	private $dbname;

	private $conn;
	
	public function __construct()
	{
		$this->listCarga = array();
		$conn = new Conexion();
		//$this->dbname = $this->conn->db; //nombre de la bd
		$this->db = $conn->getConexion();
	}
	function listarCarga(){
		try {
		$sql = "SELECT *  FROM cargas";
		$stmt = $this->db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			/*echo "Producto: " .$row->producto ."<br>";
			echo "Cantidad: " .$row->cantidad ."<br>";*/
			$this->listCarga[] = $row;
		}
			return $this->listCarga;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	function agregarCargas($idclient,$ruc,$descrip,$unidadMedida,$pesoCarga,$largoCarga,$anchoCarga,$altoCarga,$direccionEnvio,$direccionEntrega){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO cargas VALUES (null,:idclient,:ruc,:descrip, :unidadMedida, :pesoCarga,:largoCarga,:anchoCarga, :altoCarga,:direccionEnvio,:direccionEntrega,now(),'Pendiente');";

			$stmt = $this->db->prepare($sql);
			$stmt->bindParam(':idclient',$idclient);
			$stmt->bindParam(':ruc', $ruc);
			$stmt->bindParam(':descrip', $descrip);
			$stmt->bindParam(':unidadMedida', $unidadMedida);
			$stmt->bindParam(':pesoCarga', $pesoCarga);
			$stmt->bindParam(':largoCarga', $largoCarga);
			$stmt->bindParam(':anchoCarga', $anchoCarga);
			$stmt->bindParam(':altoCarga', $altoCarga);
			$stmt->bindParam(':direccionEnvio', $direccionEnvio);
			$stmt->bindParam(':direccionEntrega', $direccionEntrega);
			
			//$stmt->bindParam(':estado', $estado);

			$stmt->execute(array('idclient'=>$idclient,
							':ruc' => $ruc, 
							':descrip' => $descrip,
							':unidadMedida' => $unidadMedida,
							':pesoCarga' => $pesoCarga,
							':largoCarga' => $largoCarga,
							':anchoCarga' => $anchoCarga,
							':altoCarga' => $altoCarga,
							':direccionEnvio' => $direccionEnvio,
							':direccionEntrega' => $direccionEntrega
							));
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/Carga/AddCargas.php">
<?php 
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
		//$cnx->cerrarConexion($cn);
	}



	function updateCarga($data,$secuence){
		try {
			$query = "UPDATE `cargas` 
				    SET `rucClient`=:ruc, `descripcionCarga`=:descrip,`pesoCarga`=:pesoCarga,`direccionEnvio`=:direccionEnvio,`fechaRegistro`=:fechaRegistro,`estado`=:estado
				    WHERE `IDcargas`= :IDcargas";
			$stmt = $this->db->prepare($query);

			$stmt->bindParam(':ruc', $data[1]);
			$stmt->bindParam(':descrip', $data[2]);
			$stmt->bindParam(':pesoCarga', $data[3]);
			$stmt->bindParam(':direccionEnvio', $data[4]);
			$stmt->bindParam(':fechaRegistro', $data[5]);
			$stmt->bindParam(':estado', $data[6]);
			$stmt->bindParam(':IDcargas', $secuence);

			$stmt->execute(array(':ruc'=> $data[1],
								':descrip'=> $data[2],
								':pesoCarga'=> $data[3],
								':direccionEnvio'=> $data[4],
								':fechaRegistro'=> $data[5],
								':estado'=> $data[6],
								':IDcargas'=> $secuence)
								);
		echo '<script> alert("Carga Actualizada");</script>';
?>
	<META http-equiv="Refresh" content = "0.3 ; URL =../View/Carga/AddCargas.php">
<?php
			
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar data";
		}
	}
}


 ?>