<?php 
session_start();

//2variables through get : category={news,articles,activities}+display={true,false}
function urlIsValid(){
    $isValid=false;
   
    $categories=array('news','magazines','articles','activities');
    if(isset($_GET['category'])&&isset($_GET['display'])){
        $category=strip_tags($_GET['category']);
        $display=strip_tags($_GET['display']);
        if(($category=='magazines'&& $display=='noDisplay')||($category!='magazines'&& in_array($category,$categories)&&($display=='display'||$display=='noDisplay')) ){
            if($display=='noDisplay'){
                $isValid=true;
            }
            else{
                if(isset($_GET['id'])){
                    $id=strip_tags($_GET['id']);
                    include '../dB/config.php';
                    $req=$db->query("SELECT * from ".$category." where id=".$id);
                    if($req->fetch()){
                        $isValid=true;
                    }
                    
                }

            }

        }

        
    }
    return($isValid);
}

if(urlIsValid()){
    require_once('../backend/categoryClass.php');
//!!!!!!!security checking
$category = $_GET['category'];
$display = $_GET['display'];

?>

<!DOCTYPE html>
<html lang="en">



<head>
    <?php include '../navbar/head.php' ?>
</head>

<body style="
 height: 100%;
 margin:0;
 padding:0;
 background-color: #8ecae6 ;

 
" >
    <?php


    


    if ($display=='display') {
        //magazine forhibidden display

       

        include '../navbar/navbarTopWithoutSearch.php';
        include '../dB/config.php';


        $req=$db->query("SELECT * from ".$category." where id=".$_GET['id']);
  
        $item=$req->fetch();
        
        $title=nl2br($item['title']);
        $text=nl2br($item['text']);

        switch ($category) {

            case 'news':
                $picture=$item['picture'];
                include '../news/newsArticle.php';
                break;
            case 'articles':
                $picture=$item['picture'];
                $idAuthor=$item['authorId'];         
                $authorInfos=$db->query("SELECT * from authors where id=".$idAuthor);
                $authorInfos=$authorInfos->fetch();
                $authorName=$authorInfos['name'];
                $authorQuote=$authorInfos['quote'];
                $authorPicture=$authorInfos['picture'];
                
                include '../articles/inside.php';
                break;
          
            default:
                //pictures/videos
                $activitiesAssets=$db->query("SELECT * from activities_assets where id_activity=".$_GET['id']);
                $medias=$activitiesAssets->fetch();
                if($medias['mediaType']=='video'){

                    $typeAssets='video';
                    $video=$medias['mediaPath'];
                    

                }
                else{

                    $typeAssets='pictures';
                    $pictures=array($medias['mediaPath']);
                    while($media=$activitiesAssets->fetch()){
                        array_push($pictures,$media['mediaPath']);
                    }


                }
                
                include '../activities/displayActivity.php';

        }

    } 

    else {
        //get All items
        if(!isset($_SESSION[$category])){

            MYCATEGORY::getAllItemsByOrder($category);
            }
        if (!isset($_SESSION['filter'][$category])) {
                $_SESSION['filter'][$category] = array();
            }
            
        include '../navbar/navbarWithSearch.php';
        switch ($category) {
            case 'news':
                include '../news/news.php';
                break;
            case 'articles':
                include '../articles/articlesSlider.php';
                break;
            case 'magazines':
                include '../Magazine/MagazinesSlider.php';
                break;
            default:
                include '../activities/activitySlider.php';
        }
    }

    if (!($category=='news' && $display=='noDisplay')){
        include '../navbar/footer.php';

    }

    




    ?>


    <noscript>
        <div class="NoScriptSliderGroup"><span>JavaScript must be enabled to use some features on this page</span>
        </div>
    </noscript>
    </div>

</body>

</html>





<?php

}

else{


    echo 'access denied';
}


 ?>
