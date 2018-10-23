<?php
 require_once('class.phpmailer.php');
        $mail             = new PHPMailer();
        $mail->IsSMTP(); // telling the class to use SMTP
        //$mail->SMTPAuth   = true;                  // enable SMTP authentication

       // $mail->Host       = "ssl://smtp.gmail.com:465"; // SMTP server
        $mail->Host       = "127.0.0.1"; // SMTP server
        $mail->Username   = "";  // SMTP username
        $mail->Password   = "";            // SMTP password
        $mail->From       = 'support@scigenom.com';
        $mail->Port       = 25;

        

        $mail->FromName   = 'SciGenom Support --(Test Mail) Testing server';

        $mail->AddAddress('somjisoman01@gmail.com','somji');
        $mail->Subject    = "Sub";
        $mail->Body ="Body";
        $mail->IsHTML(true);// send as HTML
         if(!$mail->Send()) {
            $msg = "Mailer Error: " . $mail->ErrorInfo;
        } else {
            $msg = "senddd";
        } 

        print_r($mail->Send());
        die();
        khjkjh
?>