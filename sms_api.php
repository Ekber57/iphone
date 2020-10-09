<?php

$token = $_GET['token'];
if($token == "azehost") {


  include "funksiyalar.php";
   
      
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


ay: $ay ₼ \n
il: $il ₼ \n
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