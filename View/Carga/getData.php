<?php
  
// Get the user id 
$numruc = $_GET['numruc'];
  
// Database connection
$con = mysqli_connect("127.0.0.1", "root", "", "routforall");
  
if ($numruc !== "") {

    $query = mysqli_query($con, "SELECT razonSocial, IDclient FROM clientes WHERE RUC_cliente='$numruc'");
  
    $row = mysqli_fetch_array($query);
  
    if(isset($row['razonSocial'])){
         $razonSocial = $row["razonSocial"];
         $id = $row["IDclient"];
    }

    if ($row <=0) {
        echo '<script> alert("Cliente no encontrado");</script>';
    }
}
// Store it in a array
//$result = array("$first_name", "$last_name");

$result = array("razon"=>$razonSocial,"id_client"=>$id);

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>