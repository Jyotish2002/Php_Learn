<?php

// $age=12;

// if($age==20){
//     echo "Fine you can give your vote";
// }
// else {
//     echo "Sorry you can't vote now come after ",18-$age ," years" ;
// }
?>

<?php

// $name='';

// if(!$name){
//     echo "Enter your name";
// }
// elseif($name=='Jyotish'){
//     echo "Welcome Sir, $name";
// }
// else {
//     echo "Your name is $name, you are not allowed";
// }

?>


<!-- Switch case -->

<?php

$fav_color = "yellow";

switch ($fav_color) {
    case "red":
        echo "You favourite color is red";
        break;
    case "blue":
        echo "You favourite color is blue";
        break;
    case "green":
        echo "You favourite color is green";
        break;
    case "yellow":
        echo "You favourite color is yellow";
        break;
    default:
        echo "You favourite color is not in the list";
}

?>