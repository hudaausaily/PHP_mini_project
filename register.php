<?php 
   include 'config.php';
   
if(isset($_POST['submit'])){
    $name=mysqli_real_escape_string($conn,($_POST['name']));
    $email=mysqli_real_escape_string($conn,($_POST['email']));
    $pass=md5($_POST['name']);
    $repass=md5($_POST['name']);
    $user_type=$_POST['user_type'];

    $select=" SELECT * FROM user_form WHERE email=' $email' && password='$pass'";
    $result= mysqli_query($conn,$select);

    if (mysqli_num_rows($result)>0){
        $error[]='user already exist!';
    }else{


        if($pass != $repass){
        $error[]='password not exist';
    }else{
        $insert="INSERT INTO user_form(name,email,password,user_type) VALUES('$name','$email','$pass','$user_type')";
    
    }

    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
    <!-- <link rel="stylesheet" href="../style.css"> -->

    <style>
      <?php include "style.css"?>
    </style>

    </head>
<body>

<div class="form-container">

<form action=""   method="post">
    <h3>register </h3>
    <?php 
    if(isset($error)){
        foreach($error as $error){
            echo '<span class="error-msg">'.$error.'</span>';
        };
    };
    ?>
    <input type="text" name="name" placeholder="enter youe name" autocomplete="off">
    <input type="email" name="email" placeholder="enter youe email" autocomplete="off" >
    <input type="password" name="password" placeholder="enter youe password" autocomplete="off">
    <input type="password" name="repassword" placeholder="enter youe repassword" autocomplete="off">
     <select name="user_type" >
        <option value="user">user</option>
        <option value="admin">admin</option>
     </select>


     <input type="submit" name="submit"    value="register now" class="form-btn">
    <p>already have an account? <a href="./login.php">login</a> </p>

  </form>
</div>
    
</body>
</html>