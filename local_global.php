<?php
 $a=100; // global variable

    function friend($name){
        global $a;
       echo "My global value of a = $a";
       echo "<br>";
        $me="Jyotish";//local variable
        echo "My name is $me and my friend name is $name";
    }
   
    echo "Now i can use the value of a = $a";
    echo "<br>";
    friend("Pratham");
?>