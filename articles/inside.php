<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Club - Read this article</title>
    <link rel="stylesheet" href="/space_club/articles/css/bootstrap.min">
    <link rel="stylesheet" href="/space_club/articles/js/bootstrap.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="/space_club/articles/css/style.css">
    <style>
    body{
        font-family : monospace ;
    }
    #picture{
        height:80vh;
    }
        #a5{
            color:black; 
            margin-left: 22%; 
            text-decoration:underline ;
        }
        #a4{
            color:black; 
            margin-left: 22%; 
            text-decoration:underline ;
            margin-top:10%;
        }
        #a3 p{
            font-weight : bold ; 
            color : black ; 
            position : relative ; 
            top : -3px ;
            left : 12px ;
        }
        #a2{
            background-color: #3996F34F; 
            height : 31px ;
            position : relative ; 
            top : 7px ; 
            left : 14px ;
            width : 100% ;
        }
        #a1{
            position : relative ; 
            left : 79px ; 
            top : -4px ;

        }
        #a1 img{
            width:40% ; 
            position : relative ; 
            left : 15px ;
        }
        .col-md-3 h2{
            color: black; 
            margin-left: 10%;
            text-decoration:underline;
            margin-top:10%;

        }
        hr{
            border-top: 1px solid #398FF3;
            width: 150%;
            margin-left: 0%;

        }
        .mb-3 img {
            width : 100%;
            height : 66vh;
        }
@media screen and (max-width : 880px){
    #a4{
            color:black; 
            margin-left: 26%; 
            text-decoration:underline ;
            margin-top:10%;
        }
        #a5{
            color:black; 
            margin-left: 26%; 
            text-decoration:underline ;
            
        }
    hr{
        width : 100%;
    }
    section{
        position: relative;
        left : -7px;
    }
    .mb-3 img {
            width : 100%;
            height : 48vh;
        }
    #a1{
        position: relative ; 
        left : 8px;
    }
    #a1 h3{
        position: relative ; 
        top : 2px;
    }
    #a1 img{
            width:90% ; 
            position : relative ; 
            top : 20% ;
        }
    #a2{
            background-color: #3996F34F; 
            height : 66px ;
            position : relative ; 
            top : 7px ; 
            left : 14px ;
            width : 100% ;
        }
        #a3 p{
            font-weight : bold ; 
            color : black ; 
            position : relative ; 
            top : -3px ;
            left : 12px ;
            font-size : 14px;
            width : 123%;
        }
}
        
    </style>
</head>

<body>
    <section class="container m-2">
        <div class="row">
            <div class="col-md-9">
                <div class="card mb-3">

                    <img src="<?php echo $picture ?>" class="card-img-top"  alt="..." id="picture">
                    <div class="card-body" style="background-color: #3996F34F;">
                        <h5  style="font-family : monospace ; text-align: center;" class="card-title" ><strong><?php echo $title ?></strong></h5>
                        <div  style="font-family : monospace ;" class="card-text"><?php echo $text ?><strong></strong></div>
                    </div>
                </div>
                <div class="row">
                    <div  id="a1" class="col">
                        <h3 style="font-family : monospace ;" >About the author</h3>
                        <img src=<?php echo $authorPicture?> style="">
                    </div>
                    <div class="col">
                        <h3  style="font-family : monospace ;" ><?php echo $authorName ?></h3>
                        <div  style="font-family : monospace ;" ><?php echo $authorQuote ?></div>
                    </div>
                </div>
                <div class="row" id="a2" style="">
                    <div class="col pt-1 ml-2">
                        <div id="a3"><p>Share This Article , Choose Your Platform !</p></div>
                    </div>
                    <div class="col ml-5">
                        <a href="https://www.facebook.com/aiacspace"><i class="fa fa-facebook p-2" aria-hidden="true" style="width : 16px ;height : 16px;margin-right : 45px ; color : black ;"></i></a>
                        <a href="https://twitter.com/aiacspace?lang=fr"><i class="fa fa-twitter p-2" aria-hidden="true" style="width : 16px ;height : 16px; margin-right : 45px ; color : black ;"></i></a>
                        <a href="https://www.linkedin.com/company/aiac-space-club/"><i class="fa fa-linkedin p-2" aria-hidden="true" style="width : 16px ;height : 16px; margin-right : 45px ; color : black ;"></i></a>
                        <a href="https://www.instagram.com/aiacspace/"><i class="fa fa-instagram p-2" aria-hidden="true" style="width : 16px ;height : 16px; margin-right : 45px ;color : black ;"></i></a>
                    </div>
                </div>
            </div>
            <?php
            //Show recent posts (first 4 posts) on displayAll Items: session->give other variable

            //show all the categories

            ?>
            <div class="col-md-3">
                <h2 id="a5" >Recent Posts</h2>
                <?php
                $i = 0;
                //get the titles of 5 latest articles in the same field if they exist 
                //on click article Post and redirect to latest article
               


                $articles = $_SESSION[$category];
                $articlesLength = sizeof($articles);
                while ($i < 5 && $i < $articlesLength) {
                    $item = new ARTICLES($category, $articles[$i]);
                    $i += 1;






                ?>
                    <div>
                        <div class="row" style="margin-bottom:10%;margin-top:10%">
                            <div class="col-2"><img src="https://svgsilh.com/svg/2442125.svg" style="width:100%"></div>
                            <div class="col-10 mt-2">
                                <div>

                                <a href="categoryPage.php?category=articles&display=display&id=<?php echo $item->getId();?>" style="color:#11151D " ><?php echo $item->getTitle();  ?></a>
                                    
                                </div>
                            </div>

                        </div>
                        <hr class="m-1">
                    </div>

                <?php } ?>

                <h2 id="a4">Categories</h2>
                <?php
                
           
                  $categories = MYCATEGORY::getAllCategories($category);

                 //on click category update session filter to empty array which contains only a certain category go to searchAndFilter isset from inside

                foreach ($categories as $myCategory) {

                ?>



                    <div>
                        <div class="row" style="margin-bottom:10%;margin-top:10%">
                            <div class="col-2"><img src="https://svgsilh.com/svg/2442125.svg" style="width:100%"></div>
                            <div class="col-10 mt-2">
                                <div>
                                    <form action="../backend/searchAndFilter.php" method="POST" >
                                    <input type="hidden" name="category" value="articles" >
                                    <input type="hidden" name="categorySelected" value="<?php echo $myCategory; ?>">
                                    <input type="hidden" name="filterFromInside" value="yes">
                                    <input type="submit" value="<?php echo $myCategory ?>" style="background-color: transparent;border:0ch;color:#3996F3;text-decoration:underline ; position : relative ; top : -5px ;color:#11151D" >
                                    </form>
                                </div>
                            </div>

                        </div>
                        <hr class="m-1">
                    </div>
                <?php } ?>

            </div>
        </div>
    </section>

</body>

</html>