
<?php
include "service_/header.html"
//nclude "orm.php";

?>

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
var qiymet = document.getElementById("qiymet");
var elaqe = document.getElementById("elaqe");
var imeil = document.getElementById("imeil");
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
  if(yoxla(model) && yoxla(imeil) && yoxla(problem) && yoxla(qiymet) && yoxla(elaqe)){
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
var i = imeil.value;
var xhttp = new XMLHttpRequest();
var post_content = "model="+m+"&imeil="+i.toString()+"&problem="+p+"&qiymet="+q+"&elaqe="+e
xhttp.open("POST", "ajax.php?service=yeni_xidmet", false);
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);
document.getElementById("xidmetler").innerHTML="";
xidmetler();
model.value="";
problem.value="";
qiymet.value="";
elaqe.value="";
imeil.value="";
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






xidmetler();
</script>




</body>
</html>