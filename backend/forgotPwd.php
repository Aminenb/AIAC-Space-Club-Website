<?php
session_start();
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//on click forget pwd send email which contains pwd

include('../dB/config.php');
$request=$db->query('SELECT * from admin where email= \''.$_SESSION['emailInfos']['email']."'");
$passwordResponse=$request->fetch();
$password=$passwordResponse['password'];
$fName=$passwordResponse['fName'];
$lName=$passwordResponse['lName'];
$email=$_SESSION['emailInfos']['email'];

//send pwd through email




//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);




//send the mail

function sendMail($mail,$emailAddress,$fName,$lName,$password){
   
    //Server settings
    $mail->SMTPDebug = 1;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'aiacspaceclub2020@gmail.com';                     //SMTP username
    $mail->Password   = '1456ai789club@';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom($emailAddress, $fName.' '.$lName);
    $mail->addAddress($emailAddress, 'Khadija AL AHYANE');     //Add a recipient
 
    $mail->isHTML(false);                             
    $mail->Subject = 'AIAC SPACE CLUB WEBSITE (Admin)';
    $body='<p><strong>Hello '.$fName.' '.$lName.'  </strong> , </p><p><strong>There is your password for AIAC SPACE CLUB Website (admin)</strong>: </p>'.$password; //need to handle the formatting
    $mail->Body=$body ;
    $mail->AltBody =$body;

    $mail->send();
    echo 'Message has been sent';


}


sendMail($mail,$email,$fName,$lName,$password);

$_SESSION['loginMsg']='Please check your email!';



header('Location:'.'/space_club/admin/index.php');










?>