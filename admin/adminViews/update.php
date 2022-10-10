<html>

<head>
    <link rel="stylesheet" href="form.css" />

</head>

<body style='

background-color:#3996F321 ;
width: 100vw;
font-family: "Raleway", sans-serif;

align-items: center;
flex-direction: column;
overflow: auto;


'>


    <?php

    $category = $_GET['category'];
    include '/MAMP/htdocs/space_club/dB/config.php';

    $itemId = $_GET['itemId'];
    $item = $db->query('SELECT * from ' . $category . ' WHERE id=' . $itemId);
    $myItem = $item->fetch();

    /////ONLY FOR ACTIVITIES
    if ($category == 'activities') {
        $medias = $db->query('SELECT * from activities_assets WHERE id_activity=' . $itemId);
        $mediaPaths = $medias->fetch();

        //case video tag video


        if (!isset($_SESSION['pictures'])) {
            $_SESSION['pictures'] = array();
        }


    ?>
        <form action="category.php?category=activities&amp;do=update&amp;itemId=<?php echo $itemId ?>" style="    width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left:10%
    " method="POST">

            <div class="form-group">
                <select name="mediaType">
                    <option value="none" selected disabled hidden>
                    <option value="picture">pictures</option>
                    <option value="video">video</option>
                </select>
                <input type="submit" value="go" />

            </div>


        </form>

        <?php
        if ($mediaPaths['mediaType'] == 'video') {
        ?>
        <div style="width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left:10%">
            <iframe name="ifrm" id="ifrm" src="<?php echo $mediaPaths['mediaPath'] ?>" frameborder="0" allowfullscreen></iframe>
        </div>

        <?php

        }
        //case pictures->tag picture while
        else {


        ?>
            <div style="display: inline;width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left:10%">

                <img src="<?php echo $mediaPaths['mediaPath'] ?>" style="width:80px;height:80px">
                <?php
                while ($mediaPaths = $medias->fetch()) { ?>

                    <img src="<?php echo $mediaPaths['mediaPath'] ?>" style="width:80px;height:80px">



                <?php } ?>



            </div>

        <?php



        }


        if ((isset($_POST['mediaPath']) || isset($_FILES['mediaPath'])) && isset($_POST['mediaType'])) {



            $_SESSION['pictures']['mediaType'] = $_POST['mediaType'];
            //pictures case 
            if ($_POST['mediaType'] == 'picture') {
                include '../backend/uploadPicture.php';
                $pictureFile = $_FILES['mediaPath'];
                $madiaPath = fileUploaded($category, $pictureFile);

                if (!isset($_SESSION['pictures']['mediaPath']) || !is_array($_SESSION['pictures']['mediaPath'])) {
                    $_SESSION['pictures']['mediaPath'] = array();
                }
                array_push($_SESSION['pictures']['mediaPath'], $madiaPath);
            } else {
                $mediaPath = $_POST['mediaPath'];
                $_SESSION['pictures']['mediaPath'] = $mediaPath;
            }
        }
        //if video : add to array  mediaType mediaPath
        ?>

        <?php

        if (isset($_POST['mediaType'])) {
            if ($_POST['mediaType'] == 'video') {

        ?>
                <form action="category.php?category=activities&amp;do=update&amp;itemId=<?php echo $itemId ?>" method="POST" style="    width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left :10%
    ">

                    <div class="form-group">

                        <input type="text" name="mediaPath" placeholder="youtube.com/embed/9rAZW4xMBb8 " />
                        <input type="hidden" name="mediaType" value="video" />
                        <input type="submit" value="add video" />

                    </div>

                </form>

            <?php
            } else {
            ?>
                <form action="category.php?category=activities&amp;do=update&amp;itemId=<?php echo $itemId ?>" method="POST" enctype="multipart/form-data" style="    width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left :10%
    ">

                    <div class="form-group">

                        <input type="file" name="mediaPath" />
                        <input type="hidden" name="mediaType" value="picture" />
                        <input type="submit" value="add picture" />

                    </div>

                </form>




        <?php
            }
        }


        ?>

    <?php


    }

    ?>

    <!-- assets+type assets-->
    <form action="../backend/crudOp.php" method="POST" enctype="multipart/form-data" style="    width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left:10%
    ">
        <!-- Common inputs -->
        <input type="hidden" name="category" value=<?php echo $category; ?> />
        <input type="hidden" name="do" value="update" />
        <input type="hidden" name="itemId" value="<?php echo $itemId ?>" />


        <div class="form-group">
     
            <textarea id="message" class="form-field" placeholder="Your Text" rows="3" name="title" value="<?php echo $myItem['title']; ?>"  required><?php echo $myItem['title']; ?><</textarea>
   
            <label for="full-name" class="form-label">Title</label>
        </div>
        <div class="form-group">
            <?php
            $dateTimeMyItem = $myItem['dateTime'];
            $dateTime = substr($dateTimeMyItem, 0, 10) . 'T' . substr($dateTimeMyItem, 11, -3);


            ?>
                  <div style="color:#a9a9a9; font-weight:bold">dateTime</div>
            <input type="datetime-local" id="meeting-time" name="dateTime" value="<?php echo $dateTime; ?>">
            <?php echo $dateTime;   ?>
          
        </div>

        <div class="form-group">
        <div style="color:#a9a9a9; font-weight:bold">dateTime</div>
            <input type="file" name="icon" value="" />

            <img src="<?php echo $myItem['icon'] ?>" style="width:80px;height:80px">

      
        </div>
        <div class="form-group">
        <div style="color:#a9a9a9; font-weight:bold">category</div>
            <input type="text" id="full-name" name="categoryItem" class="form-field" placeholder="Other category" value="<?php echo $myItem['category']; ?>" />

            <select name="categoryItem">
                <option value="<?php echo $myItem['category']; ?>" selected disabled hidden>
                    <?php
                    //get all categories items of the category

                    include '/MAMP/htdocs/space_club/dB/config.php';
                    $request = $db->query('SELECT DISTINCT category FROM ' . $category);

                    while ($categoryData = $request->fetch()) {

                    ?>
                <option value="<?php echo $categoryData['category'] ?>"><?php echo $categoryData['category']; ?></option>

            <?php } ?>

            </select>


        </div>

        <!--  case News -->
        <?php
        switch ($category) {
            case 'news':

        ?>
                <div class="form-group">
                    <textarea id="message" class="form-field" placeholder="Your Text" rows="20" name="text" value="<?php echo $myItem['text']; ?>" required><?php echo $myItem['text']; ?><</textarea>
                    <label for="message" class="form-label">Text</label>
                </div>

                <div class="form-group">
                <div style="color:#a9a9a9; font-weight:bold">Picture</div>
                    <input type="file" name="picture" value="" />

                  
                    <img src="<?php echo $myItem['picture'] ?>" style="width:80px;height:80px">
                </div>
            <?php

                break;
            case ('articles'):
                $req = $db->query('SELECT * from authors WHERE id=' . $myItem['authorId']);
                $authorInfos = $req->fetch();

            ?>



                <!--  case articles-->
                <div class="form-group">
                    <textarea id="message" class="form-field" placeholder="Your Text" rows="20" name="text" value="<?php echo $myItem['text']; ?>" required><?php echo $myItem['text']; ?><</textarea>
                    <label for="message" class="form-label">Text</label>
                </div>

                <div class="form-group">
                <div style="color:#a9a9a9; font-weight:bold">Picture</div>
                    <input type="file" name="picture" />


             
                    <img src="<?php echo $myItem['picture'] ?>" style="width:80px;height:80px">
                </div>
                <div class="form-group">
                    <input type="text" id="" name="authorName" class="form-field" placeholder="Name" value="<?php echo $authorInfos['name']; ?>" required />
                    <input type="hidden" value="<?php echo $authorInfos['id'] ?>" name="authorId" />
                    <label for="full-name" class="form-label">Name Author </label>
                </div>
                <div class="form-group">
                    <textarea id="message" class="form-field" name="authorQuote" placeholder="Author quote" rows="6" value="<?php echo $authorInfos['quote']; ?>" required><?php echo $authorInfos['quote']; ?><</textarea>
                    <label for="full-name" class="form-label">Author quote</label>
                </div>
                <div class="form-group">
                <div style="color:#a9a9a9; font-weight:bold">authorPicture</div>
                    <input type="file" name="authorPicture" />

              
                    <img src="<?php echo $authorInfos['picture'] ?>" style="width:80px;height:80px">
                </div>

            <?php

                break;
            case ('activities'):

            ?>

                <!--  case activities-->

                <div class="form-group">

                    <textarea id="message" class="form-field" placeholder="Your Text" rows="6" name="text" value="<?php echo $myItem['text']; ?>" required><?php echo $myItem['text']; ?></textarea>
                    <label for="message" class="form-label">Text</label>

                </div>

            <?php

                break;
            case ('magazines'):

            ?>


                <!--  case magazines-->
                <div class="form-group">
                <div style="color:#a9a9a9; font-weight:bold">magazinePath</div>
                    <input type="file" name="magazinePath" value="<?php echo $myItem['magazinePath']; ?>" />

                </div>
        <?php } ?>

        <!--Submit-->
        <div class="form-group">
            <input type="submit" value="update" />
            <?php
            if (isset($_SESSION['message'])) {
                echo $_SESSION['message'];
            }
            ?>

        </div>




    </form>




</html>