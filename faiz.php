
case "faiz_ver":
include "orm.php";
echo '
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link active" href="#"Faiz təyin et: ';
$myfile = fopen("faiz.txt", "r") or die("Unable to open file!");
    $faiz = fread($myfile,filesize("faiz.txt"));
    fclose($myfile);
echo "Hazırkı % dəyəri: $faiz %";
  
  
  echo '
  </a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';


echo '
<div id="alert"></div>';
echo '<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
%
</span>
</div>
<input id="faiz" type="number" class="form-control" placeholder="faiz dərəcəsi" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>


<a href="#" id="faiz_duymesi" onclick="faiz_ver()" class="btn btn-primary">Təyin Et</a>
<script src="faiz_ver.js"></script>
';
break;


