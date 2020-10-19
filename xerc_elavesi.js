function elave_et() {
var xerc = document.getElementById("xerc");
var mebleq = document.getElementById("mebleq");


document.getElementById("xerc_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Yüklənir...</span>
  </div>
Əlavə  Edilir...`;
setTimeout(function() {
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajax.php?service=xerc_elavesi", true);
var post_content = "xerc="+xerc.value+"&mebleq="+mebleq.value.toString();
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);

  xhttp.onreadystatechange = function(){
    document.getElementById("alert").innerHTML = xhttp.responseText;
    document.getElementById("xerc_duymesi").innerHTML = "Ödəniş Et";
    xerc.value ="";
    mebleq.value ="";
    window.location.href="admin.php?bolme=rasxod_elavesi";

  }
},1500);
  
}
