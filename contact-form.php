<?php
	header('Location: sended-form.html');
	if (!isset($_POST['submit'])) {
			echo "Error: Tienes que enviar el formulario";
		}
		$name = $_POST['name'];
		$email = $_POST['email'];
        $cel = $_POST['cel'];
        $date = $_POST['date'];
		$message = $_POST['message'];

		$email_from = 'galeriamexicocr@gmail.com';
		$email_subject = 'Has recibido un correo nuevo de galeriamexicocr.com';
		$email_body = "Nos escribe: " . $name . "\nCorreo: " . $email . "\nCelular: " .  $cel . "\Fecha: " . $date . "\nMensaje: " . $message;
		$to = 'galeriamexicocr@gmail.com';
		$headers = 'From: $email_from \r\n';

		mail($to, $email_subject, $email_body, $headers);
?>