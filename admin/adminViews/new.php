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




  <?php $category = $_GET['category'];




  /////ONLY FOR ACTIVITIES
  if ($category == 'activities') {

    if (!isset($_SESSION['pictures'])) {
      $_SESSION['pictures'] = array();
    }


  ?>

  <form action="category.php?category=activities&amp;do=add" method="POST" style="    width:80%;
    position: relative;
    padding: 15px 0 0;
    margin-top: 10px;
    margin-left:10%
    ">

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
        <form action="category.php?category=activities&amp;do=add" method="POST" style="    width:80%;
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
        <form action="category.php?category=activities&amp;do=add" method="POST" enctype="multipart/form-data" style="    width:80%;
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
    margin-left :10%
    ">
    <!-- Common inputs -->
    <input type="hidden" name="category" value="<?php echo $category; ?>" />
    <input type="hidden" name="do" value="add" />
    <div class="form-group">
    <textarea id="message" class="form-field" placeholder="Your Text" rows="3" name="title"   required></textarea>
      <label for="full-name" class="form-label">Title</label>
    </div>
    <div class="form-group">
      <div style="color:#a9a9a9; font-weight:bold">dateTime</div>
      <input type="datetime-local" name="dateTime" id="full-name" class="form-field" placeholder="Title" required />

    </div>

    <div class="form-group">

      <div style="color:#a9a9a9; font-weight:bold"> icon</div>
      <input type="file" name="icon" required />


    </div>
        <div style="color:#a9a9a9; font-weight:bold">category</div>
      <input type="text" id="full-name" name="categoryItem" class="form-field" placeholder="Other category" />

      <select name="categoryItem">
        <option value="none" selected disabled hidden>
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
          <textarea id="message" class="form-field" placeholder="Your Text" rows="20" name="text" required></textarea>
          <label for="message" class="form-label">Text</label>
        </div>

        <div class="form-group">
          <div style="color:#a9a9a9; font-weight:bold">Picture</div>
          <input type="file" name="picture" required />


        </div>
      <?php

        break;
      case ('articles'):

      ?>



        <!--  case articles-->
        <div class="form-group">
          <textarea id="message" class="form-field" placeholder="Your Text" rows="20" name="text" required></textarea>
          <label for="message" class="form-label">Text</label>
        </div>

        <div class="form-group">
          <div style="color:#a9a9a9; font-weight:bold">Picture</div>
          <input type="file" name="picture" required />


        </div>
        <div class="form-group">
          <input type="text" id="" name="authorName" class="form-field" placeholder="Name" required />
          <label for="full-name" class="form-label">Name Author </label>
        </div>
        <div class="form-group">
          <textarea id="message" class="form-field" name="authorQuote" placeholder="Author quote" rows="6" name="text" required></textarea>
          <label for="full-name" class="form-label">Author quote</label>
        </div>
        <div class="form-group">
          <div style="color:#a9a9a9; font-weight:bold"> Author Picture</div>
          <input type="file" name="authorPicture" required />

        </div>
      <?php

        break;
      case ('activities'):

      ?>
        <!--  case activities-->
        <div class="form-group">

          <textarea id="message" class="form-field" placeholder="Your Text" rows="6" name="text" required></textarea>
          <label for="message" class="form-label">Text</label>
        </div>

      <?php

        break;
      case ('magazines'):

      ?>


        <!--  case magazines-->
        <div class="form-group">
          <div style="color:#a9a9a9; font-weight:bold">magazine Path</div>
          <input type="file" name="magazinePath" required />


        </div>
    <?php } ?>

    <!--Submit-->
    <div class="form-group">
      <input type="submit"  value="Add New" required />
      <?php
      if (isset($_SESSION['message'])) {
        echo $_SESSION['message'];
      }
      ?>

    </div>




  </form>
  </div>
</body>



</html>