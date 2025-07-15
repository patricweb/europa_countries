<?php 
$host = "mysql_task"; 
$user = "patric";
$password = "patric"; 
$dbname = "task";

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname;", $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die("Connection with database failed. Error: " . $e->getMessage());
}
?>
