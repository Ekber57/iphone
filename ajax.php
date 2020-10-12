<?php
include "orm.php";
session_start();
$service = $_GET["service"];
//)$sira = $_GET["sira"];
$model = $_POST["model"];
$problem = $_POST["problem"];
$qiymet = $_POST["qiymet"];
$elaqe = $_POST["elaqe"];
$gonderen = $_POST["gonderen"];
$maya = $_POST["maya"];
switch ($service) {
  
  
case "xerc_elavesi":
$xerc = $_POST["xerc"];
$mebleq = $_POST["mebleq"];
if(!empty($xerc && $mebleq)) {
  if(isset($_SESSION["admin"])) {
    $orm = new orm();
    $orm->xerc_elavesi($xerc,$mebleq);
    echo "<div class='alert alert-success'>
        <strong>✓</strong> xərc əlavə edildi
</div>";
    
  }
  
}
else {

echo "<div class='alert alert-danger'>
        <strong>✓</strong> məlümatları tam daxil edin
</div>";
}
break;
  
  
  
  
  
  
  
  
  
  
  
case 'ajax_userler':
  
$hardan = $_GET["hardan"];
$orm = new orm();
$userler = $orm->istifadeciler($hardan,1);


echo '
<div class="table-responsive-lg">
<table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Ad Soyad</th>
      <th scope="col">Nömrə</th>
      <th scope="col">Login</th>
      <th scope="col">Şifrə</th>
      <th scope="col">Balans</th>
    </tr>
    </thead>
    <tbody>';
    $say = 1;
    
    
    echo '
  
<div class="modal fade" id="deyis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Menecer Məlumatları</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="deyisdir">
        
      </div>
      <div class="modal-footer">
        <button id="texire_sal" type="button" class="btn btn-secondary" data-dismiss="modal">Təxirə Sal</button>
        
        <!--
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#deyis">Dəyişdir</button>
        

-->

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-primary" data-toggle="modal" data-target="#deyis_alert">Dəyişdir</button>

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Sil</button>
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Menecerin Silinməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert">
        Meneceri Silməyə Əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>
        
        
        <button id="sil_duymesi" onclick="sil()" type="button" class="btn btn-danger">Bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
<div class="modal fade" id="deyis_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Məlumatların Dəyişdirilməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert_deyisdirme">
        Menecer Məlumatlarının Dəyişdirilməsinə Əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme_deyisdirme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>
        
        
        <button id="deyis_duymesi" onclick="deyisdir()" type="button" class="btn btn-danger">Bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>


  
    
    ';
   
    foreach ($userler as $user) {
      
      
      
      
      
echo '
   
  
      
      
   
    <tr  id="'; echo $xidmet["id"]; echo '">
    
    
    
    ';
 
      
     echo ' <th scope="row">';
      echo $say;
      echo '</th>';
    echo '
    <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="ads'; echo $user["id"];
    echo '">';
   
      echo $user["ad_soyad"];
echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="nomre'; echo $user["id"];
    echo '">';
   
      echo $user["nomre"];
    
      
      echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="login'; echo $user["id"];
    echo '">';
   
      echo $user["login"];
      echo '</td>
      
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="sifre'; echo $user["id"];
    echo '">';
   
      
      echo $user["sifre"];
     
      echo '</td>

  <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="balans'; echo $user["id"];
    echo '">';
   

      echo $user["balans"]; 
      echo ' ₼</td>';
echo "</tr>";
    $say+=1;
    
    }
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  break;
  
  
  
case 'faiz_ver':
$faiz = $_POST["faiz"];
$myfile = fopen("faiz.txt", "w") or die("Unable to open file!");
fwrite($myfile, $faiz);
fclose($myfile);
echo "<div class='alert alert-success'>
        <strong>✓</strong> faiz dərəcəsi $faiz təyin edildi
</div>";

  
  
  
  
  break;
  
  
  
  
  
  
  
  
  case 'yeni_xidmet':
    $orm = new orm();
    if(isset($_SESSION["user"])) {
      $gonderen = $_SESSION["ad"];
    }

    if(!empty($model && $problem && $gonderen && $elaqe && $qiymet )) {
       echo '<div class="alert alert-success">
        <strong>✓</strong>
  Xidmət Əlavə Edildi...
</div>';
    $orm->yeniXidmet($model,$gonderen,$problem,$maya,$qiymet,$elaqe);
      }
     
    else {
      // melumat tam deyilse
      echo '<div class="alert alert-danger">
  <strong>xəta!</strong> Məlumatları Tam Daxil Edin
</div>';
    }
    
    
    
    
    
    
    break;
    
    case "pul_cixar":
    $orm = new orm();
    $istifadeci = $_POST['istifadeci'];
    $mebleq = $_POST['mebleq'];
   
    if($istifadeci == "satıcı seçin") {

      echo '<div class="alert alert-danger">
        <strong>xəta!</strong>
  istifadəçi yoxdur</div>';
    }
    else {
    if($mebleq > 0) {
    if($orm->pul_cixar($istifadeci,$mebleq)) {
      echo '<div class="alert alert-success">
        <strong>✓</strong>
  Ödəniş Tamamlandı</div>';
    }
    else {
      echo '<div class="alert alert-danger">
        <strong>Xəta!</strong>
  istifadəçinin balansında kifayət qədər məbləğ yoxdur</div>';
    }
    }
    else {

      echo '<div class="alert alert-danger">
        <strong>xəta!</strong>
  məbləğ 0 ola bilməz </div>';
    }
    }
    
    
      break;
    
    
    
    
    
case 'ajax_statistika':
  include "funksiyalar.php";
  $hardan = $_GET["hardan"];

  $orm = new orm();
  if(!empty($hardan)) {
  $data = $orm->statistika($hardan);
 
  }
  else {
  $data = $orm->statistika(false)[0];
  }
echo '

<div class="table-responsive-lg">
<table  class="table table-bordered">
  <thead>
    <tr>
    
      <th scope="col">Ay</th>
      <th scope="col">İl</th>
      <th scope="col">Maya dəyəri</th>
      <th scope="col">Ödəniş</th>
      <th scope="col">Gəlir</th>
   
      
    </tr>
    </thead>
    <tbody>';
foreach($data as $k) {

echo "<tr><td>";
ay_tercume(strtolower((explode(",",$k[0])[0])));
echo "</td>";

echo "<td>";
echo explode(",",$k[0])[1];
echo "</td>";



echo "<td>";
echo $k["pul"]; echo " ₼";
echo "</td>";



echo "<td>";
echo $k["q"]; echo " ₼";
echo "</td>";


echo "<td>";

$xalis =  $k["q"] - $k["pul"];
$odenis = new orm();
$rasxod=new orm();

$date = [$ay,$il] = explode(",",$k["ay"]);
$ay = ayi_reqemeCevir(strtolower($ay));

$odenis=$odenis->odenisler($ay,$il,"statistika");
$rasxod=$rasxod->rasxodlar($ay,$il,"statistika");
if($odenis["odenis"] && $rasxod["rasxodlar"] != ""){
  echo $xalis = $xalis-$rasxod["rasxodlar"]-$odenis["odenis"];
}
else if($odenis["odenis"] != "") {
echo $xalis = $xalis - $odenis["odenis"];
}

else if($rasxod["rasxodlar"] != "") {
echo $xalis = $xalis - $rasxod["rasxodlar"];
}
else {
echo $xalis;
}



 echo " ₼";
echo "</td></tr>";

}
  
  
  
  
  break;
    
    
    
    
    
    
    
  case 'qeydiyyat':
    $orm = new orm();
    $ad_soyad =$_POST["ad_soyad"];
    $nomre = $_POST["nomre"];
    $sifre = $_POST["sifre"];
    $balans = $_POST["balans"];
    $login = $_POST["login"];
    if(!empty($ad_soyad && $login && $sifre && $nomre)) {
      if($orm->qeydiyyat($ad_soyad,$nomre,$login,$sifre,$balans)) {
       http_response_code(257);
       echo '<div class="alert alert-success">
        <strong>✓</strong>
  Menecer Əlavə Edildi...
</div>';
      }
      else {
        // istifadeci movcuddursa 
        echo "<div class='alert alert-danger'>
  <strong>Xəta!</strong> Menecer $login Artıq Mövcuddur
  
</div>";
      }
    }
    else {
      // melumat tam deyilse
      echo '<div class="alert alert-danger">
  <strong>Xəta!</strong> Məlümatları Tam Daxil Edin
</div>';
      
    }
    break;
    
  case "login":
    $login = strtolower($_POST["login"]);

    $sifre = $_POST["sifre"];
   
    $orm = new orm();
    if(!empty($login && $sifre)) {
    $data = $orm->login($login,$sifre);
    if($data) {
      http_response_code(257);
      if($login == "admin") {
        $_SESSION["admin"] = true;
      }
        else {
          $_SESSION["user"] = true;
        }
      $_SESSION["id"] = $data["id"];
      $_SESSION["ad"] = $data["ad_soyad"];
     
   
    }
    else {
      echo '<div class="alert alert-danger">
  <strong>Xəta!</strong> Məlumatlar Yanlışdır
</div>';
    }
    }
    else {
      
echo '<div class="alert alert-danger">
  <strong>Xəta!</strong> Məlümatları Tam Daxil Edin
</div>';
      
    }
    break;
    
    
    
    
    
  case "xidmetler":
    $orm = new orm();
    $xidmetler = $orm->butunXidmetler(1);
    echo "<div id='data_sayi' style='display:none'>";
    echo $xidmetler[1];
    echo "</div>";

echo '
<div class="table-responsive-lg">
<table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Model</th>
      <th scope="col">Menecer</th>
      <th scope="col">Problem</th>
      <th scope="col">Maya dəyəri</th>
      <th scope="col">Qiymət</th>
      <th scope="col">Əlaqə</th>
      <th scope="col">Tarix</th>';
      
     echo ' <th scope="col">Status</th>
      
    </tr>
    </thead>
    <tbody>';
    $say = 1;
    
    
    echo '
  
<div class="modal fade" id="deyis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Xidmətin  Dəyişdiririlməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="deyisdir">
        
      </div>
      <div class="modal-footer">
        <button id="texire_sal" type="button" class="btn btn-secondary" data-dismiss="modal">Təxirə Sal</button>
        
        <!--
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#deyis">Dəyişdir</button>
        

-->

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-primary" data-toggle="modal" data-target="#deyis_alert">Dəyişdir</button>

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">Sil</button>
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Xidmətin  Silinməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert">
        xidməti silməyə əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>
        
        
        <button id="sil_duymesi" onclick="sil()" type="button" class="btn btn-danger">Bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
<div class="modal fade" id="deyis_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> Xidmətin Dəyişdirilməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert_deyisdirme">
        Xidməti Dəyişdirilməsinə Əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme_deyisdirme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>
        
        
        <button id="deyis_duymesi" onclick="deyisdir()" type="button" class="btn btn-danger">Bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>


  
    
    ';
    if(isset($_SESSION["admin"])) {
    foreach ($xidmetler[0] as $xidmet) {
      
      
      
      
      
echo '
   
  
      
      
   
    <tr  id="'; echo $xidmet["id"]; echo '">
    
    
    
    ';
 
      
     echo ' <th scope="row">';
      echo $say;
      echo '</th>';
    echo '
    <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="model'; echo $xidmet["id"];
    echo '">';
   
      echo $xidmet["model"];
echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="mg'; echo $xidmet["id"];
    echo '">';
   
      echo $xidmet["musterini_gonderen"];
    
      
      echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="problem'; echo $xidmet["id"];
    echo '">';
   
      echo $xidmet["problem"];
      echo '</td>
      
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="my'; echo $xidmet["id"];
    echo '">';
   
      
      echo $xidmet["maya_deyeri"];
      echo " ₼";
      echo '</td>

  <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="qiymet'; echo $xidmet["id"];
    echo '">';
   

      echo $xidmet["qiymet"]; 
if(intval($xidmet["maya_deyeri"]) > 0) { echo "<span style='color: #2baf2b'> (Gəlir ".(intval($xidmet["qiymet"]) - intval($xidmet["maya_deyeri"])); echo ")</span>"; echo " ";}
      echo ' ₼</td>


  <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="elaqe'; echo $xidmet["id"];
    echo '">';
   

    
      echo $xidmet["elaqe"];
      echo '</td>
      <td>';
      
      
      $tarix_ = explode("-",$xidmet["tarix"]);
      echo $tarix_[2]."-".$tarix_[1]."-".$tarix_[0];

      echo "</td>
      <td onclick='status_deyis(this.id,";
      echo $xidmet["status"];
      echo ")'";
      echo "id="; echo $xidmet["id"];
      echo " >";
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
    $say+=1;
    
    }
    }
    else {
      echo "user: "; echo $_SESSION["ad"];
 foreach ($xidmetler[0]  as $xidmet) {
      
      
      
      
      
echo '
   
  
      
      
   
    <tr  id="'; echo $xidmet["id"]; echo '">
    
    
    
    ';
 
      
     echo ' <th scope="row">';
      echo $say;
      echo '</th>';
    echo '
    <td>';
   
      echo $xidmet["model"];
echo '
        <td>';
   
      echo $xidmet["musterini_gonderen"];
    
      
      echo '<td>';
   
      echo $xidmet["problem"];
      echo '</td><td>';
   
      
      echo $xidmet["maya_deyeri"];
      echo " ₼";
      echo '</td><td>';
   

      echo $xidmet["qiymet"]; 
if(intval($xidmet["maya_deyeri"]) > 0) { echo "<span style='color: #2baf2b'> (Gəlir ".(intval($xidmet["qiymet"]) - intval($xidmet["maya_deyeri"])); echo ")</span>"; echo " ";}
      echo ' ₼</td><td>';
   

    
      echo $xidmet["elaqe"];
      echo '</td>
      <td>';
      
      
      $tarix_ = explode("-",$xidmet["tarix"]);
      echo $tarix_[2]."-".$tarix_[1]."-".$tarix_[0];
  echo "</td><td> ";
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
    $say+=1;
    
    }
      
      
      
      
      
    }
    
    
    
    
    
  echo '</tbody> </table>
 ';

 
    
  break;
  
case "ajax_xidmetler":

    $orm = new orm();
    $hardan = $_GET["hardan"];
    
    $xidmetler = $orm->ajaxButunXidmetler($hardan);
    echo "<div id='data_sayi' style='display:none'>";
    echo $xidmetler[1];
    echo "</div>";

echo '
<div class="table-responsive-lg">
<table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Model</th>
      <th scope="col">Menecer</th>
      <th scope="col">Problem</th>
      <th scope="col">Maya dəyəri</th>
      <th scope="col">Qiymət</th>
      <th scope="col">Əlaqə</th>
      <th scope="col">Tarix</th>';
      
     echo ' <th scope="col">Status</th>
      
    </tr>
    </thead>
    <tbody>';
    $say = 1;
    
    
    echo '
  
<div class="modal fade" id="deyis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">xidmətin  dəyişdiririlməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="deyisdir">
        
      </div>
      <div class="modal-footer">
        <button id="texire_sal" type="button" class="btn btn-secondary" data-dismiss="modal">təxirə sal</button>
        
        <!--
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#deyis">dəyişdir</button>
        

-->

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-primary" data-toggle="modal" data-target="#deyis_alert">dəyişdir</button>

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">sil</button>
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">Xidmətin  Silinməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert">
        xidməti silməyə əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>
        
        
        <button id="sil_duymesi" onclick="sil()" type="button" class="btn btn-danger">Bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
<div class="modal fade" id="deyis_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> xidmətin dəyişdirilməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert_deyisdirme">
        Xidməti Dəyişdirilməsinə Əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme_deyisdirme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Xeyr</button>
        
        
        <button id="deyis_duymesi" onclick="deyisdir()" type="button" class="btn btn-danger">Bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>


  
    
    ';
    if(isset($_SESSION["admin"])) {
    foreach ($xidmetler[0] as $xidmet) {
      
      
      
      
      
echo '
   
  
      
      
   
    <tr  id="'; echo $xidmet["id"]; echo '">
    
    
    
    ';
 
      
     echo ' <th scope="row">';
      echo $hardan+=1;
      echo '</th>';
    echo '
    <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="model'; echo $xidmet["id"];
    echo '">';
   
      echo $xidmet["model"];
echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="mg'; echo $xidmet["id"];
    echo '">';
   
      echo $xidmet["musterini_gonderen"];
    
      
      echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="problem'; echo $xidmet["id"];
    echo '">';
   
      echo $xidmet["problem"];
      echo '</td>
      
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="my'; echo $xidmet["id"];
    echo '">';
   
      
      echo $xidmet["maya_deyeri"];
      echo " ₼";
      echo '</td>

  <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="qiymet'; echo $xidmet["id"];
    echo '">';
   

      echo $xidmet["qiymet"]; 
if(intval($xidmet["maya_deyeri"]) > 0) { echo "<span style='color: #2baf2b'> (Gəlir ".(intval($xidmet["qiymet"]) - intval($xidmet["maya_deyeri"])); echo ")</span>"; echo " ";}
      echo ' ₼</td>


  <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="elaqe'; echo $xidmet["id"];
    echo '">';
   

    
      echo $xidmet["elaqe"];
      echo '</td>
      <td>';
      
      
      $tarix_ = explode("-",$xidmet["tarix"]);
      echo $tarix_[2]."-".$tarix_[1]."-".$tarix_[0];

      echo "</td>
      <td onclick='status_deyis(this.id,";
      echo $xidmet["status"]; echo ")'";
      echo "id="; echo $xidmet["id"];
      echo " >";
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
    $say+=1;
    
    }
    }
    else {
      echo "user";
 foreach ($xidmetler[0]  as $xidmet) {
      
      
      
      
      
echo '
   
  
      
      
   
    <tr  id="'; echo $xidmet["id"]; echo '">
    
    
    
    ';
 
      
     echo ' <th scope="row">';
      echo $hardan+=1;
      echo '</th>';
    echo '
    <td>';
   
      echo $xidmet["model"];
echo '
        <td>';
   
      echo $xidmet["musterini_gonderen"];
    
      
      echo '<td>';
   
      echo $xidmet["problem"];
      echo '</td><td>';
   
      
      echo $xidmet["maya_deyeri"];
      echo " ₼";
      echo '</td><td>';
   

      echo $xidmet["qiymet"]; 
if(intval($xidmet["maya_deyeri"]) > 0) { echo "<span style='color: #2baf2b'> (Gəlir ".(intval($xidmet["qiymet"]) - intval($xidmet["maya_deyeri"])); echo ")</span>"; echo " ";}
      echo ' ₼</td><td>';
   

    
      echo $xidmet["elaqe"];
      echo '</td>
      <td>';
      
      
      $tarix_ = explode("-",$xidmet["tarix"]);
      echo $tarix_[2]."-".$tarix_[1]."-".$tarix_[0];
  echo "</td><td> ";
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
    $say+=1;
    
    }
      
      
      
      
      
    }
    
    
    
    
    
  echo '</tbody> </table>
 ';

    
    
  break;


case "xidmet_sil":
  $id = $_GET["id"];
  $orm = new orm();
  
  $orm->xidmet_sil($id);
  echo '<div class="alert alert-success">
        <strong>✓</strong>
  Xidmət Bazadan Silindi !
</div>';
  break;
  
case "profil_sil":
  $id = $_GET["id"];
  $orm = new orm();
  
  $orm->profil_sil($id);
  echo '<div class="alert alert-success">
        <strong>✓</strong>
  Menecer Bazadan Silindi !
</div>';
  break;






case "istifadeciler":
  $orm = new orm();
  $data = $orm->istifadeciler();
  foreach ($data as $istifadeci) {
    echo '<option value="';
    echo $istifadeci["ad_soyad"];
    echo '">';
    echo $istifadeci["ad_soyad"];
    echo "</option>";
    
  }
  
  break;




case "profil_deyisdirme":
  $id = $_GET["id"];
  $orm = new orm();
  $orm->profil_duzelt(
    $_POST["ads"],
    $_POST["nomre"],
    $_POST["login"],
    $_POST["sifre"],
    $_POST["balans"],
    $_POST["id"]
   
    
  );
  
 // $orm->xidmet_sil($id);
  echo '<div class="alert alert-success">
        <strong>✓</strong>
  Menecer Məlumatları Uğurla Dəyişdirildi !
</div>';
  break;








case "xidmet_deyisdirme":
  $id = $_GET["id"];
  $orm = new orm();
  $orm->xidmet_deyisdir(
    $_POST["id"],
    $_POST["model"],
    $_POST["problem"],
    $_POST["my"],
    $_POST["qiymet"],
    $_POST["elaqe"],
   
    
  );
  
 // $orm->xidmet_sil($id);
  echo '<div class="alert alert-success">
        <strong>✓</strong>
  xidmət uğurla dəyişdirildi !
</div>';
  break;





case "status_deyis":
    $id = $_POST["id"];
    $status = $_POST["status"];
    $gonderen = $_POST["gonderen"];
    $qiymet = $_POST["qiymet"];
   
    $orm = new orm();
    $orm->statusDeyis($id);
    if($gonderen != "admin") {
    if($status != 2) {
    $myfile = fopen("faiz.txt", "r") or die("Unable to open file!");
    $faiz = fread($myfile,filesize("faiz.txt"));
    fclose($myfile);
    $faiz = intval($faiz);
    if($faiz>0) {
    $orm->balans_tenzimle($gonderen,($qiymet*$faiz)/100,$status+1);
    echo '0';
    }
    else {
    $orm->balans_tenzimle($gonderen,0,$status+1);
    }
      echo '0';
    }
}
    
  default:
    // code...
    break;
}
  
?>