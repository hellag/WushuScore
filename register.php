<?php
require_once('database.php');

if(isset($_POST['signupbutton'])){
    $firstname=$_POST['fname'];
    $lastname=$_POST['lname'];
    $username=$_POST['username'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $confirm_password=$_POST['confirm_password'];

    $sql="INSERT INTO champions(email,username,firstname,lastname,password) VALUES(?,?,?,?,?)";
    $dbinsert=$conn->prepare($sql);
    $result=$dbinsert->execute([$email,$username,$firstname,$lastname,$password]);
    if($result){
        echo 'User submitted successfully.';
    }else{
        echo 'there were some errors';
    }  
}


?>