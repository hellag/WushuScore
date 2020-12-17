<?php 
 require_once('config.php');
                     
?> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="profile.css" rel="stylesheet" type="text/css" >
    <title>My profile | Wushu Score</title>
</head>
<body>
<section>
    <div class="container">
        <div class="user scoreAppearance">
            <div class="scoreAppearance">
                <table class="scoreAppearance">
                    <tr>
                        <th>Challenge Name</th>
                        <th>Score</th>
                        <th>Notations</th>
                    </tr>
                    <?php
                    $sql="SELECT username from champions";
                    $result=$conn->query($sql);
                    if($result->rowCount()>0){
                        while($row=$result->fetch(PDO::FETCH_ASSOC)){
                          echo "<tr><td>" .$row['username'] ."</tr><td>"; 
                        }
                    }
                    
                    ?>
                </table>
  
            </div>
        </div>
    </div>

</section>
</body>
</html>