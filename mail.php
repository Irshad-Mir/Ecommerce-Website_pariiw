<?php
require './PHPMailer/PHPMailerAutoload.php';
session_start();
require_once "./functions/admin.php";


if($_POST)

    $msg=$_POST['textarea'];
 if($_SESSION['user']== 'sajad')   
{
	
 
 $email=$_SESSION['admin'];

         
     
$mail = new PHPMailer;

//$mail->SMTPDebug = 3;                               // Enable verbose debug output

$mail->isSMTP();                                      // Set mailer to use SMTP
$mail->Host = 'smtp.gmail.com;';                      // Specify main and backup SMTP servers
$mail->SMTPAuth = true;                               // Enable SMTP authentication
$mail->Username = 'pariiwkashmir@gmail.com';          // SMTP username
$mail->Password = 'pariiw@123';                       // SMTP password
$mail->SMTPSecure = 'tls';                            // Enable TLS encryption, `ssl` also accepted
$mail->Port = 587;                                    // TCP port to connect to

$mail->setFrom('pariiwkashmir@gmail.com', 'pariiw.com');
$mail->addAddress($email, 'pariiw.com');                        // Add a recipient
//$mail->addAddress('ellen@example.com');                       // Name is optional
//$mail->addReplyTo('info@example.com', 'Information');
//$mail->addCC('cc@example.com');
//$mail->addBCC('bcc@example.com');

//$mail->addAttachment('/var/tmp/file.tar.gz');         // Add attachments
//$mail->addAttachment('/tmp/image.jpg', 'new.jpg');    // Optional name
$mail->isHTML(true);                                  // Set email format to HTML

$mail->Subject = 'WelCome to pariiw.com';
$mail->Body    = $msg;
$mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

if(!$mail->send()) {
    echo 'Message could not be sent.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  
  echo'Message has been sent';
// echo $msg;
    
   header("Location: admin_book.php");
   
}
   }

?>
