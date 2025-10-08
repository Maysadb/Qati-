<?php

$lang = $_POST['lang'];
$headers[] = 'From: ' . $_POST['email'];
$headers[] = 'Content-type: text/html; charset=utf-8';

$message = "<h3>". $_POST['name']. "</h3>";
$message .= $_POST['message'];

if(mail("abdelelah.babiker@smartvisions.com.sa", "Smartvisions website", $message, implode("\r\n", $headers))) {
    if($lang == 'en') {
        echo "Email sent successfully";
    } else {
        echo "تم إرسال الرسالة بنجاح";
    }
} else {
     if($lang == 'en') {
        echo "Error Occurred, mail not sent";
    } else {
        echo "حدث حطأ، لم يتم إرسال الرسالة";
    }
}
