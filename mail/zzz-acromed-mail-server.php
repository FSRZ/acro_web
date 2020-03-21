<?php

if(isset($_POST['name']) && isset($_POST['email']) && isset($_POST['message']))
{
    $uname="mailserver@acromedical.com";
    $pass="BlackMedical@9090";
    $receiver="info@acromedical.com";
    
    $host="smtp.yandex.com";
    $method="ssl";
    $port=465;
        
    
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $city=$_POST['city'];
    $subject=$_POST['subject'];
    $message=$_POST['message'];    
    
    
    $body="Form Name: Contact Form<br>Name: $name<br>Email: $email<br>Phone: $phone<br>City: $city<br>Subject: $subject<br>Message: $message";
    
    require './phpmailer/PHPMailerAutoload.php';
    
    $username=$uname;
    $password=$pass;
    
    $sender="Mail Server";
    $subject="Contact Form Submission";
    $recipient=$receiver;
    
    
    $mail = new PHPMailer;

    //$mail->SMTPDebug = 4;                               // Enable verbose debug output

    $mail->isSMTP();                                      // Set mailer to use SMTP
    $mail->Host = $host;  // Specify main and backup SMTP servers
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = $username;                 // SMTP username
    $mail->Password = $password;                           // SMTP password
    $mail->SMTPSecure = $method;                            // Enable TLS encryption, `ssl` also accepted
    $mail->Port = $port;                                    // TCP port to connect to

    $mail->setFrom($username, $sender);
    $mail->addAddress($recipient);     // Add a recipient

    $mail->addReplyTo($username);

    $mail->isHTML(true);                                  // Set email format to HTML

    $mail->Subject = $subject;
    $mail->Body    = $body;
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    if(!$mail->send()) {
        //echo 'Message could not be sent.';
        //echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        //echo 'Message has been sent';
    }
}

?>