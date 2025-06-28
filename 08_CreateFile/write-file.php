<?php
if(isset($_POST['filename'])){

$fileName ="files/".$_POST['filename'];
$content = $_POST['area'];
$file = fopen($fileName, "w") or die("File can't be opened");
fwrite($file,$content);
fclose($file);
echo 'File created';
}
?>
<form action="" method="post">
    <input type="text" placeholder="Enter file name" name="filename"/>
    <br />
    <br />
    <textarea type="text" name="area" placeholder="Enter your content"></textarea>

    <br/>
    <br/>
    <button type="submit" name="submit">Create File</button>
</form>

<!-- So the name which we give inside the input or in text area are basically storing the data keep in mind this -->