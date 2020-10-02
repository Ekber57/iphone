<?php

class orm
{

private $username = "nurlan_apple" ;
private $password = "apple" ;
private $pdo;
  
  /**
   * 
   */
  public function __construct()
  {
    try {
      $this->pdo = new PDO("mysql:host=localhost; dbname=nurlan_apple" , $this->username,
      $this->password);
      $this->pdo->setAttribute(PDO::ATTR_ERRMODE,
      PDO::ERRMODE_EXCEPTION);
        } 
    catch (PDOException $e) {
       echo $e->getMessage();
      
      }
      
  }
  function yeniXidmet($model,$gonderen,$problem,$maya,$qiymet,$elaqe) {
    
    $tarix = date("Y-m-d");
    $xidmet_elave_et = $this->pdo->prepare("insert into xidmetler (model,musterini_gonderen,problem,qiymet,elaqe,maya_deyeri,tarix) values (?,?,?,?,?,?,?)");
    $xidmet_elave_et->execute(array($model,$gonderen,$problem,$qiymet,$elaqe,$maya,$tarix));
    
  }





  
  



function butunXidmetler($sira) {
    if($sira == 1) {
      // azalan siralama
      $butun_xidmetler = $this->pdo->query("select * from xidmetler order by id DESC");
      return array($butun_xidmetler->fetchAll(),$butun_xidmetler->rowCount());
    }
    else {
      // artan siralama
            $butun_xidmetler = $this->pdo->query("select * from xidmetler order by id ASC");
              return $butun_xidmetler->fetchAll();
      
    }
  }
  

function butunXidmetler2($sira) {
    if($sira == 1) {
      // azalan siralama
      $butun_xidmetler = $this->pdo->query('Select DATE_FORMAT(tarix,"%M,%Y") as ay, SUM(qiymet) as pul  FROM xidmetler GROUP BY ay order by DATE(tarix)');
      return $butun_xidmetler->fetchAll();
    }
    else {
      // artan siralama
            $butun_xidmetler = $this->pdo->query("select * from xidmetler order by id ASC");
              return $butun_xidmetler->fetchAll();
      
    }
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
  
  
  
  
  
  
  
}
