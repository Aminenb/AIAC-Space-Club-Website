<?php
session_start();
//function that updates user credentials
function updateCredentials($fName,$lName,$email,$password){
    
    include "/MAMP/htdocs/space_club/dB/config.php";
    $req = $db->prepare('UPDATE admin SET fName=:fName ,lName=:lName,email=:email,password=:password WHERE id='.$_SESSION['adminInfos']['id']);
    $req->execute(array(
        'fName' =>$fName,
        'lName' => $lName,
        'email' => $email,
        'password' => $password
        ));
}

//function that check validity of login + return message+ initialize a new session if login checked
function checkLogin($email,$password){
   include "/MAMP/htdocs/space_club/dB/config.php";
   $_SESSION['loginMsg']='';
   $sqlQueryEmail='SELECT * from admin WHERE email=\''.$email.'\'';
   $emailReq=$db->query($sqlQueryEmail);
   $sqlQuery='SELECT * from admin WHERE email=\''.$email.'\' AND '.'password=\''.$password.'\'';
  
   $reqId=$db->query($sqlQuery);
   
  
   if($responseId=$reqId->fetch()){
      
       $_SESSION['loginMsg']='user logged successufully';

       $_SESSION['adminInfos']=array(
            'id'=>$responseId['id'],
            'fName'=>$responseId['fName'],
            'lName'=>$responseId['lName'],
            'email'=>$responseId['email'],
            'password'=>$responseId['password']
       );
  
       header('Location:/space_club/admin/adminViews/subscribers.php');

   }

   else{

    if($responseEmail=$emailReq->fetch()){
        $_SESSION['loginMsg']='invalid password';
        $_SESSION['emailInfos']=array(
            'email'=>$email,
            'password'=>$responseEmail['password']
        );
      
       }
       else{
        $_SESSION['loginMsg']='invalid email';

       }

       header('Location:/space_club/admin/index.php');
         
    }
    


}


//if post function=login / update

if ($_POST['function']=='login'){
    try {
        $db = mysqli_connect("localhost","root","root","space_club_website");
    
    } catch (Exception $e) {
        die('Error :' . $e->getMessage());
    }

    //don't trust user input even admin
    $_SESSION['loginMsg']='';
    $email=strip_tags($_POST['email']);
    $password=strip_tags($_POST['password']);   
    $email=substr($email,0,40);
    $password=substr($password,0,10);
    $email=$db->real_escape_string($email);
    $password=$db->real_escape_string($password);
    checkLogin($email,$password);
   
    
}


else{

    updateCredentials($_POST['fName'],$_POST['lName'],$_POST['email'],$_POST['password']);
    header('Location:/space_club/admin/adminViews/myProfile.php');

}



?>