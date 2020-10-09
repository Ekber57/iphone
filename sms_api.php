<?php

$token = $_GET['token'];

if($token == "azehost") {

 function ayi_reqemeCevir($ay) {
switch ($ay) {
  case 'januray':
    // code...
    return "01";
    break;
  
  case 'february':
    
    // code...
    return "02";
    break;
  
  case 'march':
    // code...
    return "03";
    break;
  
  case 'april':
    // code...
    return "04";
    break;
  
  case 'may':
    // code...
    return "05";
    break;
  
  case 'june':
    return '06';
    // code...
    break;
  
  case 'july':
    // code...
    return '07';
    break;
  
  case 'august':
    // code...
   return  "08";
    break;
  
  case 'september':
    return "09";
    break;
  
  case 'october':
    // code...
    return "10";
    break;
  
  case 'november':
    // code...
    return "11";
    break;
  
  default:
    // code...
    return "12";
    break;
}
}


function ay_tercume($ay) {
switch ($ay) {
  case 'januray':
    // code...
    return "Yanvar";
    break;
  
  case 'february':
    return 'Fevral';
    // code...
    break;
  
  case 'march':
    // code...
    return 'Mart';
    break;
  
  case 'april':
    // code...
    return "Aprel";
    break;
  
  case 'may':
    // code...
    return "May";
    break;
  
  case 'june':
    return 'İyun';
    // code...
    break;
  
  case 'july':
    // code...
    return 'İyul';
    break;
  
  case 'august':
    // code...
    return "Avqust";
    break;
  
  case 'september':
    return "Sentyabr";
    break;
  
  case 'october':
    // code...
    return "Oktyabr";
    break;
  
  case 'november':
    // code...
    return "Noyabr";
    break;
  
  default:
    // code...
    return "Dekabr";
    break;
}
}

   
      
include "orm.php";
$orm = new orm();
$g = $orm->statistika();


foreach($g[0] as $k) {


$ay_ = ay_tercume(strtolower((explode(",",$k[0])[0])));

$il = explode(",",$k[0])[1];





$maya = $k["pul"];

$gelir  =  $k["q"]; 


$xalis =  $k["q"] - $k["pul"];
$odenis = new orm();
$date = [$ay,$il] = explode(",",$k["ay"]);
$ay = ayi_reqemeCevir(strtolower($ay));
$odenis=$odenis->odenisler($ay,$il,"statistika");
if($odenis["odenis"] != "") {
$xalis = $xalis - $odenis["odenis"];

}


$mesaj = "

APPLE SERVİCE \n


ay: $ay_ \n
il: $il \n
maya: $maya ₼ \n
ödəniş: $gelir ₼ \n
gəlir: $xalis ₼ \n
";
echo $mesaj;

require_once 'sms.ru.php';
$smsru = new SMSRU('EB24A8F2-1214-443A-208E-61DD999BA8E0'); // Ваш уникальный программный ключ, который можно получить на главной странице

$data = new stdClass();
$data->to = '994553530224';
$data->text = $mesaj; // Текст сообщения
 $data->from = 'telenet'; // Если у вас уже одобрен буквенный отправитель, его можно указать здесь, в противном случае будет использоваться ваш отправитель по умолчанию
// $data->time = time() + 7*60*60; // Отложить отправку на 7 часов
// $data->translit = 1; // Перевести все русские символы в латиницу (позволяет сэкономить на длине СМС)
// $data->test = 1; // Позволяет выполнить запрос в тестовом режиме без реальной отправки сообщения
// $data->partner_id = '1'; // Можно указать ваш ID партнера, если вы интегрируете код в чужую систему
$sms = $smsru->send_one($data); // Отправка сообщения и возврат данных в переменную

if ($sms->status == "OK") { // Запрос выполнен успешно
    echo "Сообщение отправлено успешно. ";
    echo "ID сообщения: $sms->sms_id. ";
    echo "Ваш новый баланс: $sms->balance";
} else {
    echo "Сообщение не отправлено. ";
    echo "Код ошибки: $sms->status_code. ";
    echo "Текст ошибки: $sms->status_text.";
}





break;
 }
    
}
?>