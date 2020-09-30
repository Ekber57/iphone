function faiz_ver() {
var faiz = document.getElementById("faiz");
document.getElementById("faiz_duymesi").innerHTML =`
<div class="spinner-border" style="width: 1.1rem; height: 1.1rem;" role="status">
  <span class="sr-only">Loading...</span>
  </div>
təyin edilir...`;
setTimeout(function() {
var xhttp = new XMLHttpRequest();
xhttp.open("POST", "ajax.php?service=faiz_ver", true);
var post_content = "faiz="+faiz.value.toString();
xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
xhttp.send(post_content);

  xhttp.onreadystatechange = function(){
    document.getElementById("alert").innerHTML = xhttp.responseText;
    document.getElementById("faiz_duymesi").innerHTML = "təyin et";
    faiz.value ="";
  }
},1500);
  
}
