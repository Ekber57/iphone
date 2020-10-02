<?php
include "orm.php";
$orm = new orm();
$g = $orm->butunXidmetler2(1);
function ay_tercume($ay) {
switch ($ay) {
  case 'januray':
    // code...
    echo "yanvar";
    break;
  
  case 'february':
    echo 'fevral';
    // code...
    break;
  
  case 'march':
    // code...
    echo 'mart';
    break;
  
  case 'april':
    // code...
    echo "aprel";
    break;
  
  case 'may':
    // code...
    echo "may";
    break;
  
  case 'june':
    echo 'iyun';
    // code...
    break;
  
  case 'july':
    // code...
    echo 'iyul';
    break;
  
  case 'august':
    // code...
    echo "avgust";
    break;
  
  case 'september':
    echo "sentiyabr";
    break;
  
  case 'october':
    // code...
    echo "oktiyabr";
    break;
  
  case 'november':
    // code...
    echo "noyabr";
    break;
  
  default:
    // code...
    echo "dekabr";
    break;
}

}




foreach($g as $k) {
/*
switch (explode(",",$k[0])[0]) {
  case 'januray':
    // code...
    echo "yanvar";
    break;
  
  case 'february':
    echo 'fevral';
    // code...
    break;
  
  case 'march':
    // code...
    echo 'mart';
    break;
  
  case 'april':
    // code...
    echo "aprel";
    break;
  
  case 'may':
    // code...
    echo "may";
    break;
  
  case 'june':
    echo 'iyun';
    // code...
    break;
  
  case 'july':
    // code...
    echo 'iyul';
    break;
  
  case 'august':
    // code...
    echo "avgust";
    break;
  
  case 'september':
    echo "sentiyabr";
    break;
  
  case 'october':
    // code...
    echo "oktiyabr";
    break;
  
  case 'november':
    // code...
    echo "noyabr";
    break;
  
  default:
    // code...
    echo "dekabr";
    break;
}
*/
//ay_tercume((explode(",",$k[0])[0]);
echo $k[0]." ".$k[1];
echo "<br>";
}

?>