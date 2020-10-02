function odenis_et() {
var istifadeci = document.getElementById("istifadeci");
var mebleq = document.getElementById("mebleq");


document.getElementById("odenis_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Yüklənir...</span>
  </div>
Ödəniş Edilir...`;
setTimeout(function() {
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajax.php?service=pul_cixar", true);
var post_content = "istifadeci="+istifadeci.value+"&mebleq="+mebleq.value.toString();
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);

  xhttp.onreadystatechange = function(){
    document.getElementById("alert").innerHTML = xhttp.responseText;
    document.getElementById("odenis_duymesi").innerHTML = "Ödəniş Et";
    mebleq.value ="";
  }
},1500);
  
}
