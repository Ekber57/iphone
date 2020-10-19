<?php
function statusYarat($data) {
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

//print_r($data);
//echo $data;
 $main_id = $data["id"];
  $timeLine = array(
      "id"=>$data["nik"]."_".$data["id"],
      "lastUpdated"=>time(),
      );
  $story = array(
     "id"=>"status"."_".rand(100,1000000),
     "type"=>$data["tip"],
     "length"=>($data["tip"] == "video")?"0":'3',
     "src"=>$data["src"],
     "preview"=>"thubnail.jpg",
     "link"=>$data["link"],
     "linkText"=>$data["linkText"],
     "time"=>time(),
      );
  $data = array_merge($data,$timeLine);
    unset($data["src"]);
    unset($data["linkText"]);
    unset($data["tip"]);
    unset($data["link"]);
    
 
  $status = mysqli_query($conn,"select status FROM  istifadeciler where id=$main_id");
   $status = mysqli_fetch_row($status);
   $status = $status[0];
   echo $status;
   $decoded_status = json_decode($status,true);
   $story = implode(",",$story);
   if(!empty($decoded_status["status"])) {
     $data["status"] = $decoded_status["status"]."|".$story;
   }
   else {
     $data["status"] =  $story;
   //  echo "else";
   }
   $data = json_encode($data);
   
   $update = mysqli_query($conn,"update istifadeciler set status='$data' where id='$main_id'");

}
  $status = array(
    "id"=>"1",
    "nik"=>"admin",
    "photo"=>"m.jpeg",
    "profil_linki"=>"add.az",
    "src"=>"m.mp4",
    "tip"=>"video",
    "link"=>"tes.ru",
    "linkText"=>"esq olsun 2:57",
    );
   
  


    
    
statusYarat($status);

?>