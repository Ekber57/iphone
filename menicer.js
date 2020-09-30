


function menicer(id) {
id=id.replace("model","");
id=id.replace("qiymet","");
id=id.replace("my","");
id=id.replace("elaqe","");
id=id.replace("problem","");
id=id.replace("mg","");


silinen_id = id;
  var model = document.getElementById("model"+id);
  
  var my = document.getElementById("my"+id);
  
  var qiymet = document.getElementById("qiymet"+id);
  
  var problem = document.getElementById("problem"+id);
  
  var elaqe = document.getElementById("elaqe"+id);
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
<input id="model" type="text" class="form-control" placeholder="model" aria-label="model" aria-describedby="basic-addon1">
</div>



















<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-telephone-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M2.267.98a1.636 1.636 0 0 1 2.448.152l1.681 2.162c.309.396.418.913.296 1.4l-.513 2.053a.636.636 0 0 0 .167.604L8.65 9.654a.636.636 0 0 0 .604.167l2.052-.513a1.636 1.636 0 0 1 1.401.296l2.162 1.681c.777.604.849 1.753.153 2.448l-.97.97c-.693.693-1.73.998-2.697.658a17.47 17.47 0 0 1-6.571-4.144A17.47 17.47 0 0 1 .639 4.646c-.34-.967-.035-2.004.658-2.698l.97-.969z"/>
</svg></span>
</div>
<input id="elaqe" type="text" class="form-control" placeholder="əlaqə" aria-label="model" aria-describedby="basic-addon1">
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
<input id="my" type="text" class="form-control" placeholder="maya dəyəri" aria-label="model" aria-describedby="basic-addon1">
</div>



<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="qiymet" type="text" class="form-control" placeholder="qiymət" aria-label="model" aria-describedby="basic-addon1">
</div>




`;
document.getElementById("my").value = my.textContent.trim();
  
document.getElementById("model").value = model.textContent.trim();
  
document.getElementById("elaqe").value =elaqe.textContent.trim();
  
document.getElementById("my").value = (my.textContent).replace("₼","").trim();
  
document.getElementById("problem").value =problem.textContent.trim();
  
document.getElementById("qiymet").value = (qiymet.textContent).split(" ")[0].trim();
  
  
  
}

function sil() {

document.getElementById("sil_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
xidmət silinir...`;


setTimeout(function(){
  var sil_alert = document.getElementById("alert");
   var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=xidmet_sil&id="+silinen_id.toString(),true);
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
sil_alert.textContent = "xidməti silməyə əminsiniz?";
},200);

}





function deyisdir() {



document.getElementById("deyis_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
xidmət dəyişdirilir...`;

setTimeout(function(){
  var deyisdir_alert = document.getElementById("alert_deyisdirme");
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajax.php?service=xidmet_deyisdirme", true);
var post_content = "id="+silinen_id.toString()+"&model="+model.value+"&elaqe="+elaqe.value+"&problem="+problem.value+"&my="+my.value.toString()+"&qiymet="+qiymet.value.toString();
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
sil_alert.textContent = "xidməti silməyə əminsiniz?";
},200);
ajax_Xidmetler(say);

}





function deyisdirme_baqla() {

document.getElementById("close").click();
setTimeout(()=>{
  var alert_deyisdirme = document.getElementById("alert_deyisdirme");
  
document.getElementById("passiv_duyme_deyisdirme").innerHTML =`<button type="button" class="btn btn-secondary" data-dismiss="modal" >xeyr</button> <button id="deyis_duymesi" onclick="deyisdir()" type="button" class="btn btn-danger">bəli</button>
        `;
alert_deyisdirme.textContent = "xidməti dəyişdirməyə  əminsiniz?";
},200);
ajax_Xidmetler(say);
}







function status_deyis(id,status) {
 var mg = document.getElementById("mg"+id).textContent.trim();
 
 var qiymet = document.getElementById("qiymet"+id).textContent.split(" ")[0].trim();
 
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajax.php?service=status_deyis", true);
var post_content = "id="+id+"&gonderen="+mg+"&status="+status+"&qiymet="+qiymet;
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);
    xhttp.onreadystatechange = function(){
      ajax_Xidmetler(say);
     
    }
}

















