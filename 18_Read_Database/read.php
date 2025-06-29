<?php 

    include_once("config.php");

   $getstudents=$conn->prepare("SELECT * FROM students");
   if($getstudents===false){
    die("Prepared failed ".$conn->error);
   }
   $getstudents->execute();
   $result=$getstudents->get_result();
   $students=$result->fetch_all(MYSQLI_ASSOC);
   print_r($students);
   echo "<br/>";
   foreach($students as $student){
    echo "Name of student is = " .$student['name'];
    echo "<br/>";
    echo $student['course'];
    echo "<br/>";
    echo $student['batch'];
   }
   ?>