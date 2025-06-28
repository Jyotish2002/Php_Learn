<?php
    $users=["Jyotish","Pratham","Sumit",'Shubham'];

    

    array_push($users,"Rohan");
    array_push($users,"Rohit");
    array_push($users,"Sohan");

    // array_pop($users); // one by one from back side pop out

    array_splice($users,-4); // piche se 2 jan ko nikal dega

    print_r($users);
?>