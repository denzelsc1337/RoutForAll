<?php
  
// Get the user id 
$numruc = $_REQUEST['numruc'];
  
// Database connection
$con = mysqli_connect("127.0.0.1", "root", "", "routforall");
  
if ($numruc !== "") {

    $query = mysqli_query($con, "SELECT razonSocial FROM clientes WHERE RUC_cliente='$numruc'");
  
    $row = mysqli_fetch_array($query);
  
    $razonSocial = $row["razonSocial"];
}
// Store it in a array
//$result = array("$first_name", "$last_name");
$result = array("$razonSocial");

// Send in JSON encoded form
$myJSON = json_encode($result);
echo $myJSON;
?>