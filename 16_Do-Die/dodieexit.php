<?php
    $a=10;
    $b=20;
    echo $a+$b;
    echo "<br/>";

    echo $a-$b;
    test();
    echo "<br/>";
    // die(); //it stop here
    echo $a*$b;
    echo "<br/>";
  
    // return; //it stop here --> work inside a function
    echo $a/$b;
    echo "<br/>";
    function test(){
        die(); //die uper wala ko vi stop kr dia jaha functionc call kia gya ha
        echo"I die here";
    }

?>