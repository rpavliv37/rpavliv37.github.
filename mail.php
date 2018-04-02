<?php

$recepient = "julia@doba.lviv.ua";
$siteName = "doba.lviv.ua";

$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$mess = trim($_POST["mess"]);
$message = "Імя: $name \nТелефон: $phone \nПовідомлення: $mess";

$pagetitle = "Повідомлення з сайту \"$siteName\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");

?>