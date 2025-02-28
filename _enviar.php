<?php
$to = "ikerguerra2000@gmail.com";
$subject = "My subject";
$txt = "Hello world!";
$headers = "From: ikerguerra@hotmail.es" . "\r\n" .
"CC: ikerguerra2000@gmail.com";

mail($to,$subject,$txt,$headers);
echo 'email enviado';
?>