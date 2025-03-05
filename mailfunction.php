<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'plugin/PHPMailer/src/Exception.php';
require 'plugin/PHPMailer/src/PHPMailer.php';
require 'plugin/PHPMailer/src/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();

$mail->Host = 'smtp.gmail.com';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Port = 587;
$mail->Username   = 'soumyaphadhan.2004@gmail.com';
$mail->Password   = 'zqlv vmvc htop xudw';


$mail->setFrom('soumyaphadhan.2004@gmail.com', 'Hospital Management');

$mail->addAddress('9382soumya@gmail.com', 'soumya pradhan');

$mail->isHTML(true);
$mail->CharSet = 'UTF-8';


$mail->Subject = '=====subject goes here=======';
$mail->Body = "<h1> hlw , my name is soumya pradhan. Have a good day";

$mail->send();
if (!$mail->send()) {
    echo $mail->ErrorInfo;
} else {
    echo "Successfully Send the Mail.";
}
