<?php
session_start();

//get safe input
print_r($_POST);

$_SESSION['subscribeMsg']='';
$email=strip_tags($_POST['email']);

//

//////////////////////////////////////////////////////////////////////////////////////
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


////////////////////////////////////////////////////////////////////////


//Load Composer's autoloader
require 'vendor/autoload.php';


//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);



//send the mail

function sendMail($mail,$emailAddress){
   
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
    $mail->setFrom($emailAddress);
    $mail->addAddress($emailAddress, 'Khadija AL AHYANE');     //Add a recipient
 
    $mail->isHTML(false);                             
    $mail->Subject = 'Welcome To the Community Of stars lovers !';
    $body='Welcome to the community of stars lovers'; //need to handle the formatting
    $mail->Body=$body ;
    $mail->AltBody =$body;

    $mail->send();
    echo 'Message has been sent';


}


//check the validity of the email


function mailIsValid(){
    if(filter_var($GLOBALS['email'], FILTER_VALIDATE_EMAIL)){
        return(true);
    }
    else{
        $_SESSION['contactMsg']='The email is not valid';
        return(false);

    }
   
}

//add the email to subscribers table
function addSubscriber(){

    try {
        $db = mysqli_connect("localhost","root","root","space_club_website");
        echo 'connected';
    
    } catch (Exception $e) {
        die('Error :' . $e->getMessage());
    }


    // avoid sql injection
    $safeEmail=$db->real_escape_string($GLOBALS['email']);
    //check if email not already in db

       

    $check = mysqli_query($db,"select * from subscribers where email='$safeEmail'");  // executing insert query
    if(mysqli_num_rows($check)>0){
        $_SESSION['subscribeMsg']='you are already subscribed';

    }
    else{
        
    $sql='INSERT INTO subscribers (email) VALUES ('.$safeEmail.');';
    echo '</br>'.$safeEmail;
    print_r($sql);
   

    $do = mysqli_query($db,"insert into subscribers(email) values('$safeEmail')");  // executing insert query
		
    if($do)
    {
        
        sendMail($GLOBALS['mail'],$GLOBALS['email']);
        $_SESSION['subscribeMsg']='Welcome to the community of stars lovers ^^ !';

               
    }






    }







   


}










//start

if (mailIsValid()){
    addSubscriber();

}

header('Location:'.$_POST['path']);

?>




