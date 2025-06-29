<?php
$host = "localhost";
$user = "root";
$password = ""; 
$db = "college";

try {
    $conn = new PDO("mysql:host=$host;dbname=$db", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected Successfully";
} catch (PDOException $err) {
    echo "Error: " . $err->getMessage();
}

echo "<br/>";

// Correct way in PDO
$stmt = $conn->query("SHOW TABLES");
$result = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($result);
?>
