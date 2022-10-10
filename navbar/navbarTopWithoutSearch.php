<div id="background" style="background-color: #11151D;">
        <nav class=" navbar navbar-expand-lg 
        navbar-light  fixed-top  ">
  
        <a class="navbar-brand" href="#">
        
  
            <!-- Add logo with size of 90*80 -->
           
           <img src="/space_club/navbar/images/logo.png" id="logo"   alt="">
        </a>
        <button class="navbar-toggler" type="button"
        data-toggle="collapse" 
        data-target="#navbarResponsive"
        aria-controls="navbarResponsive" 
        aria-expanded="false" 
        aria-label="Toggle navigation">
          
        <span class="navbar-toggler-icon"></span>
        </button>
        
  
        <div class="collapse navbar-collapse"
                id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                <li class="nav-item active">
                    <?php //2variables through get : category={news,articles,activities}+display={true,false}?>
                    <a class="nav-link"  style="font-family : monospace ; font-size : 16px;" href="/space_club/index.php">Home </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="font-family : monospace ;font-size : 16px;" href="/space_club/viewsUserSide/categoryPage.php">News </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"   style="font-family : monospace ;font-size : 16px;" href="/space_club/viewsUserSide/categoryPage.php">Activities</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link"  style="font-family : monospace ;font-size : 16px;"  href="articles/articlesSlider.php">Articles</a>
                </li>
                <li class="nav-item">
                <a class="nav-link" style="font-family : monospace ;font-size : 16px;"  href="/space_club/viewsUserSide/categoryPage.php">Magazines </a>
                </li>
                <li class="nav-item">
                  <a class="nav-link"  style="font-family : monospace ;font-size : 16px;" href="/space_club/viewsUserSide/contact.php">Contact</a>
                </li>
               
            </ul>
        </div>
    </nav>
<header class="masthead" >
  <div id="search-box" >
  <?php 


 require_once('../backend/categoryClass.php');
 require_once('../backend/itemClass.php');

?>
    
    
    </div>
  </header>
    </div>