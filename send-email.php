<?php

$nameReg = $_POST['name'];
$mailReg = $_POST['correo'];
$subject = "Ingreso a plataforma";
$numCuentaReg = $_POST['numcuenta'];
$mensaje = "Soy " . $nameReg . " mi correo es: ". $mailReg . " y mi número de cuenta es: ". $numCuentaReg . " ¿Puedo
ser parte de ArtVault?";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'includes/Exception.php';
require 'includes/PHPMailer.php';
require 'includes/SMTP.php';

$mail = new PHPMailer(true);
$mail->isSMTP();
$mail->SMTPAuth = true;

//$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//$mail->SMTPDebug = \PHPMailer\PHPMailer\SMTP::DEBUG_SERVER;

$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);

$mail->Host = "smtp.gmail.com";
$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
$mail->Port = 587;

$mail->Username = "addiasoc@gmail.com";
$mail->Password = "jalrcsjhveljomey";

$mail->setFrom($mailReg, $nameReg);
$mail->addAddress("addiasoc@gmail.com", "ADDI");

$mail->Subject = $subject;
$mail->Body = $mensaje;

$mail->send();

echo "<script> alert('Correo mandado satisfactoriamente.espera de 3 a 4 dias abiles para conseguir tu cuenta'); location.replace('index.php') </script>";

 ?>
