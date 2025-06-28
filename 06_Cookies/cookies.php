<?php
    $fruit="Apple";
    setcookie("fruit","Apple",time()+(86400)); //set cookies
    if(isset($_COOKIE['fruit'])){
        echo "current cookies is " .$_COOKIE['fruit'];
    }else{
        echo "No cookies are set";
    }
?>