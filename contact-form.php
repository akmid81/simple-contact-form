<?php
$name = htmlspecialchars($_POST["serial"]);
$email = htmlspecialchars($_POST["address"]);
$message = htmlspecialchars($_POST["message"]);
$nospam = htmlspecialchars($_POST["name"]);
$noemail = htmlspecialchars($_POST["email"]);

/* Your email & subject message */
$address = "youemail@gmail.com";
$sub = "Email subject";

/* Message */
$mes = "Message from site.com.\n
Users name: $name 
Users email: $email
Message: $message";


if (empty($nospam) && ($noemail == "a@b.c")) {
	$from  = "From: $name <$email> \r\n Reply-To: $email \r\n";
	
	if (mail($address, $sub, $mes, $from)) {
		echo json_encode(1);
	} else {
		echo json_encode(0);
	};
} else {
    echo json_encode(0);
};

exit;
?>
