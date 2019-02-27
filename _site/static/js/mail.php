<?php

$recepient = "drewlesko@gmail.com";
$sitename = "Сайт obkat.com";

$name = trim($_POST["name"]);
$phone = trim($_POST["email"]);
$text = trim($_POST["text"]);
$message = "Имя: $name \nE-mail: $email \nТекст: $text";

$pagetitle = "Новая заявка с сайта \"$sitename\"";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $recepient");