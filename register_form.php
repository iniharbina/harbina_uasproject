<?php

include 'koneksi.php';
error_reporting(0);

if(isset($_POST['submit'])){

   $email = ($_POST['email']);
   $username = mysqli_real_escape_string($conn, $_POST['username']);
   $password = ($_POST['password']);

   $select = " SELECT * FROM t_user WHERE username = '$username' && email = '$email' && password = '$password'";

   $result = mysqli_query($conn, $select);

   if(mysqli_num_rows($result) > 0){
      $error[] = "<script>alert('User Already Exist.')</script>";
   }else{
         $insert = "INSERT INTO t_user(username, email, password) VALUES('$username','$email','$password')";
         mysqli_query($conn, $insert);
         header('location:index.php');
      }
   }

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet">
    <title>Register</title>
</head>
<body>
    <div class="container">
    <form action="" method="POST" class="registrasi" >
    <?php
         if(isset($error)){
            foreach($error as $error){
               echo '<span class="error-msg">'.$error.'</span>';
            }
         }
      ?>
        <p class="login-text" style="font-size: 2rem; font-weight: 800;">Register</p> 
        <div class="input-group">
            <input type="email" placeholder="email" name ="email" required>
        </div>
        <div class="input-group">
            <input type="text" placeholder="username" name ="username" required>
        </div>
        <div class="input-group">
            <input type="password" placeholder="password" name ="password" required>
        </div>
        <div class="input-group">
            <button name="submit" class="btn">Register</button>
        </div>
        <p class="login-register-text">Have an account? <a href="index.php">Login Here</a>.</p>
    </form>
</body>
</html>