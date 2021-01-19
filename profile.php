<?php
$username=$_GET['username'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wushu App | Profile</title>
    <link rel="stylesheet" href="css/profile.css">
</head>
<body>
    <header class="second-header">
         <h1 class="header-title">Wushu App</h1>
         <a href="index.html">Log out</a>
    </header>
    <div class="container">
        <section class=profile-card>
            <img src="images/profile-user-kungfu.png" alt="profile-user">
            <h1>Welcome <?php echo $username ?></h1>
            <a href="#">Δες το score σου</a>
        </section>

    </div>
    <footer class="second-footer">

    </footer>
</body>
</html>