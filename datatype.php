<?php
$name="Jyotish Yadav";
$age=22;
echo var_dump($name); //showing the datatype
echo "<br>";
echo var_dump($age);
echo "<br>";
// array 
$arr = ["Jyotish","Pratham","Shubham"];

echo var_dump($arr);
echo "<br>";
echo $arr[2]; // Shubham;
echo "<br>";

echo "<h1 style='color:red'> My friend names are $arr[1] and $arr[2]";

// class

// $user = new className();
echo "<br>";
$connection=ftp_connect("127.0.0.1") or die("local host not found");
echo $connection;
?>