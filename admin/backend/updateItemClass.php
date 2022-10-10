<?php


//News
class UPDATEITEM
{
    public $category;
    public $categoryItem;
    public $title;
    public $icon;
    public $picture;
    public $dateTime;
    public $text;
    public $authorInfo; //authorInfo array which contains (name,picture,quote) authorInfo:{name:,picture:,quote:}
    public $assetsInfo; //assetsInfo(array(for each:(mediaType,mediaPath)))
    public $magazinePath;



    //Methods

    public function __construct($category, $title, $icon, $picture, $dateTime, $text, $categoryItem)
    {

        $this->category = $category;
        $this->title = $title;
        $this->icon = $icon;
        $this->picture = $picture;
        $this->dateTime = $dateTime;
        $this->text = $text;
        $this->categoryItem = $categoryItem;
    }

    function addItem()
    {
        include('/MAMP/htdocs/space_club/dB/config.php');
        $req = $db->prepare('INSERT INTO news(icon,picture,text,dateTime,category,title) VALUES(:icon,:picture,:text,:dateTime,:category,:title)');
        $req->execute(array(
            'icon' => $this->icon,
            'picture' => $this->picture,
            'text' => $this->text,
            'dateTime' => $this->dateTime,
            'category' => $this->categoryItem,
            'title' => $this->title


        ));
    }

    function updateItem($itemId)
    {

        include('/MAMP/htdocs/space_club/dB/config.php');

        $req = $db->prepare('UPDATE news SET icon=:icon , picture=:picture,text=:text,dateTime=:dateTime,category=:categoryItem,title=:title WHERE id=' . $itemId);
        $req->execute(array(
            'icon' => $this->icon,
            'picture' => $this->picture,
            'text' => $this->text,
            'dateTime' => $this->dateTime,
            'categoryItem' => $this->categoryItem,
            'title' => $this->title


        ));
    }

    public static function deleteItem($itemId, $category)
    {
        include('/MAMP/htdocs/space_club/dB/config.php');
        echo 'inside delete';
        $req = $db->prepare('DELETE FROM ' . $category . ' WHERE id=:id;');
        $req->execute(array(
            'id' => $itemId



        ));
    }
}
//articles
class UPDATEARTICLE extends UPDATEITEM
{

    public function __construct($category, $title, $icon, $picture, $dateTime, $text, $categoryItem, $authorInfo)
    {

        $this->category = $category;
        $this->title = $title;
        $this->icon = $icon;
        $this->picture = $picture;
        $this->dateTime = $dateTime;
        $this->text = $text;
        $this->categoryItem = $categoryItem;
        $this->authorInfo = $authorInfo;
    }


    function addItem()
    {
        echo '</br>inside add </br>';
        include('/MAMP/htdocs/space_club/dB/config.php');
        //insert authors table if name not exist
        print_r($this->authorInfo);
        $reqAuthor = $db->query('SELECT * from authors WHERE name= \'' . $this->authorInfo['name'] . '\'');
        $idAuthor = '';
        if ($authorExist=$reqAuthor->fetch()) {
          
            $idAuthor = $authorExist['id'];

        } else {

            echo $this->authorInfo['quote'];

            $reqAuthor = $db->prepare('INSERT INTO authors(name,picture,quote) VALUES(:authorName,:authorPicture,:authorQuote)');
            $reqAuthor->execute(array(
                'authorName' => $this->authorInfo['name'],
                'authorPicture' => $this->authorInfo['picture'],
                'authorQuote' => $this->authorInfo['quote']
            ));

            $reqAuthor = $db->query('SELECT * from authors WHERE name=\''. $this->authorInfo['name'].'\'');
            $author = $reqAuthor->fetch();
            $idAuthor = $author['id'];


        }




        //insert into articles table
        $req = $db->prepare('INSERT INTO articles(title,icon,picture,text,dateTime,category,authorId) VALUES(:title,:icon,:picture,:text,:dateTime,:category,:authorId)');
        $req->execute(array(
            'title'=>$this->title,
            'icon'=>$this->icon,
            'picture'=>$this->picture,
            'text'=>$this->text,
            'dateTime'=>$this->dateTime,
            'category'=>$this->categoryItem,
            'authorId'=>$idAuthor
           


        ));



      
    }

    function updateItem($itemId)
    {
        include('/MAMP/htdocs/space_club/dB/config.php');
        //get id author
       
        $req = $db->prepare('UPDATE articles SET title=:title , icon=:icon,picture=:picture,text=:text,dateTime=:dateTime,category=:categoryItem WHERE id=' . $itemId);
        $req->execute(array(
            'title' => $this->title,
            'icon' => $this->icon,
            'picture' => $this->picture,
            'text' => $this->text,
            'dateTime' => $this->dateTime,
            'categoryItem' => $this->categoryItem

        ));
        $reqId = $db->query('SELECT authorId from articles  WHERE id=' .$itemId);
        $responseId = $reqId->fetch();
        $idAuthor = $responseId['authorId'];

        //update authors table
        $req = $db->prepare('UPDATE authors SET name=:name, picture=:picture ,quote=:quote WHERE id=' . $idAuthor);
        $req->execute(array(
            'name' => $this->authorInfo['name'],
            'picture' => $this->authorInfo['picture'],
            'quote' => $this->authorInfo['quote'],
        
        ));
    }
}

//Magazines
class UPDATEMAGAZINE extends UPDATEITEM
{
    public function __construct($category, $title, $icon, $dateTime, $categoryItem,$magazinePath)
    {
        $this->category = $category;
        $this->title = $title;
        $this->icon = $icon;
        $this->dateTime = $dateTime;
        $this->magazinePath = $magazinePath;
        $this->categoryItem = $categoryItem;
    }

    function addItem()
    {
        include('/MAMP/htdocs/space_club/dB/config.php');
        $req = $db->prepare('INSERT INTO magazines(title,icon,dateTime,category,path) VALUES(:title,:icon,:dateTime,:categoryItem,:path)');
        $req->execute(array(
            'title' => $this->title,
            'icon' => $this->icon,
            'dateTime' => $this->dateTime,
            'categoryItem' => $this->categoryItem,
            'path' => $this->magazinePath

        ));
    }

    function updateItem($itemId)
    {
        include('/MAMP/htdocs/space_club/dB/config.php');
        $req = $db->prepare('UPDATE magazines SET title=:title , icon=:icon,dateTime=:dateTime,category=:categoryItem,path=:path WHERE id=' . $itemId);
        $req->execute(array(

            'title' => $this->title,
            'icon' => $this->icon,
            'dateTime' => $this->dateTime,         
            'categoryItem' => $this->categoryItem,
            'path'=>$this->magazinePath


        ));
    }
}

//Activities

class UPDATEACTIVITY extends UPDATEITEM

{

    //   $newItem=new UPDATEACTIVITY($category,$_POST['title'],$icon,$_POST['text'],$_POST['dateTime'],$_POST['categoryItem'],$pictures);
    public function __construct($category, $title, $icon, $text, $dateTime, $categoryItem, $assetsInfo)
    {
        $this->category = $category;
        $this->title = $title;
        $this->icon = $icon;
        $this->dateTime = $dateTime;
        $this->categoryItem = $categoryItem;
        $this->assetsInfo = $assetsInfo;
        $this->text = $text;
    }

    function addItem()
    {

        include('/MAMP/htdocs/space_club/dB/config.php');
        //insert into activities
        $req = $db->prepare('INSERT INTO activities(title,icon,text,dateTime,category) VALUES(:title,:icon,:text,:dateTime,:categoryItem)');
        $req->execute(array(
            'title' => $this->title,
            'icon' => $this->icon,
            'text' => $this->text,
            'dateTime' => $this->dateTime,
            'categoryItem' => $this->categoryItem
        ));
        print_r($this->assetsInfo);

        //get activity id

        $reqId = $db->query("SELECT * from activities WHERE title='$this->title'");
        $responseId = $reqId->fetch();
        $idActivity = $responseId['id'];

        //insert pictures into activities table

        $mediaType = $this->assetsInfo['mediaType'];

        if ($mediaType == 'picture') {
            foreach ($this->assetsInfo['mediaPath'] as $mediaPath) {
                $req = $db->prepare('INSERT INTO activities_assets(mediaPath,id_activity,mediaType) VALUES(:mediaPath,:id_activity,:mediaType)');
                $req->execute(array(
                    'mediaPath' => $mediaPath,
                    'id_activity' => $idActivity,
                    'mediaType' => $mediaType

                ));
            }
        } else {

            $mediaPath = $this->assetsInfo['mediaPath'];
            $req = $db->prepare('INSERT INTO activities_assets(mediaPath,id_activity,mediaType) VALUES(:mediaPath,:id_activity,:mediaType)');
            $req->execute(array(
                'mediaPath' => $mediaPath,
                'id_activity' => $idActivity,
                'mediaType' => $mediaType
            ));
        }
    }

    function updateItem($itemId)
    {
        include('/MAMP/htdocs/space_club/dB/config.php');

        echo '</br> assets info : </br>';
        print_r($this->assetsInfo);
        echo '</br>';

        //insert into activities      
        $req = $db->prepare('UPDATE activities SET  title=:title , icon=:icon,text=:text,dateTime=:dateTime,category=:categoryItem WHERE id=' . $itemId);
        $req->execute(array(
            'title' => $this->title,
            'icon' => $this->icon,
            'text' => $this->text,
            'dateTime' => $this->dateTime,
            'categoryItem' => $this->categoryItem
        ));

        //insert pictures into activities table 
        //insert pictures into activities table
        if ($this->assetsInfo != array()) {

            echo 'am inside';

            //get the path
            $reqPath = $db->query('SELECT mediaPath FROM activities_assets WHERE id_activity=' . $itemId);
            $arrayPath = array();
            while ($path = $reqPath->fetch()) {
                array_push($path);
            }
            //delete from the database
            echo 
            $db->exec('DELETE FROM activities_assets WHERE id_activity=' . $itemId);

            //delete from the folder
            foreach ($arrayPath as $myPath) {
                unlink($myPath);
            }

            //insert in table

            $mediaType = $this->assetsInfo['mediaType'];

            if ($mediaType == 'picture') {
                foreach ($this->assetsInfo['mediaPath'] as $mediaPath) {
                    $req = $db->prepare('INSERT INTO activities_assets(mediaPath,id_activity,mediaType) VALUES(:mediaPath,:id_activity,:mediaType)');
                    $req->execute(array(
                        'mediaPath' => $mediaPath,
                        'id_activity' => $itemId,
                        'mediaType' => $mediaType

                    ));
                }
            } else {

                $mediaPath = $this->assetsInfo['mediaPath'];
                $req = $db->prepare('INSERT INTO activities_assets(mediaPath,id_activity,mediaType) VALUES(:mediaPath,:id_activity,:mediaType)');
                $req->execute(array(
                    'mediaPath' => $mediaPath,
                    'id_activity' => $itemId,
                    'mediaType' => $mediaType
                ));
            }
        }
    }
}
