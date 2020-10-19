<?php
include "header.php";
if(isset($_SESSION["admin"]) or $_SESSION["user"]) {
  
$bolme = $_GET["bolme"];
switch ($bolme) {

  case "rasxod_elavesi":
  include "orm.php";

echo '
<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>


  <li class="nav-item">
  <a class="nav-link active" href="#">Xərc əlavəsi</a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';


echo '
<div id="alert"></div>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">

<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg>

</span>
</div>
<input id="xerc" type="text" class="form-control" placeholder="xərcin məzmunu" aria-label="model" aria-describedby="basic-addon1" >
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="mebleq" type="number" class="form-control" placeholder="xərcin məbləği" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>






<a href="#" id="xerc_duymesi" onclick="elave_et()" class="btn btn-primary">əlavə et</a>
<script src="xerc_elavesi.js"></script>
';


$orm = new orm();
$g = $orm->rasxodlar(0,0,"rasxodlar");
echo '
<br>
<br>

<div class="table-responsive-lg">
<table  class="table table-bordered">
  <thead>
    <tr>
    
      <th scope="col">#</th>
      <th scope="col">xərc</th>
      <th scope="col">məbləğ</th>
      <th scope="col">tarix</th>
     
      
    </tr>
    </thead>
    <tbody>';

$say = 0;
foreach($g as $k) {
  $say+=1;
echo "<tr><td>";
echo $say;
echo "</td>";

echo "<td>";
echo $k["rasxod"];
echo "</td>";



echo "<td>";
echo $k["mebleq"]; echo " ₼";
echo "</td>";



echo "<td>";
echo $k["tarix"]; 
echo "</td>";


echo "</tr>";




}
echo '
</tbody></table>
</div>
</div>';

  


break;



















  case "userler":

    include "orm.php";
    
    $orm = new orm();
    $userler = $orm->istifadeciler("siyahi",1);
   

echo '
<div class="shadow p-3 mb-5  bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">

<li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>

  <li class="nav-item">
  <a class="nav-link active" href="#">menecer panel</a>
  </li>




  </ul>
  </div>
  <div class="card-body" ><div id="data_sayi" style="display:none">';
  echo $userler[1];
  echo "</div>
  <div id='menu'>";


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
       Menecer MəlUmatlarının Dəyişdirilməsinə Əminsiniz?
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
   
    foreach ($userler[0] as $user) {
      
      
      
      
      
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
    
    echo '
    
    </body></table>
    </div>
    </div>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled" onclick="daha_az()" id="evvelki">
      <a class="page-link"href="#" tabindex="-1">Əvvəlki </a>
    </li>
    <li class="page-item" id="novbeti" onclick="daha_cox()">
      <a class="page-link"   href="#">Sonrakı</a>
    </li>
  </ul>
</nav>';
    
    
    
    
   echo "
   <script src='user_menicer.js'></script>
   <script src='admins/user_seyfele.js'></script>
   ";
   
   break;
   
  
  
  
  
  
  
  case 'statistika':
  include "funksiyalar.php";
    if(isset($_SESSION["admin"])){
      
include "orm.php";
$orm = new orm();
$g = $orm->statistika();

echo '
<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>


<li class="nav-item">
  <a class="nav-link active" href="#">statistika</a>
  </li>

  




  </ul>
  </div>
  <div class="card-body" ><div id="data_sayi" style="display:none">';
  echo $g[1];
  echo "</div>
  <div id='menu'>";



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


foreach($g[0] as $k) {

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
$rasxod = new orm();

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
echo '
</tbody></table>
</div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled" onclick="daha_az()" id="evvelki">
      <a class="page-link"href="#" tabindex="-1">Əvvəlki </a>
    </li>
    <li class="page-item" id="novbeti" onclick="daha_cox()">
      <a class="page-link"   href="#">Sonrakı</a>
    </li>
  </ul>
</nav>

<script src="admins/statistika_seyfeleme.js"></script>';

    }

else {
  echo '<script>
  window.location.href="admin.php";
  </script>';
}
    
    
 
    
    
    break;
    
    // faiz ver
    

case "faiz_ver":
include "orm.php";
echo '
<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  
<li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>


<li class="nav-item">
  <a class="nav-link active" href="#">Faiz Təyini: ';
$myfile = fopen("faiz.txt", "r") or die("Unable to open file!");
    $faiz = fread($myfile,filesize("faiz.txt"));
    fclose($myfile);
echo "Hal Hazırkı Faiz: $faiz %";
  echo '
  </a>
  </li>

  
 
 
  </ul>
  </div>
  <div class="card-body"  id="menu">';


echo '
<div id="alert"></div>';
echo '<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
%
</span>
</div>
<input id="faiz" type="number" class="form-control" placeholder="faiz dərəcəsi" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>


<a href="#" id="faiz_duymesi" onclick="faiz_ver()" class="btn btn-primary">Təyin Et</a>
<script src="faiz_ver.js"></script>
';
break;



    
    
    
    
    
    
  case 'qeydiyyat':
if(isset($_SESSION["admin"])) {
  echo 
'<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header">
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>




  <li class="nav-item">
  <a class="nav-link active" href="#">Menecer Qeydiyyatı</a>
  </li>
  </ul>
  </div>
  <div class="card-body" id="menu">
<div id="alert" >
</div>







<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-earmark-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M4 0h5.5v1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h1V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2z"/>
  <path d="M9.5 3V0L14 4.5h-3A1.5 1.5 0 0 1 9.5 3z"/>
  <path fill-rule="evenodd" d="M5 11.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 0 1h-2a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0-2a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5z"/>
</svg>

</span>
</div>
<input id="ad_soyad" type="text" class="form-control" placeholder="Ad və Soyad" aria-label="model" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></span>
</div>
<input id="nomre" type="number" class="form-control" placeholder="Mobil Nömrə" aria-label="model" aria-describedby="basic-addon1">
</div>




<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">


<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
<path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>


</span>
</div>
<input id="login"  type="text" class="form-control" placeholder="İstifadəçi Logini" aria-label="model" aria-describedby="basic-addon1">
</div>


<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-lock-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path d="M2.5 9a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v5a2 2 0 0 1-2 2h-7a2 2 0 0 1-2-2V9z"/>
  <path fill-rule="evenodd" d="M4.5 4a3.5 3.5 0 1 1 7 0v3h-1V4a2.5 2.5 0 0 0-5 0v3h-1V4z"/>
</svg>
</span>
</div>
<input id="sifre" type="text" class="form-control" placeholder="İstifadəçi Şifrəsi" aria-label="model" aria-describedby="basic-addon1">
</div>





<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="balans" type="number" class="form-control" placeholder="İlkin Balans" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>


<a href="#" id="qeydiyyat" onclick="qeydiyyat()"class="btn btn-primary">Qeydiyyat</a>



<script>
function qeydiyyat() {
document.getElementById("qeydiyyat").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Yüklənir...</span>
  </div>
Qeydiyyat Edilir...`;
var cavab_elmenti = document.getElementById("alert");
cavab_elmenti.innerHTML = `<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Yüklənir...</span>
</div>`;
var ad_soyad = document.getElementById("ad_soyad");
var nomre = document.getElementById("nomre");
var login = document.getElementById("login");
var sifre = document.getElementById("sifre");
var balans = document.getElementById("balans");

setTimeout(()=>{
  var xhttp = new XMLHttpRequest();
var post_content = "ad_soyad="+ad_soyad.value+"&nomre="+nomre.value.toString()+"&login="+login.value+"&sifre="+sifre.value+"&balans="+balans.value.toString();

xhttp.open("POST", "ajax.php?service=qeydiyyat", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);

xhttp.onreadystatechange = function(){
 
/// qeyd olundu
if(xhttp.status == 257) {
ad_soyad.value ="";
nomre.value ="";
sifre.value="";
login.value="";
}
cavab_elmenti.innerHTML = xhttp.responseText;




}

document.getElementById("qeydiyyat").innerHTML =`
qeydiyyat
`;

},1500);
}
</script>';
}
else {
  echo '<script>
  window.location.href="admin.php";
  </script>';
}
break;


case "odenis_et":
  include "orm.php";

echo '
<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>


  <li class="nav-item">
  <a class="nav-link active" href="#">Ödəniş et</a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';


echo '
<div id="alert"></div>
<div class="input-group mb-3">
<div class="input-group-prepend">
  <label class="input-group-text" for="inputGroupSelect01">
    
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
<path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
    
    
    
  </label>
</div>
<select class="custom-select" id="istifadeci">
  <option selected>Menecer Seçin</option>';

$orm = new orm();
  $data = $orm->istifadeciler();
  foreach ($data as $istifadeci) {
    echo '<option value="';
    echo $istifadeci["ad_soyad"];
    echo '">';
    echo $istifadeci["ad_soyad"];
    echo "</option>";
    
  }
  
  echo '
</select>
</div>';



echo '<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="mebleq" type="number" class="form-control" placeholder="ilkin balans" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>


<a href="#" id="odenis_duymesi" onclick="odenis_et()" class="btn btn-primary">ödəniş et</a>
<script src="odenis_et.js"></script>
';




break;


case 'cixis_et':
  
  
  
  
  session_destroy();
  

echo '
<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link active" href="#">Sistemdən Çıxış</a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';
  
  
  
  
 echo '<div class="alert alert-success">
        <strong>✓</strong>
  Sistemden Çıxş Edildi
</div>';
  break;



  default:
    // code...
    include "admins/admin_anaseyfe.php";
    break;
}




include "footer.html";

}
else {
  header("location: login.php");
}