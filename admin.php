<?php
include "header.php";
if(isset($_SESSION["admin"]) or $_SESSION["user"]) {
  
$bolme = $_GET["bolme"];
switch ($bolme) {
  case 'statistika':
  include "funksiyalar.php";
    if(isset($_SESSION["admin"])){
      
include "orm.php";
$orm = new orm();
$g = $orm->statistika();

echo '
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
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
    
      <th scope="col">ay</th>
      <th scope="col">il</th>
      <th scope="col">maya dəyəri</th>
      <th scope="col">gəlir</th>
      <th scope="col">qazanc</th>
   
      
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
echo $k["pul"];
echo "</td>";



echo "<td>";
echo $k["q"];
echo "</td>";


echo "<td>";
echo $k["q"] - $k["pul"];
echo "</td></tr>";

}
echo '
</tbody></table>
</div>
</div>

<nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled" onclick="daha_az()" id="evvelki">
      <a class="page-link"href="#" tabindex="-1">əvvəlki </a>
    </li>
    <li class="page-item" id="novbeti" onclick="daha_cox()">
      <a class="page-link"   href="#">sonrakı</a>
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
  case 'qeydiyyat':
if(isset($_SESSION["admin"])) {
  echo 
'<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header">
  <ul class="nav nav-tabs card-header-tabs">
  
  <li class="nav-item">
  <a class="nav-link active" href="#">istifadəçi qeydiyyatı</a>
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
<input id="ad_soyad" type="text" class="form-control" placeholder="ad və soyad" aria-label="model" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></span>
</div>
<input id="nomre" type="number" class="form-control" placeholder="mobil nömrə" aria-label="model" aria-describedby="basic-addon1">
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
<input id="login"  type="text" class="form-control" placeholder="istifadəçi logini" aria-label="model" aria-describedby="basic-addon1">
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
<input id="sifre" type="text" class="form-control" placeholder="istifadəçi şifrəsi" aria-label="model" aria-describedby="basic-addon1">
</div>





<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="balans" type="number" class="form-control" placeholder="ilkin balans" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>


<a href="#" id="qeydiyyat" onclick="qeydiyyat()"class="btn btn-primary">qeydiyyat</a>



<script>
function qeydiyyat() {
document.getElementById("qeydiyyat").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
qeydiyyat edilir...`;
var cavab_elmenti = document.getElementById("alert");
cavab_elmenti.innerHTML = `<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
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
$orm = new orm();
$g = $orm->butunXidmetler2(1);

echo '
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link active" href="#">ödəniş et</a>
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
  <option selected>satıcı seçin</option>';

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
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link active" href="#">sistemdən çıxış</a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';
  
  
  
  
 echo '<div class="alert alert-success">
        <strong>✓</strong>
  servisdən çıxş edildi
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