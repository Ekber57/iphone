
<?php
include "service_/header.html";
//nclude "orm.php";




$kod = $_POST["kod"];
if(!empty($kod) && $kod  == "123123") {







echo '
<center>

<div class="sifarisler" style="color:white;margin-top:-20px;margin-bottom:0px">
  <h3>iPhone Service</h3>

<input id="model" name="model" placeholder="Model" oninput="button_klidle()">
<input type="text" maxlength="15" id="gonderen" name="gonderen" placeholder="Göndərən" oninput="button_klidle()">




<input id="problem" name="problem" placeholder="Problem" oninput="button_klidle()">

<input type="number" maxlength="15" id="maya" name="maya" placeholder="Maya dəyəri" oninput="button_klidle()">

<input type="number" id="qiymet" name="qiymet" placeholder="Qiymət" oninput="button_klidle()">
<input type="number" id="elaqe" name="elaqe" placeholder="Əlaqə" oninput="button_klidle()">

<input style="display:none" oninput="button_klidle()" id="tarix" style="width:10%" type="date" name="tarix" placeholder="tarix" oninpur="button_klidle()">
<button onclick="xidmet_yarat()" id="button" disabled="disabled">Daxil Et</button>


</div>
<div class="sifarisler" style="margin-top:0px;color:red">
  <center>
  <h4>Bütün Tarixçə</h4>
  </center>
  <div id="xidmetler">
 </div>
</div>


<script>
var model = document.getElementById("model");
var problem = document.getElementById("problem");
var maya = document.getElementById("maya");
var qiymet = document.getElementById("qiymet");
var elaqe = document.getElementById("elaqe");
var gonderen = document.getElementById("gonderen");
var button = document.getElementById("button");

function yoxla(element) {
  if(element.value != "" ) {
    return true;
  }
  else { 
    return false;
}
  
}
function button_klidle() {
  if(yoxla(model) && yoxla(gonderen) && yoxla(maya) && yoxla(problem) && yoxla(qiymet) && yoxla(elaqe)){
    button.disabled = "";
  }
  else {
    button.disabled = true;
  }
}
  
function xidmet_yarat() {
var m = model.value;
var p = problem.value;
var q = qiymet.value;
var e = elaqe.value;
var g = gonderen.value;
var my = maya.value;
var xhttp = new XMLHttpRequest();
var post_content = "model="+m+"&gonderen="+g+"&problem="+p+"&maya="+my+"&qiymet="+q+"&elaqe="+e

xhttp.open("POST", "ajax.php?service=yeni_xidmet", false);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);
document.getElementById("xidmetler").innerHTML="";
xidmetler();
model.value="";
problem.value="";
qiymet.value="";
elaqe.value="";
gonderen.value="";
maya.value="";
button_klidle();


xhttp.onreadystatechange = function(){
}
}



function xidmetler() {
  
  var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=xidmetler",false);
  http.send();
  
    var xidmetler = document.getElementById("xidmetler");
    xidmetler.innerHTML = http.responseText;
    
  
}

function status_deyis(id) {
  
  var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=status_deyis&id="+id.toString(),false)
  http.send();
  document.getElementById("xidmetler").innerHTML = "";
  xidmetler();
}












xidmetler();

</script>
';
}

else {
echo "<form action='' method='POST'>
<input type='text' name='kod'>
<button> giris et </button>
</form>";
}


?>
</body>
</html>
