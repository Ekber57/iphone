<?php
include "../orm.php";
$orm = new orm();
$g = $orm->butunXidmetler2(1);

echo '
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link active" href="#">statistika</a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';


echo '<div class="input-group mb-3">
<div class="input-group-prepend">
  <label class="input-group-text" for="inputGroupSelect01">
    
<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-file-person" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
<path fill-rule="evenodd" d="M12 1H4a1 1 0 0 0-1 1v10.755S4 11 8 11s5 1.755 5 1.755V2a1 1 0 0 0-1-1zM4 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H4z"/>
<path fill-rule="evenodd" d="M8 10a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
</svg>
    
    
    
  </label>
</div>
<select class="custom-select" id="gonderen">
  <option selected>göndərən seçin</option>';

$orm = new orm();
  $data = $orm->istifadeciler();
  foreach ($data as $istifadeci) {
    echo '<option value="';
    echo $istifadeci["ad_soyad"];
    echo '">';
    echo $istifadeci["ad_soyad"];
    echo "</option>";
    
  }
  
  echo '
</select>
</div>';



echo '<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="balans" type="number" class="form-control" placeholder="ilkin balans" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>


<a href="#" id="qeydiyyat" onclick="pul_cixar()"class="btn btn-primary">pul cixar</a>';



?>