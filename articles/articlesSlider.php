<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Space Club - Articles</title>
   <link rel="stylesheet" href="/space_club/articles/css/bootstrap.css">
   <link rel="stylesheet" href="/space_club/articles/js/bootstrap.min.js">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" href="/space_club/articles/css/style.css">
   <style>
    body{
      font-family : monospace ;
    }
     .card img{
    width : 100%;
    height : 70vh ;
     }
     img{
       max-width : 560px;
     }
     .card{
       max-width : 560px;
       margin : 0 auto ;
     }
  @media screen and (max-width : 860px){
    .card img{
    width : 100%;
    height : 53vh ;
     }

  }
  @media screen and (max-width : 860px){
    .card img{
    width : 100%;
    height : 24vh ;
     }

  }


   </style>
</head>
<body >

  <section class="container">
  <?php
    $i=0;
    $itemsLength=sizeof($items);
    $postcategories=base64_encode(json_encode($categories));
   
  
    while ($i<$itemsLength) {
       


        $firstItem = new ARTICLES($category, $items[$i]);
     
        $i=$i+1;
        if($i<$itemsLength){
          $secondItem=new ARTICLES($category, $items[$i]);
          $i=$i+1;
        }
    ?>
  
   <div class="row row-cols-1 row-cols-md-3 g-4 mt-5 mb-5">
      <div class="col" style="border-color:#3996F3;">
      <div class="card h-100" style="border-color:#3996F3;">
          <img src=" <?php $firstItem->getIcon() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5  style="font-family : monospace ;" class="card-title"><strong> <?php $firstItem->getTitle(); ?></strong></h5>
            <div  style="font-family : monospace ;" class="card-text"><?php $firstItem->getFirstLines();echo'...'; ?></div>
            
         </div>

         <div class="p-4">
         
         <a href="categoryPage.php?category=articles&display=display&id=<?php echo $firstItem->getId();?>" style="text-decoration:underline">Read more</a>
         </div>
        </div>
      </div>
      <?php if (isset($secondItem)){?>
      <div class="col"   >
        <div class="card h-100" style="border-color:#3996F3;">
          <img src=" <?php $secondItem->getIcon() ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h5  style="font-family : monospace ;"  class="card-title"><strong> <?php $secondItem->getTitle(); ?></strong></h5>
            <div  style="font-family : monospace ;"  class="card-text"><?php $secondItem->getFirstLines(); echo '...'; ?></div>
            
         </div>

         <div class="p-4">
         <a href="categoryPage.php?category=articles&display=display&id=<?php echo $secondItem->getId();?>" style="text-decoration:underline">Read more</a>
           
      
       
         </div>
        </div>
      </div>
      <?php }?>
    </div>

    <?php } ?>

    

   

  </section>
</body>
</html>