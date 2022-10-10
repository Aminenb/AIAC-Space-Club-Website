<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/space_club/activities/activitySlider.css">


  <title>Document</title>
  <style>
    .main-wrapper {
      position: relative;
      margin-top: -15.2px;
      margin-left: 0px;
    }

    .ai-label {
      color: white;
    }

    .ai-label:hover {
      color: black;
    }
  </style>

</head>

<body>
  <div class='main-wrapper'>

    <div class='scroll-content'>
      <?php
      $i = 0;
      $itemsLength = sizeof($items);
      $postcategories = base64_encode(json_encode($categories));


      while ($i < $itemsLength) {



        $firstItem = new ACTIVITIES($category, $items[$i]);

        $i = $i + 1;


      ?>
        <div class='sc-row'>

          <div class='content-article'>


            <div class='article-info'>
              <div class='ai-label'><?php $firstItem->getTitle() ?></div>
              <a href="categoryPage.php?category=activities&display=display&id=<?php echo $firstItem->getId(); ?>" style="background-color: transparent;border:0ch;color:cornflowerblue;text-decoration:underline">
                Discover activity
              </a>
            </div>

            <div class='article-image ca-1' style="background: url(<?php $firstItem->getIcon() ?>) no-repeat center ; background-size : cover ;">

            </div>

          </div>
          <?php
          if ($i < $itemsLength) {
            $secondItem = new ACTIVITIES($category, $items[$i]);
            $i = $i + 1;


          ?>


            <div class='content-article'>


              <div class='article-info'>
                <div class='ai-label'><?php $secondItem->getTitle() ?></div>
                <a href="categoryPage.php?category=activities&display=display&id=<?php echo $secondItem->getId(); ?>" style="background-color: transparent;border:0ch;color:cornflowerblue;text-decoration:underline">
                  Discover activity
               </a>
              </div>

              <div class='article-image ca-2' style="background: url(<?php $secondItem->getIcon() ?>) no-repeat center ; background-size : cover ;">

              </div>

            </div>
          <?php } ?>
        </div>

      <?php } ?>


    </div>
  </div>

</body>

</html>