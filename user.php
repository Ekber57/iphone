<?php
  //case "xidmetler":
    include "header.php";
    include "orm.php";
    
    $orm = new orm();
    $userler = $orm->istifadeciler();
   

echo '
<div class="shadow p-3 mb-5 bg-white rounded">
  <div class="card text-center">
  <div class="card-header" >
  <ul class="nav nav-tabs card-header-tabs">
  <li class="nav-item">
  <a class="nav-link active" href="#">menecer panel</a>
  </li>
  </ul>
  </div>
  <div class="card-body" ><div id="data_sayi" style="display:none">';
  echo count($userler);
  echo "</div>
  <div id='menu'>";


echo '
<div class="table-responsive-lg">
<table  class="table table-bordered">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">ad soyad</th>
      <th scope="col">nömrə</th>
      <th scope="col">login</th>
      <th scope="col">şifrə</th>
      <th scope="col">balans</th>
    </tr>
    </thead>
    <tbody>';
    $say = 1;
    
    
    echo '
  
<div class="modal fade" id="deyis" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">menecer məlümatları</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="deyisdir">
        
      </div>
      <div class="modal-footer">
        <button id="texire_sal" type="button" class="btn btn-secondary" data-dismiss="modal">təxirə sal</button>
        
        <!--
        <button type="button" class="btn btn-primary"  data-toggle="modal" data-target="#deyis">dəyişdir</button>
        

-->

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-primary" data-toggle="modal" data-target="#deyis_alert">dəyişdir</button>

        <button id="deyisdir_duymesi" onclick= document.getElementById("texire_sal").click() type="button" class="btn btn-danger" data-toggle="modal" data-target="#exampleModalCenter">sil</button>
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
  
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle">menecerin silinməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert">
        meneceri silməyə əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">xeyr</button>
        
        
        <button id="sil_duymesi" onclick="sil()" type="button" class="btn btn-danger">bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>
  
  
  
  
  
<div class="modal fade" id="deyis_alert" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    
    
    
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLongTitle"> məlümatların dəyişdirilməsi</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body" id="alert_deyisdirme">
        menecer məlümatlarının dəyişdirilməsinə əminsiniz?
      </div>
            <button style="display: none"  type="button" class="btn btn-secondary" id="close" data-dismiss="modal"></button>
        
      <div class="modal-footer" id="passiv_duyme_deyisdirme">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">xeyr</button>
        
        
        <button id="deyis_duymesi" onclick="deyisdir()" type="button" class="btn btn-danger">bəli</button>
        
        
        
      </div>
    </div>
  </div>
</div>


  
    
    ';
   
    foreach ($userler as $user) {
      
      
      
      
      
echo '
   
  
      
      
   
    <tr  id="'; echo $xidmet["id"]; echo '">
    
    
    
    ';
 
      
     echo ' <th scope="row">';
      echo $say;
      echo '</th>';
    echo '
    <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="ads'; echo $user["id"];
    echo '">';
   
      echo $user["ad_soyad"];
echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="nomre'; echo $user["id"];
    echo '">';
   
      echo $user["nomre"];
    
      
      echo '
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="login'; echo $user["id"];
    echo '">';
   
      echo $user["login"];
      echo '</td>
      
        <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="sifre'; echo $user["id"];
    echo '">';
   
      
      echo $user["sifre"];
     
      echo '</td>

  <td data-toggle="modal" data-target="#deyis" onclick="menicer(this.id)" id="balans'; echo $user["id"];
    echo '">';
   

      echo $user["balans"]; 
      echo ' ₼</td>';
echo "</tr>";
    $say+=1;
    
    }
    
    echo '
    </body></table>
    <nav aria-label="Page navigation example">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled" onclick="daha_az()" id="evvelki">
      <a class="page-link"href="#" tabindex="-1">əvvəlki </a>
    </li>
    <li class="page-item" id="novbeti" onclick="daha_cox()">
      <a class="page-link"   href="#">sonrakı</a>
    </li>
  </ul>
</nav>';
    
    
    
    
   echo "
   <script src='user_menicer.js'></script>
   <script src='admins/user_seyfele.js'></script>
   ";
   
   
   include "footer.html";
   ?>