<?php
session_start();
include "orm.php";
if(isset($_SESSION["admin"])) {

echo '

function xidmet_elavesi() {
document.getElementById("cevir").innerHTML="";
document.getElementById("xidmet_elavesi").className="nav-link active";
document.getElementById("xidmetler").className="nav-link";

  document.getElementById("menu").innerHTML =`
  <div style="padding-top:25%;padding-bottom:25%">

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<br>
yüklənir...

</div>
  `;
  setTimeout(function() {

document.getElementById("menu").innerHTML = `
<h5 class="card-title">Xidmət Əlavəsi</h5>
<div id="xidmet_elave_xeberdarliqi"></div>


<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
</span>
</div>
<input id="model" type="text" class="form-control" placeholder="model" aria-label="model" aria-describedby="basic-addon1">
</div>




<div class="input-group mb-3">
<div class="input-group-prepend">
  <label class="input-group-text" for="inputGroupSelect01">
    
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
<path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
    
    
    
  </label>
</div>
<select class="custom-select" id="gonderen">
  ';
  
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
</div>





















<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">

<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></span>
</div>
<input id="nomre" type="text" class="form-control" placeholder="əlaqə" aria-label="model" aria-describedby="basic-addon1">
</div>












<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1.0625em" height="1em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg></span>
</div>
<input id="problem" type="text" class="form-control" placeholder="problem" aria-label="model" aria-describedby="basic-addon1">
</div>






<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="maya" type="text" class="form-control" placeholder="maya dəyəri" aria-label="model" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="qiymet" type="text" class="form-control" placeholder="qiymət" aria-label="model" aria-describedby="basic-addon1">
</div>












<a href="#" id="xidmet_elave_et_duymesi" onclick="xidmet_elave_et()" class="btn btn-primary">Əlavə Et</a>
`;
},1500);

}';

}
else {

echo '
function xidmet_elavesi() {
document.getElementById("cevir").innerHTML="";
document.getElementById("xidmet_elavesi").className="nav-link active";
document.getElementById("xidmetler").className="nav-link";

  document.getElementById("menu").innerHTML =`
  <div style="padding-top:25%;padding-bottom:25%">

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<br>
yüklənir...

</div>
  `;
  setTimeout(function() {

document.getElementById("menu").innerHTML = `
<h5 class="card-title">Xidmət Əlavəsi</h5>
<div id="xidmet_elave_xeberdarliqi"></div>


<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
</span>
</div>
<input id="model" type="text" class="form-control" placeholder="model" aria-label="model" aria-describedby="basic-addon1">
</div>



















<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">



<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></span>
</div>
<input id="nomre" type="text" class="form-control" placeholder="əlaqə" aria-label="model" aria-describedby="basic-addon1">
</div>












<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1.0625em" height="1em" viewBox="0 0 17 16" class="bi bi-exclamation-triangle-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 5zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
</svg></span>
</div>
<input id="problem" type="text" class="form-control" placeholder="problem" aria-label="model" aria-describedby="basic-addon1">
</div>






<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="maya" type="text" class="form-control" placeholder="maya dəyəri" aria-label="model" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="qiymet" type="text" class="form-control" placeholder="qiymət" aria-label="model" aria-describedby="basic-addon1">
</div>












<a href="#" id="xidmet_elave_et_duymesi" onclick="xidmet_elave_et()" class="btn btn-primary">əlavə et</a>
`;
},1500);

}';

}

echo '





function xidmet_elave_et() {

var model = document.getElementById("model");
var nomre = document.getElementById("nomre");
var qiymet = document.getElementById("qiymet");
var problem = document.getElementById("problem");
var maya = document.getElementById("maya");
var gonderen = document.getElementById("gonderen");
if(gonderen == null) {
  gonderen = model;
}



document.getElementById("xidmet_elave_et_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
əlavə edilir...`;
setTimeout(function() {
  var xhttp = new XMLHttpRequest();
var post_content = "model="+model.value+"&elaqe="+nomre.value.toString()+"&maya="+maya.value+"&qiymet="+qiymet.value+"&problem="+problem.value+"&gonderen="+gonderen.value;

xhttp.open("POST", "ajax.php?service=yeni_xidmet", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);


  xhttp.onreadystatechange = function(){
    document.getElementById("xidmet_elave_xeberdarliqi").innerHTML= xhttp.responseText
    document.getElementById("xidmet_elave_et_duymesi").innerHTML="əlavə et";
    model.value = "";
    qiymet.value = "";
    maya.value = "";
    //gonderen.value = "";
    nomre.value = "";
    problem.value = "";
  }
},1500);

}

';





?>

