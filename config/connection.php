<?php 

class Conexion  
{
    private $conexion;
    private $host;
    public $db;
    private $user;
    private $pass;
    private $charset;
    private $options;
    private $dsn;

    public function __construct(){
            $this->host = '127.0.0.1';    
            $this->db   = 'routforall';   
            $this->user = 'root';    
            $this->pass = '';
            $this->charset = 'utf8';
            $this->options = array(
                PDO::ATTR_EMULATE_PREPARES => FALSE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $this->dsn = "mysql:host=$this->host;dbname=$this->db;charset=$this->charset";
        try {
        $this->conexion = new PDO($this->dsn,$this->user,$this->pass,$this->options);
            //$this->conexion = new PDO('mysql:host='.$host.';dbname='.$db.';charset="utf8"', $user, $pass, $options);
            //$cn = new PDO('mysql:host=127.0.0.1;dbname=routforall',$this->username,'');
           // $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
        }catch (PDOException $e) {
            echo "conexion fallida: " . $e->getMessage();
            exit();
        }
}
public function getConexion() {
    //echo "conexion exitosa "."<br>";
    return $this->conexion;
}
}
?>