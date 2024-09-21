<?php

/* https://api.telegram.org/bot5833232543:AAGjZ0RdT6WHa3cAkBq2DqRV6GfjBGA9Eso/getUpdates,
где, XXXXXXXXXXXXXXXXXXXXXXX - токен вашего бота, полученный ранее */

$name = $_POST['name'];
$phone = $_POST['phone'];
$token = "5833232543:AAGjZ0RdT6WHa3cAkBq2DqRV6GfjBGA9Eso";
$chat_id = "-917600180";
$arr = array(
  'Имя пользователя: ' => $name,
  'Телефон: ' => $phone,
);

foreach($arr as $key => $value) {
  $txt .= "<b>".$key."</b> ".$value."%0A";
};

$sendToTelegram = fopen("https://api.telegram.org/bot{$token}/sendMessage?chat_id={$chat_id}&parse_mode=html&text={$txt}","r");


if ($sendToTelegram) {
  header('Location: thanks.html');
} else {
  echo "Error";
}
