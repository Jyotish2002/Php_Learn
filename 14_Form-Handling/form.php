<?php
    // print_r($_POST);
    if(isset($_POST['name'])){
        echo "UserName is ".$_POST['name'];
        echo "</br>";
        echo "Password is ".$_POST['password'];
        echo "</br>";
        echo "Email is ".$_POST['email'];
        echo "</br>";
        echo "Skills =  " .implode(", ", $_POST['skills']);
        echo "<br/>";
        echo "Gender =".$_POST['gender'];
        echo "</br>";
        echo "City =".$_POST['city'];
        echo "</br>";
        echo "Bio is = " .$_POST['bio'];
    }
?>