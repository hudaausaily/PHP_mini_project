<?php
session_start();
require_once "config.php";
$id= $_SESSION["id"];
$sql=mysqli_query($con,"SELECT * FROM register where id='$id' ");
$row  = mysqli_fetch_array($sql);
?>
            
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- -------------------css bootstrap----------------------------- -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Home Page</title>
</head>
<body>
<div class="container">
  <div style="background:grey;margin: 15px auto;line-height: 1.8em;color: #333;border-radius: 4px;padding: 30px;max-width: 400px;border: #c8e0cb 1px solid;text-align: center;">
    <p class="hint-text"><br><b>Welcome Here</b><?php echo $_SESSION["First_Name"] ?> <?php echo $_SESSION["Last_Name"] ?><br></p>
    <p><?php echo $_SESSION["email"] ?></p>
	<p><img src="https://th.bing.com/th/id/OIP.5pU5MJw8t8kXkA8y1gLKgAHaHa?w=217&h=217&c=7&r=0&o=5&dpr=1.4&pid=1.7" class="profile-photo" style="border-radius:50%;height=150 ,width=150, display:block;margin-left:auto;margin-right:auto;"/></p>
    <p>You have successfully logged in!</p>
    <p>Click to <a href="logout.php" class="logout-button">Logout</a></p>
    <!-- <div class="text-center">Want to Leave the Page? <br><a href="logout.php">Logout</a></div> -->
  </div>
</div>
</body>
</html>