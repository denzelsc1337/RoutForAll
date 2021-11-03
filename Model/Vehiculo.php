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

	function agregarCamion($tipoVehiculo,$marcaVehiculo,$anio,$placaVehicular,$kilometraje,$capacidadCarga, $largo, $ancho, $alto){
		/*		include_once '../config/connection.php';
				$cnx = new Conexion();
				$cn = $cnx->abrirConexion();*/
				try {
					$sql = "INSERT INTO vehiculos (IDvehiculo,tipoVehiculo, marcaVehiculo, anio, placaVehicular,kilometraje,capacidadCarga,largo,ancho,alto) 
											    VALUES (null,:tipoVehiculo,:marcaVehiculo, :anio, :placaVehicular,:kilometraje,:capacidadCarga,:largo,:ancho,:alto);";
					$stmt = $this->db->prepare($sql);
					$stmt->bindParam(':tipoVehiculo', $tipoVehiculo);
					$stmt->bindParam(':marcaVehiculo', $marcaVehiculo);
					$stmt->bindParam(':anio', $anio);
					$stmt->bindParam(':placaVehicular', $placaVehicular);
					$stmt->bindParam(':kilometraje', $kilometraje);
					$stmt->bindParam(':capacidadCarga',$capacidadCarga);
					$stmt->bindParam(':largo',$largo);
					$stmt->bindParam(':ancho',$ancho);
					$stmt->bindParam(':alto',$alto);
		
					$stmt->execute(array(':tipoVehiculo' => $tipoVehiculo, 
									':marcaVehiculo' => $marcaVehiculo,
									':anio' => $anio,
									':placaVehicular' => $placaVehicular,
									':kilometraje' => $kilometraje,
									':capacidadCarga'=>$capacidadCarga,
									':largo'=> $largo,
									':ancho'=>$ancho,
									':alto'=>$alto)
									);
?>
				<META http-equiv="Refresh" content = "0.3 ; URL =../View/Vehiculo/AddVehiculos.php">
<?php 
				} catch (PDOException $e) {
					die($e->getMessage());
					return "error al insertar data";
				}
				//$cnx->cerrarConexion($cn);
			}
}


 ?>