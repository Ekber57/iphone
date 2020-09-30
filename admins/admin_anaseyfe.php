<?php
echo '
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item"  onclick="xidmetler()">
  <a class="nav-link active" id="xidmetler" href="#">xidmətlər</a>
  </li>
  <li class="nav-item" onclick="xidmet_elavesi()">
  <a class="nav-link " id="xidmet_elavesi" href="#">xidmət əlavəsi</a>
  </li>';
  if(isset($_SESSION["user"])){
 
  echo '
  <li class="nav-item">
  <a class="nav-link active" href="#" id="balans_melumat">';
  include "orm.php";
  $orm = new orm();
 echo "balans: "; echo $orm->profil_melumat($_SESSION["ad"])["balans"];
 
  echo '
  ₼</a></li>';
  }
  
  echo '</ul>
  </div>
  <div class="card-body"  id="menu">
  
  <table class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">First</th>
      <th scope="col">Last</th>
      <th scope="col">Handle</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
  
  
  
  
  
  </div>


<div id="cevir">
  </div>
  
  
</div>











';

echo '<script>






var menu = document.getElementById("menu");
function xidmetler() {


  document.getElementById("menu").innerHTML =`
  <div style="padding-top:25%;padding-bottom:25%">

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<br>
yüklənir...

</div>
  `;  

setTimeout(function() {
  var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=xidmetler",true);
  http.send();
   
    http.onreadystatechange = function(){
menu.innerHTML = http.responseText;
document.getElementById("cevir").innerHTML=`
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
  `;
      
    }
document.getElementById("xidmetler").className="nav-link active";
document.getElementById("xidmet_elavesi").className="nav-link";


},1500);

}


function ajax_Xidmetler(hardan) {
  
  var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=ajax_xidmetler&hardan="+hardan.toString(),true);
  http.send();
   
    http.onreadystatechange = function(){
menu.innerHTML = http.responseText;
    }
    
document.getElementById("xidmetler").className="nav-link active";
document.getElementById("xidmet_elavesi").className="nav-link";

}


xidmetler();



</script>
<script src="seyfeleme.js"></script>
<script src="menicer.js"></script>
<script src="xidmet_elavesi_js.php"></script>


';

?>