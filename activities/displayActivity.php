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
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <style>
        footer {
            background-color:#11151D;

        }

        hr {
            border-top: 1px solid #398FF3;
            width: 150%;
            margin-left: 0%;
        }

        .video-player iframe {
            width: 100%;
            height: 85vh;
        }

        body {
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }

        .w3-display-container {
            width: 100%;
            height: 64vh;
        }

        #images {
            width: 100%;
            height: 85vh;
        }

        .w3-content {
            position: relative;
            margin-bottom: 6px;
        }

        @media screen and (max-width:900px) {
            hr {
                border-top: 1px solid #398FF3;
                width: 100%;
                margin-left: 0%;
            }

            #ifrm {
                height: 36vh;
                margin-left: 8px;
            }

            #images {
                width: 100%;
                height: 70vh;

            }

            .w3-content {
                width: 100%;
                height: 36vh;
                position: relative;
                margin-bottom: 84px;

            }

            section {
                position: relative;
                left: -8px;
            }



        }
    </style>
</head>

<body>
    <section class="container m-2">
        <div class="row">
            <div class="col-md-9" id="leftside">
                <div class="card mb-3">

                    <?php if ($typeAssets == 'video') { ?>
                        <section class="video-container">
                            <div class="video-player">
                                <!-- Include the default video to be viewed -->
                                <iframe name="ifrm" id="ifrm" src="<?php echo $video ?>" frameborder="0" allowfullscreen></iframe>
                            </div>
                        </section>
                        <div class="card-body" style="background-color: #3996F34F;margin-top :-5px;">

                            <h5 class="card-title" style="text-align: center; color:#398FF3;text-decoration:underline "><strong><br /><?php echo $title ?></strong></h5>
                            <div style="font-family : sans-serif ;" class="card-text"><strong>
                                    <?php echo $text ?>

                                </strong> </div>
                        </div>
                    <?php } else {

                    ?>
                        <div class="w3-content w3-display-container">
                            <?php
                            foreach ($pictures as $picture) {

                            ?>

                                <img id="images" class="mySlides" src="<?php echo $picture ?>">

                            <?php } ?>

                            <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
                            <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
                        </div>
                        <div class="card-body" style="background-color: #3996F34F;margin-top :100px;">

                            <h5 class="card-title" style="text-align: center; color:#398FF3;text-decoration:underline"><strong><br /><?php echo $title ?></strong></h5>
                            <div style="font-family : sans-serif ;" class="card-text"><strong>
                                    <?php echo $text ?>

                                </strong> </div>
                        </div>



                        <script>
                            var slideIndex = 1;
                            showDivs(slideIndex);

                            function plusDivs(n) {
                                showDivs(slideIndex += n);
                            }

                            function showDivs(n) {
                                var i;
                                var x = document.getElementsByClassName("mySlides");
                                if (n > x.length) {
                                    slideIndex = 1
                                }
                                if (n < 1) {
                                    slideIndex = x.length
                                }
                                for (i = 0; i < x.length; i++) {
                                    x[i].style.display = "none";
                                }
                                x[slideIndex - 1].style.display = "block";
                            }
                        </script>


                    <?php } ?>




                </div>


            </div>
            <?php
            //Show recent posts (first 4 posts) on displayAll Items: session->give other variable

            //show all the categories

            ?>
            <div class="col-md-3">
                <h2 style="color:#555; margin-left: 10%;text-decoration:underline;margin-top:10%">Recent Activities</h2>
                <?php
                $i = 0;
                //get the titles of 5 latest articles in the same field if they exist 
                //on click article Post and redirect to latest article
                $activities = $_SESSION[$category];
                $activitiesLength = sizeof($activities);
                while ($i < 5 && $i < $activitiesLength) {
                    $item = new ACTIVITIES($category, $activities[$i]);
                    $i += 1;

                ?>
                    <div>
                        <div class="row" style="margin-bottom:10%;margin-top:10%">
                            <div class="col-2"><img src="https://svgsilh.com/svg/2442125.svg" style="width:100%"></div>
                            <div class="col-10 mt-2">
                                <div>

                                    <a href="categoryPage.php?category=activities&display=display&id=<?php echo $item->getId(); ?>" style="border:0ch;color:cornflowerblue;color:#11151D">
                                        <?php $item->getTitle() ?>
                                    </a>
                                </div>
                            </div>

                        </div>
                        <hr class="m-1" style="">
                    </div>

                <?php } ?>

                <h2 style="color:#555; margin-left: 10%; text-decoration:underline ;margin-top:10%">Categories</h2>
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
                                    <form action="../backend/searchAndFilter.php" method="POST">
                                        <input type="hidden" name="category" value="activities">
                                        <input type="hidden" name="categorySelected" value="<?php echo $myCategory; ?>">
                                        <input type="hidden" name="filterFromInside" value="yes">
                                        <input type="submit" value="<?php echo $myCategory ?>" style="border:0ch;color:#11151D;text-decoration:underline;background-color:transparent">
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
<style>
    /* import after the changes */
    @import "bootstrap/functions";
    @import "bootstrap/variables";
    @import "bootstrap/mixins";
    @import "bootstrap/root";
    @import "bootstrap/reboot";
    @import "bootstrap/type";
    @import "bootstrap/images";
    @import "bootstrap/code";
    @import "bootstrap/grid";
    @import "bootstrap/tables";
    @import "bootstrap/forms";
    @import "bootstrap/buttons";
    @import "bootstrap/transitions";
    @import "bootstrap/dropdown";
    @import "bootstrap/button-group";
    @import "bootstrap/input-group";
    @import "bootstrap/custom-forms";
    @import "bootstrap/nav";
    @import "bootstrap/navbar";
    @import "bootstrap/card";
    @import "bootstrap/breadcrumb";
    @import "bootstrap/pagination";
    @import "bootstrap/badge";
    @import "bootstrap/jumbotron";
    @import "bootstrap/alert";
    @import "bootstrap/progress";
    @import "bootstrap/media";
    @import "bootstrap/list-group";
    @import "bootstrap/close";
    @import "bootstrap/modal";
    @import "bootstrap/tooltip";
    @import "bootstrap/popover";
    @import "bootstrap/carousel";
    @import "bootstrap/utilities";
    @import "bootstrap/print";

    html {
        overflow-x: hidden;
    }

    :root {
        --first: #3996F3;
        --second: #11151D;
        --third: white;
        --fourth: black;
    }

    #logo {
        width: 65px;
        height: 65px;
        margin-top: -2px;
        margin-left: 7px;
        animation: bounceIn 0.6s;
        transform: rotate(0deg) scale(1) translateZ(0);
        transition: all 0.4s cubic-bezier(.8, 1.8, .75, .75);
        cursor: pointer;
    }

    #logo:hover {
        transform: rotate(10deg) scale(1.1);
    }


    /* custom scrollbar */
    ::-webkit-scrollbar {
        width: 20px;
    }





    .navbar-hide {
        margin-top: -150px;
    }

    nav {
        position: relative;
        transition: 0.6s;
    }

    .navbar-light .navbar-nav .active>.nav-link,
    .navbar-light .navbar-nav .nav-link.active,
    .navbar-light .navbar-nav .nav-link.show,
    .navbar-light .navbar-nav .show>.nav-link {
        color: #fff;
    }

    .navbar-light .navbar-nav .nav-link {
        color: #fff;
    }

    .navbar-toggler {
        background: var(--first);

    }

    .navbar-nav {
        text-align: right;
        line-height: 16.8px;

    }

    #iconsearch {
        width: 14px;
        height: 14px;
        margin-top: 10px;
        cursor: pointer;
    }

    .nav-link {
        padding: .5rem 3rem;
        font-size: 13px;
        font-style: normal;
        font-weight: bold;
        font-family: sans-serif;
        margin-left: 12px;
        margin-right: 40px;



    }

    .nav-link.active,
    .nav-link:focus {
        color: #fff;
    }

    #encadre {
        border-width: 1.6px;
        border-style: solid;
        border-color: var(--first);
        border-radius: 5px 5px 5px 5px;
    }

    .navbar-toggler {
        padding: 2px 5px;
        font-size: 25px;
    }

    .navbar-light .navbar-nav .nav-link:focus,
    .navbar-light .navbar-nav .nav-link:hover {
        color: var(--first);
    }

    /*/website aiac_space_club/navbar/ */
    #background {
        background-color:#11151D ;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        background-attachment: fixed;

        margin-bottom: 0%;
        /*height: 320px;*/

    }




    header.masthead {
        padding-top: 0.4rem;
    }

    header.masthead .masthead-subheading {
        font-size: 3.25rem;
        font-style: italic;
        line-height: 2.25rem;
        margin-bottom: 1rem;
    }

    header.masthead .masthead-heading {
        font-size: 5.5rem;
        font-weight: 700;
        line-height: 3rem;
        margin-bottom: 4rem;
    }

    #header #navbox {
        display: flex;
        flex-direction: row;
    }

    #header #search-box h1 {
        padding: 00.5rem;
    }

    #search-box {
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        margin-top: 110px;
        margin-bottom: 15px;

    }

    #search-box h1 {
        font-family: Arial, Helvetica, sans-serif;
        font-weight: bold;
        font-size: 2.5rem;
        color: var(--third);
        text-align: center;
        margin-top: 8px;
        margin-bottom: 25px;
    }


    input[type=text] {
        border: 0;
        outline: none;
        width: 240px;
    }

    #search-theme {
        z-index: 1;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    #search-box .search {
        display: flex;
        width: 25rem;
        height: 3rem;
        border: 4px solid transparent;
        background-color: var(--third);
        margin-bottom: 1rem;
        border-radius: 30px;
        align-items: center;
        justify-content: space-between;
        padding-left: 8px;
        padding-right: 8px;
    }

    #search-box .search:hover {
        border: 4px solid var(--first);
    }

    #search-box .search .search-rectangle {
        border: none;
        width: 13rem;
        margin-left: 10px;
        outline: none;
    }

    input[type=image] {
        width: 22px;
        cursor: pointer;

    }





    #theme-btn {
        background-color: var(--second);
        color: var(--third);
        font-family: Arial, Helvetica, sans-serif;
        font-size: small;
        font-weight: bold;
        padding: 8px 16px;
        border: 2px solid white;
        border-radius: 20px;
        cursor: pointer;
        margin-top: 10px;
        margin-bottom: 10px;
    }

    #theme-btn:hover {
        border: 2px solid var(--second);
        background-color: var(--third);
        color: var(--second);
    }

    /*theme*/
    .theme {
        position: absolute;

        background-color: var(--third);
        border-radius: 20px;
        max-width: 900px;
        margin: 0 auto;
        margin-top: 50px;
        display: none;
        flex-wrap: wrap;
        justify-content: center;
        cursor: pointer;
        top: 47vh;
        left: 30%;
    }

    .theme .check-div {
        margin: 10px;
    }

    .theme .check-div label {
        cursor: pointer;
    }

    .theme .check-div label input[type="checkbox"] {
        display: none;
    }

    .theme .check-div span {
        position: relative;
        display: inline-block;
        padding: 15px 30px;
        border: 2px solid var(--second);
        color: var(--second);
        border-radius: 30px;
        font-family: Arial, Helvetica, sans-serif;
        font-size: small;
        font-weight: bold;
        text-shadow: 0 0.5px 1px rgba(0, 0, 0, 0.3);
        transition: 0.5s ease;
        user-select: none;
        overflow: hidden;
    }

    .theme .check-div label input[type="checkbox"]:checked~span {
        background-color: var(--second);
        color: var(--third);
    }

    /*theme*/









    #separe {
        height: 424px;
        display: flex;
        flex-direction: row;
    }

    #separe div {
        width: 200px;
        height: 50px;
        color: #11151D;
    }

    #separe div:first-child {
        width: 70%;
        height: 100%;
    }

    #separe .second-div {
        width: 25%;
        height: 100%;
        background-color: var(--first);
    }

    #separe .third-div {
        width: 25%;
        height: 100%;
        background-color: palevioletred;
    }

    #separe .scoll-div {
        width: 50%;
        height: 100%;
        background-color: #11151D;
        color: white;
        overflow: scroll;
    }

    @import url(https://fonts.googleapis.com/css?family=Rubik:300,400,500,700);

    body {
        font-family: Raleway;
        position: relative;
        font-weight: 400;
        font-size: 15px
    }

    ul {
        padding: 0;
        margin: 0
    }

    li {
        list-style: none;
    }

    a:focus,
    a:hover {
        text-decoration: none;
        -webkit-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease
    }

    a:focus {
        outline: 0
    }

    img {
        max-width: 100%
    }

    p {
        font-size: 16px;
        line-height: 30px;
        color: var(--third);
        font-weight: 300
    }

    h4 {
        font-family: Rubik, sans-serif;
        margin: 0;
        font-weight: 400;
        padding: 0;
        color: var(--second);
    }

    a {
        color: var(--first);
    }

    .no-padding {
        padding: 0 !important;
    }

    @media (max-width: 868px) {
        #separe {
            height: 440px;
        }

        .navbar #navbarResponsive {
            background-color: var(--second);
            border-radius: 10px;
            align-items: center;
            justify-content: center;
            padding: 5px;
            padding-bottom: 10px;
        }

        #navbarResponsive .nav-item {
            text-align: center;
        }

        #navbarResponsive .nav-item:hover {
            background-color: #555;
        }

        #iconsearch {
            margin-bottom: 5px;
            cursor: pointer;
        }

        header {
            width: 100%;
        }

        footer {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        /*footer .tags{
        margin-left: 4rem;
    }
    footer .contact-info{
        margin-left: 4rem;
    }
    footer .social-media{
        margin-left: 4rem;
    }*/
        footer .footer-div {
            justify-content: center;
            align-items: center;
        }

        footer .footer-div .footer-heading {
            font-size: 1.3rem;
        }

        footer .footer-div p {
            font-size: 1.1rem;
        }

        footer .social-media .social .social-icon {
            width: 100%;
            padding: 1rem;
            justify-content: space-between;
        }

        footer .social-media .social a.social-icon img {

            width: 1.5rem;
            margin-top: -2rem;
        }







    }

    footer {

        display: flex;

        background-color:#11151D;
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
        overflow: hidden;
        color: var(--third);
        font-family: Arial, Helvetica, sans-serif;
        font-smooth: antialiased;
    }

    footer .footer-div {
        padding: 0.5rem;
        align-items: center;
        justify-content: center;
        margin-right: 1rem;
    }

    footer .social-media {
        margin-right: -3rem;

    }

    .top-margin {
        margin-top: 2rem;
    }

    .flex-1 {
        flex: 1;

    }

    #logotext {
        font-size: 25px;
        font-weight: bold;
        font-family: arial;
        color: white;
        margin-top: 14px;

    }

    footer .footer-logo {
        display: flex;
        flex-direction: column;
        justify-content: center;
        margin-top: 6px;


    }

    #foot1 {
        margin-left: 25px;
    }

    .linehight {
        line-height: 1.7rem;
    }

    #logo {
        width: 65px;
        height: 65px;
        margin-top: -2px;
        margin-left: 7px;

    }


    footer .footer-logo img {
        width: 6rem;
        height: 6rem;
        animation: bounceIn 0.6s;
        transform: rotate(0deg) scale(1) translateZ(0);
        transition: all 0.4s cubic-bezier(.8, 1.8, .75, .75);
        cursor: pointer;
    }

    footer .footer-logo img:hover {
        transform: rotate(10deg) scale(1.1);

    }

    footer .footer-heading {
        color: #3996F3;
        font-family: Arial, Helvetica, sans-serif;
        font-size: medium;
        font-weight: bold;
        text-align: left;
    }

    footer .social-media {
        justify-content: center;
        align-items: center;
    }

    footer .social-media .social {
        display: flex;
        flex-direction: row;
        justify-content: left;
        font-weight: bold;
        align-items: center;
        margin-top: 1.5rem;

    }

    footer .social-media .social .social-icon img {
        width: 20px;
        margin-right: 1rem;
        cursor: pointer;
    }
</style>