<?php
include "orm.php";
$service = $_GET["service"];
$sira = $_GET["sira"];
$model = $_POST["model"];
$problem = $_POST["problem"];
$qiymet = $_POST["qiymet"];
$elaqe = $_POST["elaqe"];
$gonderen = $_POST["gonderen"];
$maya = $_POST["maya"];
switch ($service) {
  case 'yeni_xidmet':
    $orm = new orm();
    $orm->yeniXidmet($model,$gonderen,$problem,$maya,$qiymet,$elaqe);
    break;
    
    
  case "xidmetler":
    $orm = new orm();
    $xidmetler = $orm->butunXidmetler(1);
    echo "<div id='data_sayi' style='display:none'>";
    echo $xidmetler[1];
    

echo '</div><table width="100%">
    <tr>
    <th>Model</th>
    <th>Göndərən</th>
    <th>Problem</th>
    <th>Maya Dəyəri</th>
    <th>Qiymət</th>
    <th>Əlaqə</th>
    <th>Tarix</th>
    <th>Status</th>
    </tr>';
    
    
    foreach ($xidmetler[0] as $xidmet) {
    echo '<tr>
      <td class="c">';
      echo $xidmet["model"];
      echo '</td><td class="c">';
      echo $xidmet["musterini_gonderen"];

      echo '</td><td style="padding-left:5px">';
      echo $xidmet["problem"];
      echo '</td>
      <td class="c" style="color:yellow">';
      echo $xidmet["maya_deyeri"];
      echo " ₼";
      echo '</td>

       <td class="c" style="color:yellow">';

      echo $xidmet["qiymet"]; 
if(intval($xidmet["maya_deyeri"]) > 0) { echo "<span style='color: #47cf73'> (Gəlir ".(intval($xidmet["qiymet"]) - intval($xidmet["maya_deyeri"])); echo ")</span>"; echo " ";}
      echo ' ₼</td>




      <td class="c">';
      echo $xidmet["elaqe"];
      echo '</td>
      <td class="c">';
      
      
      $tarix_ = explode("-",$xidmet["tarix"]);
      echo $tarix_[2]."-".$tarix_[1]."-".$tarix_[0];

      echo "</td>
      <td onclick='status_deyis(this.id)' ";
      echo "id="; echo $xidmet["id"];
      echo " class='c'>";
      if($xidmet["status"] == 0 ) {
        echo "<img src='img/bekle.png' alt='OK' width='30' height='30'>";
      }
      else if($xidmet["status"] == 1) {
        echo "<img src='img/ok.png' alt='OK' width='30' height='30'>";
      }
      else {
        echo "<img src='img/no.png' alt='NO' width='30' height='30'>";
      }       
      
    echo "</td></tr>";
    
    }
    
  echo "</table>";
    
  break;
  
case "ajax_xidmetler":
    $orm = new orm();
    $hardan = $_GET["hardan"];
    $xidmetler = $orm->ajaxButunXidmetler(1,$hardan);
    echo "<div id='data_sayi' style='display:none'>";
    echo $xidmetler[1];

echo '</div><table width="100%">
    <tr>
    <th>Model</th>
    <th>Göndərən</th>
    <th>Problem</th>
    <th>Maya Dəyəri</th>
    <th>Qiymət</th>
    <th>Əlaqə</th>
    <th>Tarix</th>
    <th>Status</th>
    </tr>';
    
    
    foreach ($xidmetler[0] as $xidmet) {
    echo '<tr>
      <td class="c">';
      echo $xidmet["model"];
      echo '</td><td class="c">';
      echo $xidmet["musterini_gonderen"];

      echo '</td><td style="padding-left:5px">';
      echo $xidmet["problem"];
      echo '</td>
      <td class="c" style="color:yellow">';
      echo $xidmet["maya_deyeri"];
      echo " ₼";
      echo '</td>

       <td class="c" style="color:yellow">';

      echo $xidmet["qiymet"]; 
if(intval($xidmet["maya_deyeri"]) > 0) { echo "<span style='color: #47cf73'> (Gəlir ".(intval($xidmet["qiymet"]) - intval($xidmet["maya_deyeri"])); echo ")</span>"; echo " ";}
      echo ' ₼</td>




      <td class="c">';
      echo $xidmet["elaqe"];
      echo '</td>
      <td class="c">';
      
      
      $tarix_ = explode("-",$xidmet["tarix"]);
      echo $tarix_[2]."-".$tarix_[1]."-".$tarix_[0];

      echo "</td>
      <td onclick='status_deyis(this.id)' ";
      echo "id="; echo $xidmet["id"];
      echo " class='c'>";
      if($xidmet["status"] == 0 ) {
        echo "<img src='img/bekle.png' alt='OK' width='30' height='30'>";
      }
      else if($xidmet["status"] == 1) {
        echo "<img src='img/ok.png' alt='OK' width='30' height='30'>";
      }
      else {
        echo "<img src='img/no.png' alt='NO' width='30' height='30'>";
      }       
      
    echo "</td></tr>";
    
    }
    
  echo "</table>";
    
  break;




case "status_deyis":
    $id = $_GET["id"];
    $orm = new orm();
    $orm->statusDeyis($id);
  
  
  default:
    // code...
    break;
}
  
?>