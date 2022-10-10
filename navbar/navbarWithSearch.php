<style>
    body{
        font-family : monospace ; 
    }
</style>
<div id="background" style="background-color: #11151D; font-family : monospace ;">
    <?php
    $categoryTitle = '';
    switch ($category) {
        case 'news':
            $categoryTitle = ' Space & Astronomy news';
            break;
        case 'articles':
            $categoryTitle = 'ARTICLES';
            break;
        case 'magazines':
            $categoryTitle = 'MAGAZINES';
            break;
        default:
            $categoryTitle = 'ACTIVITIES';
    }

    ?>
    <nav class=" navbar navbar-expand-lg 
        navbar-light  fixed-top  ">

        <a class="navbar-brand" href="#">

            <!-- Add logo with size of 90*80 -->
            <img src="/space_club/navbar/images/logo.png" id="logo" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">

            <span class="navbar-toggler-icon"></span>
        </button>


        <div class="collapse navbar-collapse" id="navbarResponsive">

            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                      <a style="font-family : monospace ; font-size : 16px;" class="nav-link" href="/space_club/index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a style="font-family : monospace ; font-size : 16px;"  class="nav-link" href="/space_club/viewsUserSide/categoryPage.php?category=news&amp;display=noDisplay">News </a>
                </li>
                <li class="nav-item">
                    <a style="font-family : monospace ; font-size : 16px;"  class="nav-link" href="/space_club/viewsUserSide/categoryPage.php?category=activities&amp;display=noDisplay">Activities</a>
                </li>
                <li class="nav-item">
                    <a style="font-family : monospace ; font-size : 16px;"  class="nav-link" href="articles/articlesSlider.php">Articles</a>
                </li>
                <li class="nav-item">
                    <a style="font-family : monospace ; font-size : 16px;"  class="nav-link" href="/space_club/viewsUserSide/categoryPage.php?category=magazines&amp;display=noDisplay">Magazines </a>
                </li>
                <li class="nav-item">
                    <a style="font-family : monospace ; font-size : 16px;"  class="nav-link" href="/space_club/viewsUserSide/contact.php">Contact</a>
                </li>

            </ul>


        </div>
    </nav>
    <header class="masthead">
        <div style="font-family : monospace ;" id="search-box">
            <h1 style="color : white ;font-family : monospace ;  ">
                <?php echo $categoryTitle ?>
            </h1>
            <!-- ----------Form Search Box ------------->

            <div id="search-theme">
                <form action="../backend/searchAndFilter.php" method="POST">
                    <div class="search">


                        <div>
                            <input type="text" placeholder="search" class="search-rectangle" name='textSearched'>
                            <input type="hidden" name="category" value="<?php echo $category ?>">
                        </div>
                        <div id="search-img">

                            <input type="image" src="/space_club/navbar/icons/search-blue.svg" alt="Submit">
                        </div>



                    </div>

                </form>
                <?php if($category!='magazines'){?>
                <div style="font-family : monospace ;" id="theme-btn" onclick="myFunction()">Filter By Theme</div>
                <!-- ----------Filter    form ------------->

                <div style="margin : auto ; width : 40%; padding : 10px ; top : 321px ;"  class="theme" id="theme">

                    <?php
                    //get all categories

                    $categories = MYCATEGORY::getAllCategories($category);
                    foreach ($categories as $myCategory) {
                        ?>
                        <form action="../backend/searchAndFilter.php" method="POST">



                            <div class="check-div">
                                <label>
                                    <?php
                                    if (in_array($myCategory, $_SESSION['filter'][$category])) {
                                        ?>


                                        <input type="checkbox" name="selector" value="<?php echo $myCategory ?>" onChange='submit();' checked>
                                        <span class="check-span"><?php echo $myCategory ?></span>

                                    <?php
                                    } else { ?>
                                        <input type="checkbox" name="selector" value="<?php echo $myCategory ?>" onChange='submit();'>
                                        <span class="check-span"><?php echo $myCategory ?></span>
                                    <?php } ?>
                                    <input type="hidden" name="categorySelected" value="<?php echo $myCategory ?>">
                                    <input type="hidden" name="category" value="<?php echo $category ?>">


                                </label>

                            </div>
                        </form>


                    <?php
                    } ?>


                </div>
                <?php } ?>

            </div>
        </div>
    </header>
</div>
<?php 

//initialize all items that will be displayed on screen
$items = $_SESSION[$category];
 require_once('../backend/categoryClass.php');
 require_once('../backend/itemClass.php');

?>
<noscript>
    <div class="NoScriptSliderGroup"><span>JavaScript must be enabled to use some features on this page</span>
    </div>
</noscript>
<script src="/space_club/navbar/Javascript/filter.js"></script>