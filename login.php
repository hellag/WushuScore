<?php
require_once('database.php');

$username=$_POST['username'];
$password=$_POST['password'];
$password = stripslashes($password);

$sql = "SELECT * FROM champions WHERE username='".$username."' and password = '".$password."'";
$result=$conn->query($sql);
if ($result->rowCount() >0) {
    echo 'Welcome';
    echo $username;
    header("Location: profile.php?username=$username");
  } else {
    echo "Not found ,sorry";
  }
?>