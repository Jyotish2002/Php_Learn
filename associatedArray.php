<?php
    $userdetails =["Name"=>"Jyotish Yadav","Age"=> 22,"Location"=>"Kolkata"];

    echo $userdetails["Location"]; // accessing the array
    echo "<br>";
    foreach($userdetails as $key=>$data){
        echo $key." is ".$data;
        echo '<br>';
    }
?>

// When we have different categories in array then we should we associative array
