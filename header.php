<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="my.css">

<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<title></title>


<style type="text/css">


body {
 height:100%;
 background-image: url("img/bg.jpg");
 background-color: #cccccc;
background-repeat: no-repeat;
background-position: center;
  background-repeat: no-repeat;
  background-size: cover;


}

#bg {
  position: fixed; 
  top: 0; 
  left: 0; 
	
  /* Preserve aspet ratio */
  min-width: 100%;
  min-height: 100%;
}


.navbar-light.navbar-nav.nav-link {
    color: red;
}



 /*


html { 
  background: url(img/bg.jpg) no-repeat center center fixed; 
  -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;

background-repeat: no-repeat;
}
*/






td,th {
color:white;
font-weight:bold;
}





.lds-roller {
  display: inline-block;
  position: relative;
  width: 80px;
  height: 80px;
}
.lds-roller div {
  animation: lds-roller 1.2s cubic-bezier(0.5, 0, 0.5, 1) infinite;
  transform-origin: 40px 40px;
}
.lds-roller div:after {
  content: " ";
  display: block;
  position: absolute;
  width: 7px;
  height: 7px;
  border-radius: 50%;
  background: white;;
  margin: -4px 0 0 -4px;
}
.lds-roller div:nth-child(1) {
  animation-delay: -0.036s;
}
.lds-roller div:nth-child(1):after {
  top: 63px;
  left: 63px;
}
.lds-roller div:nth-child(2) {
  animation-delay: -0.072s;
}
.lds-roller div:nth-child(2):after {
  top: 68px;
  left: 56px;
}
.lds-roller div:nth-child(3) {
  animation-delay: -0.108s;
}
.lds-roller div:nth-child(3):after {
  top: 71px;
  left: 48px;
}
.lds-roller div:nth-child(4) {
  animation-delay: -0.144s;
}
.lds-roller div:nth-child(4):after {
  top: 72px;
  left: 40px;
}
.lds-roller div:nth-child(5) {
  animation-delay: -0.18s;
}
.lds-roller div:nth-child(5):after {
  top: 71px;
  left: 32px;
}
.lds-roller div:nth-child(6) {
  animation-delay: -0.216s;
}
.lds-roller div:nth-child(6):after {
  top: 68px;
  left: 24px;
}
.lds-roller div:nth-child(7) {
  animation-delay: -0.252s;
}
.lds-roller div:nth-child(7):after {
  top: 63px;
  left: 17px;
}
.lds-roller div:nth-child(8) {
  animation-delay: -0.288s;
}
.lds-roller div:nth-child(8):after {
  top: 56px;
  left: 12px;
}
@keyframes lds-roller {
  0% {
    transform: rotate(0deg);
  }
  100% {
    transform: rotate(360deg);
  }
}

  
</style>
</head>
<body>
<img src="img/bg.jpg" id="bg" alt="">



<nav class="navbar  navbar-light" >
  <a class="navbar-brand" href="#">
  <img src="https://www.freepnglogos.com/uploads/apple-logo-png/apple-logo-png-what-you-need-know-before-rebranding-11.png" width="30" height="30" class="d-inline-block align-top" alt="">
  <small><b><big style="color:white">iPhone service</b></big></small>
  </a>
  
  
  
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="" role="button" ><i class="fa fa-bars" aria-hidden="true" style="color:#e6e6ff"></i></span>
</button>
  
  
  
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">

      <?php
      session_start();
     if(isset($_SESSION["admin"])){
     echo '
<b>
 <a class="nav-item nav-link active" style="color:white" href="admin.php">Ana Səhifə<span class="sr-only">(current)</span></a>
     
     
     <a class="nav-item nav-link active" style="color:white" href="admin.php?bolme=faiz_ver">Faiz Təyini <span class="sr-only">(current)</span></a>
     
     
     <a class="nav-item nav-link active" style="color:white" href="admin.php?bolme=userler">Menecer Panel <span class="sr-only">(current)</span></a>
     
     <a class="nav-item nav-link active" style="color:white" href="admin.php?bolme=statistika">Statistika <span class="sr-only">(current)</span></a>
     <a class="nav-item nav-link active" style="color:white" href="admin.php?bolme=odenis_et">Ödəniş et <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link active" style="color:white" href="admin.php?bolme=qeydiyyat">Menecer Qeydiyyatı</a>';
      
     }
     if(isset($_SESSION["admin"]) || isset($_SESSION["user"]) ) {
     echo ' <a class="nav-item nav-link active" style="color:white" href="admin.php?bolme=cixis_et">Çıxış Et</a>';
      
     }
      ?>
     </b>
    </div>
  </div>
</nav>

<div class="container-fluid">
