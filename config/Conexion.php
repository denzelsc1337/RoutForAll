<?php

Class Oconexion{
	private $usuario;
	private $clave;	
	private $server;
	private $nombreBD;

	function __construct(){
		$this->usuario = "root";
		$this->clave ="";
		$this->server ="localhost";
		$this->nombreBD = "routforall";
	}

	function abrirConexion(){
		$cadena = mysqli_connect($this->server, $this->usuario, $this->clave,$this->nombreBD);

		if($cadena){
			return $cadena;

		}else{
			return mysqli_errno($cadena);
		}
	}

	function cerrarConexion($cadena){
		mysqli_close($cadena);
		$cadena=null;
	}
}

?>