<?php

/* Задаем переменные */
$name = htmlspecialchars($_POST["name"]);
$email = htmlspecialchars($_POST["email"]);
$message = htmlspecialchars($_POST["message"]);

/* Ваш адрес и тема сообщения */
$address = "akmid81@gmail.com";
$sub = "Сообщение с сайта";

/* Формат письма */
$mes = "Сообщение с сайта для проверки формы.\n
Имя отправителя: $name 
Электронный адрес отправителя: $email
Текст сообщения:
$message";



	$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
	if (mail($address, $sub, $mes, $from)) {
		echo json_encode(true);
	} else {
		echo json_encode(false);
	};

?>