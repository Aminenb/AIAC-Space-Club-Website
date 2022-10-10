<?php
session_start();
//require update Item class
//get category
//switch do

include '/MAMP/htdocs/space_club/dB/config.php';
require_once('updateItemClass.php');
require_once('uploadPicture.php');
$category = $_POST['category'];
$do = $_POST['do'];
$newItem = '';
$_SESSION['message'] = '';

if (isset($_POST['itemId'])) {
    $itemId = $_POST['itemId'];
}

if ($do == 'delete') {
    print_r($_POST);

    UPDATEITEM::deleteItem($itemId, $category);
} 

else {
    
    print_r($_POST);
    print_r($_FILES);
    //handle picture upload 

    if ($_FILES['icon']['name'] == null && $do == 'update') {
        echo 'inside query';

        $item = $db->query('SELECT * from ' . $category . ' WHERE id=' . $_POST['itemId']);
        $itemResponse = $item->fetch();
        $icon = $itemResponse['icon'];
    } else {
        echo 'am inside icon';
        $iconFile = $_FILES['icon'];
        $icon = fileUploaded($category, $iconFile);
    }
    if ($category == 'news' || $category == 'articles') {

        if ($_FILES['picture']['name'] == null && $do == 'update') {
            echo 'inside picture';
            $item = $db->query('SELECT * from ' . $category . ' WHERE id=' . $_POST['itemId']);
            $itemResponse = $item->fetch();
            $picture = $itemResponse['picture'];
        } else {
            $pictureFile = $_FILES['picture'];
            $picture = fileUploaded($category, $pictureFile);
        }
    }



    switch ($category) {
        case 'news':
            $newItem = new UPDATEITEM($category, $_POST['title'], $icon, $picture, $_POST['dateTime'], $_POST['text'], $_POST['categoryItem']);
            break;

        case 'magazines':
            if ($_FILES['magazinePath']['name'] == null && $do == 'update') {

                $item = $db->query('SELECT * from magazines WHERE id='. $_POST['itemId']);
                $itemResponse = $item->fetch();
                $pdf = $itemResponse['path'];

            } else {

                $pdfFile = $_FILES['magazinePath'];
                $pdf = fileUploaded($category, $pdfFile);

            }

            $newItem = new UPDATEMAGAZINE($category, $_POST['title'], $icon, $_POST['dateTime'], $_POST['categoryItem'], $pdf);
            break;

        case 'articles':
            //authorInfo array which contains (name,picture,quote) authorInfo:{name:,picture:,quote:}
            if ($_FILES['authorPicture']['name'] == null && $do == 'update') {

                $item = $db->query('SELECT * from authors WHERE id=' . $_POST['authorId']);
                $itemResponse = $item->fetch();
                $pictureAuthor = $itemResponse['picture'];
            } 
            else {

                $pictureFile = $_FILES['authorPicture'];
                $pictureAuthor = fileUploaded($category, $pictureFile);

            }

            $authorInfo = array(
                'name' => $_POST['authorName'],
                'picture' => $pictureAuthor,
                'quote' => $_POST['authorQuote'],
            );

            $newItem = new UPDATEARTICLE($category, $_POST['title'], $icon, $picture, $_POST['dateTime'], $_POST['text'], $_POST['categoryItem'], $authorInfo);

            break;

        default:

            $pictures = $_SESSION['pictures'];
            echo 'am inside crud Op';
            print_r($pictures);
            $newItem = new UPDATEACTIVITY($category, $_POST['title'], $icon, $_POST['text'], $_POST['dateTime'], $_POST['categoryItem'], $pictures);
            $_SESSION['pictures'] = array();


    }
    switch ($do) {

        case 'add':
            $newItem->addItem();
            $_SESSION['pictures'] = array();

            break;

        case 'update':
            $itemId = $_POST['itemId'];
            $newItem->updateItem($itemId);
            break;
    }

    $_SESSION['message'] = 'item ' . $do . 'ed' . ' successufully !';
}

if($do=='update'){
    header("Location:/space_club/admin/adminViews/category.php?category=".$category."&do=".$do."&itemId=".$itemId);

}
else{
    header("Location:/space_club/admin/adminViews/category.php?category=".$category."&do=".$do);

}

