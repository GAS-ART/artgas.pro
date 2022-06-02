<?php

$name = $phone = $professions = $group = $email = $docs = $work = $date = $reasoncheсk = $delivery = "";

if (isset($_POST['name']) && isset($_POST['professions']) && isset($_POST['reason-cheсk']) && isset($_POST['work']) && isset($_POST['date']) && isset($_POST['delivery']) && isset($_POST['group']) && isset($_POST['phone']) && isset($_POST['email'])){
   $name = sanitizeString($_POST['name']);
   $professions = sanitizeString($_POST['professions']);
   $group = sanitizeString($_POST['group']);
   $phone = sanitizeString($_POST['phone']);
   $email = sanitizeString($_POST['email']);
   $work = sanitizeString($_POST['work']);
   $date = sanitizeString($_POST['date']);
   $reasoncheck = sanitizeString($_POST['reason-cheсk']);
   $delivery = sanitizeString($_POST['delivery']);
   $send = "Имя: " . $name . "\n\n" . "Телефон: " . $phone . "\n\n" . "Email: " . $email . "\n\n" . "Профессия: " . $professions . "\n\n" . "Группа: " . $group  . "\n\n" . "Место работы: " . $work  . "\n\n" ."Причина проверки: " . $reasoncheck  . "\n\n" . "Адрес доставки документов: " . $delivery  . "Дата: " . $date . "\n\n" ;
} elseif (isset($_POST['name']) && isset($_POST['phone'])){
   $name = sanitizeString($_POST['name']);
   $phone = sanitizeString($_POST['phone']);
   $send = "Имя: " . $name . "\n\n" . "Телефон: " . $phone . "\n\n";
} elseif (isset($_POST['name']) && isset($_POST['phone']) && isset($_POST['docs']) && isset($_POST['email'])){
   $name = sanitizeString($_POST['name']);
   $phone = sanitizeString($_POST['phone']);
   $email = sanitizeString($_POST['email']);
   $docs = sanitizeString($_POST['docs']);
   $send = "Имя: " . $name . "\n\n" . "Документы: " . $docs . "\n\n" . "Телефон: " . $phone . "\n\n" . "Email: " . $email . "\n\n";
} else {
   $send = "ДАННЫЕ НЕ ПОЛУЧЕНЫ!";
}

mail('temoha1386@gmail.com', 'ЗАКАЗ ЗВОНКА', $send);

function sanitizeString($var){
   if (get_magic_quotes_gpc())
      $var = stripslashes($var);
      $var = htmlentities($var);
      $var = strip_tags($var);
      $var = urldecode($var);
      $var = trim($var);
      return $var;
}
?>