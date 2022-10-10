<?php 

//take a file

//returnpath

function fileUploaded($category,$file){
    echo 'am inside';

   
    $fnm = $file['name'];    // get the image name in $fnm variable
    $dst = "/MAMP/htdocs/space_club/assets/".$category."/".$fnm;  // absolute path of storage
    $dstDb="/space_club/assets/".$category."/".$fnm; 
    move_uploaded_file($file["tmp_name"],$dst);
    return($dstDb);

}
