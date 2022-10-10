<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planetary Nebulae Detected in Distant Galaxies</title>
    <link rel="stylesheet" href="/space_club/news/css/bootstrap.min">
   <link rel="stylesheet" href="/space_club/news/css/bootstrap.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="/space_club/news/css/style.css">
   <style> 
   body{
    font-family : monospace ;
   }
    @media screen and (min-width: 760px) {
        .col-md-4{
            position: absolute;
            right: 3%;
        }
     
    }
    @media screen and (max-width: 800px) {
        .col-md-4{
        
            margin-left : -8px ;
        }
        .col-md-8{
        
            margin-left : -8px ;
        }
     
    }
  
    
  </style>
</head>
<body style=" background-color: #3996F321;">
    <section class="container m-2">
    <div class="row">

        <div class="col-md-8">
            <div class="card mb-3">
                <img src="<?php echo $picture ?>" class="card-img-top img-fluid" alt="Card image cap" style="width: auto;">
                <div class="card-body" style="background-color: #3996F34F;">
                  <h4 class="card-title" style="text-align: center;"><strong><?php echo $title ?></strong></h4>
                  <div class="card-text"><strong>
                   <?php echo $text?>
                 
                   </strong></div>
                </div>
              </div>
        </div>
        

        <div class="col-md-4">
            <div class="card mb-3  text-white text-center ">
                <div class="card-body bg-primary ">
                    <h6 class="card-title text-primary">FREE EMAIL NEWSLETTER</h6>
                    <div class="card-subtitle mb-2 ">Add your email</div>
                    <img class="card-img" src="https://image.flaticon.com/icons/png/512/2086/2086569.png" alt="Card image">
                    <div class="card-text">Subscribe and Receive News, sky-event information, observing tips, and more from AIAC SPACE Club</div>
                </div>
                <div class="card-footer bg-primary">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder=""  aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn" type="button" style="color:#1484f3">Subscribe</button>
                        </div>
                    </div>
                </div>
                
            </div>          
        </div>

    </div>
</section>
</body>
</html>