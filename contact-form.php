<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

/* Ваш адрес и тема сообщения */
$address = "pochta@kakoy-to-sajt.com";
$sub = "Сообщение с сайта ХХХ";

/* Формат письма */
$mes = "Сообщение с сайта ХХХ.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";



	$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
	if (mail($address, $sub, $mes, $from)) {
		header('Refresh: 5; URL=https://biznessystem.ru');
		echo 'Письмо отправлено, через 5 секунд вы вернетесь на страницу XXX';
	} else {
		header('Refresh: 5; URL=https://biznessystem.ru');
		echo 'Письмо не отправлено, через 5 секунд вы вернетесь на страницу YYY';
	};

?>