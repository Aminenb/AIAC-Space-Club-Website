<?php
//only if user Logged
session_start();

if (isset($_SESSION['adminInfos'])) {
?>

<?php
    include '/MAMP/htdocs/space_club/navbar/head.php';
    include '/MAMP/htdocs/space_club/navbar/navbarAdmin.php';
    $category=$_GET['category'];
    
    if($_GET['do']=='add'){
        include 'new.php';
 

    }
    else if ($_GET['do']=='delete'){
        include 'delete.php';

    }
    else{
        include 'update.php';
    }




?>






<?php
} else {
    echo 'access denied :/ !';
}

?>
