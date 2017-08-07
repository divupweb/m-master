<?php
session_start();
$recepient = strip_tags($_SESSION['e-mail']);
$sitename = "test.by";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$message = "Имя: $name\nТелефон: $phone";
$pagetitle = "Заказ на обратный звонок с сайта: \"$sitename\"";
$from_email="test.by";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email");