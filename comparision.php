<?php

    $a=10;
    $b=20;
    $c="10";
    // var_dump($a===$b);

    var_dump($a==$c); //true due to value check
    echo "<br>";
    var_dump($a===$c); //false due to different data type
    echo "<br>";
    var_dump($a<>$b); // true (because $a is not equal to $b)
?>