<?php
    // $users=["name"=>"Jyotish","age"=>22,"email"=>'jyotish@google.com '];
    // $usersJson=json_encode($users);
  
    // echo $usersJson;
    $data = '{"name":"Jyotish","age":22,"email":"jyotish@google.com"}';
   $dataArray=json_decode($data,true);
   print_r($dataArray);

?>