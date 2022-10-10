<?php
session_start();

if (isset($_SESSION['adminInfos'])) {
 
include '/MAMP/htdocs/space_club/navbar/head.php';
include '/MAMP/htdocs/space_club/navbar/navbarAdmin.php';

       
    ?>
 <link rel="stylesheet" href="myProfile.css">
<body style="  font-size: 15px;font-weight:500;
  ">
<div class="container">  
  <form id="contact" action="../backend/adminCredentials.php" method="post">
    <h3>ADMIN</h3>
    <h4>UPDATE PROFILE</h4>
    <fieldset>
      <input value="<?php echo $_SESSION['adminInfos']['fName'] ?>" name="fName" type="text" tabindex="1" required autofocus>
    </fieldset>
    <fieldset>
    <input value="<?php echo $_SESSION['adminInfos']['lName'] ?>" name="lName" type="text" tabindex="2" required autofocus>
    </fieldset>
    <fieldset>
    <input value="<?php echo $_SESSION['adminInfos']['email'] ?>" name="email" type="text" tabindex="3" required autofocus>
    </fieldset>
    <fieldset>
    <input value="<?php echo $_SESSION['adminInfos']['password'] ?>" name="password" type="password" tabindex="4" required autofocus>
    </fieldset>
    <fieldset>
        <input value="update" name="function" type="hidden" tabindex="4" required autofocus>
      <button name="update profile" type="submit" id="contact-submit" data-submit="...Sending">update profile</button>
    </fieldset>

  </form>
</div>
</body>






<?php
}
else{
    echo 'access denied :/ !';
}
?>





