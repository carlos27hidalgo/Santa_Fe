<?php 

	if (!isset($_POST['submit'])) {
		echo "error, debes enviar la forma!";
	}

	$name = $_POST['mail'];
	$message = $_POST['texto'];

	if (empty($name)||empty($message)) {
		echo "Correo electronico y mensaje requeridos!"
		exit;
	}

	$email_form = 'carlos27hidalgo@gmail.com';
	$email_subject = "Nuevo correo de Santa Fe"
	$email_body = "Nuevo correo de $name.\n". "Mensaje: $message".

	$to = "carlos27hidalgo@gmail.com";
	$headers = "From: $email_form \r\n";

	mail($to,$email_subject, $email_body, $headers);

 ?>