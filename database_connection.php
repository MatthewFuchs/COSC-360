<?php
$host = 'localhost';
$dbname = 'site_db';
$username = 'user';
$password = 'pass';

try {
   
    $db = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8mb4", $username, $password);
   
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully"; 
} catch(PDOException $e) {
   
    echo "Connection failed: " . $e->getMessage();
}
?>
