<?php
    $users=["Jyotish","Sam","Pratham","Tony","Sam","Pratham"];
    // echo var_dump($users); we can check with this also
    // echo is_array($users); //fn to check array
    // echo "<br/>";
    // var_dump(is_array($users));
    // echo count($users);
    // unset($users[2]); // unset woi element ko remove kr deta ha
    // print_r($users);

    // array_push($users,"Rohan");
    // array_pop($users);
    // print_r($users);
    $user=["name"=>"Jyotish","age"=>22,"email"=>"jyotish@google.com"];
    // print_r(array_keys($user));

    // echo implode($user); //convert array to string
    $str="Hello are you i am fine";
    //--> convert string to array
//    print_r(explode(" ",$str));

// $data= (array_merge($user,$users)); //Merge two data
// print_r($data);
// When there is duplicate element in an array then-->
    $data=array_unique($users);
    print_r($data);

?>
 <!-- when we want to print array then we use print_r() function. when we want to print array in string then we us -->