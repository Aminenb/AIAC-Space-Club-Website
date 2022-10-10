<?php
  session_start() ;  

//0-initialize a session message
// 1- get all the variables + check their length + check their safety
//2-check the validity of the email
//send the email to the contact
//return to contact 
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require 'vendor/autoload.php';

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$_SESSION['contactMsg']='';

//verify the safety of the inputs 
$fName=strip_tags($_POST['fName']);
$lName=strip_tags($_POST['lName']);
$email=strip_tags($_POST['email']);
$phone=strip_tags($_POST['phoneNumber']);
$subject=strip_tags($_POST['subject']);
$message=strip_tags($_POST['message']);


//check if the length of all the words are < 1000 else return a message
function lengthIsChecked(){
    if(substr($GLOBALS['fName'],0,40)&&substr($GLOBALS['lName'],0,40)&&substr($GLOBALS['email'],0,50)&&substr($GLOBALS['phone'],0,40)&&substr($GLOBALS['subject'],0,50)&&substr($GLOBALS['message'],0,1000)){
        return(true);
    }
    else{
        $_SESSION['contactMsg']='check the Length of your inputs ';
        return(false);

    }
}
//check if the email is valid

function mailIsValid(){
    if(filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL)){
        return(true);
    }
    else{
        $_SESSION['contactMsg']='The email is not valid';
        return(false);

    }
   
}

//send the mail

function sendMail($mail,$emailAddress,$fName,$lName,$phone,$subject,$message){
   
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
    $mail->addAddress('alahyane.khadija@aiac.space', 'Khadija AL AHYANE');     //Add a recipient
 
    $mail->isHTML(false);                             
    $mail->Subject = $subject;
    $body='<p><strong>message</strong>: </p>'.$message.'<p><strong>email</strong>: </p>'.$emailAddress.' <p><strong>phone</strong>:</p>'.$phone; //need to handle the formatting
    $mail->Body=$body ;
    $mail->AltBody =$body;

    $mail->send();
    echo 'Message has been sent';


}

if (lengthIsChecked()&&mailIsValid()){
    sendMail($mail,$email,$fName,$lName,$phone,$subject,$message);
    $_SESSION['contactMsg']='Thank you for contacting AIAC SPACE CLUB! our team will contact you soon';


}

header('Location:'.$_POST['path'])














?>
