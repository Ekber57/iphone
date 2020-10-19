<?php
function statusSil($id,$status_id) {
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
echo "Connected successfully";

$status = mysqli_query($conn,"select status FROM  istifadeciler where id=$id");
   $status = mysqli_fetch_row($status);
   $status = $status[0];
   echo $status;
   $data = array();
   
   $status = json_decode($status,true);
   $data["id"] = $status["id"];
   $data["photo"] = $status["photo"];
   $data["nik"] = $status["nik"];
   $data["link"] = $status["profil_linki"];
   $data["lastUpdated"] = time();
   $deleted_id = "";
   $status = explode("|",$status["status"]);
   foreach ($status as $index => $item) {
     $item = explode(",",$item);
  //   print_r($item);
     if($item[0] == $status_id) {
     echo "id tapildi i= ".$index;
     $deleted_id = $index;
    
     }
   }
   if("".$deleted_id != "") {
   unset($status[$deleted_id]);
   }
   if(count($status)>1) {
   $data["status"] = implode("|",$status);
   }
   else if(count($status) == 1){
   $data["status"] = implode(",",$status);
   }
   else {
   $data["status"] = "";
   }
   
   $data = json_encode($data);
   $update = mysqli_query($conn,"update istifadeciler set status='$data' where id='$id'");





}
   
$id = 1;
$status_id = "status_744623";
statusSil($id,$status_id);

?>