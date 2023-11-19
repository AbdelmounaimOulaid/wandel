<?php


function smtpmailer($to, $from, $from_name, $subject, $body)
{

    $headers  = "From:". $from_name." <" . strip_tags($from) . ">\r\n";
    $headers .= "MIME-Version: 1.0\r\n";
    $headers .= "Content-Type: text/html; charset=UTF-8\r\n";

    $message = '<p><strong>'.$body.'</p>';
    if (!mail($to,$subject,$message,$headers)) {
        return false;
    } else {
        return true;
    }
}
?>

