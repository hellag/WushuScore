<?php 
require_once('config.php');

/*if(isset($_POST['signupbutton'])){
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
}*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="signup.css" rel="stylesheet" type="text/css" >
    <title>Sign in | Wushu Score</title>
</head>
<body>
<section>
    <div class="container">
        <div class="user signupBox">
            <div class="imgbox">
               <img src="images/signin.png" alt="signin">
            </div>
            <div class="formbox">
            <form action="signup.php" method="POST">
                <h2>Sign in</h2>
                <input type="text" placeholder="Username" name="username" required>
                <input type="password" placeholder="Password" name="password"required>
                <input type="submit" name="signinbutton"value="Let's go Champion">
                <p id="account">Don't be a member yet? Please <a href="#">sign up</a></p>
            </form>

            </div>
        </div>
    </div>

</section>
</body>
</html>