


//var data_sayi = 0;
var say = 0;
var seyfe = 1;
var seyfe_sayi = 1;
var data_sayi = 0;




function daha_cox() {
  
data_sayi = document.getElementById("data_sayi").textContent;

seyfe_sayi = Math.ceil(data_sayi/3);
if(seyfe_sayi > seyfe && document.getElementById("novbeti").className != "page-item disabled") {
  document.getElementById("menu").innerHTML =`
  <div style="padding-top:25%;padding-bottom:25%">

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>
<br>
yüklənir...

</div>





  `;
  say+=3;
  setTimeout(function() {
    
    
  var http = new XMLHttpRequest();
  http.open("GET","ajax.php?service=ajax_statistika&hardan="+say.toString(),true);
  http.send();
   
    http.onreadystatechange = function(){
document.getElementById("menu").innerHTML = http.responseText;
   
    }

//  if(data)
  seyfe+=1;
  
 if(seyfe_sayi == seyfe) {
  
   document.getElementById("novbeti").className = "page-item disabled";
 }
 if(seyfe != 1) {
   document.getElementById("evvelki").className = "page-item";
 }
 

 
 

},1500);
}
}





function daha_az() {
  

data_sayi = document.getElementById("data_sayi").textContent;
seyfe_sayi = Math.ceil(data_sayi/3);
if(say>0) {
if(seyfe >=1 && document.getElementById("evvelki").className != "page-item disabled") {
say-=3;

  document.getElementById("menu").innerHTML =`
  <div style="padding-top:25%;padding-bottom:25%">

<div class="lds-roller"><div></div><div></div><div></div><div></div><div></div><div></div><div></div><div></div></div>

  <br>
  yüklənir...
</div>
  `;
  
  
  setTimeout(function(){
  var http = new XMLHttpRequest();
  if(say > 0) {
  
  http.open("GET","ajax.php?service=ajax_statistika&hardan="+say.toString(),true);
  }
  else {
    
  http.open("GET","ajax.php?service=ajax_statistika",true);
  }
  http.send();
   
    http.onreadystatechange = function(){
document.getElementById("menu").innerHTML = http.responseText;
   
    }
//document.getElementById("xidmetler").className="nav-link active";

///document.getElementById("xidmet_elavesi").className="nav-link";

  
  

//  if(data)
  seyfe-=1;


 if(seyfe_sayi > seyfe) {
  
   
   document.getElementById("novbeti").className = "page-item";
 }
 
 
 
 if(seyfe_sayi == 1) {
   
   document.getElementById("novbeti").className = "page-item disabled";
 }
 

 if(seyfe ==  1) {
   
   document.getElementById("evvelki").className = "page-item disabled";
 }
  },1500);
 
}
}

}




