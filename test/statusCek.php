<?php
function statusCek($data) {
$servername = "localhost";
$username = "nurlan_test";
$password = "12345";
$db = "nurlan_test";
// Create connection
$conn = mysqli_connect($servername, $username, $password,$db);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//echo "Connected successfully";
$data = mysqli_query($conn,"select status from istifadeciler");

return $data;


}
//statusCek();
?>