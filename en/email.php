<?php
$to = "sushmasush1597@gmail.com";
$subject = "My subject";

$txt = "<div>Hello world!<br>TESt Mail</div>";

$headers = "From: no-reply@baumalight.com" . "\r\n";

$sent_from='no-reply@baumalight.com';

    $high_alert_headers = "MIME-Version: 1.0" . "\r\n";
    $high_alert_headers .= "Content-type:text/html;charset=UTF-8" . "\r\n"; 
    $high_alert_headers .= 'From: Baumalight<'.$sent_from.'>' . "\r\n";
    $high_alert_headers .= 'Cc: sushma.n@acufore.com' . "\r\n";
    $high_alert_headers .= "X-Priority: 1";

$mail=mail($to,$subject,$txt,$high_alert_headers);
if($mail){
    echo "Mail sent";
}
?>