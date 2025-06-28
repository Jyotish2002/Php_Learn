<?php
$user=["Jyotish","Kolkata","jyotish@google.com"]; //Single dimensional array
$users=[
    [1,"Pratham","Kolkata","pratham@gmail.com"],
    [2,"Shubham","Halisahar","shubham@microsoft.com"],
    [3,"Sumit","Kankinara","sumit@amazon.com"],

];

// echo $users[0][1];
// echo "<br>";
// echo $users[0][2];
// echo "<br>";
// echo $users[0][3];

for($i=0;$i<count($users);$i++){
    for($j=0;$j<count($users[$i]);$j++){
        echo $users[$i][$j];
        echo " , ";
       
    }
    echo "<br>";
}
?>

// Multidimensional array mei users store hota ha jiska alag alag details hota ha and we can access by using nested loops