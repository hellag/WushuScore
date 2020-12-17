<?php 
require_once('config.php');

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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" rel="stylesheet" type="text/css" >
    <title>Sign up | Wushu Score</title>
</head>
<body>
<section>
    <div class="container">
        <div class="user signupBox">
            <div class="formbox">
            <form action="signup.php" method="POST">
                <h2>Sign up</h2>
                <input type="text" placeholder="First Name" name="fname" required>
                <input type="text" placeholder="Last Name" name="lname" required>
                <input type="text" placeholder="Username" name="username" required>
                <input type="email" placeholder="Email" name="email" required>
                <input type="password" placeholder="Password" name="password"required>
                <input type="password" placeholder="Confirm Password" name="confirm_password"required>
                <input type="submit" name="signupbutton"value="Welcome Tóngkǒng" onClick="window.location.href='http://127.0.0.1:8080/personal_projects/wushuScore/profile.php'">
            </form>

            </div>
            <div class="imgbox">
            <img src="images/signup.png" alt="signup">
        </div>
        </div>
    </div>

</section>
</body>
</html>