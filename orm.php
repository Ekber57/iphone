<?php

class orm
{

private $username = "root" ;
private $password = "" ;
private $pdo;
  
  /**
   * 
   */
  public function __construct()
  {
    try {
      $this->pdo = new PDO("mysql:host=localhost; dbname=apple" , $this->username,
      $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION);
        } 
    catch (PDOException $e) {
       echo $e->getMessage();
      
      }
      
  } 
  
  function profil_melumat($istifadeci) {
     $balans = $this->pdo->prepare("select * FROM  istifadeciler where ad_soyad=?");
   $balans->execute(array($istifadeci));
   return $balans->fetch(PDO::FETCH_ASSOC);
  }
  
  
  
  
  
  
  
  
  function yeniXidmet($model,$gonderen,$problem,$maya,$qiymet,$elaqe) {
    
    $tarix = date("Y-m-d");
    $xidmet_elave_et = $this->pdo->prepare("insert into xidmetler (model,musterini_gonderen,problem,qiymet,elaqe,maya_deyeri,tarix) values (?,?,?,?,?,?,?)");
    $xidmet_elave_et->execute(array($model,$gonderen,$problem,$qiymet,$elaqe,$maya,$tarix));
    
  }
  
  function pul_cixar($istifadeci,$mebleq) {
   $balans = $this->pdo->prepare("select balans FROM  istifadeciler where ad_soyad=?");
   $balans->execute(array($istifadeci));
   
   
  $balans = $balans->fetch(PDO::FETCH_ASSOC);
  $balans = $balans["balans"];
  if($balans > $mebleq) {
  $balans = $balans - $mebleq;
   $cixar = $this->pdo->prepare("UPDATE istifadeciler set balans = ? where ad_soyad=?");
   $cixar->execute(array($balans,$istifadeci));
  return true;
  }
  else {
    return false;
  }
  }
  
  
  

function balans_tenzimle($id,$deyer,$e) {
  $balans = $this->pdo->prepare("select balans FROM  istifadeciler where ad_soyad=?");
   $balans->execute(array($id));
  $balans = $balans->fetch(PDO::FETCH_ASSOC);
  $balans = $balans["balans"];
  $balans = $balans - $deyer;
  $sql ="UPDATE istifadeciler set balans=? where ad_soyad=?";
  $balan_tenzimle = $this->pdo->prepare($s);
  $balan_tenzimle->execute(array($balans,$id));
}




function xidmet_sil($id) {
  $sil = $this->pdo->prepare("DELETE FROM xidmetler where id=?");
  $sil->execute(array($id));
  
}
  
  


function qeydiyyat($ad_soyad,$nomre,$login,$sifre,$balans) {
  $yoxla = $this->pdo->prepare("select * from istifadeciler where login=?");
  $yoxla->execute(array($login));
  if($yoxla->rowCount() == 0) {
    $tarix = date("Y-m-d");
    $xidmet_elave_et = $this->pdo->prepare("insert into istifadeciler (ad_soyad,nomre,login,sifre,balans) values (?,?,?,?,?)");
    $xidmet_elave_et->execute(array($ad_soyad,$nomre,$login,$sifre,$balans));
    return true;
  } else {
    return false;
  }
  }

function login($login,$sifre) {
  $yoxla = $this->pdo->prepare("select * from istifadeciler where login=? && sifre=?");
  $yoxla->execute(array($login,$sifre));
  if($yoxla->rowCount() > 0) {
  return $yoxla->fetch(PDO::FETCH_ASSOC);
   
  } else {
    return false;
  }
  }



function ajaxButunXidmetler($hardan) {
  
      $butun_xidmetler = $this->pdo->query("select * from xidmetler order by id DESC limit $hardan,12");
      $butun_xidmetlersay = $this->pdo->query("select * from xidmetler order by id DESC");
      return array($butun_xidmetler->fetchAll(),$butun_xidmetlersay->rowCount());
    }
  


  
  



function butunXidmetler($sira) {
    if($sira == 1) {
      // azalan siralama
      $butun_xidmetler = $this->pdo->query("select * from xidmetler order by id DESC limit 0,12");
      return array($butun_xidmetler->fetchAll(),$this->pdo->query("select * from xidmetler")->rowCount());
    }
    else {
      // artan siralama
            $butun_xidmetler = $this->pdo->query("select * from xidmetler order by id ASC");
              return $butun_xidmetler->fetchAll();
      
    }
  }
  

function statistika($hardan=false) {
    if($hardan == false) {
     
      $butun_xidmetler = $this->pdo->query('Select DATE_FORMAT(tarix,"%M,%Y") as ay, SUM(maya_deyeri) as pul, SUM(qiymet) as q  FROM xidmetler where status=1 GROUP BY ay order by DATE(tarix) DESC LIMIT 0,3');
     
      $say = $this->pdo->query('Select DATE_FORMAT(tarix,"%M,%Y") as ay, SUM(maya_deyeri) as pul, SUM(qiymet) as q  FROM xidmetler where status=1 GROUP BY ay order by DATE(tarix) DESC');
     
     
      return array($butun_xidmetler->fetchAll(),$say->rowCount());
    }
    else {
      
      $butun_xidmetler = $this->pdo->query("Select DATE_FORMAT(tarix,'%M,%Y') as ay, SUM(maya_deyeri) as pul, SUM(qiymet) as q  FROM xidmetler where status=1 GROUP BY ay order by DATE(tarix) DESC LIMIT $hardan,3");
      return $butun_xidmetler->fetchAll();
    }
      
    
  }
  
  
  


function xidmet_deyisdir($id,$model,$problem,$my,$qiymet,$elaqe) {
  $xidmet_yenile = $this->pdo->prepare("UPDATE xidmetler set model=?,problem=?,maya_deyeri=?,qiymet=?,elaqe=? where id=?");
  $xidmet_yenile->execute(array($model,$problem,$my,$qiymet,$elaqe,$id));
  
}







  function statusDeyis($id) {
    $id = (int)$id;
    $status = $this->pdo->query("select * from xidmetler where id=$id");
    $fetch= $status->fetch(PDO::FETCH_ASSOC);
    $status = $fetch["status"];
    if($status >= 0 && $status != 2) {
      $update = $this->pdo->query("update xidmetler set status = status+1 where id=$id");
      
    }
    else {
      $update = $this->pdo->query("update xidmetler set status=0 where id=$id");
    }
    
  }
  
  
  
  
  
 function istifadeciler() {
   $istifadeciler = $this->pdo->query("select ad_soyad from istifadeciler where login!='admin'");
   return $istifadeciler->fetchAll();
 }
  
}
