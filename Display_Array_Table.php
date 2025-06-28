<html>

<head>
    <title>Table</title>
</head>

<body>
    <table border="black">
        <tr>
            <td>S.N.</td>
            <td>Name</td>
            <td>Address</td>
            <td>gmail</td>
        </tr>
        <tr>
            <td>
                1
            </td>
            <td>
                Jyotish
            </td>
            <td>
                Naihati
            </td>
            <td>
                jyotish@google.com
            </td>
        </tr>
        <tr>
            <td>2</td>
            <td>Shubham</td>
            <td>Kolkata</td>
            <td>shubham@google.com</td>
        </tr>
        <tr>
            <td>3</td>
            <td>Pratham</td>
            <td>Delhi</td>
            <td>pratham@google.com</td>
        </tr>
        <tr>
            <td>4</td>
            <td>Sumit</td>
            <td>Mumbai</td>
            <td>sumit@google.com</td>
        </tr>

    </table>
 <?php
    $users=[
        [1,"Jyotish","America","jyotish@google.com"],
        [2,"Sumit","Japan","sumit@google.com"],
        [3,"Pratham","Kolkata","pratham@google.com"],
        [4,"Shubham","Nepal","shubham@google.com"],
    ];
    echo "<table border=1>";
    for($i=0;$i<count($users);$i++){
        echo "<tr>";
        for($j=0;$j<count($users[$i]);$j++){
            echo "<td>";
            echo $users[$i][$j];
          
            echo "</td>";
        }
        echo" <\tr>";
      
    }
    echo "</table>";
 ?>