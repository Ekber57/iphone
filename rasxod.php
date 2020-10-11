<?php

  include "header.php";
  include "orm.php";

echo '
<div class="shadow p-3 mb-5 bg-transparent rounded">
  <div class="card text-center bg-transparent">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
<li class="nav-item">
  <a class="nav-link" style="color:white; background-color:#0275d8"  href="admin.php">ana səhifə</a>
  </li>


  <li class="nav-item">
  <a class="nav-link active" href="#">Xərc əlavəsi</a>
  </li>
  </ul>
  </div>
  <div class="card-body"  id="menu">';


echo '
<div id="alert"></div>
<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">

<svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-card-text" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
  <path fill-rule="evenodd" d="M14.5 3h-13a.5.5 0 0 0-.5.5v9a.5.5 0 0 0 .5.5h13a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
  <path fill-rule="evenodd" d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
</svg>

</span>
</div>
<input id="xerc" type="text" class="form-control" placeholder="xərcin məzmunu" aria-label="model" aria-describedby="basic-addon1" >
</div>

<div class="input-group mb-3">
<div class="input-group-prepend">
<span class="input-group-text" id="basic-addon1">
<i class="fa fa-money"></i>
</span>
</div>
<input id="mebleq" type="number" class="form-control" placeholder="xərcin məbləği" aria-label="model" aria-describedby="basic-addon1" value="0" >
</div>






<a href="#" id="xerc_duymesi" onclick="elave_et()" class="btn btn-primary">əlavə et</a>
<script src="xerc_elavesi.js"></script>
';




?>