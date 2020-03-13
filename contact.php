<?php

$para = 'serginavarro.ro@gmail.com';

$topic = 'Message from "La vida en Londres';

$mailheader = "From: ".$_POST["email"]."\r\n";
$mailheader .= "Reply-To: ".$_POST["email"]."\r\n";
$mailheader .= "Content-type: text/html; charset=utf-8\r\n";
$MESSAGE_BODY = "Name: ".$_POST["name"]."\n";
$MESSAGE_BODY .= "\n<br>Email: ".$_POST["email"]."\n";
$MESSAGE_BODY .= "\n<br>Message: ".n12br($_POST["message"])."\n";


mail($para, $topic, $MESSAGE_BODY, $mailheader) or die("No se ha podido enviar el mensaje");

header('');

?>