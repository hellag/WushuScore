<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$db ="wushu_score";
$port="3306";
$dsn="mysql:host=$servername;dbname=$db;port=$port";
try {
  $conn = new PDO($dsn, $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?> 