<?php
    $level = $_POST['level'];
    $train = $_POST['train'];
	$safety = $_POST['safety'];
    $location = $_POST['location'];
    $email = $_POST['email'];

	$to = "bashinartemsk122@gmail.com";
	$date = date ("d.m.Y"); 
	$time = date ("h:i");
	$from = $email;
	$subject = "Заявка c сайта";

	
	$msg="
    Уровень: $level /n
    Вариант тренажера: $train /n
    Техника безопасности: $safety /n
    Локация: $location /n
    Почта: $email";
	mail($to, $subject, $msg, "From: $to ");

?>

<p>Привет, форма отправлена</p>
