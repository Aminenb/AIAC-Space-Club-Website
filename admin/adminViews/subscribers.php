<?php
//only if user Logged
session_start();

if (isset($_SESSION['adminInfos'])) {
    ?>

<?php
include '/MAMP/htdocs/space_club/navbar/head.php';
    include '/MAMP/htdocs/space_club/navbar/navbarAdmin.php';
    include '/MAMP/htdocs/space_club/dB/config.php';
    //display table of subscribers
    $subscribersQuery=$db->query('SELECT * from subscribers'); ?>

<link href="table.css" rel="stylesheet" >




<div class="main-wrap">
<table class="table table-striped">
   <thead>
      <tr>
         <th data-sort="name"><strong>Subscribers </strong>  </th>
      </tr>
   </thead>
   <tbody>
       <?php while ($subscriber=$subscribersQuery->fetch()) { ?>
      <tr>
         <td><a href="" target="_blank" title=""><?php echo $subscriber['email'] ?></a></td>

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




