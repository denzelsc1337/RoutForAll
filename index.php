<?php 
//include_once('config/Connection.php');
include_once 'config/connection.php';
echo "<br>";
echo $_SERVER['HTTP_USER_AGENT'];
echo "<br>";
echo $_SERVER['SCRIPT_NAME'];
echo "<br>";
echo "testing";

?>
<!DOCTYPE html>
<html>
 <head>
     <meta charset="utf-8">
     <title>Test</title>
 </head>
 <body>
    <div>
        <a href="#">Home</a>
        <a href="#">Test</a>
        <a href="View/AddRoute.php">Routes</a>
        <a href="#">Unnamed</a>
        <a></a> 
    </div>
    <div id="googleMap" style="height:100%;"></div>
 </body>
</html>
 <script>
function theMap() {
    var mapProp= {
      center:new google.maps.LatLng(-12.1457436,-76.9870691),
      zoom:15,
    };
    var map = new google.maps.Map(document.getElementById("googleMap"),mapProp);
}
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBbFjupaAAf9ne0JlXq-B48RHwppD7LDDA&callback=theMap"></script>

