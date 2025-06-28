<?php
    $friends=["Pratham","Sumit",'Shubham','Manish','Rohit'];

    foreach($friends as $x){
        if($x=="Sumit"){
            continue; //here sumit will skip and only rest will print
        }
        echo "<h1 style='color:blue'>$x</h1>" ;
        echo "</br>";
       
    }
?>