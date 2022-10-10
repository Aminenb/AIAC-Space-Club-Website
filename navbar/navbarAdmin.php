<div id="background" style=" background-image: url(/space_club/navbar/images/starrynight3.jpg);">
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
     
                <label class="dropdown">

                    <div class="dd-button">
                        <a href="/space_club/admin/adminViews/subscribers.php"><strong>Dashboard</strong></a>
                    </div>


              

                </label>

                <label class="dropdown">

                    <div class="dd-button">
                        <a><strong>News</strong></a>
                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu">
                        <li><a href="/space_club/admin/adminViews/category.php?category=news&amp;do=add">add News</a></li>
                        <li><a href="/space_club/admin/adminViews/category.php?category=news&amp;do=delete">update News</a></li>


                    </ul>

                </label>
                <label class="dropdown">

                    <div class="dd-button">
                        <a><strong>articles</strong></a>
                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu">
                        <li><a href="/space_club/admin/adminViews/category.php?category=articles&amp;do=add">add article</a></li>
                        <li><a href="/space_club/admin/adminViews/category.php?category=articles&amp;do=delete">update articles</a></li>


                    </ul>

                </label>
                <label class="dropdown">

                    <div class="dd-button">
                        <a><strong>activities</strong></a>

                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu">
                        <li><a href="/space_club/admin/adminViews/category.php?category=activities&amp;do=add">add activity</a></li>
                        <li><a href="/space_club/admin/adminViews/category.php?category=activities&amp;do=delete">update activity</a></li>
                    </ul>

                </label>

                <label class="dropdown">

                    <div class="dd-button">
                        <a><strong>magazines</strong></a>
                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu">
                        <li><a href="/space_club/admin/adminViews/category.php?category=magazines&amp;do=add">add magazine</a></li>
                        <li><a href="/space_club/admin/adminViews/category.php?category=magazines&amp;do=delete">update magazine</a></li>


                    </ul>

                </label>
                <label class="dropdown">

                    <div class="dd-button">
                        <a><strong><?php echo $_SESSION['adminInfos']['fName'] . ' ' . $_SESSION['adminInfos']['lName']  ?></strong></a>

                    </div>

                    <input type="checkbox" class="dd-input" id="test">

                    <ul class="dd-menu">
                        <li><a href="/space_club/admin/adminViews/myProfile.php">Settings</a></li>
                        <li><a href="/space_club/admin/backend/logout.php">Logout</a></li>
                    </ul>

                </label>






            </ul>
        </div>
    </nav>
    <header class="masthead">
        <div id="search-box">



        </div>
    </header>
</div>