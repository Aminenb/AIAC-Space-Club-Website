<?php
//only if user Logged


if (isset($_SESSION['adminInfos'])) {
    ?>

<?php
    include '/MAMP/htdocs/space_club/navbar/head.php';
    include '/MAMP/htdocs/space_club/dB/config.php';
    //display table of subscribers
    $items=$db->query('SELECT * from '.$category); ?>

<link href="table.css" rel="stylesheet" >




<div class="main-wrap">
<table class="table table-striped">
   <thead>
      <tr>
         <th data-sort="name"><strong><?php echo $category;  ?> </strong>  </th>
      </tr>
   </thead>
   <tbody>
       <?php while ($item=$items->fetch())
       
        { 
            $path="category.php?category=".$category."&do=update&itemId=".$item['id'];?>
      <tr>
         <td><a href=<?php echo $path; ?> target="_blank" title=""><?php echo $item['title'] ?></a></td>
         
         <td>
             <form action="../backend/crudOp.php" method="POST">
                 <input name="category" type="hidden" value="<?php echo $category;?>" />
                 <input name="do" type="hidden" value="delete" />
                 <input name="itemId" type="hidden" value="<?php echo $item['id'];?>" />
                 <input type="submit" value="delete" />

             </form>

         </td>
         

      </tr>
      <?php } ?>
</tbody> 
    
     
</table>



</div>

<?php
}
else{
   echo 'access denied :/ !';
   
}

?>