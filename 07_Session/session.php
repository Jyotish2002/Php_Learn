<!DOCTYPE html>
<html lang="en">
<head>
    
    <title>Sessions</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="user" placeholder="Enter user name"/>
        <br />
        <br />
        <button name="button" value="set">Set Session</button>
        <br />
        <br />
        <button name="button" value="get">Get Session</button>
        <br />
        <br />
        <button name="button" value="delete">Delete Session</button>
    </form>
</body>
</html>
<?php
    session_start();
    if(isset($_POST['button'])){
        if($_POST['button']=="set"){
            $val=$_POST['user'];
            $_SESSION['user']=$val;
            echo "Session is set";
        }
        if($_POST['button']=="get"){
           
            echo $_SESSION['user'];
           
        }
        if($_POST['button']=="delete"){
           
            session_destroy(); // Delete the session
           
        }
    }
?>