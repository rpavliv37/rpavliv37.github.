<?php

$recepient = "rpavliv37@gmail.com";
$siteName = "LA";

$name = trim($_POST["user_name"]);
$phone = trim($_POST["user_phone"]);
$mes = trim($_POST["message"]);

$message = "Імя: $name \nТелефон: $phone \nПовідомлення: $mes";

$pagetitle = "Заявка с сайта \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>