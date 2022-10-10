<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Space & Astronomy news</title>
  <link rel="stylesheet" href="/space_club/news/css/bootstrap.min" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
  <link rel="stylesheet" href="/space_club/news/css/style.css" />
  <style>
     @media (max-width: 868px) {
        #foot1 .footer-heading{
        position: relative;
        left : 27px;
        
    }
    .tags .footer-heading{
        position: relative;
        left : 72px;
        
    }
    }
    @media (max-width: 600px) {
        #foot1 .footer-heading{
        position: relative;
        left : 32px;
        
    }
    .tags .footer-heading{
        position: relative;
        left : 78px;
        
    }
    }
    @media screen and (min-width : 1000px){
      .col-md-4{
        position: relative;
        left : 377px ;
      }
    }
    @media screen and (max-width : 1000px) and (min-width : 700px){
      .col-md-4{
        position: relative;
        left : 200px ;
      
      }
    }
    body{
      font-family : monospace ;
    }
    .col-md-4 h2{
      width : 100% ;
      position: relative;
      color: black; 
      margin-left: 13.5%;
      text-decoration:underline
    }
    .mb-0{
      position: relative;
      width : 154% ;
    }
   
    #contenu{
      position: relative;
      left : 4.7% ;
    }
    #section{
      position: relative;
      width : 100% ;
    }
    .container-fluid{
      position: relative;
      left : 33px ;
    }
    .col-md-5 img{
      width: 350px;
      height: 200px;
      position: relative;
      left : 20px ; 
      top : -17px ;
    }

    @media screen and (max-width: 759px) {
      #titleContainer{
        
        margin:auto 0;
         
       
      }
      
      #contenu{
      position: relative;
      margin : auto 0 ;
      width : 84% ;
      left :8% ;
      
      }
     
    .mb-0{
      position: relative;
      width : 100% ;
    }
    
    .col-md-4 h2{
      width : 100% ;
      position: relative;
      color: black; 
      margin-left: 6%;
      text-decoration:underline
    }
     
    
    
      
     

    }

    @media screen and (max-width: 759px){
      .col-md-5 img{
      width: 266px;
      height: 200px;
      position: relative;
      left : 17% ; 
      top : -17px ;
      margin-left : 24px ;
    }
    

    }
    @media screen and (max-width: 500px){
      .col-md-5 img{
      width: 266px;
      height: 200px;
      position: relative;
      left : 5% ; 
      top : -17px ;
    }
    

    }
    @media screen and (max-width: 400px){
      .search{
        width : 200px ;
      }
      .col-md-5 img{
      width: 266px;
      height: 200px;
      position: relative;
      margin-left : 7px ;
      top : -17px ;
    }
    .col-md-4 h2{
      width : 100% ;
      position: relative;
      margin-left : 0px;
    }
     

    }
  </style>
</head>

<body style=" background-color: #3996F321;">
  <div id="section">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mb-5 " id="contenu">
      <div  id="titleContainer">
        <?php



        foreach ($items as $item) {
          $myItem = new ITEM($category, $item);
        ?>
          <div class="card border-primary mb-0">
            <div class="card-title">
              <h4 class="card-title text-center mt-3">
                <strong> <?php $myItem->getTitle() ?></strong>
              </h4>
            </div>
            <div class="row">
              <div class="col-md-5">
                <img src="<?php $myItem->getIcon() ?>" class="img-fluid rounded-start mb-3 mt-3" alt="..." />
              </div>
              <div class="col">
                <div class="card-body">
                  <div class="card-text" style="margin-top : -10px; position : relative ; font-family : monospace ;">
                    <?php $myItem->getFirstLines() ?></br>
                    <div>
                          <a href="categoryPage.php?category=news&display=display&id=<?php echo $myItem->getId();?>" style="text-decoration:underline">Read more</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer text-right">
              <strong>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-clock" viewBox="0 0 16 16">
                  <path d="M8 3.5a.5.5 0 0 0-1 0V9a.5.5 0 0 0 .252.434l3.5 2a.5.5 0 0 0 .496-.868L8 8.71V3.5z" />
                  <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm7-8A7 7 0 1 1 1 8a7 7 0 0 1 14 0z" />
                </svg>
                <?php $myItem->getDateTime() ?></strong>
            </div>
          </div>
        <?php } ?>


      </div>

      <div class="col-md-4" style="">
        <h2 style="width : 120% ; margin-left : -15px;">
          See our latest projects 
        </h2>
        <?php 
        include '../dB/config.php';
        $i=0;
        $request = $db->query('SELECT * FROM activities  ORDER BY dateTime DESC;');
        while($i<2){
          $item=$request->fetch();
          $myItem=new ACTIVITIES('activities', $item);
          $i=$i+1;     
        ?>
        
        <div class="card mb-3 text-center" style="border-color: #1484f3;">
          <div class="card-body">
            <h6 class="card-title" style="color: #1484f3;">
              <strong>
                <?php $myItem->getTitle() ?>
              </strong>
            </h6>
            <a href="/space_club/viewsUserSide/categoryPage.php?category=activities&display=noDisplay">
              <img class="card-img" src="<?php $myItem->getIcon() ?>" alt="Card image" />
            </a>
          </div>
        </div>
        <?php  }?>
        
        <div class="card mb-3 text-center" style="border-color: #1484f3;">
          <div class="card-body">
            <h6 class="card-title" style="color: #1484f3;">
              <strong>
                Add your email and hit subscribe to stay informed
              </strong>
            </h6>
            <form action="/space_club/backend/subscribe.php" method="POST">
              <div class="form-group">
                <input type="email" class="form-control" id="Email" name="email" placeholder="" />
                <input type="hidden" name="path" value="/space_club/viewsUserSide/categoryPage.php?category=news&amp;display=noDisplay">
              </div>
              <button style="background : black;" type="submit" class="btn btn-primary">Subscribe</button>
              <p style="color:black;"><?php 
                    if(isset( $_SESSION['subscribeMsg'])){
                        echo $_SESSION['subscribeMsg'];
                    }

             ?></p>
            </form>


          



          </div>
        </div>
      </div>
    </div>
  </div>

  <footer style="" >
    <div class="footer-div footer-logo flex-1">
        <img class="logoimg" src="/space_club/navbar/images/logo.png" alt="">
        <p id="logotext" style="font-family : monospace ;">AIAC SPACE CLUB</p>
    </div>
    <div id="foot1" class="footer-div contact-info flex-1 top-margin linehight">
        <h3 class="footer-heading">CONTACT INFO</h3>
        <p style="color : white ; font-family : monospace ;">Casablanca <br> Phone: 0607100270 <br> Email: contact@aiac.space<br></p>
    </div>
    <div class="footer-div tags flex-1 top-margin linehight">
        <h3 class="footer-heading">TAGS</h3>
        <p style="color : white ; font-family : monospace ;">
            Astronomy  -  Galaxies <br>

            Solar System  -  Mars <br>
            
            Lunar Missions   -  Cosmology
            
        </p>
    </div>
    <div class="footer-div social-media flex-1 top-margin">
        <h3 class="footer-heading">SOCIAL MEDIA</h3>
        <div class="social">
            <a href="https://web.facebook.com/aiacspace" class="social-icon">
                <img src="/space_club/navbar/icons/facebook1.svg" alt="">
            </a>
            <a href="https://www.instagram.com/aiacspace/" class="social-icon">
                <img src="/space_club/navbar/icons/instagram (1).svg" alt="">
            </a>
            <a href="https://www.linkedin.com/company/aiac-space-club/" class="social-icon">
                <img src="/space_club/navbar/icons/linkedin (1).svg" alt="">
            </a>
            <a href="https://www.youtube.com/channel/UC6r2bC5N2DyAqKMDAicTjMQ" class="social-icon" target="blank">
                <img src="/space_club/navbar/icons/youtube.svg" alt="">
            </a>
        </div>
    </div>
</footer>

</body>

</html>