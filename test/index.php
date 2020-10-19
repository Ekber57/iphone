<html>
  <head>
    <title>zuck.js</title>

    <link rel="icon" href="ICON.png">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0" />

    <!-- demo styles -->
    <link rel="stylesheet" href="demo/style.css">

    <!-- lib styles -->
    <link rel="stylesheet" href="dist/zuck.min.css">
    
    <!-- lib skins -->
    <link rel="stylesheet" href="dist/skins/snapgram.css">
  </head>

  <body>
    <h1 id="header">&nbsp;</h1>

    <a href="https://ramon.codes/projects/zuck.js" target="_blank" class="disclaimer">
      <img src="ICON.png" alt="zuck.js logo" />

      <p>This a demonstration of <strong>zuck.js</strong> javascript library.</p>
      <p>Not associated with Facebook, Instagram, WhatsApp or Snapchat.</p>
    </a>

    <div id="stories" class="storiesWrapper"></div>

    <script src="dist/zuck.min.js"></script>
    <script src="demo/script.js"></script>


<script>
const stories = new Zuck('stories', {
  backNative:true,
  autoFullScreen:'false',
  skin:'Snapgram',
  avatars:'true',
  list:false,
  cubeEffect:'true',
  localStorage:true,
});
<?php
include "statusCek.php";

$data = statusCek();


while ($data = mysqli_fetch_assoc($data)) {
  
  $status = json_decode($data["status"]);
  if(empty($status->status)) continue;
  echo "stories.update(";
  echo "{
    ";
  echo "id:'".$status->id."',";
  echo "photo:'".$status->photo."',";
  echo "name:'".$status->nik."',";
  echo "link:'".$status->profil_linki."',";
  echo "lastUpdated:'".$status->lastUpdated."',";
  echo "seen: false,";
  echo "items: [" ;
  $status = explode("|",$status->status);
  foreach ($status as $item) {
  $item = explode(",",$item);
  echo "{
    ";
  echo "id:'".$item[0]."',";
  echo "type:'".$item[1]."',";
  echo "length:'".$item[2]."',";
  echo "src:'".$item[3]."',";
  echo "preview:'".$item[4]."',";
  echo "link:'".$item[5]."',";
  echo "linkText:'".$item[6]."',";
  echo "lastUpdated:'".$item[7]."',";
  echo "seen: false";
  echo "},";
}
  echo "]})";
 

}


?>



    </script>
  </body>
</html>
