<?php 
$username = "root";
//$password = "123";
try {
    $cn = new PDO('mysql:host=localhost;dbname=routforall',$username,'');

    $cn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "conexion exitosa";
} catch (PDOException $e) {
    echo "conexion fallida: " . $e->getMessage();
}

?>