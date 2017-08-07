<?php
session_start();
$recepient = strip_tags($_SESSION['e-mail']);
$sitename = "test.by";
$name = trim($_POST["name"]);
$phone = trim($_POST["phone"]);
$address = trim($_POST["address"]);
$task = trim($_POST["task"]);
$day =trim($_POST["day"]);
$month =trim($_POST["month"]);
$time =trim($_POST["time"]);
$message = "Имя: $name\nТелефон: $phone\nАдресс: $address\nОписание проблемы: $task\nДата для звонка: $day $month $time";
$pagetitle = "Подробный заказ на обратную связь с сайта: \"$sitename\"";
$from_email="test.by";
mail($recepient, $pagetitle, $message, "Content-type: text/plain; charset=\"utf-8\"\n From: $from_email", "-f $from_email");
