<?php

if($_FILES['fileupload']){
    $path = $_FILES['fileupload']['name'];
    $upload_path="./uploads/".$path;
    // echo $upload_path;
    if(move_uploaded_file($_FILES['fileupload']['tmp_name'], $upload_path) ){
        echo "File uploaded successfully";
    }
   
}else {
    die ("no file found");
}
?>