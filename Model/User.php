<?php 
require_once ((dirname(__FILE__) .'../../config/connection.php' ));
$listPedidos;
class User
{
	private $db;
	private $dbname;

	private $conn;
	
	public function __construct()
	{
		$this->listUser = array();
		$this->listPedidos = array();
		$this->selectorUsuario= array();
		$conn = new Conexion();
		//$this->dbname = $this->conn->db; //nombre de la bd
		$this->db = $conn->getConexion();
	}

	public function selectorUsuario(){
		try {
			$sql = 'select * from tipo_usuario';

			$stmt = $this->db->prepare($sql);
			$stmt->setFetchMode(PDO::FETCH_ASSOC);
			$stmt->execute();
			while ($row = $stmt->fetch()) {
				$this->selectorUsuario[] = $row;
			}
			return $this->selectorUsuario;
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}

	function agregarUsuarios($data){
		try {
		$sql = "INSERT INTO usuarios VALUES (null,:id_usuario,:nom_usuario,:ape_usuario, :IDtipoUsu, :usuario,:pass_usuario,:mail_usuario, :tlf_usuario,1,:sexo_usuario);";

		$stmt = $this->db->prepare($sql);

		$stmt->bindParam(':id_usuario', $data[1]);
		$stmt->bindParam(':nom_usuario', $data[2]);
		$stmt->bindParam(':ape_usuario', $data[3]);
		$stmt->bindParam(':IDtipoUsu',$data[4]);
		$stmt->bindParam(':usuario', $data[5]);
		$stmt->bindParam(':pass_usuario', $data[6]);
		$stmt->bindParam(':mail_usuario', $data[7]);
		$stmt->bindParam(':tlf_usuario', $data[8]);
		$stmt->bindParam(':sexo_usuario', $data[10]);

		$stmt->execute(array(':id_usuario' => $data[1], 
			':nom_usuario' => $data[2],
			':ape_usuario' => $data[3],
			':IDtipoUsu' => $data[4],
			':usuario' => $data[5],
			':pass_usuario' => $data[6],
			':mail_usuario' => $data[7],
			':tlf_usuario'=> $data[8],
			':sexo_usuario'=> $data[10]));
?>
		<META http-equiv="Refresh" content = "0.3 ; URL =../View/Usuario/AddUsuario.php">
<?php 
		} catch (PDOException $e) {
			die($e->getMessage());
			return "error al insertar usuario";
		}

	}

	function agregarRutas($idenvio,$idvehiculo,$idconductor,$fSalida,$fLlegada,$H_Salida,$H_Llegada,$kmInicial,$kmSalida,
						  $tiempoEsti,$dirEntrega,$urldir){
/*		include_once '../config/connection.php';
		$cnx = new Conexion();
		$cn = $cnx->abrirConexion();*/
		try {
			$sql = "INSERT INTO rutas (IDruta,idenvio, idvehiculo, idconductor, fechaSalida,fechaLlegada, horaSalida,horaLlegada, fechaRegistro, kilometrajeInicial,kilometrajeSalida,tiempoEstimado,direccionEntrega,urldir)
			VALUES (null,:idenvio,:idvehiculo, :idconductor,:fSalida,:fLlegada,:H_Salida,:H_Llegada,now(),
					:kmInicial,:kmSalida,:tiempoEsti,:dirEntrega,:urldir);";

			$stmt = $this->db->prepare($sql);

			$stmt->bindParam(':idenvio', $idenvio);
			$stmt->bindParam(':idvehiculo', $idvehiculo);
			$stmt->bindParam(':idconductor', $idconductor);
			$stmt->bindParam(':fSalida', $fSalida);
			$stmt->bindParam(':fLlegada', $fLlegada);
			$stmt->bindParam(':H_Salida', $H_Salida);
			$stmt->bindParam(':H_Llegada', $H_Llegada);
			$stmt->bindParam(':kmInicial', $kmInicial);
			$stmt->bindParam(':kmSalida', $kmSalida);
			$stmt->bindParam(':tiempoEsti', $tiempoEsti);
			$stmt->bindParam(':dirEntrega', $dirEntrega);
			$stmt->bindParam(':urldir', $urldir);

			$stmt->execute(array(':idenvio' => $idenvio, 
							':idvehiculo' => $idvehiculo,
							':idconductor' => $idconductor,
							':fSalida' => $fSalida,
							':fLlegada' => $fLlegada,
							':H_Salida' => $H_Salida,
							':H_Llegada' => $H_Llegada,
							':kmInicial' => $kmInicial,
							':kmSalida' => $kmSalida,
							':tiempoEsti' => $tiempoEsti,
							':dirEntrega' => $dirEntrega,
							':urldir' => $urldir,));
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
		$sql = "SELECT *  FROM cargas";
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

	function listarUsuarios(){
		try {
		$sql = "SELECT secuence_usu, id_usuario, nom_usuario, ape_usuario,mail_usuario, usuario, UPPER(tusu.detalle_tipo_usuario) AS tipo_user
				from usuarios usu
				INNER JOIN tipo_usuario tusu
				ON usu.IDtipoUSU = tusu.id_tipo_usuario";

		$stmt = $this->db->prepare($sql);
		$stmt->setFetchMode(PDO::FETCH_ASSOC);
		$stmt->execute();

		while ($row = $stmt->fetch()) {
			/*echo "Producto: " .$row->producto ."<br>";
			echo "Cantidad: " .$row->cantidad ."<br>";*/
			$this->listUser[] = $row;
		}
			return $this->listUser;	
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}


 ?>