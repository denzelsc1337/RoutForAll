<?php
require_once ((dirname(__FILE__) .'../../config/connection.php'));
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

	function agregarCamion($tipoVehiculo,$marcaVehiculo,$anio,$placaVehicular,$km,$p_neto,$c_util,$p_bruto, $largo, $ancho, $alto, $estado){
		/*		include_once '../config/connection.php';
				$cnx = new Conexion();
				$cn = $cnx->abrirConexion();*/
				try {
					$sql = "INSERT INTO vehiculos (`IDvehiculo`, `tipoVehiculo`, `marcaVehiculo`, `anio`, `placaVehicular`, `kilometraje`,
						`pesoNeto`, `cargaUtil`, `pesoBruto`, `largo`, `ancho`, `alto`, `estado`)
											    VALUES (null,:tipoVehiculo,:marcaVehiculo, :anio, :placaVehicular,:km,:p_neto,:c_util,
											    		:p_bruto,:largo,:ancho,:alto,:estado);";

					$stmt = $this->db->prepare($sql);

					$stmt->bindParam(':tipoVehiculo', $tipoVehiculo);
					$stmt->bindParam(':marcaVehiculo', $marcaVehiculo);
					$stmt->bindParam(':anio', $anio);
					$stmt->bindParam(':placaVehicular', $placaVehicular);
					$stmt->bindParam(':km', $km);
					$stmt->bindParam(':p_neto', $p_neto);
					$stmt->bindParam(':c_util',$c_util);
					$stmt->bindParam(':p_bruto',$p_bruto);
					$stmt->bindParam(':largo',$largo);
					$stmt->bindParam(':ancho',$ancho);
					$stmt->bindParam(':alto',$alto);
					$stmt->bindParam(':estado',$estado);
		
					$stmt->execute(array(':tipoVehiculo' => $tipoVehiculo, 
									':marcaVehiculo' => $marcaVehiculo,
									':anio' => $anio,
									':placaVehicular' => $placaVehicular,
									':km' => $km,
									':p_neto' => $p_neto,
									':c_util'=>$c_util,
									':p_bruto'=>$p_bruto,
									':largo'=> $largo,
									':ancho'=>$ancho,
									':alto'=>$alto,
									':estado'=>$estado)
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




			function updateVehiculo($data,$secuence){
				try {
					$query = "UPDATE `vehiculos` 
							SET `tipoVehiculo`=:tipoVehiculo, `marcaVehiculo`=:marcaVehiculo,`placaVehicular`=:placaVehicular,`cargaUtil`=:capacidadCarga,`estado`=:estado
							WHERE `IDvehiculo`= :IDvehiculo";
					$stmt = $this->db->prepare($query);
		
					$stmt->bindParam(':tipoVehiculo', $data[1]);
					$stmt->bindParam(':marcaVehiculo', $data[2]);
					$stmt->bindParam(':placaVehicular', $data[3]);
					$stmt->bindParam(':capacidadCarga', $data[4]);
					$stmt->bindParam(':estado', $data[5]);
					$stmt->bindParam(':IDvehiculo', $secuence);
		
					$stmt->execute(array(':tipoVehiculo'=> $data[1],
										':marcaVehiculo'=> $data[2],
										':placaVehicular'=> $data[3],
										':capacidadCarga'=> $data[4],
										':estado'=> $data[5],
										':IDvehiculo'=> $secuence)
										);
				echo '<script> alert("Vehiculo Actualizado");</script>';
		?>
			<META http-equiv="Refresh" content = "0.3 ; URL =../View/Vehiculo/AddVehiculos.php">
		<?php
					
				} catch (PDOException $e) {
					die($e->getMessage());
					return "error al insertar data";
				}
			}



}


 ?>