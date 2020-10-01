


function menicer(id) {
id=id.replace("ads","");

id=id.replace("nomre","");
id=id.replace("login","");
id=id.replace("sifre","");
id=id.replace("balans","");

alert(id)
silinen_id = id;
  var ads = document.getElementById("ads"+id);
  
  var nomre = document.getElementById("nomre"+id);
  
  var login = document.getElementById("login"+id);
  
  var sifre = document.getElementById("sifre"+id);
  
  var balans = document.getElementById("balans"+id);
  document.getElementById("deyisdir").innerHTML =
  `
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-tablet-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2zm7 11a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
</svg>
</span>
</div>
<input id="ads" type="text" class="form-control" placeholder="ad soyad" aria-label="model" aria-describedby="basic-addon1">
</div>



















<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></span>
</div>
<input id="nomre" type="text" class="form-control" placeholder="nömrə" aria-label="model" aria-describedby="basic-addon1">
</div>









 






<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="login" type="text" class="form-control" placeholder="login" aria-label="model" aria-describedby="basic-addon1">
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="sifre" type="text" class="form-control" placeholder="şifrə" aria-label="model" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="balans" type="text" class="form-control" placeholder="balans" aria-label="model" aria-describedby="basic-addon1">
</div>




`;
document.getElementById("ads").value = ads.textContent.trim();
  
document.getElementById("nomre").value =nomre.textContent.trim();
  
document.getElementById("login").value =login.textContent.trim();
  
document.getElementById("sifre").value =(sifre.textContent).replace("₼","").trim();
  
document.getElementById("balans").value = balans.textContent.replace(" ","").replace("₼","").trim();
  
  
  
}

function sil() {

document.getElementById("sil_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
menecer silinir...`;


setTimeout(function(){
  var sil_alert = document.getElementById("alert");
   var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=profil_sil&id="+silinen_id.toString(),true);
  http.send();
   
    http.onreadystatechange = function(){
sil_alert.innerHTML = http.responseText;
document.getElementById("passiv_duyme").innerHTML =`<button onclick="baqla()" type="button" class="btn btn-success" data-dismiss="modal">bağla</button>`;
}},1500);
}
function baqla() {
document.getElementById("close").click();
setTimeout(()=>{
  var sil_alert = document.getElementById("alert");
  
document.getElementById("passiv_duyme").innerHTML =`<button type="button" class="btn btn-secondary" data-dismiss="modal" id="xeyr" >xeyr</button> <button id="sil_duymesi" onclick="sil()" type="button" class="btn btn-danger">bəli</button>
        `;
sil_alert.textContent = "profili silməyə əminsiniz?";
},200);

}





function deyisdir() {


document.getElementById("deyis_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
məlümatlar dəyişdirilir...`;

setTimeout(function(){
  var deyisdir_alert = document.getElementById("alert_deyisdirme");
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajax.php?service=profil_deyisdirme", true);
var post_content = "id="+silinen_id.toString()+"&ads="+ads.value+"&nomre="+nomre.value+"&login="+login.value+"&sifre="+sifre.value.toString()+"&balans="+balans.value.toString();
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);
    xhttp.onreadystatechange = function(){
deyisdir_alert.innerHTML = xhttp.responseText;
document.getElementById("passiv_duyme_deyisdirme").innerHTML =`<button onclick="deyisdirme_baqla()" type="button" class="btn btn-success" data-dismiss="modal">bağla</button>`;
}
},1500);
}


function baqla() {
document.getElementById("close").click();
setTimeout(()=>{
  var sil_alert = document.getElementById("alert");
  
document.getElementById("passiv_duyme").innerHTML =`<button type="button" class="btn btn-secondary" data-dismiss="modal" id="xeyr" >xeyr</button> <button id="sil_duymesi" onclick="sil()" type="button" class="btn btn-danger">bəli</button>
        `;
sil_alert.textContent = "meneceri silməyə əminsiniz?";
},200);
ajax_Xidmetler(say);

}





function deyisdirme_baqla() {

document.getElementById("close").click();
setTimeout(()=>{
  var alert_deyisdirme = document.getElementById("alert_deyisdirme");
  
document.getElementById("passiv_duyme_deyisdirme").innerHTML =`<button type="button" class="btn btn-secondary" data-dismiss="modal" >xeyr</button> <button id="deyis_duymesi" onclick="deyisdir()" type="button" class="btn btn-danger">bəli</button>
        `;
alert_deyisdirme.textContent = "meneceri dəyişdirməyə  əminsiniz?";
},200);
ajax_Xidmetler(say);
}























