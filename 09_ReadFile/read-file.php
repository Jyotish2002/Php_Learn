<?php
if(isset($_FILES['file'])){
    

    $file=$_FILES['file']['tmp_name']; //taking address
    $myFile=fopen($file,"r") or die("Unable to read the file");
    echo fread($myFile,filesize($file));
    fclose($myFile); 
}
?>

<form action="" method="post" enctype="multipart/form-data">
    <input type="file" name="file" />
    <br/>
    <br/>
    <button>Read File</button>
</form>