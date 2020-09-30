
<?php
include "header.php";
if(isset($_SESSION["admin"]) || isset($_SESSION["user"])) {
  header('location: admin.php');
}
else {
  echo '
<br>
<div class="container-fluid">
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header">
  <ul class="nav nav-tabs card-header-tabs">
  
  <li class="nav-item">
  <a class="nav-link active" href="#">istifadəçi girişi</a>
  </li>
  </ul>
  </div>
  <div class="card-body" id="menu">
  <div id="alert">
  </div>
  
  
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-person-check-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M1 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H1zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm9.854-2.854a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
</span>
</div>
<input id="login" type="text" class="form-control" placeholder="istifadəçi logini" aria-label="model" aria-describedby="basic-addon1">
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


<button id="daxil_ol" type="button" class="btn btn-success" onclick="daxil_ol()">daxil ol</button>


  </div>
  </div>
</div>
<script>
function daxil_ol() {
var login = document.getElementById("login");
var sifre = document.getElementById("sifre");
document.getElementById("alert").innerHTML =`<div class="spinner-grow text-info" role="status">
  <span class="sr-only">Loading...</span>
</div>`;
document.getElementById("daxil_ol").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
giriş edilir...`;



setTimeout(()=>{

var xhttp = new XMLHttpRequest();
var post_content = "login="+login.value+"&sifre="+sifre.value.toString()+"&login="+login.value+"&sifre="+sifre.value;

xhttp.open("POST", "ajax.php?service=login", true);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);

xhttp.onreadystatechange = function(){


/// qeyd olundu
if(xhttp.status == 257) {
window.location.href="admin.php";
login.value ="";
sifre.value ="";
}

document.getElementById("alert").innerHTML = xhttp.responseText;
document.getElementById("daxil_ol").innerHTML = "daxil ol";
}
},2000);


 
}

</script>';
}
?>