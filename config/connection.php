<?php 

class Conexion  
{
    private $conexion;

    public function __construct(){
            $host = '127.0.0.1';    
            $db   = 'routforall';   
            $user = 'root';    
            $pass = '';
            $charset = 'utf8';
            $options = array(
                PDO::ATTR_EMULATE_PREPARES => FALSE,
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
            );
            $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        try {
        $this->conexion = new PDO($dsn,$user,$pass,$options);
        //$this->conexion = new PDO('mysql:host='.$host.';dbname='.$db.';charset="utf8"', $user, $pass, $options);
        //$cn = new PDO('mysql:host=127.0.0.1;dbname=routforall',$this->username,'');
       // $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //echo "conexion exitosa";
    }catch (PDOException $e) {
        echo "conexion fallida: " . $e->getMessage();
        exit();
    }
}
public function getConexion() {
    return $this->conexion;
}
}
?>