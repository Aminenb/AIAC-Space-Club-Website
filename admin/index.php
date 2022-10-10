<?php
//start session
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./adminViews/loginPage.css">
    <title>Document</title>
</head>

<body>
    <div class="login-page">

        <h1 class='title'>AIAC SPACE CLUB</h1>



        <div class="form">

            <form class="login-form" method="POST" action="./backend/adminCredentials.php">

                <input type="text" placeholder="email" name="email" required />
             
                <input type="password" placeholder="password" name="password" required />
              
                <input type="hidden" name="function" value="login" />
                
                <input type="submit" value="Login">
                <?php
                  
                    
                  if (isset($_SESSION['emailInfos'])&&isset($_SESSION['loginMsg'])&&$_SESSION['loginMsg']=='invalid password') {
                      ?>


                <a href="../backend/forgotPwd.php">Forgot password</a></br>


                <?php
                  }
                  
                    
                    if (isset($_SESSION['loginMsg'])){
                        echo '*' . $_SESSION['loginMsg'];
                    }
                
                    
               
                ?>

            </form>

        </div>
    </div>

</body>

</html>

