<?php
include "orm.php";
$orm= new orm();
$date ="2020-09";
      [$il,$ay] = explode("-",$date);
$odenis=$orm->odenisler($ay,$il,"statistika");
print_r($odenis);
?>