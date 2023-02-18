<?php
use PHPMailer\PHPMailer\PHPMailer;


require 'Exception.php';
require 'PHPMailer.php';
require 'SMTP.php';

require_once 'spajanjebaza.php';
require_once 'funkcije.funk.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);


    //Server settings
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'tgsprojekt@gmail.com';                     //SMTP username
    $mail->Password   = 'zbqhffuitojakkjt';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('tgsprojekt@gmail.com');

    //Content
    $mail->isHTML(true);  
    $mail->addAddress($userEmail);                                //Set email format to HTML
    $mail->Subject = 'Aktivacijski kod';
    $mail->Body    = "Postovani" .$userName.' '.$userSurname."Vas aktivacijski kod je <bold>".$activationCode ."</bold>. Unesite ovaj kod u trazenu rubriku nase aktivacijske stranice da bi aktivirali vas racun. Srdacan pozdrav";


   if ($mail->send()){
    echo 'Message has been sent';
   }

   else{
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
   }
