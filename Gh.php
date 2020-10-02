<?php

include "orm.php";
$orm = new orm();
$g = $orm->butunXidmetler2(1);


print_r($g);
//print_r($g);

//exit();




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



echo '</div><table width="100%">
    <tr>
    
    <th>ay</th>
    <th>il</th>
    <th>maya dəyəri </th>
    <th>qiymət </th>
    
    <th>gəlir</th>
    </tr>';
    
    
    foreach ($g as $k) {
  /// print_r($k);

    echo '<tr>
      <td class="c" style="color:yellow">';
     

ay_tercume(strtolower(explode(",",$k[0])[0]));
      echo '</td>';
    echo '
      <td class="c" style="color:yellow">';
     


echo strtolower(explode(",",$k[0])[1]);
      echo '</td>';
      
      
      
    echo '
      <td class="c" style="color:yellow">';
      echo $k["pul"]." ₼";
      

      echo '</td>';
      
      
      
    echo '
      <td class="c" style="color:yellow">';
      echo $k["q"]." ₼";

      echo '</td>';
      
      
      
    echo '
      <td class="c" style="color:yellow">';
      echo $k["q"] - $k["pul"]." ₼";

      echo '</td>';

    }
  echo "</table>";

?>
