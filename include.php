<?php
    // include("./new.php");

    for($i=0;$i<10;$i++){
        // include_once("./new.php"); //load only once
    }

    require("./new.php"); // if file name is not correct then fatal error
?>