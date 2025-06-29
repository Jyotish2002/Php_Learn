<?php
$host = "localhost";
$user = "root";
$password = ""; 
$db = "college";

$conn = new mysqli($host, $user, $password, $db);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";
echo "<br/>";
$result=$conn->query("show tables")->fetch_all();
print_r($result);
?>
