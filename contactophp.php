<?php

$nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : '';
$email = isset($_POST["email"]) ? $_POST["email"] : '';
$telefono = isset($_POST["telefono"]) ? $_POST["telefono"] : '';
$motivo = isset($_POST["motivo"]) ? $_POST["motivo"] : '';

$header = 'From: ' . $corr . " \r\n";
$header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
$header .= "Mime-Version: 1.0 \r\n";
$header .= "Content-Type: text/plain";

$message = "Este mensaje fue enviado por: " . $nombre . " \r\n";
$message .= "Su e-mail es: " . $email . " \r\n";
$message .= "Teléfono de contacto: " . $telefono . " \r\n";
$message .= "Mensaje: " . $motivo . " \r\n";
$message .= "Enviado el: " . date('d/m/Y', time());

$para = 'jonathansalini@hotmail.com';
$asunto = 'Mensaje de jsalini.cl';

mail($para, $asunto, $message, $header);

header("Location:index.html");
?>